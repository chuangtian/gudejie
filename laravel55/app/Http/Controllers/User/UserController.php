<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $user=DB::table('users')->get();
        return view('user/user', ['book' => $user, 'xd' =>'2']);
    }

    public function add()
    {

        return view('user/add', [ 'xd' =>'2']);

    }

    public function addff()
    {

        $token=Input::post("_token");
        $email=Input::post("email");
        $password=Input::post("password");
        $password_confirmation=Input::post("password_confirmation");
        if($password==$password_confirmation){
          $user = DB::table('users')->where('email', $email)->first();
           if($user==null){
              $passwordmm = Hash::make($password);
              $time=date("Y-m-d H:i:s", time());
			  $data['name']=$email;
			  $data['email']=$email;
			  $data['password']=$passwordmm;
			  $data['remember_token']=$token;
			  $data['created_at']=$time;
			  $data['updated_at']=$time;
              $data['branch_office']=1;
			  $data['type']=3;
			  DB::table('users')->insert($data);
              $user=DB::table("users")->where('email',$email)->first();
              return redirect('admin/user');
           }else{
            echo "<script>alert('用户名已存在');window.history.back(-1);</script>";
           }
        }else{
          echo "<script>alert('两次密码输入不一样');window.history.back(-1);</script>";
        }
    }

    public function delete()
    {

        $id = $_GET['id'];
        DB::table('users')->where('id', '=', $id)->delete();
        return redirect('admin/user');

    }

     public function edit()
    {
        $id=$_GET['id'];
        $book = DB::table('users')->where('id', $id)->first();
        return view('user/edit', ['book' => $book, 'xd' =>'2']);
    }
    public function editff()
    {
         $id = Input::post("id");
         $email = Input::post("email");
         $password = Input::post("password");
         $password_confirmation = Input::post("password_confirmation");
         if($password==$password_confirmation){
          $user = DB::table('users')->where('email', $email)->where('id', '<>', $id)->first();
           if($user==null){
              $passwordmm = Hash::make($password);
              $time=date("Y-m-d H:i:s", time());
              DB::table('users')
                ->where('id', $id)
                ->update(array('email'=>$email, 'password'=>$passwordmm, 'created_at'=>$time));
              return redirect('admin/user');
           }else{
            echo "<script>alert('账号已存在');window.history.back(-1);</script>";
           }
        }else{
          echo "<script>alert('两次密码输入不一样');window.history.back(-1);</script>";
        }
    }
}
