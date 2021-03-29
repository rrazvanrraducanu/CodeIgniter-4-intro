<?php
namespace App\Controllers;

class HomeController extends BaseController {
public function index()
	{
     echo "Welcome to my home controller";  
	}
   public function home_view(){
           
        return view('my_home_view');
        }
}