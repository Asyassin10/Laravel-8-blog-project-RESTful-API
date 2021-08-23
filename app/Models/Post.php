<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'tital',
        'description',
        'user_id',
    ];

     // @return \Illuminate\Database\Eloquent\Relations\BelongsTo

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}