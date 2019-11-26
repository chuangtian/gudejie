<?php

namespace App\Http\Controllers\Phone;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index(Request $request){
        $name=$request->input('name')?:'';
        $user = Auth::user();
        if ($user->type!=1){
            if($user->type==2){
                $branch_office=$user->branch_office;
                $data=DB::table('customer')
                    ->leftJoin('users', 'customer.assignee', '=', 'users.id')
                    ->select('customer.*', 'users.email')
                    ->where('customer.name','like','%'.$name.'%')
                    ->where('customer.branch_office',$branch_office)
                    ->orderBy('id', 'desc')
                    ->paginate(5);
            }else{
                $data=DB::table('customer')
                    ->leftJoin('users', 'customer.assignee', '=', 'users.id')
                    ->select('customer.*', 'users.email')
                    ->where('customer.name','like','%'.$name.'%')
                    ->orderBy('id', 'desc')
                    ->paginate(5);
            }

        }else{
            $data=DB::table('customer')
                ->leftJoin('users', 'customer.assignee', '=', 'users.id')
                ->select('customer.*', 'users.email')
                ->where('customer.assignee',$user->id)
                ->where('customer.name','like','%'.$name.'%')
                ->orderBy('id', 'desc')
                ->paginate(5);
        }
        foreach($data as $ke=>$value){
            
            $value->label=explode("/",$value->label);
            $value->follow_up_feedback=explode("/",$value->follow_up_feedback);
            
		}
        return view('customer/customer', ['data' => $data, 'xd' =>'5']);
    }

    public function customer_add(){
        $config=DB::table('config')->first();
        if($config->label){
            $label=explode("/", $config->label);
        }else{
            $label=array();
        }
        return view('customer/add',['label'=>$label,'xd' =>'5']);
    }

    public function add(Request $request){
        $user = Auth::user();
        $data=$request->all();
        unset($data['_token']);
        $data['created_time']=date('Y-m-d H:i:s');
        $data['label']=implode("/",$data['label']);
        $data['assignee']=$user->id;
        $data['branch_office']=$user->branch_office;
        DB::table('customer')->insert($data);
        DB::table('total')
            ->where('u_id', $user->id)
            ->increment('follow_up',1);
        return redirect('/customer/customer');
    }

    public function edit(Request $request){
        $id=$request->input('id');
        $data=DB::table("customer")
            ->where('id',$id)
            ->first();
        $date=date("Y-m-d",strtotime($data->return_visit_time));
        $time=date("H:i",strtotime($data->return_visit_time));
        $data->return_visit_time=$date.'T'.$time;
        $config=DB::table('config')->first();
        if($config->label){
            $label=explode("/", $config->label);
        }else{
            $label=array();
        }
        if($data->label){
            $label_xz=explode("/", $data->label);
        }else{
            $label_xz=array();
        }
        if($data->follow_up_feedback){
            $follow_up_feedback=explode("/", $data->follow_up_feedback);
        }else{
            $follow_up_feedback[]='';
        }
        $labl_web=array();
        foreach ($label as $key=>$value){
            if(in_array($value,$label_xz)){
                $labl_web[$key]['zhi']=$value;
                $labl_web[$key]['type']=1;
            }else{
                $labl_web[$key]['zhi']=$value;
                $labl_web[$key]['type']=0;
            }
        }

        return view('customer/edit', ['data' => $data, 'xd' =>'5','label'=>$labl_web,'follow_up_feedback'=>$follow_up_feedback]);
    }

    public function edit_f(Request $request){
        $data=$request->all();
        $id=$data['id'];
        unset($data['_token'],$data['id']);
        $data['created_time']=date('Y-m-d H:i:s');
        if(!empty($data['label'])){
            $data['label']=implode("/",$data['label']);
        }else{
            $data['label']='';
        }
        if(!empty($data['follow_up_feedback'])){
            $data['follow_up_feedback']=implode("/",$data['follow_up_feedback']);
        }else{
            $data['follow_up_feedback']='';
        }
        DB::table('customer')
            ->where('id', $id)
            ->update($data);
        return redirect('customer/customer');
    }

}
