<?php

// namespace App\Filament\Widgets;

// use Filament\Tables;
// use App\Models\Article;
// use App\Models\Vehicle;
// use Filament\Tables\Table;
// use App\Models\PackageTour;
// use Filament\Tables\Columns\TextColumn;
// use Filament\Widgets\TableWidget as BaseWidget;

// class TableOverview extends BaseWidget
// protected int|string|array $columnSpan = [
//     'md' => 2,
//     'xl' => 3,
// ];
// protected static ?int $sort = 2;
// public function table(Table $table): Table
// {
//     return $table->columns([TextColumn::make('title')->sortable(), TextColumn::make('views')->sortable()->label('View Count')])->query(Article::query()->orderByDesc('views')->take(3));
// }
// public function additionalTable(Table $table): Table
// {
//     return $table->columns([TextColumn::make('model')->sortable()->label('Model'), TextColumn::make('price')->sortable()->label('Price')])->query(Vehicle::query()->orderByDesc('price')->take(5));
// }
// public function getTabs(): array
// {
//     return [
//         'Articles' => [
//             'view' => 'filament.widgets.dashboard-widget', // Tampilan untuk artikel
//             'table' => function () {
//                 return Article::query()->orderByDesc('views')->take(3); // Query Artikel
//             },
//             'columns' => [TextColumn::make('title')->sortable()->searchable(), TextColumn::make('views')->sortable()->label('View Count')],
//         ],
//     ];
// }
