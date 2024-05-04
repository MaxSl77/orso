<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DoctorResource\Pages;
use App\Filament\Resources\DoctorResource\RelationManagers;
use App\Models\Doctor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Repeater;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DoctorResource extends Resource
{
    protected static ?string $model = Doctor::class;

    protected static ?string $navigationLabel = 'Персонал';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('thumbnail')
                    ->label('Фото')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->label('ФИО')
                    ->required(),
                Forms\Components\TextInput::make('profession')
                    ->label('Специальность')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('category')
                    ->label('Категория')
                    ->required(),
                Forms\Components\TextInput::make('inst')
                    ->label('Инст')
                    ->required(),
                Repeater::make('educations')
                    ->label('Образование')
                    ->relationship()
                    ->schema([
                        Forms\Components\TextInput::make('university')
                            ->label('Образование')
                            ->required(),
                        Forms\Components\TextInput::make('year')
                            ->label('Год')
                            ->required()
                            ->numeric(),
                    ]),
                Repeater::make('courses')
                    ->relationship()
                    ->schema([
                        Forms\Components\TextInput::make('course')
                            ->label('Курс')
                            ->required(),
                        Forms\Components\TextInput::make('year')
                            ->label('Год')
                            ->required()
                            ->numeric(),
                    ]),
                Repeater::make('examples')
                    ->relationship()
                    ->schema([
                        Forms\Components\FileUpload::make('image_before')
                            ->label('Фото До')
                            ->required(),
                        Forms\Components\FileUpload::make('image_after')
                            ->label('Фото После')
                            ->required(),
                        Forms\Components\TextInput::make('title')
                            ->label('Заголовок')
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('profession')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
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
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListDoctors::route('/'),
            'create' => Pages\CreateDoctor::route('/create'),
            'edit' => Pages\EditDoctor::route('/{record}/edit'),
        ];
    }
}
