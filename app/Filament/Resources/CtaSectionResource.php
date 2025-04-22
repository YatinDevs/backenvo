<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CtaSectionResource\Pages;
use App\Filament\Resources\CtaSectionResource\RelationManagers;
use App\Models\CtaSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class CtaSectionResource extends Resource
{  
    protected static ?string $navigationGroup = 'Home Page';

    protected static ?string $model = CtaSection::class;
 // CTA Section
    protected static ?string $navigationIcon = 'heroicon-o-megaphone'; // Represents calls to action
    protected static ?int $navigationSort = 7;
    
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('title')->required(),
            TextInput::make('subtitle')->required(),
            TextInput::make('phone_number')->required(),
            TextInput::make('phone_hours')->required(),
            FileUpload::make('image_url')
                ->label('Support Image')
                       ->image()
                       ->directory('cta-directory') // Saves to: public/uploads/gallery/
                       ->required()
                       ->visibility('public')
                       ->preserveFilenames()
                       ->imageEditor()
                       ->imageCropAspectRatio('16:9')
                       ->disk('public_uploads'),
            TextInput::make('call_button_text'),
            TextInput::make('contact_button_text'),
            TextInput::make('contact_button_link'),
            TextInput::make('background_color'),
            TextInput::make('text_color'),
            TextInput::make('hover_color'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('phone_number'),
                Tables\Columns\ImageColumn::make('image_url')
                    ->label('Image')
                    ->disk('public_uploads') // Match the upload disk
                    ->url(fn ($record) => asset('uploads/' . $record->image)),
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
            'index' => Pages\ListCtaSections::route('/'),
            'create' => Pages\CreateCtaSection::route('/create'),
            'edit' => Pages\EditCtaSection::route('/{record}/edit'),
        ];
    }
}
