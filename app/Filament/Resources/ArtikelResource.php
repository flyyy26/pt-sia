<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Artikel;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Forms\Components\Grid;
use Forms\Components\Select;
use Forms\Components\Textarea;
use Tables\Columns\TextColumn;
use Forms\Components\TextInput;
use Tables\Columns\ImageColumn;
use Filament\Resources\Resource;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ArtikelResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArtikelResource\RelationManagers;
use Filament\Forms\Components\TagsInput;
use Illuminate\Support\Str;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getPluralLabel(): ?string
    {
        return 'Articles'; // Ubah sesuai kebutuhan
    }

    public static function getNavigationLabel(): string
    {
        return 'Articles'; // Ubah label di sidebar
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(1) // 4 columns layout, adjust the number to suit your needs
                    ->schema([
                        Forms\Components\TextInput::make('title')->required(),
                        Forms\Components\FileUpload::make('image')
                            ->image()->required(),
                        Forms\Components\RichEditor::make('description')->required(),
                        Forms\Components\Select::make('kategori_id')->relationship('kategori', 'name')->required(),
                        TagsInput::make('tags')->separator(',')->placeholder('Click Enter Per Tags'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                ->disk('public') // Pastikan disk penyimpanan benar
                ->width(80) // Sesuaikan ukuran gambar
                ->height(80)
                ->square(), 
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('description')->formatStateUsing(fn ($state) => Str::limit(strip_tags($state), 50)),
                Tables\Columns\TextColumn::make('kategori.name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('author.name')->searchable()->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('kategori_id')->relationship('kategori', 'name')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }
}
