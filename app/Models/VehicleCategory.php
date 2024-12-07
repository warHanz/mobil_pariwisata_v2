<?php

namespace App\Models;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VehicleCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRows()
    {
        try {
            $response = Http::get('http://127.0.0.1:8080/api/admin/vehicle-categories');

            if ($response->successful()) {
                $vehicle_category = $response->json();

                if (isset($vehicle_category['vehicle_category']) && is_array($vehicle_category['vehicle_category'])) {
                    return Arr::map($vehicle_category['vehicle_category'], function ($item) {
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

    //relation has many category ke vehicle
    public function Vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class);
    }
}
