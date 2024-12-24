<?php

namespace App\Models;

use App\Models\VehicleCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['vehicle_category_id', 'title', 'slug', 'desc', 'img', 'views', 'status', 'publish_date'];

    protected static function booted()
    {
        static::deleting(function ($article) {
            if ($article->img && Storage::disk('public')->exists($article->img)) {
                Storage::disk('public')->delete($article->img);
            }
        });

        static::updating(function ($vehicle) {
            if ($vehicle->isDirty('img') && $vehicle->getOriginal('img') !== $vehicle->img) {
                $oldImage = $vehicle->getOriginal('img');
                if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });
    }

    //relation ke categories
    public function VehicleCategory(): BelongsTo
    {
        return $this->belongsTo(VehicleCategory::class);
    }
}
