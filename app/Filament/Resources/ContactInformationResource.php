<?php

namespace App\Filament\Resources;

use App\Models\ContactInformation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use App\Filament\Resources\ContactInformationResource\Pages;

class ContactInformationResource extends Resource
{
    protected static ?string $model = ContactInformation::class;
    protected static ?string $navigationGroup = 'ContactUs Page';
    protected static ?string $navigationIcon = 'heroicon-o-phone';
    protected static ?string $navigationLabel = 'Contact Information';
    protected static ?string $modelLabel = 'Contact Information';
    
    // Set sort order (lower numbers appear first)
    protected static ?int $navigationSort = 1; // This will be first in the group

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Contact Information')
                    ->schema([
                        Forms\Components\TextInput::make('tel_number')
                            ->label('Telephone Number')
                            ->tel()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('mobile_number')
                            ->label('Mobile Number')
                            ->tel()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('whatsapp_number')
                            ->label('WhatsApp Number')
                            ->tel()
                            ->maxLength(255),
                    ])->columns(2),
                
                Forms\Components\Section::make('Corporate Office Address')
                    ->schema([
                        Forms\Components\TextInput::make('corporate_address_line1')
                            ->label('Address Line 1'),
                        Forms\Components\TextInput::make('corporate_address_line2')
                            ->label('Address Line 2'),
                        Forms\Components\TextInput::make('corporate_address_line3')
                            ->label('Address Line 3'),
                        Forms\Components\TextInput::make('corporate_address_line4')
                            ->label('Address Line 4'),
                        Forms\Components\TextInput::make('corporate_address_line5')
                            ->label('Address Line 5'),
                    ]),
                
                Forms\Components\Section::make('Factory Address')
                    ->schema([
                        Forms\Components\TextInput::make('factory_address_line1')
                            ->label('Address Line 1'),
                        Forms\Components\TextInput::make('factory_address_line2')
                            ->label('Address Line 2'),
                        Forms\Components\TextInput::make('factory_address_line3')
                            ->label('Address Line 3'),
                        Forms\Components\TextInput::make('factory_address_line4')
                            ->label('Address Line 4'),
                        Forms\Components\TextInput::make('factory_address_line5')
                            ->label('Address Line 5'),
                    ]),
                
                Forms\Components\Section::make('Outlet Address')
                    ->schema([
                        Forms\Components\TextInput::make('outlet_address_line1')
                            ->label('Address Line 1'),
                        Forms\Components\TextInput::make('outlet_address_line2')
                            ->label('Address Line 2'),
                        Forms\Components\TextInput::make('outlet_address_line3')
                            ->label('Address Line 3'),
                        Forms\Components\TextInput::make('outlet_address_line4')
                            ->label('Address Line 4'),
                        Forms\Components\TextInput::make('outlet_address_line5')
                            ->label('Address Line 5'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tel_number')
                    ->label('Telephone'),
                Tables\Columns\TextColumn::make('mobile_number')
                    ->label('Mobile'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            // ->actions([
            //     Tables\Actions\EditAction::make(),
            // ])
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
            'index' => Pages\ListContactInformation::route('/'),
            'create' => Pages\CreateContactInformation::route('/create'),
            'edit' => Pages\EditContactInformation::route('/{record}/edit'),
        ];
    }
}