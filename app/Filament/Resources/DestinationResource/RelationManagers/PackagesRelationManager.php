<?php

namespace App\Filament\Resources\DestinationResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class PackagesRelationManager extends RelationManager
{
    protected static string $relationship = 'packages';

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('name')
                ->helperText('Eg: 3D 4N Ooty Destination')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('short_description')
                ->helperText('Eg: 3D 4N Ooty Destination')
                ->required()
                ->maxLength(255),


            Forms\Components\TextInput::make('seo_title')
                ->helperText('Eg: 3D 4N Ooty Destination')
                ->required()
                ->maxLength(255),



            Forms\Components\TextInput::make('url_slug')
                ->helperText('Eg: 3d-4n-ooty-Destination')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('seo_meta_description')
                ->helperText('Eg: 3D 4N Ooty Destination')
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
                Tables\Columns\TextColumn::make('name'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
                Tables\Actions\AttachAction::make()->preloadRecordSelect(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DetachAction::make(),

            ])
            ->bulkActions([

            ]);
    }
}
