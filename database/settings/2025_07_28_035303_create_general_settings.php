<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general_settings.site_name', 'Lim Siang Huat');
        $this->migrator->add('general_settings.site_description', 'Your one-stop shop for all your food and alcohol needs.');
        $this->migrator->add('general_settings.contact_email', 'lsh@gmail.com');
        $this->migrator->add('general_settings.contact_phone', '+62 778 430359');

        $this->migrator->add('general_settings.google_map_api_key', 'AIzaSyBB5tal8AmvNbWdrVK6gPud4x-z7o2Sdlo');
        $this->migrator->add('general_settings.google_map_location', 'Lim Siang Huat, Batam');

        // $this->migrator->add('general_settings.social_links', [
        //     'facebook' => 'https://www.facebook.com/p/Lim-Siang-Huat-Group-100063795910946/?locale=id_ID',
        //     'instagram' => 'https://www.instagram.com/limsianghuat.official/?hl=en',
        //     'twitter' => 'https://www.tiktok.com/@lim.siang.huat',
        // ]);

        $this->migrator->add('general_settings.facebook_link', 'https://www.facebook.com/p/Lim-Siang-Huat-Group-100063795910946/?locale=id_ID');
        $this->migrator->add('general_settings.instagram_link', 'https://www.instagram.com/limsianghuat.official/?hl=en');
        $this->migrator->add('general_settings.tiktok_link', 'https://www.tiktok.com/@lim.siang.huat');

        $this->migrator->add('general_settings.mail_username', 'lsh@gmail.com');
        $this->migrator->add('general_settings.mail_password', 'your_mail_password');
        $this->migrator->add('general_settings.mail_host', 'smtp.gmail.com');
        $this->migrator->add('general_settings.mail_port', 587);
        $this->migrator->add('general_settings.mail_encryption', 'tls');
        $this->migrator->add('general_settings.mail_from_address', 'lsh@gmail.com');
        $this->migrator->add('general_settings.mail_recipient', 'hr.lshjkt@gmail.com');
    }
};

