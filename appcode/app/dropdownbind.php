<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dropdownbind extends Model
{
    protected   $table    =   'user_type';
      protected $primaryKey = 'id';

      protected $fillable = [
        'user_type',
    ];

   
    

    public  $timestamps =   false;
    
}
