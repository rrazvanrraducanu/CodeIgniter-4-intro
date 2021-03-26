<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class HomeController extends Controller {
public function index()
	{
     echo "Welcome to my home controller";  
	}
   public function home_view(){
           
        return view('my_home_view');
        }
}