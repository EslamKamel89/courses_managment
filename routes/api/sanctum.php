<?php
use App\Http\Controllers\SanctumController;

Route::group(
	[],
	function () {
		Route::post( '/sanctum/token', [ SanctumController::class, 'issueToken' ] )->name( 'issueToken' );
		// Route::post( 'register', [ SanctumController::class, '' ] )->name( 'register' );
	},
);
