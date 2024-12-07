<?php
namespace App\Filament\Resources\PackageCategoryResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\PackageCategoryResource;
use Illuminate\Routing\Router;


class PackageCategoryApiService extends ApiService
{
    protected static string | null $resource = PackageCategoryResource::class;

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
