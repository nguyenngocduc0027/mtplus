<?php

namespace Database\Seeders;

use App\Models\CoreValuesContent;
use Illuminate\Database\Seeder;

class CoreValuesContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CoreValuesContent::updateOrCreate(
            ['id' => 1],
            [
                // Section headers
                'section_subtitle_vi' => 'Giá trị cốt lõi',
                'section_subtitle_en' => 'Core Values',
                'section_title_vi' => 'Những giá trị định hướng phát triển',
                'section_title_en' => 'Values that guide our development',

                // Value 1: Quality
                'value_1_title_vi' => 'Chất lượng',
                'value_1_title_en' => 'Quality',
                'value_1_icon' => '/frontend/assets/img/services/service-icon-1.png',
                'value_1_description_vi' => 'Cam kết mang đến chất lượng cao nhất trong mọi dự án',
                'value_1_description_en' => 'Committed to delivering the highest quality in every project',

                // Value 2: Reputation
                'value_2_title_vi' => 'Uy tín',
                'value_2_title_en' => 'Reputation',
                'value_2_icon' => '/frontend/assets/img/services/service-icon-2.png',
                'value_2_description_vi' => 'Xây dựng niềm tin qua sự chuyên nghiệp và minh bạch',
                'value_2_description_en' => 'Building trust through professionalism and transparency',

                // Value 3: Innovation
                'value_3_title_vi' => 'Sáng tạo',
                'value_3_title_en' => 'Innovation',
                'value_3_icon' => '/frontend/assets/img/services/service-icon-3.png',
                'value_3_description_vi' => 'Luôn đổi mới để đáp ứng nhu cầu khách hàng',
                'value_3_description_en' => 'Always innovating to meet customer needs',

                // Value 4: Responsibility
                'value_4_title_vi' => 'Trách nhiệm',
                'value_4_title_en' => 'Responsibility',
                'value_4_icon' => '/frontend/assets/img/services/service-icon-4.png',
                'value_4_description_vi' => 'Chịu trách nhiệm với cộng đồng và môi trường',
                'value_4_description_en' => 'Responsible to the community and environment',
            ]
        );
    }
}
