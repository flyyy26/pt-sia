<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MediaResource\Pages;
use App\Models\Media;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ActionColumn;
use Filament\Resources\Resource;
use Filament\Actions\Action;

class MediaResource extends Resource
{
    protected static ?string $model = Media::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Media Library';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([

            FileUpload::make('file_path')
                ->label('Upload Media')
                ->image()
                ->disk('public')
                ->directory('media')
                ->required(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            ImageColumn::make('file_path')
                ->label('Preview')
                ->disk('public'),

            TextColumn::make('url')
                ->label('File URL')
                ->copyable() // Menambahkan tombol copy link
                ->copyMessage('URL berhasil disalin!'),
            ])->filters([])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMedia::route('/'),
            'create' => Pages\CreateMedia::route('/create'),
            'edit' => Pages\EditMedia::route('/{record}/edit'),
        ];
    }
}
