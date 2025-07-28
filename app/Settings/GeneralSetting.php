<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSetting extends Settings
{
    public string $mail_recipient;

    public string $mail_username;

    public string $mail_password;

    public string $mail_host;

    public int $mail_port;

    public string $mail_encryption;

    public string $mail_from_address;

    public static function group(): string
    {
        return 'general_settings';
    }


}
