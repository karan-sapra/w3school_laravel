<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
   public function sendsms(Request $req){


	// Account details
	$apiKey = urlencode('NDM2ODYxNmQ3ODcwNjI0NDY3NGU0NzM1NDk2YzM3NTk=');
	// Message details
	$numbers = array($req->input('phone'));
	$sender = urlencode('TXTLCL');
	$message = rawurlencode($req->input('message'));
	 
	$numbers = implode(',', $numbers);
	 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers,'sender' => $sender, 'message' => $message);
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	// Process your response here
	echo $response;
	
   }
}
