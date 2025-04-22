<?php
namespace App\Filament\Resources;

use Filament\Tables\Columns\TextColumn; // Correct import
use App\Filament\Resources\AboutUsResource\Pages;
use App\Models\AboutUs;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AboutUsResource extends Resource
{
    protected static ?string $navigationGroup = 'AboutUs Page';
    protected static ?string $model = AboutUs::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('company_name')->required(),
                Textarea::make('description')->autosize()->required(),
                Repeater::make('expertise')
                    ->schema([
                        TextInput::make('title')->required(),
                        Textarea::make('description')->autosize()->required(),
                    ])
                    ->collapsed(),
                Repeater::make('icons')
                    ->schema([
                        TextInput::make('icon')->required(),
                        TextInput::make('text')->required(),
                    ])
                    ->collapsed(),
                FileUpload::make('slider_images')->multiple(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('company_name')->sortable(),
                TextColumn::make('description')->limit(100),
            ])
            ->filters([])
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutUs::route('/'),
            'create' => Pages\CreateAboutUs::route('/create'),
            'edit' => Pages\EditAboutUs::route('/{record}/edit'),
        ];
    }
}