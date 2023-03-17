<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HotelResource\Pages;
use App\Filament\Resources\HotelResource\RelationManagers;
use App\Filament\Resources\HotelResource\Pages\ListHotels;
use App\Filament\Resources\HotelResource\Pages\CreateHotel;
use App\Filament\Resources\HotelResource\Pages\EditHotel;
use App\Models\Hotel;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class HotelResource extends Resource
{
    protected static ?string $model = Hotel::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    public static function form(Form $form): Form
    {
        return $form->columns(1)
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->helperText('Eg: 3D 4N Ooty Hotel')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('short_description')
                    ->helperText('Eg: 3D 4N Ooty Hotel')
                    ->required()
                    ->maxLength(255),


                Forms\Components\TextInput::make('seo_title')
                    ->helperText('Eg: 3D 4N Ooty Hotel')
                    ->required()
                    ->maxLength(255),



                Forms\Components\TextInput::make('url_slug')
                    ->helperText('Eg: 3d-4n-ooty-Hotel')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('seo_meta_description')
                    ->helperText('Eg: 3D 4N Ooty Hotel')
                    ->required()
                    ->maxLength(255),

                RichEditor::make('description'),

                FileUpload::make('thumbnail_image')->image()
                    ->helperText('Thumbnail and Background image')
                    ->required()->preserveFilenames()
                    ->visibility('public'),


                FileUpload::make('images')->image()
                    ->helperText('Detail page slider images')
                    ->multiple()
                    ->required()->preserveFilenames()
                    ->visibility('public'),

                Forms\Components\TextInput::make('youtube_embed_video_url')
                    ->helperText('Eg: - https://www.youtube.com/embed/qZVTkn2NjS0')
                    ->url()
                    ->maxLength(255),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail_image'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('url_slug'),
                Tables\Columns\TextColumn::make('created_at')

                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListHotels::route('/'),
            'create' => Pages\CreateHotel::route('/create'),
            'edit' => Pages\EditHotel::route('/{record}/edit'),
        ];
    }
}
