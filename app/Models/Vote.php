<?php

namespace App\Models;

use App\Models\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vote extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'review_id',
        'user_id',
        'val',
    ];
    
    public function review(): BelongsTo
    {
        return $this->belongsTo(Review::class);
    }
}
