<?php

namespace App\Models;

use App\Models\PackageCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PackageTour extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['package_category_id', 'title', 'slug', 'price', 'itinerary', 'desc', 'img', 'views', 'status', 'publish_date'];

    protected static function booted()
    {
        static::deleting(function ($package_tour) {
            if ($package_tour->img && Storage::disk('public')->exists($package_tour->img)) {
                Storage::disk('public')->delete($package_tour->img);
            }
        });

        static::updating(function ($package_tour) {
            if ($package_tour->isDirty('img') && $package_tour->getOriginal('img') !== $package_tour->img) {
                $oldImage = $package_tour->getOriginal('img');
                if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });
    }

    //relation ke categories
    public function PackageCategory(): BelongsTo
    {
        return $this->belongsTo(PackageCategory::class);
    }
}
