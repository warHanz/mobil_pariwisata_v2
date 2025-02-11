<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\PackageTour;
use Illuminate\Support\Str;
use App\Models\PackageCategory;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Http;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PackageTourResource\Pages;
use App\Filament\Resources\PackageTourResource\RelationManagers;
use App\Filament\Resources\PackageTourResource\Api\Transformers\PackageTourTransformer;

class PackageTourResource extends Resource
{
    protected static ?string $model = PackageTour::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    protected static ?string $navigationLabel = 'Package Tour';

    public static function form(Form $form): Form
    {
        $categoryOptions = PackageCategory::all()->pluck('name', 'id')->toArray();

        if (empty($categoryOptions)) {
            $categoryOptions = [0 => 'No categories available'];
        }

        return $form->schema([
            Select::make('package_category_id')->label('Package Category')->options($categoryOptions)->searchable()->required(),

            TextInput::make('title')->live(onBlur: true)->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))->required(),
            TextInput::make('slug')->required(),
            Select::make('status')
                ->label('status')
                ->options([
                    '1' => 'Publish',
                    '0' => 'Private',
                ])
                ->default('1')
                ->required(),
            FileUpload::make('img')->label('Image')->directory('package_tour')->image()->maxSize(10240)->columnSpan(2)->required(),
            RichEditor::make('price')->columnSpan(2)->required(),
            RichEditor::make('itinerary')->columnSpan(2)->required(),
            RichEditor::make('desc')->columnSpan(2)->required(),
            TextInput::make('publish_date')->type('date')->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        $response = Http::get('http://127.0.0.1:8080/api/admin/package-tours');
        $package_categories = $response->successful() ? $response->json() : [];

        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('packagecategory.name')->label('Package Category'),
                TextColumn::make('views'),
                ImageColumn::make('img')->label('Image'),
                TextColumn::make('publish_date')->label('Publish Date')->formatStateUsing(fn($state) => Carbon::parse($state)->format('d M Y')),
                ToggleColumn::make('status')
                    ->label('Status') // Label kolom
                    ->onColor('success') // Warna untuk status 'publish'
                    ->offColor('danger') // Warna untuk status 'private'
                    ->onIcon('heroicon-o-check') // Ikon saat status 'publish'
                    ->offIcon('heroicon-o-x-mark') // Ikon saat status 'private'
                    ->updateStateUsing(function ($record, $state) {
                        // Simpan status ke database
                        $record->update([
                            'status' => $state ? '1' : '0',
                        ]);
                    })
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])])
            ->defaultSort('package_category_id', 'asc');
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
            'index' => Pages\ListPackageTours::route('/'),
            'create' => Pages\CreatePackageTour::route('/create'),
            'edit' => Pages\EditPackageTour::route('/{record}/edit'),
        ];
    }

    public static function getApiTransformer()
    {
        return PackageTourTransformer::class;
    }
}
