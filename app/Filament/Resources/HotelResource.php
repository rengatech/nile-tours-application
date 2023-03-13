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
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('short_description')
                    ->required()
                    ->maxLength(255),


                Forms\Components\TextInput::make('seo_title')
                ->required()
                ->maxLength(255),



                Forms\Components\TextInput::make('url_slug')
                ->required()
                ->maxLength(255),

                Forms\Components\TextInput::make('seo_meta_description')
                ->required()
                ->maxLength(255),

                RichEditor::make('description')
                ->toolbarButtons([
                    'blockquote',
                    'bold',
                    'bulletList',
                    'h2',
                    'h3',
                    'italic',
                    'orderedList',
                    'strike',
                ]),

                FileUpload::make('thumbnail_image')->image()
                    ->required()->preserveFilenames()
                    ->visibility('public'),


                FileUpload::make('images')->image()
                    ->multiple()
                    ->required()->preserveFilenames()
                    ->visibility('public'),

                Forms\Components\TextInput::make('youtube_embed_video_url')
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
