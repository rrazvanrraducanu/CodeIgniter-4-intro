<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class TestController extends Controller {
public function index()
	{
      $data['nume']="Popescu Bogdan";
       return view('test_view',$data);
	}
        public function test1()
	{
            //$data['nume']="Popescu Bogdan";
            $data=[
            "nume"=>"Popescu",
            "prenume"=>"Bogdan"
        ];
            return view('test_view1',$data);
	}
        public function test2(){
          $data['val']=array("Popescu", "Bogdan", "Matematica");
          return view('test_view2',$data);
      }
        
}