<?php

namespace App\Http\Controllers\Phone;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class PhoneController extends Controller
{
    public function phone()
    {
        $user = Auth::user();
        $type=$user->type;
        $branch_office=$user->branch_office;
        if($type==1){
            //查询条数
            $phone_count = DB::table('phone')->where([
                ['user_id','=',$user->id],
                ['status','=',1],
                ['branch_office','=',$branch_office],
            ])
            ->count();
            $config=DB::table("config")->first();
            if($phone_count<$config->number){
                $number=$config->number-$phone_count;
                //查询要分配的id
                $id=DB::table("phone")
                    ->select('id')
                    ->where('user_id',null)
                    ->where('branch_office',$branch_office)
                    ->offset(0)
                    ->limit($number)
                    ->orderBy('id', 'asc')
                    ->get();
                $ids=array();
                foreach ($id as $value){
                    $ids[]=$value->id;
                }
                DB::table('phone')
                    ->whereIn('id', $ids)
                    ->update(['user_id' => $user->id,'sent_time'=>date('Y-m-d H:i:s'),'branch_office'=>$branch_office]);
                DB::table('total')
                    ->where('u_id', $user->id)
                    ->increment('receive',count($ids) , ['new' => count($ids),'update_time'=>date('Y-m-d H:i:s')]);
            }
            $phones = DB::table('phone')
                ->where('user_id',$user->id)
                ->paginate(15);
        }elseif($type==2){
            $phones = DB::table('phone')
                ->leftJoin('users', 'phone.user_id', '=', 'users.id')
                ->select('phone.*', 'users.email')
                ->where('phone.branch_office',$branch_office)
                ->paginate(15);
        }else{
            $phones = DB::table('phone')
                ->leftJoin('users', 'phone.user_id', '=', 'users.id')
                ->select('phone.*', 'users.email')
                ->paginate(15);
        }
        //dd($phones);
        return view('phone/phone', ['phones' => $phones, 'xd' =>'4']);
    }

    public function addPhone(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|file',
        ]);
        if ($validator->fails()) {
            return redirect('/home');
        }
        $path = $request->file('phone')->store('file','public');
        $spreadsheet = IOFactory::load('E:/laragon/www/admin/admin/laravel55/storage/app/public/'.$path); //本地写死上传服务器换下面的
        //$spreadsheet = IOFactory::load(storage_path('app/public/'.$path)); //上传服务器用这个
        $sheet = $spreadsheet->getActiveSheet();
        $res = array();
        foreach ($sheet->getRowIterator(3) as $row) {
            $tmp = array();
            $a=0;
            foreach ($row->getCellIterator() as $cell) {
                if($a==0){
                    $tmp['name'] = $cell->getFormattedValue();
                }
                if($a==1){
                    $tmp['area'] = $cell->getFormattedValue();
                }
                if($a==2){
                    $tmp['phone'] = $cell->getFormattedValue();
                    $tmp['created_time'] = date("Y-m-d H:i:s");
                }
                $a++;
            }
            $res[$row->getRowIndex()] = $tmp;

        }
        DB::table('phone')->insert($res);
        return redirect('/phone/phone');
    }

    public function edit_status(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required|integer',
            'status' => 'required|integer',
        ]);
        if ($validator->fails()) {
            return 0;
        }
        $status=$request->input('status');
        $id=$request->input('id');
        $inform=DB::table("phone")
            ->where('id', $id)
            ->update(['status' => $status ,'update_time' => date('Y-m-d H:i:s',time())]);
        if($inform){
            $phone=DB::table("phone")
                ->where('id',$id)
                ->first();
            if($status==1){
                $data='
                    <font>'.$phone->phone.'</font><br>(未呼叫)
                 ';
            }else{
                $data='
                    <font>'.$phone->phone.'</font><br>(已呼叫)
                 ';
            }
            return $data;
        }else{
            return 0;
        }

    }

    public function del_phone(Request $request){
        $id=$request->input('id');
        DB::table('phone')->where('id',$id)->delete();
        return redirect('/phone/phone');
    }
}
