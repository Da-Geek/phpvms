<?php

namespace App\Models\Enums;

use App\Interfaces\Enum;

/**
 * Class ActiveState
 */
class ActiveState extends Enum
{
    public const INACTIVE = 0;
    public const ACTIVE = 1;

    public static $labels = [
        self::ACTIVE   => 'common.active',
        self::INACTIVE => 'common.inactive',
    ];
}
