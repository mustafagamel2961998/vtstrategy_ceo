<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\About;
use App\Models\Admin;
use App\Models\Basic;
use App\Models\Ceo\Counterofnumber;
use App\Models\Ceo\Setting;
use App\Models\ConsultationMsg;
use App\Models\Customer;
use App\Models\Governance;
use App\Models\Privacy;
use App\Models\Privreturn;
use App\Models\Term;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Setting::create([
            'company_name'=>'رؤية للاستشارات',
            'address'=>'المملكة العربية السعودية- الرياض',
            'email'=>'enghatan@email.com',
            'phone'=>'01084759348',
            'facebook'=>'https://www.facebook.com/',
            'instagram'=>'https://www.instagram.com/',
            'snapchat'=>'https://www.snapchat.com/',
        ]);
        Counterofnumber::create([
            'successful_consultation_count'=>0,
            'satisfied_customer_count'=>0,
            'created_website_count'=>0,
            'expert_advisor_count'=>0,

        ]);

    }
}
