<?php

namespace App\Models;

use App\Models\PackageTour;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PackageCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRows()
    {
        try {
            $response = Http::get('http://127.0.0.1:8080/api/admin/package-categories');

            if ($response->successful()) {
                $package_category = $response->json();

                if (isset($package_category['package_category']) && is_array($package_category['package_category'])) {
                    return Arr::map($package_category['package_category'], function ($item) {
                        return Arr::only($item, ['id', 'name', 'slug']);
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

    //relation has many category ke package
    public function PackageTour(): HasMany
    {
        return $this->hasMany(PackageTour::class);
    }
}
