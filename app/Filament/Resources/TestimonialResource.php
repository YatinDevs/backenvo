<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Filament\Resources\TestimonialResource\RelationManagers;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestimonialResource extends Resource
{   
    protected static ?string $navigationGroup = 'Home Page';
    
    protected static ?string $model = Testimonial::class;

    // Testimonial Section
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-oval-left-ellipsis'; // More modern testimonial icon
    protected static ?int $navigationSort = 8;

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('customer_name')
                ->required(),
            Forms\Components\FileUpload::make('image_url') // Replace with FileUpload
                ->label('Customer Image')
                ->image()
                ->directory('testimonial') // Saves to: public/uploads/gallery/
                ->required()
                ->visibility('public')
                ->preserveFilenames()
                ->imageEditor()
                       ->imageResizeMode('cover')
                       ->imageCropAspectRatio('16:9')
                       ->disk('public_uploads'),
            Forms\Components\TextInput::make('rating')
                ->numeric()
                ->required(),
            Forms\Components\Textarea::make('feedback')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\ImageColumn::make('image_url') // Display the image
                ->label('Image')
                ->disk('public_uploads') // Match the upload disk
                ->url(fn ($record) => asset('uploads/' . $record->image)), // Use the 'public' disk
                Tables\Columns\TextColumn::make('customer_name'),
                Tables\Columns\TextColumn::make('rating'),
                Tables\Columns\TextColumn::make('feedback')->limit(50),
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
