<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Forms\Components\Select;
use App\Models\TermsCondition;
use Filament\Resources\Resource;
use Forms\Components\RichEditor;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TermsConditionResource\Pages;
use App\Filament\Resources\TermsConditionResource\RelationManagers;
use Illuminate\Support\Str;

class TermsConditionResource extends Resource
{
    protected static ?string $model = TermsCondition::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(1)
                ->schema([
                    Forms\Components\RichEditor::make('text')->required(),
                    Forms\Components\Select::make('status')->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('text')->formatStateUsing(fn ($state) => Str::limit($state, 100)) // Batasi jumlah karakter
                ->html(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('toggleStatus')
                ->label(fn ($record) => $record->status === 'active' ? 'Set Inactive' : 'Set Active')
                ->color(fn ($record) => $record->status === 'active' ? 'danger' : 'success')
                ->action(fn ($record) => $record->update(['status' => $record->status === 'active' ? 'inactive' : 'active']))
                ->requiresConfirmation()
                ->icon(fn ($record) => $record->status === 'active' ? 'heroicon-o-x-circle' : 'heroicon-o-check-circle'),
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
            'index' => Pages\ListTermsConditions::route('/'),
            'create' => Pages\CreateTermsCondition::route('/create'),
            'edit' => Pages\EditTermsCondition::route('/{record}/edit'),
        ];
    }
}
