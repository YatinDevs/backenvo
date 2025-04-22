<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Filament\Resources\ClientResource\RelationManagers;
use App\Models\Client;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClientResource extends Resource
{   
    protected static ?string $navigationGroup = 'Project Page';
    protected static ?string $model = Client::class;
   // Client Section
protected static ?string $navigationIcon = 'heroicon-o-user-group'; // Better for clients than building
protected static ?int $navigationSort = 1;
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('name')->required(),
            Forms\Components\TextInput::make('client')->required(),
            Forms\Components\TextInput::make('capacity')->required(),
            Forms\Components\Textarea::make('description')->required(),
            Forms\Components\FileUpload::make('image')
                       ->label('Client Image')
                       ->image()
                       ->directory('client') // Saves to: public/uploads/gallery/
                       ->required()
                       ->visibility('public')
                       ->preserveFilenames()
                       ->imageEditor()
                       ->imageResizeMode('cover')
                       ->imageCropAspectRatio('16:9')
                       ->disk('public_uploads'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                 ->label('Image')
                 ->disk('public_uploads') // Match the upload disk
                 ->url(fn ($record) => asset('uploads/' . $record->image)),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('client'),
                Tables\Columns\TextColumn::make('capacity'),
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
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }
}
