<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Low()
 * @method static static Medium()
 * @method static static High()
 */
final class RiskLevel extends Enum
{
    const Low = 'low';
    const Medium = 'medium';
    const High = 'high';
}
