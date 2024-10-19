<?php
declare(strict_types=1);
namespace App\Modules\Sanctum;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class SanctumService {

	public function __construct(
		private SanctumValidator $validator,
	) {
	}
	public function issueToken( array $rawData ): string {
		$this->validator->validateIssueToken( $rawData );
		$data = SanctumAuthorizeRequestMapper::mapFrom( $rawData );
		$user = User::where( 'email', $data->getEmail() )->first();
		if ( ! $user || ! Hash::check( $data->getPassword(), $user->password, ) ) {
			throw new BadRequestHttpException( 'The provided credentials are uncorrect' );
		}
		return $user->createToken( $data->getEmail() )->plainTextToken;
	}
}
