<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppDownloadResource\Pages;
use App\Filament\Resources\AppDownloadResource\RelationManagers;
use App\Models\AppDownload;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AppDownloadResource extends Resource
{
    protected static ?string $model = AppDownload::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        // Read-only view mainly
        return $form
            ->schema([
                Forms\Components\TextInput::make('ip_address')
                    ->readOnly(),
                Forms\Components\TextInput::make('user_agent')
                    ->readOnly(),
                Forms\Components\DateTimePicker::make('created_at')
                    ->readOnly(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ip_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user_agent')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAppDownloads::route('/'),
        ];
    }
}
