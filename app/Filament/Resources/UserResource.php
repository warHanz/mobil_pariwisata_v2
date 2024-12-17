<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Filament\Resources\UserResource\Api\Transformers\UserTransformer;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationGroup = 'Settings';

    public static function form(Form $form): Form
    {
        return $form->schema([TextInput::make('name')->required(), TextInput::make('email')->required(), TextInput::make('password')->required()]);
    }

    public static function table(Table $table): Table
    {
        $response = Http::get('http://127.0.0.1:8080/api/admin/article-categories');
        $article_categories = $response->successful() ? $response->json() : [];

        return $table
            ->columns([TextColumn::make('name')->label('Name')->sortable()->searchable(), TextColumn::make('email')->label('Email')->sortable()->searchable()])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),

                // Tombol hapus yang hanya muncul jika bukan akun admin yang sedang login
                DeleteAction::make()->visible(function ($record) {
                    return !(Auth::user()->role == 1 && (Auth::id() == $record->id || $record->role == 1));
                }),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    // Aksi bulk untuk menghapus, dengan pengecekan agar admin tidak bisa menghapus akun admin
                    DeleteBulkAction::make()->visible(function ($records) {
                        // Pastikan records tidak kosong dan valid
                        if (!is_array($records) || count($records) === 0) {
                            return false; // Jangan tampilkan tombol hapus jika tidak ada record yang dipilih
                        }

                        // Pastikan admin tidak bisa menghapus akun admin lainnya
                        foreach ($records as $record) {
                            if (Auth::id() === $record->id && Auth::user()->is_admin) {
                                return false; // Jika ada admin, sembunyikan tombol hapus
                            }
                        }
                        return true; // Tampilkan tombol hapus jika tidak ada admin
                    }),
                ]),
            ]);
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    public static function getApiTransformer()
    {
        return UserTransformer::class;
    }
}
