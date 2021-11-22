<?php

namespace App\Models;

use App\Models\User;
use App\Models\Photo;
use App\Models\Review;
use Hidehalo\Nanoid\Client;
use Laravel\Scout\Searchable;
// use App\Models\Category;▬
use App\Models\BusinessCategory;
use App\Models\BusinessVerification;
use Hidehalo\Nanoid\GeneratorInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Business extends Model
{
    use HasFactory, SoftDeletes, Searchable;

    protected $fillable = [
        'id',
        '__id',
        'user_id',
        'business_category_id',
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
        Business::creating(function ($model) {
            $client = new Client();
            $nanoid = $client->generateId($size = 21, $mode = Client::MODE_DYNAMIC);
            $model->__id = $nanoid;
        });
    }

    /**
     * Get the indexable data array for the model.
    *
    * @return array
    */
    public function toSearchableArray() : array
    {
        // $array = $this->toArray();

        // $array['category'] = $this->business_category['category'];

        // return $array;
        return [
            'id' => $this->id,
            'business_name' => $this->business_name,
            'address' => $this->address,
            'city' => $this->city,
            'category' => $this->business_category['category'],
        ];
    }
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function business_category(): BelongsTo
    {
        return $this->belongsTo(BusinessCategory::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class);
    }

    public function business_verifications(): HasMany
    {
        return $this->hasMany(BusinessVerification::class);
    }
}
