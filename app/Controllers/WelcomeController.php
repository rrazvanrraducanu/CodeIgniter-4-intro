<?php
namespace App\Controllers;

class WelcomeController extends BaseController {
	public function index()
	{
          echo "Welcome to my first controller";  
	}
         public function first_view()
         {  
        return view('welcome_view');
        }
}