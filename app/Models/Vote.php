<?php

namespace App\Models;

use App\Models\User;
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

    protected static function boot()
    {
        parent::boot();
        Vote::creating(function ($model) {
            if (Vote::where("review_id", "=", $model->review_id)->where("user_id", "=", $model->user_id)->exists()) {
                $model->val = 10;
            } 
        });
    }
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function review(): BelongsTo
    {
        return $this->belongsTo(Review::class);
    }
}
