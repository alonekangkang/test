<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crmuser extends Model
{
    //主键id
    public $primaryKey='user_id';
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'crmuser';

    /**
     * 可以被批量赋值的属性.@var array
     */
    protected $fillable = ['user_name','user_pwd'];
    /**
     * 表明模型是否应该被打上时间戳
     *
     * @var bool
     */
    public $timestamps = false;
}
