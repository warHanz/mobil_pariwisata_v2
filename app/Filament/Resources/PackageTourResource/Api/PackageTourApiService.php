<?php
namespace App\Filament\Resources\PackageTourResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\PackageTourResource;
use Illuminate\Routing\Router;


class PackageTourApiService extends ApiService
{
    protected static string | null $resource = PackageTourResource::class;

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
