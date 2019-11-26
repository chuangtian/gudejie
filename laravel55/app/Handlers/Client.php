<?php
namespace App\Handlers;
use App\Handlers\jsonRPCClient;
class Client {
    private $uri;
    private $jsonrpc;
    private $cli_flag;
    //添加cli_flag
    function __construct($host, $port, $user, $pass,$cli_flag)
    {
        $this->uri = "http://bitcoinrpc:B!tco!n@148.66.60.170:8332/";
        $this->cli_flag = $cli_flag;
        $this->jsonrpc = new jsonRPCClient($this->uri,false,$cli_flag);
    }

    function getInfo()
    {
        $info = $this->jsonrpc->getinfo();
        return $info['balance'];
    }

    function getBalance($user_session)
    {
        $confirmations = 0;
        switch ($this->cli_flag) {
            case 'BTC':
                $confirmations = 2;
                break;
            case 'LTC':
                $confirmations = 8;
                break;
            case 'BCH':
                $confirmations = 6;
                break;
            case 'RPZ':
                $confirmations = 6;
                break;
        }
        return $this->sctonum($this->jsonrpc->getbalance("falchat(" . $user_session . ")", $confirmations));
        //return 21;
    }

    function getSlaveBalance($user_session)
    {
        $confirmations = 0;
        switch ($this->cli_flag) {
            case 'BTC':
                $confirmations = 2;
                break;
            case 'LTC':
                $confirmations = 8;
                break;
            case 'BCH':
                $confirmations = 6;
                break;
            case 'RPZ':
                $confirmations = 6;
                break;
        }
        return $this->sctonum($this->jsonrpc->getbalance($user_session, $confirmations));
        //return 21;
    }

    function getAddress($user_session)
    {
        return $this->jsonrpc->getaccountaddress("falchat(" . $user_session . ")");
        //string
    }   

    function getAddressList($user_session)
    {
        return $this->jsonrpc->getaddressesbyaccount("falchat(" . $user_session . ")");
        //return array("1test", "1test");
    }

    function getTransactionList($user_session)
    {
        return $this->jsonrpc->listtransactions("falchat(" . $user_session . ")", 200);
        //array
    }

    function getNewAddress($user_session)
    {
        //	echo "indise add";
        return $this->jsonrpc->getnewaddress("falchat(" . $user_session . ")");
        //return "1test";
    }

    function withdraw($user_session, $address, $amount)
    {
        $amount = $this->sctonum($amount);
        return $this->jsonrpc->sendfrom("falchat(" . $user_session . ")", $address, $amount,1);
        //true or error json
        //return "ok wow";
    }
    function move($user_session,$other_account, $amount)
    {
            return $this->jsonrpc->move("falchat(" . $user_session . ")","falchat(" . $other_account . ")", (float)$amount);
        //return "ok wow";
    }
    //验证地址
    function validateaddress($address)
    {
        return $this->jsonrpc->validateaddress($address);
        //return "ok wow";
    }

    function gettransactionDetail($txid)
    {
        return $this->jsonrpc->gettransaction($txid);
    }

    function sctonum($num, $double = 8){
        if(false !== stripos($num, "e")){
            $a = explode("e",strtolower($num));
            return bcmul($a[0], bcpow(10, $a[1], $double), $double);
        }else{
            return $num;
        }
    }
}
?>