<?php

namespace App\Filament\Resources\UserDetailResource\Pages;

use App\Filament\Resources\UserDetailResource;
use App\Models\User;
use Filament\Facades\Filament;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Resources\Pages\Page;
use Filament\Forms\Form;

use App\Models\UserDetail;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Tabs;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Request;

class ViewMember extends Page implements HasForms
{

    use InteractsWithForms;

    public ?array $data = [];

    public static ?string $navigationIcon = 'heroicon-o-dcoument-text';

    protected static string $resource = UserDetailResource::class;

    protected static string $view = 'filament.resources.user-detail-resource.pages.view-member';



    public User $user;

    public function mount(): void
    {

        $this->user = Filament::getCurrentPanel()->auth()->user();
        // $this->form->fill();
    }


    public function form(Form $form): Form
    {

        return $form->schema([

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
}
