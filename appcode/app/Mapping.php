<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapping extends Model
{
    protected   $table    =   'user_privilege_module_role';
      //protected $primaryKey = 'empid';

      protected $fillable = [
        'emp_id', 'privilege_id', 'module_id','role_id',
    ];
    

    public  $timestamps =   false;
}
