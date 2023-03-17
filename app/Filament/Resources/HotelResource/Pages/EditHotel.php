<?php

namespace App\Filament\Resources\HotelResource\Pages;

use App\Filament\Resources\HotelResource;
use Filament\Pages\Actions;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditHotel extends EditRecord
{
    protected static string $resource = HotelResource::class;

    protected function getActions(): array
    {
        return [
            Action::make('save changes')->action(fn () => $this->save()),
            Actions\DeleteAction::make(),
        ];
    }
}
