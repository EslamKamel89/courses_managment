<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Modules\Core\HTTPResponseCodes;
use App\Modules\Sanctum\SanctumService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SanctumController extends Controller {

	public function __construct(
		private SanctumService $service,
	) {
	}
	public function issueToken( Request $request ): Response {
		try {
			// $dataArray = $request->toArray() !== [] ?
			// 	$request->toArray() :
			// 	$request->json()->all();
			$dataArray = $request->all();
			return new Response(
				$this->service->issueToken( $dataArray ),
				HTTPResponseCodes::Success['code'],
			);
		} catch (\Throwable $th) {
			return new Response( [ 
				"exception" => get_class( $th ),
				"errors" => $th->getMessage()
			], HTTPResponseCodes::BadRequest['code']
			);
		}
	}
}
