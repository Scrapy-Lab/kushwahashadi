<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Member List';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Fieldset::make('Basic Details')
                    ->schema([


                        Tabs::make('Tabs')
                            ->tabs([
                                Tabs\Tab::make('Basic Details')
                                    ->icon('heroicon-m-bell')
                                    ->schema([
                                        Forms\Components\TextInput::make('name')
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\TextInput::make('last_name')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('email')
                                            ->email()
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\Select::make('gender')
                                            ->options([
                                                'male' => 'Male',
                                                'female' => 'Female',
                                            ]),
                                        Forms\Components\DatePicker::make('dob'),
                                        Forms\Components\TextInput::make('martial_status')
                                            ->maxLength(255)
                                            ->default(null),
                                    ])->columns(3),
                                Tabs\Tab::make('Contact Details')
                                    ->schema([
                                        Forms\Components\TextInput::make('phone')
                                            ->tel()
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('wp_no')
                                            ->maxLength(255)
                                            ->default(null),


                                    ])->columns(3),
                                Tabs\Tab::make('Address')
                                    ->schema([

                                        Forms\Components\TextInput::make('address')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('country')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('state')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('city')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('area')
                                            ->maxLength(255)
                                            ->default(null),
                                    ]),
                            ]),



                    ])->columns(2),


                Forms\Components\TextInput::make('no_of_children')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('on_behalf')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('on_behalf_name')
                    ->maxLength(255)
                    ->default(''),


                Forms\Components\TextInput::make('degree')
                    ->maxLength(255)
                    ->default(null),

                // Forms\Components\TextInput::make('is_admin')
                //     ->required()
                //     ->maxLength(255)
                //     ->default(0),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dob')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('martial_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_of_children')
                    ->searchable(),
                Tables\Columns\TextColumn::make('area')
                    ->searchable(),
                Tables\Columns\TextColumn::make('on_behalf')
                    ->searchable(),
                Tables\Columns\TextColumn::make('on_behalf_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wp_no')
                    ->searchable(),
                Tables\Columns\TextColumn::make('degree')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('country')
                    ->searchable(),
                Tables\Columns\TextColumn::make('state')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('is_admin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable(),
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
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
