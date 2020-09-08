<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ConexionController extends Controller
{
    public function testDBConection(){
        try{
            DB::connection()->getPdo();
            if(DB::connection()->getDatabaseName()){
                return "Yes !Successfully connected to DB: " . DB::connection()->getDatabaseName();
            }
            else{
                die ("could not find the database.Please check your configuration.");
            }
        }catch (\Exception $e){
             die ("could not open connection to database server.Please check your configuration.");
        }
 
     }
}
