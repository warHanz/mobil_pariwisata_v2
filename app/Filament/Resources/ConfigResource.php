<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Config;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Http;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ConfigResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ConfigResource\RelationManagers;
use App\Filament\Resources\ConfigResource\Api\Transformers\ConfigTransformer;

class ConfigResource extends Resource
{
    protected static ?string $model = Config::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static ?string $navigationGroup = 'Settings';

    public static function form(Form $form): Form
    {
        return $form->schema([TextInput::make('name')->required(), Textarea::make('value')->rows(10)->cols(20)->required()]);
    }

    public static function table(Table $table): Table
    {
        $response = Http::get('http://127.0.0.1:8080/api/admin/configs');
        $configs = $response->successful() ? $response->json() : [];

        return $table
            ->columns([TextColumn::make('name')->sortable()->size('xs')->searchable(), TextColumn::make('value')->sortable()->size('xs')->limit(75)->searchable()])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\EditAction::make()->size('xs'), Tables\Actions\DeleteAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getRelations(): array
    {
        return [
                //
            ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListConfigs::route('/'),
            'create' => Pages\CreateConfig::route('/create'),
            'edit' => Pages\EditConfig::route('/{record}/edit'),
        ];
    }

    public static function getApiTransformer()
    {
        return ConfigTransformer::class;
    }
}
