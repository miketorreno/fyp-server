<?php

namespace App\Models;

use App\Models\User;
use App\Models\Review;
use App\Models\Category;
use Hidehalo\Nanoid\Client;
use Laravel\Scout\Searchable;
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
        '__id',
        'user_id',
        'category_id',
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
        $array = $this->toArray();

        $array['category'] = $this->category['category'];

        return $array;
        /* return [
            'id' => $this->id,
            'business_name' => $this->business_name,
            'address' => $this->address,
            'city' => $this->city,
            'category' => $this->category['category'],
        ]; */
    }
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
