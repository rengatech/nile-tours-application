<?php

namespace App\Filament\Resources\DestinationResource\Pages;

use App\Filament\Resources\DestinationResource;
use Filament\Pages\Actions;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditDestination extends EditRecord
{
    protected static string $resource = DestinationResource::class;

    protected function getActions(): array
    {
        return [
            Action::make('save changes')->action(fn () => $this->save()),
            Actions\DeleteAction::make(),
        ];
    }
}
