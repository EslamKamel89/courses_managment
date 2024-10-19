<?php
declare(strict_types=1);
namespace App\Modules\StudentService;
use App\Modules\Student\Student;
use App\Modules\Student\StudentValidator;
class StudentService {

	public function __construct(
		private StudentValidator $validator,
	) {
	}

	public function get( int $id ): Student {
	}

	/**
	 * Summary of getByCorseId
	 * @param int $courseId
	 * @return Student[]
	 */
	public function getByCorseId( int $courseId ): array {
		return [];
	}

	public function update( array $data ): Student {
	}
	public function softDelete( int $id ): bool {
	}
}
