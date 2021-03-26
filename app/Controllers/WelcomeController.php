<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;


class WelcomeController extends Controller {
	public function index()
	{
          echo "Welcome to my first controller";  
	}
         public function first_view()
         {  
        return view('welcome_view');
        }
}