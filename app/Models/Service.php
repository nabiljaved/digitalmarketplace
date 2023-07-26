<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'service_title',
        'service_price',
        'service_previous_price',
        'service_category',
        'service_status',
        'service_detail',
        'service_url',
        'selected_images',
        'service_slug',
        'service_isFeatured',
        'service_isPopular'
    ];

    // Define the relationship with the Category model
    public function category()
    {
        return $this->belongsTo(Category::class, 'service_category_id');
    }
}
