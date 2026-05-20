<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OcorrenciaDestaqueResource\Pages;
use App\Models\OcorrenciaDestaque;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class OcorrenciaDestaqueResource extends Resource
{
    protected static ?string $model = OcorrenciaDestaque::class;
    protected static ?string $navigationIcon = 'heroicon-o-star';
    protected static ?string $navigationLabel = 'Ocorrência de Destaque';
    protected static ?string $modelLabel = 'Ocorrência de Destaque';
    protected static ?string $pluralModelLabel = 'Ocorrências de Destaque';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Informações da Ocorrência')->schema([
                Forms\Components\TextInput::make('titulo')
                    ->label('Título')
                    ->required(),
                Forms\Components\Select::make('mes')
                    ->label('Mês')
                    ->options([
                        'Janeiro' => 'Janeiro',
                        'Fevereiro' => 'Fevereiro',
                        'Março' => 'Março',
                        'Abril' => 'Abril',
                        'Maio' => 'Maio',
                        'Junho' => 'Junho',
                        'Julho' => 'Julho',
                        'Agosto' => 'Agosto',
                        'Setembro' => 'Setembro',
                        'Outubro' => 'Outubro',
                        'Novembro' => 'Novembro',
                        'Dezembro' => 'Dezembro',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('ano')
                    ->label('Ano')
                    ->numeric()
                    ->required(),
                Forms\Components\Textarea::make('texto')
                    ->label('Descrição da Ocorrência')
                    ->rows(6)
                    ->required(),
                Forms\Components\FileUpload::make('foto')
                    ->label('Foto da Ocorrência')
                    ->image()
                    ->directory('ocorrencias')
                    ->visibility('public'),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('titulo')->label('Título')->searchable(),
            Tables\Columns\TextColumn::make('mes')->label('Mês'),
            Tables\Columns\TextColumn::make('ano')->label('Ano'),
            Tables\Columns\ImageColumn::make('foto')->label('Foto'),
            Tables\Columns\TextColumn::make('created_at')->label('Criado em')->dateTime('d/m/Y'),
        ])->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOcorrenciaDestaques::route('/'),
            'create' => Pages\CreateOcorrenciaDestaque::route('/create'),
            'edit' => Pages\EditOcorrenciaDestaque::route('/{record}/edit'),
        ];
    }
}