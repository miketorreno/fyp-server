<?php

namespace App\Models;

use App\Models\User;
use App\Models\Business;
use Hidehalo\Nanoid\Client;
use Hidehalo\Nanoid\GeneratorInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        '__id',
        'business_id',
        'user_id',
        'url',
        'caption',
    ];

    protected static function boot()
    {
        parent::boot();
        Photo::creating(function ($model) {
            $client = new Client();
            $nanoid = $client->generateId($size = 21, $mode = Client::MODE_DYNAMIC);
            $model->__id = $nanoid;
        });
    }
    
    public function business(): BelongsTo
    {
        return $this->belongsTo(Business::class);
    }
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
