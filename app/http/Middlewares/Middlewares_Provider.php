<?php

namespace app\http\Middlewares;

class Middlewares_Provider
{
    const MAP = [
        'auth' => Authenticate::class,
        'guest'=> Guest::class,
    ];
}