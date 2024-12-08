<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use App\Models\Vehicle;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\VehicleCategory;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\VehicleResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\VehicleResource\RelationManagers;

class VehicleResource extends Resource
{
    protected static ?string $model = Vehicle::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    protected static ?string $navigationLabel = 'Vehicle';

    public static function form(Form $form): Form
    {
        $categoryOptions = VehicleCategory::all()->pluck('name', 'id')->toArray();

        if (empty($categoryOptions)) {
            $categoryOptions = [0 => 'No categories available'];
        }

        return $form->schema([
            Select::make('vehicle_category_id')->label('Vehicle Category')->options($categoryOptions)->searchable()->required(),

            TextInput::make('title')->live(onBlur: true)->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))->required(),
            TextInput::make('slug')->required(),
            Select::make('status')
                ->label('status')
                ->options([
                    'publish' => 'Publish',
                    'private' => 'Private',
                ])
                ->default('publish')
                ->required(),
            FileUpload::make('img')->label('Image')->directory('vehicle')->image()->maxSize(10240)->columnSpan(2)->required(),
            RichEditor::make('desc')->columnSpan(2)->required(),
            TextInput::make('publish_date')->type('date')->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('vehiclecategory.name')->label('Vehicle Category'),
                TextColumn::make('views'),
                ImageColumn::make('img')->label('Image'),
                TextColumn::make('publish_date')->label('Publish Date')->formatStateUsing(fn($state) => Carbon::parse($state)->format('d M Y')),
                TextColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(fn($state) => ucfirst($state))
                    ->color(function ($state) {
                        return $state === 'publish' ? 'success' : 'danger';
                    }),
            ])
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
            'index' => Pages\ListVehicles::route('/'),
            'create' => Pages\CreateVehicle::route('/create'),
            'edit' => Pages\EditVehicle::route('/{record}/edit'),
        ];
    }
}
