<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Project Page';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Image Name')
                    ->maxLength(255)
                    ->columnSpanFull(),
                    
                Forms\Components\FileUpload::make('image')
                       ->label('Gallery Image')
                       ->image()
                       ->directory('gallery') // Saves to: public/uploads/gallery/
                       ->required()
                       ->visibility('public')
                       ->preserveFilenames()
                       ->imageEditor()
                       ->imageResizeMode('cover')
                       ->imageCropAspectRatio('16:9')
                       ->disk('public_uploads'), // Custom disk we'll configure
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               // Update your ImageColumn
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public_uploads') // Match the upload disk
                    ->url(fn ($record) => asset('uploads/' . $record->image)),
                    
                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Uploaded')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}