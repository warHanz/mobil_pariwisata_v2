<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\PackageCategory;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Http;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PackageCategoryResource\Pages;

class PackageCategoryResource extends Resource
{
    protected static ?string $model = PackageCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Category';

    protected static ?string $navigationLabel = 'Package Category';

    public static function form(Form $form): Form
    {
        return $form->schema([TextInput::make('name')->live(onBlur: true)->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))->required(), TextInput::make('slug')->required()]);
    }

    public static function table(Table $table): Table
    {
        $response = Http::get('http://127.0.0.1:8080/api/admin/package-categories');
        $package_categories = $response->successful() ? $response->json() : [];

        return $table
            ->columns([TextColumn::make('name'), TextColumn::make('slug')])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()])
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
            'index' => Pages\ListPackageCategories::route('/'),
            'create' => Pages\CreatePackageCategory::route('/create'),
            'edit' => Pages\EditPackageCategory::route('/{record}/edit'),
        ];
    }
}
