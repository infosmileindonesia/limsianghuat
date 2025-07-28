<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageNotification extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = GeneralSetting::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('mail_recipient')
                    ->label('Mail Recipient')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('mail_username')
                    ->label('Mail Username')
                    ->required()
                    ->email()
                    ->autocomplete(false)
                    ->maxLength(255),
                Forms\Components\TextInput::make('mail_password')
                    ->label('Mail Password')
                    ->required()
                    ->password()
                    ->autocomplete(false)
                    ->maxLength(255),
                Forms\Components\TextInput::make('mail_host')
                    ->label('Mail Host')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('mail_port')
                    ->label('Mail Port')
                    ->required()
                    ->numeric()
                    ->maxValue(65535)
                    ->minValue(1),
                Forms\Components\TextInput::make('mail_encryption')
                    ->label('Mail Encryption')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('mail_from_address')
                    ->label('Mail From Address')
                    ->required()
                    ->email()
                    ->maxLength(255),
            ]);
    }
}
