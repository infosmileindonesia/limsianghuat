<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Filament\Resources\BannerResource\RelationManagers;
use App\Models\Banner;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Title')
                    ->columnSpanFull()
                    ->schema([
                            Forms\Components\Textarea::make('title.en')
                                ->label('English')
                                ->required()
                                ->maxLength(255)
                                ->default('Welcome to Our Site'),
                            Forms\Components\Textarea::make('title.zh_TW')
                                ->label('Traditional Chinese')
                                ->required()
                                ->maxLength(255)
                                ->default('歡迎來到我們的網站'),
                        ]),

                Fieldset::make('Button Text')
                    ->columnSpanFull()
                    ->schema([
                        Forms\Components\TextInput::make('button_text.en')
                            ->label('English')
                            ->maxLength(255)
                            ->default('Learn More'),
                        Forms\Components\TextInput::make('button_text.zh_TW')
                            ->label('Traditional Chinese')
                            ->maxLength(255)
                            ->default('了解更多'),
                    ]),

                Forms\Components\TextInput::make('url')
                    ->maxLength(225)
                    ->default('#'),
                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->disk('public')
                    ->directory('banners')
                    ->preserveFilenames()
                    ->maxSize(2048) // 2MB
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->formatStateUsing(fn ($record) => nl2br($record->title) ?? 'No Title')
                    ->html(),
                Tables\Columns\TextColumn::make('button_text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }
}
