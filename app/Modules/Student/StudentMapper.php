<?php
declare(strict_types=1);
namespace App\Modules\Student;
use App\Modules\Common\MyHelpers;
class StudentMapper {
	public function mapFrom( array $data ): Student {
		return new Student(
			MyHelpers::nullStringToNullInt( $data["id"] ),
			$data["name"],
			$data["email"],
			$data["deletedAt"] ?? null,
			$data["createdAt"] ?? date( "y-m-d H:i:s" ),
			$data["updatedAt"],
		);
	}
}
