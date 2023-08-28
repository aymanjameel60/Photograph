<?php

namespace App\Enums;

use App\Http\Traits\EnumMethods;

enum AddressTypeEnum:string  {

    use EnumMethods;
    //cassess
    case PICKUP = 'pickup';
    case DROPOFF = 'dropoff';
}
