<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Usuários';
    protected static ?string $modelLabel = 'Usuário';
    protected static ?string $pluralModelLabel = 'Usuários';
    protected static ?int $navigationSort = 99;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->label('Nome')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('email')
                ->label('E-mail')
                ->email()
                ->required()
                ->unique(ignoreRecord: true)
                ->maxLength(255),

            Forms\Components\TextInput::make('password')
                ->label('Senha')
                ->password()
                ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                ->dehydrated(fn ($state) => filled($state))
                ->required(fn (string $operation): bool => $operation === 'create')
                ->minLength(8)
                ->maxLength(255)
                ->hint(fn (string $operation) => $operation === 'edit' ? 'Deixe em branco para manter a senha atual.' : null),

            Forms\Components\TextInput::make('password_confirmation')
                ->label('Confirmar Senha')
                ->password()
                ->same('password')
                ->required(fn (string $operation): bool => $operation === 'create')
                ->maxLength(255)
                ->dehydrated(false),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')
                ->label('Nome')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('email')
                ->label('E-mail')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('created_at')
                ->label('Criado em')
                ->dateTime('d/m/Y H:i')
                ->sortable(),
        ])
        ->defaultSort('created_at', 'desc')
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

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit'   => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
