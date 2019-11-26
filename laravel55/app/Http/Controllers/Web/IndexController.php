<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\Activate;

class IndexController extends Controller
{
    public function index(){
        return view('web/index');
    }
    public function about(){
        return view('web/about');
    }
    public function cases(){
        $case=DB::table('case as c')
            ->join('product as p','p.case_id','=','c.id')
            ->select('c.*','p.name')
            ->get();
        foreach ($case as $value){
            $value->name=explode(",", $value->name);
        }
        return view('web/cases',['data'=>$case]);
    }

    public function cases2(Request $request){
        $case=DB::table('case as c')
            ->join('product as p','p.case_id','=','c.id')
            ->select('c.*','p.name')
            ->where('c.id',$request->id)
            ->first();
        $case->name=explode(",", $case->name);
        $data=DB::table('skill')->where('case_id',$request->id)->get();
        $fenxi=array();
        $jiqiao=array();
        foreach ($data as $value){
            if($value->type==1){
                $fenxi[]=$value;
            }else{
                $jiqiao[]=$value;
            }
        }

        return view('web/casesxiang',['data'=>$case,'fenxi'=>$fenxi,'jiqiao'=>$jiqiao]);
    }
    public function contact(){
        return view('web/contact');
    }
    public function facebook(){
        return view('web/facebook');
    }
    public function fbpage(){
        return view('web/fbpage');
    }
    public function google(){
        return view('web/google');
    }
    public function ig(){
        return view('web/ig');
    }
    public function youtube(){
        return view('web/youtube');
    }
    public function news(Request $request){
        $data=DB::table('news')->get();
        return view('web/news',['cat'=>$request->id,'data'=>$data]);
    }
    public function sendEmail(Request $request){
        $data=$request->all();
        $data['create_at']=date('Y-m-d H:i:s');
        DB::table('advisory')->insert($data);
        $email_data = new \stdClass();
        $email_data->name = $request->name;
        $email_data->phone = $request->phone;
        $email_data->email = $request->email;
        $email_data->company =$request->company;
        $email_data->url = $request->web;
        $email_data->ad = $request->ad;
        $email_data->massage =$request->msg;
        $email_data->email_subject = '询问';
        $email_data->email_view = 'emails.deposit';
        //dd($email_data);
        Mail::to('1287647912@qq.com')->send(new Activate($email_data));
        return 1;
    }
}
