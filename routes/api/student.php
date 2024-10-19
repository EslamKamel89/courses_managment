<?php
use App\Http\Controllers\SanctumController;
use App\Http\Controllers\StudentController;

Route::group(
	[ 'middleware' => 'auth:sanctum' ],
	function () {
		Route::get( '/students/{id}', [ StudentController::class, 'get' ] )
			->name( 'getStudent' );
		Route::put( '/students/{id}', [ StudentController::class, 'update' ] )
			->name( 'updateStudent' );
		Route::delete( '/students/{id}', [ StudentController::class, 'softDelete' ] )
			->name( 'softDeleteStudent' );
	},
);
