<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserDetailResource\Pages;
use App\Filament\Resources\UserDetailResource\RelationManagers;
use App\Models\UserDetail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserDetailResource extends Resource
{
    protected static ?string $model = UserDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Member List';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('highest_education')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('occupation')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('edu_details')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('posting_place')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('annual_income')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('other_occupation')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('height')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('wight')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('complexion')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('blood_group')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('body_type')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('any_disability')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('religion')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('caste')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('sub_caste')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('gotra')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('family_values')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('family_status')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('sun_sign')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('moon_sign')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('birth_city')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('time_of_birth')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('family_residence')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('father')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('mother')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('brother')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('sister')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('partner_exp_general_requirement')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('partner_exp_height')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('partner_exp_marital_status')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('partner_exp_country_of_residence')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('partner_exp_caste')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('partner_exp_education')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('partner_exp_drinking_habits')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('partner_exp_diet')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('partner_exp_manglik')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('partner_exp_family_values')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('partner_exp_prefered_countries')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('partner_exp_prefered_cities')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('highest_education')
                    ->searchable(),
                Tables\Columns\TextColumn::make('occupation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('edu_details')
                    ->searchable(),
                Tables\Columns\TextColumn::make('posting_place')
                    ->searchable(),
                Tables\Columns\TextColumn::make('annual_income')
                    ->searchable(),
                Tables\Columns\TextColumn::make('other_occupation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('height')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wight')
                    ->searchable(),
                Tables\Columns\TextColumn::make('complexion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('blood_group')
                    ->searchable(),
                Tables\Columns\TextColumn::make('body_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('any_disability')
                    ->searchable(),
                Tables\Columns\TextColumn::make('religion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('caste')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sub_caste')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gotra')
                    ->searchable(),
                Tables\Columns\TextColumn::make('family_values')
                    ->searchable(),
                Tables\Columns\TextColumn::make('family_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sun_sign')
                    ->searchable(),
                Tables\Columns\TextColumn::make('moon_sign')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birth_city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('time_of_birth')
                    ->searchable(),
                Tables\Columns\TextColumn::make('family_residence')
                    ->searchable(),
                Tables\Columns\TextColumn::make('father')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mother')
                    ->searchable(),
                Tables\Columns\TextColumn::make('brother')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sister')
                    ->searchable(),
                Tables\Columns\TextColumn::make('partner_exp_general_requirement')
                    ->searchable(),
                Tables\Columns\TextColumn::make('partner_exp_height')
                    ->searchable(),
                Tables\Columns\TextColumn::make('partner_exp_marital_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('partner_exp_country_of_residence')
                    ->searchable(),
                Tables\Columns\TextColumn::make('partner_exp_caste')
                    ->searchable(),
                Tables\Columns\TextColumn::make('partner_exp_education')
                    ->searchable(),
                Tables\Columns\TextColumn::make('partner_exp_drinking_habits')
                    ->searchable(),
                Tables\Columns\TextColumn::make('partner_exp_diet')
                    ->searchable(),
                Tables\Columns\TextColumn::make('partner_exp_manglik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('partner_exp_family_values')
                    ->searchable(),
                Tables\Columns\TextColumn::make('partner_exp_prefered_countries')
                    ->searchable(),
                Tables\Columns\TextColumn::make('partner_exp_prefered_cities')
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
            'index' => Pages\ListUserDetails::route('/'),
            'create' => Pages\CreateUserDetail::route('/create'),
            'view' => Pages\ViewUserDetail::route('/{record}'),
            'edit' => Pages\EditUserDetail::route('/{record}/edit'),
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
