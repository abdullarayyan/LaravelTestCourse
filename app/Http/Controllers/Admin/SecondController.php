<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;

class SecondController extends Controller
{
    public function __construct(){
        $this -> middleware('auth')->except('showString');
    }
    public function showString(){

        return 'string1';
    }
    public function showString1(){

        return 'static string1';
    }
    public function showString2(){

        return 'static string2';
    }
    public function showString3(){

        return 'static string3';
    }

}
