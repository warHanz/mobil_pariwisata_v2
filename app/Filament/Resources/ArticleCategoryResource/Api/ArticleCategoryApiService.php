<?php
namespace App\Filament\Resources\ArticleCategoryResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\ArticleCategoryResource;
use Illuminate\Routing\Router;


class ArticleCategoryApiService extends ApiService
{
    protected static string | null $resource = ArticleCategoryResource::class;

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
