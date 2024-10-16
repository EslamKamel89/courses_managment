<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void {
		$userSeedValue = [ 
			[ "name" => "Eslam Ahmed",
				"email" => "admin@gmail.com",
				"password" => bcrypt( 'password' ),
				"created_at" => now(),],
			[ "name" => fake()->name(),
				"email" => fake()->email(),
				"password" => bcrypt( 'password' ),
				"created_at" => now(),],
			[ "name" => fake()->name(),
				"email" => fake()->email(),
				"password" => bcrypt( 'password' ),
				"created_at" => now(),],
			[ "name" => fake()->name(),
				"email" => fake()->email(),
				"password" => bcrypt( 'password' ),
				"created_at" => now(),],
		];
		DB::table( 'users' )->insert( $userSeedValue );
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void {
		Schema::dropIfExists( 'master_seed' );
	}
};
