<?php
namespace App\Filament\Resources\VehicleResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\VehicleResource;
use Illuminate\Routing\Router;


class VehicleApiService extends ApiService
{
    protected static string | null $resource = VehicleResource::class;

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
