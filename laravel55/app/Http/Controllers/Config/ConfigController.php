<?php

namespace App\Http\Controllers\Config;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ConfigController extends Controller
{
    /**
     * 配置
     */
    public function index(){
        $config=DB::table('config')->first();
        return view('config/config', ['config' => $config, 'xd' =>'3']);
    }

    /**
     * 修改
     */
    public function edit(Request $request){
        $validator = Validator::make($request->all(), [
            'number' => 'required|integer',
        ]);
        if ($validator->fails()) {
            return redirect('/home');
        }
        $number=$request->input('number');
        $id=$request->input('id');
        DB::table('config')
            ->where('id', $id)
            ->update(['number' => $number]);
        return redirect('config/index');
    }

    /**
     * 修改
     */
    public function label(Request $request){
        $label=$request->input('label');
        $id=$request->input('id');
        DB::table('config')
            ->where('id', $id)
            ->update(['label' => $label]);
        return redirect('config/index');
    }
    /**
     * 添加公司
     */
    public function branch_office(Request $request){
        $validator = Validator::make($request->all(), [
            'branch_office' => 'required|string',
        ]);
        if ($validator->fails()) {
            echo "<script>alert('公司名不能为空');window.history.go(-1);</script>";
            die;
            //return redirect('config/index');
        }
        $branch_office=$request->input('branch_office');
        $datetime=date("Y-m-d H:i:s");
        $data['name']=$branch_office;
        $data['created_at']=$datetime;
        DB::table('branch_office')->insert($data);
        return redirect('config/index');
    }
    /**
     * 添加公司
     */
    public function company(){
        $companys=DB::table('branch_office')->paginate(15);
        return view('config/company', ['companys' => $companys, 'xd' =>'3']);
    }

    /**
     * 添加公司
     */
    public function delcompany(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required|integer',
        ]);
        if ($validator->fails()) {
            echo "<script>alert('参数错误');window.history.go(-1);</script>";
            die;
            //return redirect('config/index');
        }
        $id=$request->input('id');
        DB::table('branch_office')->where('id', '=', $id)->delete();
        return redirect('config/company');
    }
}
