<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaQsResource\Pages;
use App\Filament\Resources\FaQsResource\RelationManagers;
use App\Models\FaQs;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class FaQsResource extends Resource
{
    protected static ?string $model = FaQs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getPluralLabel(): ?string
    {
        return 'FaQs'; // Ubah sesuai kebutuhan
    }

    public static function getNavigationLabel(): string
    {
        return 'FaQs'; // Ubah label di sidebar
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('question')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('answer')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('question')->formatStateUsing(fn ($state) => Str::limit(strip_tags($state), 50))
                    ->searchable(),
                Tables\Columns\TextColumn::make('answer')->formatStateUsing(fn ($state) => Str::limit(strip_tags($state), 50))
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListFaQs::route('/'),
            'create' => Pages\CreateFaQs::route('/create'),
            'edit' => Pages\EditFaQs::route('/{record}/edit'),
        ];
    }
}
