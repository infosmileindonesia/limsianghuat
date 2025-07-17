<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DistributionResource\Pages;
use App\Filament\Resources\DistributionResource\RelationManagers;
use App\Models\Distribution;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DistributionResource extends Resource
{
    protected static ?string $model = Distribution::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Name Fieldset
                Forms\Components\Fieldset::make('Name')
                    ->columnSpanFull()
                    ->schema([
                        Forms\Components\Textarea::make('name.en')
                            ->label('English')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('name.zh_TW')
                            ->label('Traditional Chinese')
                            ->maxLength(255),
                    ]),

                // Menu Name Fieldset
                Forms\Components\Fieldset::make('Menu Name')
                    ->columnSpanFull()
                    ->schema([
                        Forms\Components\TextInput::make('menu_name.en')
                            ->label('English')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('menu_name.zh_TW')
                            ->label('Traditional Chinese')
                            ->maxLength(255),
                    ]),

                //Description Fieldset
                Forms\Components\Fieldset::make('Description')
                    ->columnSpanFull()
                    ->schema([
                        Forms\Components\Textarea::make('description.en')
                            ->label('English')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('description.zh_TW')
                            ->label('Traditional Chinese')
                            ->columnSpanFull(),
                    ]),
                // Thumbnails Uploads, Dimensions: 556x424px
                SpatieMediaLibraryFileUpload::make('thumbnails')
                    ->collection('distribution_thumbnails')
                    ->label('Thumbnails')
                    ->helperText('Upload images for the distribution. Maximum 5 images allowed, Maximum size: 2MB each. Recommended dimensions: 556x424px, Supported formats: jpg, png, webp,')
                    ->image()
                    ->multiple()
                    ->reorderable()
                    ->maxFiles(5)
                    ->columnSpanFull(),
                // Image Collection, Dimensions: 400x400px
                SpatieMediaLibraryFileUpload::make('images')
                    ->collection('distribution_images')
                    ->label('Images')
                    ->helperText('Upload images for the distribution. Maximum 5 images allowed, Maximum size: 2MB each. Recommended dimensions: 400x400px, Supported formats: jpg, png, webp,')
                    ->image()
                    ->multiple()
                    ->reorderable()
                    ->columnSpanFull(),

                // background Color
                Forms\Components\ColorPicker::make('attribute.background_color')
                    ->label('Background Color')
                    ->default('#ffffff')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('Name'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label(__('Slug'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->label(__('Description'))
                    ->limit(50)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('Created At'))
                    ->dateTime()
                    ->sortable(),
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
            'index' => Pages\ListDistributions::route('/'),
            'create' => Pages\CreateDistribution::route('/create'),
            'edit' => Pages\EditDistribution::route('/{record}/edit'),
        ];
    }
}
