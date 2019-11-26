<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    public function insert($data){
    	$info=DB::table('deposit')->insert($data);
    	return $info;
    }
}
