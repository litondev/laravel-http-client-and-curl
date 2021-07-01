<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class TestingHttpRequest extends Controller
{
    public function testing1(Request $request){
    	// body
		// json
		// collect
		// status
		// oke
		// successful
		// failed
		// serverError
		// clientError
		// header($header)
		// headers

    	try{
    		$response = Http::get("http://127.0.0.1:8001/http-client/check");    		

    		echo "Status  : ".$response->status()." <br/>";    	
    		return $response->body();
    	}catch(\Exception $e){
    		// get_class()
    		// if($e instanceof \Illuminate\Http\Client\ConnectionException){
    		// }

    		echo $e->getMessage();
    	}
    }

    public function testing2(){
		try{
    		$response = Http::get("http://127.0.0.1:8001/http-client/check-error");    		

    		echo "Status  : ".$response->status()." <br/>";    	
    		return $response->body();
    	}catch(\Exception $e){
    		echo $e->getMessage();
    	}
    }

    public function testing3(Request $request){
    	try{
    		// Http::acceptJson()

    		// with header
    		// Http::withHeaders([
				// 	"X" => "hai"
			// ])

    		// x-www-form-urlencoded
			// Http::asForm()

    		$response = Http::post("http://127.0.0.1:8001/http-client/check-post",[
    			"name" => "name"
    		]);    		

    		echo "Status  : ".$response->status()." <br/>";    	
    		return $response->body();
    	}catch(\Exception $e){
    		echo $e->getMessage();
    	}
    }

    public function testing4(Request $request){   
    	try{
			$response = Http::attach(
				'photo',file_get_contents(public_path().'/teh.jpg'),'teh.jpg'
			)->post("http://127.0.0.1:8001/http-client/check-photo");

			echo "Status : ".$response->status()." <br/>";
			return $response->body();
    	}catch(\Exception $e){
    		echo $e->getMessage();
    	}
	}
}
