<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void {
		Schema::create( 'student_course_enrollment', function (Blueprint $table) {
			$table->id();
			$table->foreignId( 'course_id' )->constrained( 'courses' );
			$table->foreignId( 'student_id' )->constrained( 'students' );
			$table->foreignId( 'enrolled_by_user_id' )->constrained( 'users' );
			$table->softDeletes();
			$table->timestamps();
		} );
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void {
		Schema::dropIfExists( 'student_course_enrollment' );
	}
};
