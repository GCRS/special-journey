<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
abstract class Request extends FormRequest
{
    /**
     * @param array $errors
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function response(array $errors)
    {
      $response = [
            'message' => 'validation error',
            'type' => 'validation_error',
            'errors' => $errors
        ];
        return response()->json($response, 422);
    }
}
