<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideoSectionResource\Pages;
use App\Filament\Resources\VideoSectionResource\RelationManagers;
use App\Models\VideoSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VideoSectionResource extends Resource
{   
    protected static ?string $navigationGroup = 'Home Page';
    protected static ?string $model = VideoSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-play-circle';
    protected static ?int $navigationSort = 3;
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\Textarea::make('paragraph1')->required(),
                Forms\Components\Textarea::make('paragraph2')->required(),
                Forms\Components\Textarea::make('paragraph3')->required(),
                
                Forms\Components\Radio::make('video_type')
                    ->options([
                        'youtube' => 'YouTube Video',
                        'upload' => 'Upload Video',
                    ])
                    ->reactive()
                    ->required(),
                
                Forms\Components\TextInput::make('youtube_id')
                    ->label('YouTube Video ID')
                    ->required()
                    ->visible(fn (callable $get) => $get('video_type') === 'youtube'),
                
                Forms\Components\FileUpload::make('uploaded_video_path')
                    ->label('Upload Video')
                    ->directory('video-section')
                    ->preserveFilenames()
                    ->visible(fn (callable $get) => $get('video_type') === 'upload')
                    ->acceptedFileTypes(['video/mp4', 'video/webm', 'video/ogg']),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('video_type'),
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
            'index' => Pages\ListVideoSections::route('/'),
            'create' => Pages\CreateVideoSection::route('/create'),
            'edit' => Pages\EditVideoSection::route('/{record}/edit'),
        ];
    }
}