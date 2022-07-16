<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            "name" => "company_name",
            "value" => "Anabasoftware"
        ]);

        Setting::create([
            "name" => "company_website",
            "value" => "https://anabasoftware.com"
        ]);

        Setting::create([
            "name" => "app_name",
            "value" => "Marlin Pos"
        ]);

        Setting::create([
            "name" => "description",
            "value" => "Management market online & point of sales"
        ]);

        Setting::create([
            "name" => "address",
            "value" => "Sukharjo"
        ]);

        Setting::create([
            "name" => "email",
            "value" => "marlinpos@gmail.com"
        ]);

        Setting::create([
            "name" => "phone",
            "value" => "+628 133 534 4967"
        ]);

        Setting::create([
            "name" => "icon",
            "value" => "default.png",
        ]);

        Setting::create([
            "name" => "logo",
            "value" => "defualt.png"
        ]);

        Setting::create([
            // PERINGATAN TRIAL
            "name" => "trial_day_warning",
            "value" => 5
        ]);

        Setting::create([
            "name" => "trial_warning",
            "value" => "Waktu Trial Anda Hampir Habis"
        ]);
    
        Setting::create([
            // PERINGATAN BILLING
            "name" => "billing_day_warning",
            "value" => 5
        ]);

        Setting::create([
            "name" => "billing_warning",
            "value" => "Waktu Billing Anda Hampir Habis"
        ]);

        Setting::create([
            // EXPIRED PEMBAYARAN BILLING
            "name" => "expired_payment_day",
            "value" => 3
        ]);

        Setting::create([
            // WAKTU EXPIRED TRIAL 
            "name" => "trial_day",
            "value" => 15
        ]);

        Setting::create([
            "name" => "referral_percentage",
            "value" => 10
        ]);

        // SOCIAL MEDIA
            Setting::create([
                "name" => "account_facebook",
                "value" => ""
            ]);

            Setting::create([
                "name" => "account_youtube",
                "value" => "",
            ]);

            Setting::create([
                "name" => "account_tiktok",
                "value" => "",
            ]);

            Setting::create([
                "name" => "account_instagram",
                "value" => ""
            ]);

            Setting::create([
                "name" => "account_twitter",
                "value" => ""
            ]);

            Setting::create([
                "name" => "account_linkedin",
                "value" => ""
            ]);
        // SOSIAL MEDIA
    }
}
