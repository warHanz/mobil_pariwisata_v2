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

    protected $fillable = ['name', 'slug'];

    //relation has many category ke vehicle
    public function Vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class);
    }
}
