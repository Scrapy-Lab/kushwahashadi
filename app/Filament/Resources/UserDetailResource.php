<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserDetailResource\Pages;
use App\Filament\Resources\UserDetailResource\RelationManagers;
use App\Models\User;
use App\Models\UserDetail;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Request;

class UserDetailResource extends Resource
{
    protected static ?string $model = UserDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Member List';
    protected static ?string $modelLabel = 'Member List';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Fieldset::make('Basic Information')
                    ->schema([

                        Forms\Components\Select::make('user_id')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship(name: 'user', titleAttribute: 'name')->disabledOn('edit'),
                        Tabs::make('Tabs')
                            ->tabs([
                                Tabs\Tab::make('Basic Details')
                                    ->icon('heroicon-m-bell')
                                    ->schema([
                                        // Forms\Components\TextInput::make('name')
                                        //  ->relationship(name: 'user', titleAttribute: 'name')->disabledOn('edit')
                                        //     ->required(),
                                        // Forms\Components\TextInput::make('user.last_name')
                                        //     ->required(),
                                        // Forms\Components\Select::make('last_name')
                                        //     ->required()
                                        //     ->searchable()
                                        //     ->preload()
                                        //     ->relationship(name: 'user', titleAttribute: 'last_name')->disabledOn('edit'),

                                        Forms\Components\Select::make('gender')
                                            ->options([
                                                '1' => 'Male',
                                                '2' => 'Female',
                                            ]),
                                        Forms\Components\DatePicker::make('dob'),
                                        Forms\Components\TextInput::make('marital_status')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('no_of_children')
                                            ->default(null)
                                            ->numeric(),
                                        Forms\Components\TextInput::make('phone')
                                            ->tel()
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('wp_no')
                                            ->maxLength(255)
                                            ->default(null),
                                    ])->columns(3),
                                Tabs\Tab::make('Contact Details')
                                    ->schema([
                                        Forms\Components\TextInput::make('area')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('on_behalf')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('on_behalf_name')
                                            ->maxLength(255)
                                            ->default(''),
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
                                    ])->columns(3),
                            ]),



                    ])->columns(1),

                Fieldset::make('Self Details')
                    ->schema([
                        Tabs::make('Tabs')
                            ->tabs([
                                Tabs\Tab::make('Education And Career')
                                    ->icon('heroicon-m-bell')
                                    ->schema([
                                        Forms\Components\TextInput::make('degree')
                                            ->maxLength(255)
                                            ->default(null),

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
                                    ])->columns(3),
                                Tabs\Tab::make('Physical Attributes')
                                    ->icon('heroicon-m-bell')
                                    ->schema([
                                        Forms\Components\TextInput::make('height')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('weight')
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
                                    ])->columns(3),
                            ]),
                        Tabs::make('Tabs')
                            ->tabs([

                                Tabs\Tab::make('Spiritual And Social Background')
                                    ->schema([
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
                                    ])->columns(2),
                                Tabs\Tab::make('Astronomic Information')
                                    ->schema([
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

                                    ])->columns(2),
                            ]),
                    ]),



                Fieldset::make('Family Information')
                    ->schema([
                        Tabs::make('Tabs')
                            ->tabs([

                                Tabs\Tab::make('Spiritual And Social Background')
                                    ->schema([
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
                                            Forms\Components\TextInput::make('native_place')
                                                ->maxLength(255)
                                                ->default(null),
                                            Forms\Components\TextInput::make('father_occupation')
                                                ->maxLength(255)
                                                ->default(null),
                                            Forms\Components\TextInput::make('mother_occupation')
                                                ->maxLength(255)
                                                ->default(null),
                                            Forms\Components\TextInput::make('sister_occupation')
                                                ->maxLength(255)
                                                ->default(null),
                                            Forms\Components\TextInput::make('brother_occupation')
                                                ->maxLength(255)
                                                ->default(null),
                                            ])->columns(2),

                            ]),
                    ])->columns(1),

