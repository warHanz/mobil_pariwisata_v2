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

    public function getRows()
    {
        try {
            $response = Http::get('http://127.0.0.1:8080/api/admin/vehicle'); //
            if ($response->successful()) {
                $package_tour = $response->json();

                if (isset($package_tour['package_tour']) && is_array($package_tour['package_tour'])) {
                    return Arr::map($package_tour['package_tour'], function ($item) {
                        return Arr::only($item, ['id', 'vehicle_category_id', 'title', 'slug', 'desc', 'img', 'status', 'views', 'publish_date']);
                    });
                } else {
                    return [];
                }
            } else {
                return [];
            }
        } catch (\Exception $e) {
            return [];
        }
    }

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
