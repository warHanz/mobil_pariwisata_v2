<?php
namespace App\Filament\Resources\ConfigResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\ConfigResource;
use Illuminate\Routing\Router;


class ConfigApiService extends ApiService
{
    protected static string | null $resource = ConfigResource::class;

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
