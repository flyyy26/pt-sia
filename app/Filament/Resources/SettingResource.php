<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationLabel = 'Settings';
    protected static ?string $pluralModelLabel = 'Settings';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->label('Email'),
                
                TextInput::make('phone_number')
                    ->tel()
                    ->required()
                    ->label('Phone Number'),

                TextInput::make('whatsapp')
                    ->tel()
                    ->required()
                    ->label('Whatsapp Number'),

                TextInput::make('youtube')
                    ->url()
                    ->label('YouTube'),

                TextInput::make('instagram')
                    ->url()
                    ->label('Instagram'),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('email')->sortable()->searchable(),
                TextColumn::make('phone_number')->sortable()->searchable(),
                TextColumn::make('youtube')->sortable()->limit(30),
                TextColumn::make('instagram')->sortable()->limit(30),
                TextColumn::make('whatsapp')->sortable()->limit(30),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}

