<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
