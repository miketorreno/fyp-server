<?php

namespace App\Models;

use App\Models\Category;
use Hidehalo\Nanoid\Client;
use Hidehalo\Nanoid\GeneratorInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Business extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        '__id',
        'business_name',
        'address',
        'city',
        'state',
        'postal_code',
        'latitude',
        'longitude',
        'location',
        'geohash',
        'telephone_number',
        'email',
        'website',
        'image_url',
        'header_image',
        'is_open',
        'verified',
        'claimed',
    ];

    protected static function boot()
    {
        parent::boot();
        Business::saving(function ($model) {
            $client = new Client();
            $nanoid = $client->generateId($size = 21, $mode = Client::MODE_DYNAMIC);
            $model->__id = $nanoid;
        });
    }
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
