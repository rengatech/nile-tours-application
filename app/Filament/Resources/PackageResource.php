<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PackageResource\RelationManagers\DestinationsRelationManager;
use App\Filament\Resources\PackageResource\Pages;
use App\Models\Package;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Actions\AttachAction;

class PackageResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form->columns(1)
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->helperText('Eg: 3D 4N Ooty Package')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('short_description')
                    ->helperText('Eg: 3D 4N Ooty Package')
                    ->required()
                    ->maxLength(255),


                Forms\Components\TextInput::make('seo_title')
                    ->helperText('Eg: 3D 4N Ooty Package')
                    ->required()
                    ->maxLength(255),



                Forms\Components\TextInput::make('url_slug')
                    ->helperText('Eg: 3d-4n-ooty-package')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('seo_meta_description')
                    ->helperText('Eg: 3D 4N Ooty Package')
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
                // Tables\Columns\TextColumn::make('destinations.name'),

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
            DestinationsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPackages::route('/'),
            'create' => Pages\CreatePackage::route('/create'),
            'edit' => Pages\EditPackage::route('/{record}/edit'),
        ];
    }
}
