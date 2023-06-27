<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function  index(){        
        return view('zens');
    }
    public function  index_(){
        $arr = array();
        if(isset($_POST['submit'])){
            $number = $_POST['number'];
            for($i = 0; $i < 5; $i++){
                $arr[] = $number++;
            }
        }
        $data = ['arr' => $arr];
        
        return view('zens', $data);
    }
    use AuthorizesRequests, ValidatesRequests;
}
