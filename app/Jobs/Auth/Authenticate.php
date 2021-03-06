<?php

namespace App\Jobs\Auth;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Bus\SelfHandling;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class Authenticate extends Job implements SelfHandling
{

    private $input;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($input)
    {
        $this->input = $input;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $credentials = $this->input;
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return false;
            }
            return $token;
        } catch (JWTException $exs) {
            return false;
        }
    }
}
