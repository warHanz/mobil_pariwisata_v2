<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\PackageTour;
use App\Models\PackageCategory;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PackageTourResource\Pages;
use App\Filament\Resources\PackageTourResource\RelationManagers;

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
            Select::make('article_category_id')->label('Article Category')->options($categoryOptions)->searchable()->required(),

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
            FileUpload::make('img')->label('Image')->directory('article')->image()->maxSize(10240)->columnSpan(2)->required(),
            RichEditor::make('desc')->columnSpan(2)->required(),
            TextInput::make('publish_date')->type('date')->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('packagecategory.name')->label('Package Category'),
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
            'index' => Pages\ListPackageTours::route('/'),
            'create' => Pages\CreatePackageTour::route('/create'),
            'edit' => Pages\EditPackageTour::route('/{record}/edit'),
        ];
    }
}
