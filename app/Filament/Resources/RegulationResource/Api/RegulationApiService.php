<?php
namespace App\Filament\Resources\RegulationResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\RegulationResource;
use Illuminate\Routing\Router;


class RegulationApiService extends ApiService
{
    protected static string | null $resource = RegulationResource::class;

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
