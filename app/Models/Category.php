<?php

namespace App\Models;

use App\Models\Business;
use Hidehalo\Nanoid\Client;
use Hidehalo\Nanoid\GeneratorInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'parent_id',
        '__id',
        'category',
    ];

    protected static function boot()
    {
        parent::boot();
        Category::creating(function ($model) {
            $client = new Client();
            $nanoid = $client->generateId($size = 21, $mode = Client::MODE_DYNAMIC);
            $model->__id = $nanoid;
        });
    }

    public function businesses(): HasMany
    {
        return $this->hasMany(Business::class);
    }
}