                Fieldset::make('Partner Expectation')
                    ->schema([
                        Tabs::make('Tabs')
                            ->tabs([

                                Tabs\Tab::make('Partner Expectation')
                                    ->schema([
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

                                            Forms\Components\TextInput::make('partner_exp_age')
                                            ->maxLength(255)
                                            ->default(null),
                                            Forms\Components\TextInput::make('partner_exp_weight')
                                            ->maxLength(255)
                                            ->default(null),
                                            Forms\Components\TextInput::make('partner_exp_with_child')
                                            ->maxLength(255)
                                            ->default(null),
                                            Forms\Components\TextInput::make('partner_exp_religion')
                                            ->maxLength(255)
                                            ->default(null),
                                            Forms\Components\TextInput::make('partner_exp_sub_caste')
                                            ->maxLength(255)
                                            ->default(null),
                                            Forms\Components\TextInput::make('partner_exp_profession')
                                            ->maxLength(255)
                                            ->default(null),
                                            Forms\Components\TextInput::make('partner_exp_smoking')
                                            ->maxLength(255)
                                            ->default(null),
                                            Forms\Components\TextInput::make('partner_exp_bodyType')
                                            ->maxLength(255)
                                            ->default(null),
                                            Forms\Components\TextInput::make('partner_exp_disability')
                                            ->maxLength(255)
                                            ->default(null),
                                            Forms\Components\TextInput::make('partner_exp_family_stat')
                                            ->maxLength(255)
                                            ->default(null),
                                            Forms\Components\TextInput::make('partner_exp_prefered_state')
                                            ->maxLength(255)
                                            ->default(null),
                                    ])->columns(4),

                            ]),
                    ])->columns(1),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('user_image')
                ->circular()
                ->defaultImageUrl(url('/storage/profile_img/default_img.png'))
                ->getStateUsing(function (UserDetail $record): string {
                    // http://127.0.0.1:8000/admin/join-nows
                    // dd(Request::getScheme()."://".Request::getHttpHost()."/storage/joinNowImages/".$record->aadhar_front);
                    return Request::getScheme()."://".Request::getHttpHost()."/storage/profile_img/".(($record->user_image) ?? "default_img.png");
                })
                ,
                Tables\Columns\TextColumn::make('user.name')
                    ->sortable()
                    ->label('First Name'),
                Tables\Columns\TextColumn::make('member_id')
                    ->sortable()
                    ->formatStateUsing(fn (string $state): string => __(strtoupper($state))),
                Tables\Columns\TextColumn::make('gender')
                ->formatStateUsing(function (string $state): HtmlString {
                    return new HtmlString($state === '1' ? 'Male' : ($state === '2' ? 'Female' : 'Unknown'));
                }),
                Tables\Columns\TextColumn::make('dob')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('on_behalf')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('on_behalf_name')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('marital_status')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('no_of_children'),
                // Tables\Columns\TextColumn::make('area')
                //     ->searchable(),

                Tables\Columns\TextColumn::make('wp_no')
                    ->searchable(),
                Tables\Columns\TextColumn::make('degree')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('address')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('country')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('state')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('highest_education')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('occupation')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('edu_details')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('posting_place')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('annual_income')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('other_occupation')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('height')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('weight')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('complexion')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('blood_group')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('body_type')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('any_disability')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('religion')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('caste')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('sub_caste')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('gotra')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('family_values')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('family_status')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('sun_sign')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('moon_sign')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('birth_city')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('time_of_birth')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('family_residence')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('father')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('mother')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('brother')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('sister')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('partner_exp_general_requirement')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('partner_exp_height')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('partner_exp_marital_status')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('partner_exp_country_of_residence')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('partner_exp_caste')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('partner_exp_education')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('partner_exp_drinking_habits')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('partner_exp_diet')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('partner_exp_manglik')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('partner_exp_family_values')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('partner_exp_prefered_countries')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('partner_exp_prefered_cities')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('deleted_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
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
                ExportBulkAction::make(),
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
            'viewMember' => Pages\ViewMember::route('/{record}/member'),
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
