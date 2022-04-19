<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $visible = [
        'id',
        "member_id",
        "amount",
        "paid_at"
    ];

    protected $fillable = [
        "member_id",
        "amount",
        "paid_at"
    ];
}
