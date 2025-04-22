<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceHeroSectionResource\Pages;
use App\Filament\Resources\ServiceHeroSectionResource\RelationManagers;
use App\Models\ServiceHeroSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceHeroSectionResource extends Resource
{  
    protected static ?string $navigationGroup = 'Services Page';
    protected static ?string $model = ServiceHeroSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\FileUpload::make('image_url')
                    ->image()
                    ->directory('service_hero')
                    ->preserveFilenames()
                    ->required(),
                Forms\Components\Textarea::make('description')->required(),
                Forms\Components\FileUpload::make('brochure_url')
                    ->directory('brochures')
                    ->preserveFilenames()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\ImageColumn::make('image_url')->label('Image')->disk('public'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description')->limit(50),
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
            'index' => Pages\ListServiceHeroSections::route('/'),
            'create' => Pages\CreateServiceHeroSection::route('/create'),
            'edit' => Pages\EditServiceHeroSection::route('/{record}/edit'),
        ];
    }
}
