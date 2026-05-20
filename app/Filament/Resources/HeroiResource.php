<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroiResource\Pages;
use App\Models\Heroi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HeroiResource extends Resource
{
    protected static ?string $model = Heroi::class;
    protected static ?string $navigationIcon = 'heroicon-o-shield-check';
    protected static ?string $navigationLabel = 'Galeria de Heróis';
    protected static ?string $modelLabel = 'Herói';
    protected static ?string $pluralModelLabel = 'Heróis';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nome')
                ->label('Nome')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('graduacao')
                ->label('Graduação')
                ->required()
                ->maxLength(255),
            Forms\Components\FileUpload::make('foto')
                ->label('Foto')
                ->image()
                ->directory('herois')
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
        'index' => Pages\ListHerois::route('/'),
        'create' => Pages\CreateHeroi::route('/create'),
        'edit' => Pages\EditHeroi::route('/{record}/edit'),
        ];
    }
}