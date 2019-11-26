<?php

namespace App\Http\Controllers\Total;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TotalController extends Controller
{
    public function jiangzuo(Request $request){
        $news=DB::table('news')->where('type',7)->get();
        return view('news/index', ['news'=>$news,'xd' =>'4','type' =>'7']);
    }

    public function huodong(Request $request){
        $news=DB::table('news')->where('type',6)->get();
        return view('news/index', ['news'=>$news,'xd' =>'5','type' =>'6']);
    }

    public function add(Request $request){
        $xd=$request->xd;
        $type=$request->type;
        return view('news/add', ['xd' =>$xd,'type'=>$type]);
    }

    public function addPost(Request $request){
        $data['image']=$request->file('image')->store('manager','local');
        $data['type']=$request->type;
        $data['date']=date('Y-m-d');
        $data['title']=$request->title;
        $data['data']=$request->data;
        $data['create_at']=date('Y-m-d H:i:s');
        $data['update_at']=date('Y-m-d H:i:s');
        DB::table('news')->insert($data);
        return redirect('admin/news'.$data['type']);

    }

    public function anli(){
        $data=DB::table('case')->get();
        return view('case/index',['data'=>$data,'xd'=>6]);
    }

    public function caseAdd(){
        return view('case/add',['xd'=>6]);
    }
    public function caseAddff(Request $request){
        $data['image']=$request->file('image')->store('manager','local');
        $data['title']=$request->title;
        $data['data']=$request->data;
        $data['create_at']=date('Y-m-d H:i:s');
        $data['update_at']=date('Y-m-d H:i:s');
        $id=DB::table('case')->insertGetId($data);
        $fenxi=$request->fenxi;
        $jiqiao=$request->jiqiao;
        $fen=array();
        foreach ($fenxi as $key=>$value){
            $fen[$key]['case_id']=$id;
            $fen[$key]['data']=$value;
            $fen[$key]['type']=1;
            $fen[$key]['create_at']=date('Y-m-d H:i:s');
            $fen[$key]['update_at']=date('Y-m-d H:i:s');
        }
        $ji=array();
        foreach ($jiqiao as $key=>$value){
            $ji[$key]['case_id']=$id;
            $ji[$key]['data']=$value;
            $ji[$key]['type']=2;
            $ji[$key]['create_at']=date('Y-m-d H:i:s');
            $ji[$key]['update_at']=date('Y-m-d H:i:s');
        }
        $skill=array_merge($fen,$ji);
        DB::table('skill')->insert($skill);
        $canpin['case_id']=$id;
        $canpin['name']=$request->canpin;
        $canpin['create_at']=date('Y-m-d H:i:s');
        $canpin['update_at']=date('Y-m-d H:i:s');
        DB::table('product')->insert($canpin);
        return redirect('admin/case');

    }

    public function caseDel(Request $request){
        $id=$request->id;
        DB::table('case')->where('id',$id)->delete();
        DB::table('product')->where('case_id',$id)->delete($id);
        DB::table('skill')->where('case_id',$id)->delete($id);
        return redirect(url()->previous());
    }

    public function newsDel(Request $request){
        $id=$request->id;
        $type=$request->type;
        DB::table('news')->where('id',$id)->delete();
        return redirect('admin/news'.$type);
    }
    public function ad(Request $request){
        $data=DB::table('advisory')->get();
        return view('xun/index',['data'=>$data,'xd'=>7]);
    }

}
