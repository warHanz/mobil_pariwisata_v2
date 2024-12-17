<?php
namespace App\Filament\Resources\VehicleCategoryResource\Api\Handlers;

use log;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\VehicleCategoryResource;

class PaginationHandler extends Handlers
{
    public static string|null $uri = '/';
    public static string|null $resource = VehicleCategoryResource::class;

    public static bool $public = true;

    public function handler()
    {
        $query = static::getEloquentQuery();
        $model = static::getModel();

        $query = QueryBuilder::for($query)
            ->allowedFields($this->getAllowedFields() ?? [])
            ->allowedSorts($this->getAllowedSorts() ?? [])
            ->allowedFilters($this->getAllowedFilters() ?? [])
            ->allowedIncludes($this->getAllowedIncludes() ?? [])
            ->paginate(request()->query('per_page'))
            ->appends(request()->query());

        return static::getApiTransformer()::collection($query);
    }
}
