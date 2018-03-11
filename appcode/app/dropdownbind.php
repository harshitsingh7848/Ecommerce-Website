<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dropdownbind extends Model
{
    protected   $table    =   'roles';
      protected $primaryKey = 'id';

      protected $fillable = [
        'role_name',
    ];

   
    

    public  $timestamps =   false;
    
}
