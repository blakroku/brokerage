<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Brokerage()
 * @method static static Investor()
 */
final class UserRole extends Enum
{
    const Brokerage = 'brokerage';
    const Investor = 'investor';
}
