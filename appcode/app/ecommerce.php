<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ecommerce extends Model
{
    
      protected   $table    =   'user_details';
      protected $primaryKey = 'empid';

      protected $fillable = [
        'empname', 'emp_mobile', 'emp_email','emp_pass','emp_type'
    ];
    

    public  $timestamps =   false;
}
