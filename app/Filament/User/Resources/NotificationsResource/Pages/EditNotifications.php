<?php

namespace App\Filament\User\Resources\NotificationsResource\Pages;

use App\Filament\User\Resources\NotificationsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNotifications extends EditRecord
{
    protected static string $resource = NotificationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
