<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'User',
		'secret' => '',
	],

	'github' => [
	    'client_id' => '9ed227aef41029d68d56',
	    'client_secret' => 'd30c6e18b20d6f8dec60bb470ae40737d59b4bc5',
	    'redirect' => 'http://localhost/login',
	],


	'twitter' => [
	    'client_id' => 'GVIUrqofo4lEeN8US1IQgSzlL',
	    'client_secret' => 'DdFU1P2nr8LcO8lFgHkgWzGjHG6kbZO3AHrFXJ2ANU1nQtvQUQ',
	    'redirect' => 'http://localhost/login',
	],


		'facebook' => [
		    'client_id' => '1626397680914848',
		    'client_secret' => '1b4dad1023bebd4d6319e9785172f075',
		    'redirect' => 'http://localhost/login',
		],


];
