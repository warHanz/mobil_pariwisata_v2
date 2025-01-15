<?php

namespace App\Models;

use App\Models\PackageTour;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PackageCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['name', 'slug'];

    //relation has many category ke package
    public function PackageTour(): HasMany
    {
        return $this->hasMany(PackageTour::class);
    }
}
