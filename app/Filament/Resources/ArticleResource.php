<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use App\Models\Article;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\ArticleCategory;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Http;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Cache;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ArticleResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Article';

    public static function form(Form $form): Form
    {
        $categoryOptions = ArticleCategory::all()->pluck('name', 'id')->toArray();

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
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('articlecategory.name')->label('Article Category')->sortable()->searchable(),
                TextColumn::make('views')->sortable()->searchable(),
                ImageColumn::make('img')->label('Image')->sortable()->searchable(),
                TextColumn::make('publish_date')->label('Publish Date')->formatStateUsing(fn($state) => Carbon::parse($state)->format('d M Y'))->sortable()->searchable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(fn($state) => ucfirst($state))
                    ->color(function ($state) {
                        return $state === 'publish' ? 'success' : 'danger';
                    })
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
