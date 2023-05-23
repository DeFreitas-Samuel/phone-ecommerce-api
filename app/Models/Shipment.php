<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shipment extends Model
{
    use HasFactory;



    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function bill(): BelongsTo
    {
        return $this->belongsTo(Bill::class);
    }
}
