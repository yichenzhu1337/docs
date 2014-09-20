<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/sms', function() 
{
	//require('vendor/twilio/sdk/Services'); //find
	 
	$account_sid = 'ACaf602a3c1207efe0343de5c9130a3340'; 
	$auth_token = 'b20ac9f89c3a16bc8699274e06ea5c8a'; 
	$client = new Services_Twilio($account_sid, $auth_token); 
	 
	$client->account->messages->create(array(  
		'From' => "+12898073591",    
		'To' => "4168561988",
		'Body' => "This is form the webserver"
	));

});