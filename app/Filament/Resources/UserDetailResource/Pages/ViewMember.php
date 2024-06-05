<?php

namespace App\Filament\Resources\UserDetailResource\Pages;

use App\Filament\Resources\UserDetailResource;
use Filament\Resources\Pages\Page;

class ViewMember extends Page
{
    protected static string $resource = UserDetailResource::class;

    protected static string $view = 'filament.resources.user-detail-resource.pages.view-member';
}
