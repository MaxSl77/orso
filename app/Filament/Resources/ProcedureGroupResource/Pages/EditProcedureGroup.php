<?php

namespace App\Filament\Resources\ProcedureGroupResource\Pages;

use App\Filament\Resources\ProcedureGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProcedureGroup extends EditRecord
{
    protected static string $resource = ProcedureGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
