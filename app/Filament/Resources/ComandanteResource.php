<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ComandanteResource\Pages;
use App\Models\Comandante;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ComandanteResource extends Resource
{
    protected static ?string $model = Comandante::class;
    protected static ?string $navigationIcon = 'heroicon-o-star';
    protected static ?string $navigationLabel = 'Galeria de Comandantes';
    protected static ?string $modelLabel = 'Comandante';
    protected static ?string $pluralModelLabel = 'Comandantes';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nome')
                ->label('Nome')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('graduacao')
                ->label('Graduação/Posto')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('periodo')
                ->label('Período de Comando')
                ->required()
                ->placeholder('Ex: 28 de Julho de 2020 a 26 de Maio de 2021')
                ->maxLength(255),
            Forms\Components\FileUpload::make('foto')
                ->label('Foto')
                ->image()
                ->directory('comandantes')
                ->imageEditor()
                ->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('foto')
                ->label('Foto')
                ->circular(),
            Tables\Columns\TextColumn::make('nome')
                ->label('Nome')
                ->searchable(),
            Tables\Columns\TextColumn::make('graduacao')
                ->label('Graduação')
                ->searchable(),
            Tables\Columns\TextColumn::make('periodo')
                ->label('Período')
                ->searchable(),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Criado em')
                ->dateTime('d/m/Y')
                ->sortable(),
        ])
        ->defaultSort('created_at', 'asc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListComandantes::route('/'),
            'create' => Pages\CreateComandante::route('/create'),
            'edit' => Pages\EditComandante::route('/{record}/edit'),
        ];
    }
}