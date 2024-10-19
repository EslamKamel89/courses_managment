<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Modules\Core\HTTPResponseCodes;
use App\Modules\Sanctum\SanctumService;
use App\Modules\StudentService\StudentService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentController extends Controller {

	public function __construct(
		private StudentService $service,
	) {
	}

	public function get( int $id ): Response {
		try {
			return response()->json(
				$this->service->get( $id ),
				HTTPResponseCodes::Success['code']
			);
		} catch (\Throwable $th) {
			return response()->json(
				[ 
					"exception" => get_class( $th ),
					"errors" => $th->getMessage(),
				],
				HTTPResponseCodes::BadRequest['code']
			);
		}
	}

	public function update( Request $request ): Response {
		try {
			return response()->json(
				$this->service->update( $request->all() ),
				HTTPResponseCodes::Success['code'],
			);
		} catch (\Throwable $th) {
			return response()->json(
				[ 
					"exception" => get_class( $th ),
					"errors" => $th->getMessage(),
				],
				HTTPResponseCodes::BadRequest['code']
			);
		}
	}

	public function softDelete( int $id ): Response {
		try {
			return response()->json(
				$this->service->softDelete( $id ),
				HTTPResponseCodes::Success['code'],
			);
		} catch (\Throwable $th) {
			return response()->json(
				[ 
					"exception" => get_class( $th ),
					"errors" => $th->getMessage(),
				],
				HTTPResponseCodes::BadRequest['code']
			);
		}
	}

}
