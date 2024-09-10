<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\About;
use App\Models\Basic;
use App\Models\ConsultationMsg;
use App\Models\Governance;
use App\Models\Privacy;
use App\Models\Privreturn;
use App\Models\Term;

class TenantDefaultInformation extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $basicData = Basic::create([
            'name'=>'رؤية الأشياء',
            'description'=>'للاستشارات الاستراتيجية والحوكمة',
            'phone'=>'0096123456789',
            'whatsapp'=>null,
            'email'=>'info@visionstratgy.com',
            'address'=>'المملكة العربية السعودية',
            'facebook'=>null,
            'instagram'=>null,
            'snapchat'=>null,
            'linkedin'=>null,
            'twitter'=>null,
        ]);
        // $basicData->addMediaFromUrl('https://i.ibb.co/YRmsnGF/Newslo-en.png')
        //             ->usingName('Content images')
        //             ->toMediaCollection('logo');

        // $basicData->addMediaFromUrl('https://i.ibb.co/gMJmXSn/new.png')
        //             ->usingName('Content images')
        //             ->toMediaCollection('icon');            
 
        //**************************************************************** */
        Governance::create([
            'section_description'=>'هي خدمة تقدمها شركة استشارية متخصصة في مجال الحوكمة والاستشارات، بهدف شرح مفهوم الحوكمة للشركات وأهمية تطبيقها.',
            'description_one'=>'رفع مستوى الوعي بمفهوم الحوكمة بين الشركات.',
            'description_two'=>'توضيح أهمية تطبيق الحوكمة للشركات.',
            'description_three'=>'تقديم إرشادات وتوجيهات حول كيفية تطبيق الحوكمة.',
            'status'=>'active'
        ]);                    
        //**************************************************************** */
        ConsultationMsg::create([
            'consultation_msg'=>'هي خدمة تقدمها شركة استشارية متخصصة في مجال الحوكمة والاستشارات، بهدف شرح مفهوم الحوكمة للشركات وأهمية تطبيقها.'
        ]);
        
       //**************************************************************** */
       $about = About::create([
                'short_text'=>'رؤية الأشياء للاستشارات الاستراتيجية والحوكمة',
                'content'=>'رؤية الأشياء للاستشارات الاستراتيجية والحوكمة هي شركة استشارية رائدة في المملكة العربية السعودية، تأسست عام 2023، وتقدم خدمات لمساعدة الشركات في تطوير الاستراتيجية والحوكمة لقيادة الشركات أو الادارات العليا. تقع الشركة في مدينة جدة، وتضم فريقًا من المستشارين ذوي الخبرة والمهارات المتخصصة في مجال الاستشارات الاستراتيجية والحوكمة و الالتزام.'
            ]);
    //    $about->addMediaFromUrl('https://i.ibb.co/ZN6J0HC/enghattan.png')
    //          ->usingName('About image')
    //          ->toMediaCollection('about');  
        //**************************************************************** */
        Privacy::create([
            'content'=>'ما هي سياسة الخصوصية الخاصة بالشركة؟',
        ]);
       //**************************************************************** */

        Term::create([
            'content'=>'شروط وأحكام موقع رؤية الأشياء للاستشارات الاستراتيجية والحوكمة',
        ]);

       //**************************************************************** */
        Privreturn::create([
            'content'=>'ما هي سياسة الاسترجاع؟'
        ]);

       //**************************************************************** */

    }
}
