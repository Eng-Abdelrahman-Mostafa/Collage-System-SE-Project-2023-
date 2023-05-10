<?php

namespace app\http\Middlewares;

class Middlewares_Provider
{
    const MAP = [
        'auth' => Authenticate::class,
        'guest'=> Guest::class,
        'admin'=> Admin::class,
        'student'=> Student::class,
        'professor'=> Professor::class,
        'ta'=> TA::class,
        'teaching_staff'=> TeachingStaff::class,
    ];
}