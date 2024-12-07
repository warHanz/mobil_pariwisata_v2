<?php

namespace App\Models;

use App\Models\PackageCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PackageTour extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRows()
    {
        try {
            $response = Http::get('http://127.0.0.1:8080/api/admin/package-tours'); //
            if ($response->successful()) {
                $package_tour = $response->json();

                if (isset($package_tour['package_tour']) && is_array($package_tour['package_tour'])) {
                    return Arr::map($package_tour['package_tour'], function ($item) {
                        return Arr::only($item, ['id', 'package_category_id', 'title', 'slug', 'desc', 'img', 'status', 'views', 'publish_date']);
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

    //relation ke categories
    public function PackageCategory(): BelongsTo
    {
        return $this->belongsTo(PackageCategory::class);
    }
}
