<?php

namespace Iglebekk\Msghub;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class Msghub
{

    private static function access_token()
    {
        return config('msghub.access_token');
    }

    private static function base_uri()
    {
        return config('msghub.base_uri');
    }

    public static function send(string $sender, int $phone): Response
    {

        $response = Http::withToken(self::access_token())
            ->get(self::base_uri() . '/sms/sendCode?sender=' . $sender . '&receiver=47' . $phone);

        return $response;
    }

    public static function verify(string $sender, int $phone, int $code): Response
    {
        $response = Http::withToken(self::access_token())
            ->get(self::base_uri() . '/sms/verifyCode?sender=' . $sender . '&receiver=47' . $phone . '&code=' . $code);

        return $response;
    }
}
