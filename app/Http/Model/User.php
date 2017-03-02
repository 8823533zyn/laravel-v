<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = "tb_zq58";
    protected $primaryKey = "id";
    //关闭时间字段
    public $timestamps = false;



}
