<?php

namespace App\Models;

use App\Models\User;
use App\Models\Vote;
use App\Models\Business;
use Hidehalo\Nanoid\Client;
use Hidehalo\Nanoid\GeneratorInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        '__id',
        'business_id',
        'user_id',
        'rating',
        'review',
        'edited',
    ];

    protected $casts = [
        'created_at' => 'datetime:j M Y'
    ];

    protected static function boot()
    {
        parent::boot();
        Review::creating(function ($model) {
            $client = new Client();
            $nanoid = $client->generateId($size = 21, $mode = Client::MODE_DYNAMIC);
            $model->__id = $nanoid;
        });
        
        Review::updating(function ($model) {
            $model->edited = 1;
        });
    }
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function business(): BelongsTo
    {
        return $this->belongsTo(Business::class);
    }

    public function votes(): HasMany
    {
        return $this->hasMany(Vote::class);
    }
}
