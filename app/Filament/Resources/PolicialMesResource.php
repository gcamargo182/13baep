<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PolicialMesResource\Pages;
use App\Models\PolicialMes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PolicialMesResource extends Resource
{
    protected static ?string $model = PolicialMes::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationLabel = 'Policial do Mês';
    protected static ?string $modelLabel = 'Policial do Mês';
    protected static ?string $pluralModelLabel = 'Policiais do Mês';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Informações do Policial')->schema([
                Forms\Components\TextInput::make('nome')
                    ->label('Nome Completo')
                    ->required(),
                Forms\Components\TextInput::make('graduacao')
                    ->label('Graduação')
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
                    ->label('Texto de Indicação')
                    ->rows(6)
                    ->required(),
                Forms\Components\TextInput::make('assinatura')
                    ->label('Nome do Assinante'),
                Forms\Components\TextInput::make('cargo_assinatura')
                    ->label('Cargo do Assinante'),
                Forms\Components\FileUpload::make('foto')
                    ->label('Foto do Policial')
                    ->image()
                    ->directory('policialmes')
                    ->visibility('public'),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('nome')->label('Nome')->searchable(),
            Tables\Columns\TextColumn::make('graduacao')->label('Graduação'),
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
            'index' => Pages\ListPolicialMes::route('/'),
            'create' => Pages\CreatePolicialMes::route('/create'),
            'edit' => Pages\EditPolicialMes::route('/{record}/edit'),
        ];
    }
}