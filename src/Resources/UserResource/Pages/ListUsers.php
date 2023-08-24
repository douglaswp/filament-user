<?php

namespace io3x1\FilamentUser\Resources\UserResource\Pages;

use io3x1\FilamentUser\Resources\UserResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\CreateAction;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    public function getTitle(): string
    {
        return trans('filament-user::user.resource.title.list');
    }

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
