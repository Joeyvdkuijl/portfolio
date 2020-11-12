<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace( 'Website\Controllers' );

SimpleRouter::group( [ 'prefix' => site_url() ], function () {

	// START: Zet hier al eigen routes
	// Lees de docs, daar zie je hoe je routes kunt maken: https://github.com/skipperbent/simple-php-router#routes

	SimpleRouter::get( '/', 'WebsiteController@main' )->name( 'main' );
	SimpleRouter::get( '/project/{id}/{url}', 'WebsiteController@project', ['defaultParameterRegex' => '[\w\-]+'])->name( 'project' )->where(['id' => '[0-9]+']);
	SimpleRouter::get( '/verstuurd', 'WebsiteController@main2' )->name( 'main2' );
	// SimpleRouter::match(['post', 'get'], '/contact-form', 'WebsiteController@contactForm' )->name( 'contact.form' );
	SimpleRouter::post( '/versturen', 'WebsiteController@handleContactForm' )->name( 'contact.handle' );
	// STOP: Tot hier al je eigen URL's zetten

	SimpleRouter::get( '/not-found', function () {
		http_response_code( 404 );

		return '404 Page not Found';
	} );

} );


// Dit zorgt er voor dat bij een niet bestaande route, de 404 pagina wordt getoond
SimpleRouter::error( function ( Request $request, \Exception $exception ) {
	if ( $exception instanceof NotFoundHttpException && $exception->getCode() === 404 ) {
		response()->redirect( site_url() . '/not-found' );
	}

} );

