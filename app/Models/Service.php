<?php

namespace App\Models;

class Service{
    public static function all(): array{
    return [
        'web'=>'Web technologies 1',
        'web2'=>'Web technologies 2',
        'oop'=>'OOP',
    ];
}
}
