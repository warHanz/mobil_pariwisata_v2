<?php

namespace App\Filament\Resources\ArticleCategoryResource\Pages;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Pages\Page;
use Filament\Forms\Contracts\HasForms;
use App\Filament\Resources\ArticleCategoryResource;
use Filament\Forms\Concerns\InteractsWithForms;
use App\Models\ArticleCategory;

class FormArticleCategoryClass extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = ArticleCategoryResource::class;

    protected static string $view = 'filament.resources.article-category-resource.pages.form-article-category-class';

    public $article_category = [];

    public function mount(): void
    {
        $this->article_category = ArticleCategory::pluck('name', 'id')->toArray();

        $this->form->fill([
            'article_category_id' => $this->article_category[0]['id'] ?? null,
        ]);
    }

    public function getFormSchema(): array
    {
        return [
            Select::make('article_category_id')
                ->label('Article Category')
                ->options($this->article_category)
                ->searchable()
                ->multiple()
                ->required(),

            TextInput::make('title')->label('Title')->required(),

            TextInput::make('slug')->label('Slug')->required(),

            Textarea::make('desc')->label('Description')->required(),

            FileUpload::make('img')->label('Image')->directory('article')->image()->required(),

            Select::make('status')
                ->label('Status')
                ->options([
                    'publish' => 'Publish',
                    'private' => 'Private',
                ])
                ->default('publish')
                ->required(),

            TextInput::make('publish_date')->label('Publish Date')->type('date')->required(),
        ];
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $article = Article::create([
            'title' => $data['title'],
            'slug' => $data['slug'],
            'desc' => $data['desc'],
            'img' => $data['img'],
            'status' => $data['status'],
            'publish_date' => $data['publish_date'],
        ]);

        if (isset($data['article_category_id']) && count($data['article_category_id']) > 0) {
            $article->categories()->attach($data['article_category_id']);
        }
        $this->redirect(static::getUrl('index'));
    }
}
