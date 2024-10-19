<?php
declare(strict_types=1);
namespace App\Modules\Student;
use Illuminate\Validation\Rule;
class StudentValidator {
	public function validateUpdate( array $data ) {
		$validator = validator(
			[ 
				"name" => [ 'sometimes', 'string', 'max:255' ],
				"email" => [ 'sometimes', 'email', Rule::unique( 'students', 'email' ) ],
			],
			[]
		);
		if ( $validator->fails() ) {
			throw new \InvalidArgumentException( json_encode( $validator->errors()->all() ) );
		}
	}
}
