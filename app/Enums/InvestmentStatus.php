<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Active()
 * @method static static Matured()
 * @method static static Withdrew()
 */
final class InvestmentStatus extends Enum
{
    const Active = 'active';
    const Matured = 'matured';
    const Withdrew = 'withdrew';
}
