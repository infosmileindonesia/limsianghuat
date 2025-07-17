<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CareerDepartmentResource\RelationManagers\CareersRelationManager;
use App\Filament\Resources\CareerResource\Pages;
use App\Models\Career;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CareerResource extends Resource
{
    protected static ?string $model = Career::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Section::make('Career Details')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('title.en')
                            ->label('Job Title (English)')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('title.zh_TW')
                            ->label('Job Title (Traditional Chinese)')
                            ->maxLength(255),
                    ]),
                Forms\Components\Section::make('Job Information')
                    ->columns(2)
                    ->schema([
                        Forms\Components\Textarea::make('description.en')
                            ->label('Job Description (English)')
                            ->required(),
                        Forms\Components\Textarea::make('description.zh_TW')
                            ->label('Job Description (Traditional Chinese)'),
                    ]),

                Forms\Components\Section::make('Job Settings')
                    ->columns(2)
                    ->schema([
                        Forms\Components\Select::make('department_id')
                            ->relationship('department', 'name')
                            ->createOptionForm([
                                Forms\Components\Section::make('Create Department')
                                    ->schema([
                                        Forms\Components\TextInput::make('name.en')
                                            ->label('Department Name (English)')
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\TextInput::make('name.zh_TW')
                                            ->label('Department Name (Traditional Chinese)')
                                            ->maxLength(255),
                                    ])
                            ])
                            ->required()
                            ->searchable(),
                        Forms\Components\Toggle::make('is_full_time')
                            ->label('Is Full Time')
                            ->required(),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Is Active')
                            ->required(),
                        Forms\Components\TextInput::make('job_url')
                            ->label('Job URL')
                            ->maxLength(255)
                            ->placeholder('https://careers.example.com/job/12345'),
                    ]),
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('department_id')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_full_time')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('job_url')
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
            ])
            ->inverseRelationship('department');
    }

    public static function getRelations(): array
    {
        return [
            // CareersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCareers::route('/'),
            'create' => Pages\CreateCareer::route('/create'),
            'edit' => Pages\EditCareer::route('/{record}/edit'),
        ];
    }
}
