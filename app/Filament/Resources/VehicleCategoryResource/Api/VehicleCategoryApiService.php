<?php
namespace App\Filament\Resources\VehicleCategoryResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\VehicleCategoryResource;
use Illuminate\Routing\Router;


class VehicleCategoryApiService extends ApiService
{
    protected static string | null $resource = VehicleCategoryResource::class;

    public static function handlers() : array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class
        ];

    }
}
