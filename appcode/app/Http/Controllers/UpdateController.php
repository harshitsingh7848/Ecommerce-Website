<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ecommerce;
use App\dropdownbind;
use DB;

class UpdateController extends Controller
{
    /* 
     * function update
     * It updates the user type of the users in Database
     */
    public function update()
    {
             print_r($res);
    }

    /* 
     * function getDetails
     * It fetches the details of modules from Database and passes it to the Web Worker
     */
    public function getDetails()
    {
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');

        $time = ecommerce::count();
        echo "Number of Users:  {$time}\n\n";
        flush();
    }

    /*
     * function getOrderCount
     * It passes details of Orders from database and passes it to webworker 
     */
    public function getOrderCount()
    {
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
                
        $result = DB::select('select count(id) as id from orders ');
        $time = $result[0]->id;
        echo "Number of Orders:  {$time}\n\n";
        flush();
    }
}
