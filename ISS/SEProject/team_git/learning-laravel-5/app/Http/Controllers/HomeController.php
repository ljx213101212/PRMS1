<?php
/**
 * Created by PhpStorm.
 * User: jixiang
 * Date: 8/12/15
 * Time: 1:56 PM
 */

namespace App\Http\Controllers;

class HomeController extends Controller{


    public function index(){

        return view('index');
//        return "helloworld";
    }

}