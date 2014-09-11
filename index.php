<?php

//******************************
//       Flight Sample
//******************************
require_once 'flight/Flight.php';

Flight::route( 'GET /flight/listings', 'get_listings' );
Flight::route( 'GET /flight/listings/@listing', 'get_listing' );
Flight::route( 'POST /flight/listings/@listing', 'add_listing' );
Flight::route( 'PUT /flight/listings/@listing', 'update_listing');


//Flight::start();

//******************************
//       Slim Sample
//******************************
require_once 'vendor/autoload.php';

$slim = new \Slim\Slim();

$slim->get('/slim/listings', 'get_listings');
$slim->get( '/slim/listings/:listing', 'get_listing' );
$slim->post( '/slim/listings/:listing', 'add_listing' );
$slim->put( '/slim/listings/:listing', 'update_listing' );

//$slim->run();

//******************************
//       Limonade Sample
//******************************
require_once 'vendor/autoload.php';

dispatch( '/limon/listings', 'get_listings' );
dispatch( '/limon/listings/:listing', 'get_listing' );
dispatch_post( '/limon/listings/:listing', 'add_listing' );
dispatch_put( '/limon/listings/:listing', 'update_listing' );

run();




function get_listings() {
	echo 'get all listings';
}

function get_listing($listing) {
	echo 'get listing ' . $listing;
}

function add_listing($listing) {
	echo 'add listing ' . $listing;
}

function update_listing($listing) {
	echo 'update listing ' . $listing;
}

