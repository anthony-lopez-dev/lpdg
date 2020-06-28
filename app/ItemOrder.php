<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ItemOrder extends Pivot
{
    protected $casts = [
        'quantity' => 'integer',
    ];
}
