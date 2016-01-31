<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Http\Requests\Auth\AuthenticateRequest;
use App\Jobs\Auth\Authenticate;

class AuthController extends Controller
{
  public function postAuthenticate(AuthenticateRequest $request)
  {
      $input = $request->only('email', 'password');
      $data = $this->dispatch(new Authenticate($input));

      if ($data === false) {
          return response()->json([
              'success' => false,
              'error' => 'An error has occured. Could not create an authentication token. User Credentials are Invalid',
          ], 401);
      }

      return response()->json([
          'success' => true,
          'data'    => [
              'token' => $data
          ]
      ]);

  }

  public function getMe()
  {
      return app('user');
  }
}
