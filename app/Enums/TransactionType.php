<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Deposit()
 * @method static static Withdrawal()
 * @method static static Interest()
 */
final class TransactionType extends Enum
{
    const Deposit = 'deposit';
    const Withdrawal = 'withdrawal';
    const Interest = 'interest';
}
