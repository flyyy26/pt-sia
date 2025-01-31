<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Banner;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Tables\Columns\TextColumn;
use Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Tables\Columns\ImageColumn;
use Filament\Resources\Resource;
use Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BannerResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BannerResource\RelationManagers;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            // Radio button to select the creation method
            Radio::make('creation_method')
                ->options([
                    'form' => 'Form',  // Option 1: Using Form
                    'coding' => 'Text Coding',// Option 2: Using Text Coding
                ])
                ->required()
                ->default('form')
                ->reactive() 
                ->label('Choose the Banner Creation Method'),
    
            // Grid for uploading image and form fields
            Forms\Components\Grid::make(1)
                ->schema([
                    Forms\Components\FileUpload::make('image')
                        ->image()
                        ->required()
                        ->label('Banner Image')
                        ->hidden(fn (callable $get) => $get('creation_method') !== 'form'),
                ]),
    
            // Conditionally show these fields if "Form" is selected
            Forms\Components\Grid::make(2)
                ->schema([
                    Forms\Components\TextInput::make('title')->required()->label('Title')->default('Default Title'),
                    Forms\Components\TextInput::make('link')->label('Link')->default('Default Link'),
                ])
                ->hidden(fn (callable $get) => $get('creation_method') !== 'form'),
    
            // Conditionally show this textarea for "Text Coding" option
            Forms\Components\Grid::make(1)
                ->schema([
                    Forms\Components\Textarea::make('custom_html')
                        ->label('Custom HTML for Banner')
                        ->required()
                        ->rows(20)
                        ->helperText('Enter the banner HTML code directly')
                        ->hidden(fn (callable $get) => $get('creation_method') !== 'coding'),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                ->disk('public') // Pastikan disk penyimpanan benar
                ->width(100) // Sesuaikan ukuran gambar
                ->height(100), 
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('link')->limit(20)->searchable()->sortable(),
                Tables\Columns\TextColumn::make('creation_method')->sortable(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }
}
