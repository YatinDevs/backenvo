<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
class ServiceResource extends Resource
{   
    protected static ?string $navigationGroup = 'Home Page';
    protected static ?string $model = Service::class;

// Service Section
protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver'; // Represents services
protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                Select::make('category')
                    ->options([
                        'engineering' => 'Engineering Division',
                        'environment' => 'Environment Division',
                    ])
                    ->required(),
                FileUpload::make('image_url')
                    ->label('Service Image')
                       ->image()
                       ->directory('service') // Saves to: public/uploads/gallery/
                       ->required()
                       ->visibility('public')
                       ->preserveFilenames()
                       ->imageEditor()
                       ->imageResizeMode('cover')
                       ->imageCropAspectRatio('16:9')
                       ->disk('public_uploads'), 
                Forms\Components\Textarea::make('description')->required(),
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
             ->columns([
                  Tables\Columns\ImageColumn::make('image_url')
                    ->disk('public_uploads') // Match the upload disk
                    ->url(fn ($record) => asset('uploads/' . $record->image))
                    ->label('Image'),
                  Tables\Columns\TextColumn::make('title'),
                  Tables\Columns\TextColumn::make('category'),
                  Tables\Columns\TextColumn::make('sort_order'),
        ])
        ->defaultSort('sort_order', 'asc')
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
