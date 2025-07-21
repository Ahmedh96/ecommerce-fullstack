<?php

namespace App\Enums;

enum PaymentMethodEnum: string
{
    case Cash = 'cash';
    case CreditCard = 'credit_card';
    case Paypal = 'paypal';
    case Stripe = 'stripe';
} 