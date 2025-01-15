<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Regulation;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Http;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RegulationResource\Pages;
use App\Filament\Resources\RegulationResource\RelationManagers;
use App\Filament\Resources\RegulationResource\Api\Transformers\RegulationTransformer;

class RegulationResource extends Resource
{
    protected static ?string $model = Regulation::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Settings';

    public static function form(Form $form): Form
    {
        return $form->schema([TextInput::make('title')->required(), TextInput::make('category')->required(), RichEditor::make('desc')->columnSpan(2)->required()]);
    }

    public static function table(Table $table): Table
    {
        $response = Http::get('http://127.0.0.1:8080/api/admin/regulations');
        $article_categories = $response->successful() ? $response->json() : [];

        return $table
            ->columns([TextColumn::make('title')->sortable()->size('xs')->searchable(), TextColumn::make('category')->sortable()->size('xs')->searchable(), TextColumn::make('desc')->sortable()->size('xs')->limit(50)->searchable()])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\EditAction::make()])
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
            'index' => Pages\ListRegulations::route('/'),
            'create' => Pages\CreateRegulation::route('/create'),
            'edit' => Pages\EditRegulation::route('/{record}/edit'),
        ];
    }

    public static function getApiTransformer()
    {
        return RegulationTransformer::class;
    }
}
