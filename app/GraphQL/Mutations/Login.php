<?php

namespace App\GraphQL\Mutations;

use GraphQL\Error\Error;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class Login
{
    /**
     * @param null $_
     * @param array<string, mixed> $args
     */
    public function __invoke( $_, array $args )
    {
        $guard = Auth::guard( 'web' );

        $credentials = Arr::only( $args, [ 'email', 'password' ] );

        if ( !$guard->attempt( $credentials ) )
        {
            throw new Error( 'Invalid credentials.' );
        }

        $user = $guard->user();

        $token = $user->createToken( 'api_token' )->plainTextToken;

        return $token;
    }
}
