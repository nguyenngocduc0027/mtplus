<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CoreValuesContent;

class CoreValuesContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vietnamese version
        CoreValuesContent::create([
            'locale' => 'vi',
            'section_subtitle' => 'Giá trị cốt lõi',
            'section_title' => 'Cam kết mang đến giá trị bền vững thông qua sự minh bạch, chuyên nghiệp và đổi mới không ngừng.',
            'value_1_title' => 'Minh bạch',
            'value_1_description' => 'Chúng tôi tin tưởng vào sự minh bạch trong mọi giao dịch và quan hệ đối tác.',
            'value_1_icon' => '/frontend/assets/img/services/service-icon-1.png',
            'value_2_title' => 'Chuyên nghiệp',
            'value_2_description' => 'Đội ngũ chuyên gia giàu kinh nghiệm, luôn cập nhật kiến thức và kỹ năng mới.',
            'value_2_icon' => '/frontend/assets/img/services/service-icon-2.png',
            'value_3_title' => 'Đổi mới',
            'value_3_description' => 'Không ngừng đổi mới và cải tiến để mang lại giải pháp tối ưu nhất.',
            'value_3_icon' => '/frontend/assets/img/services/service-icon-3.png',
            'value_4_title' => 'Trách nhiệm',
            'value_4_description' => 'Cam kết trách nhiệm với khách hàng, đối tác và cộng đồng.',
            'value_4_icon' => '/frontend/assets/img/services/service-icon-4.png',
        ]);

        // English version
        CoreValuesContent::create([
            'locale' => 'en',
            'section_subtitle' => 'Core Values',
            'section_title' => 'Committed to delivering sustainable value through transparency, professionalism, and continuous innovation.',
            'value_1_title' => 'Transparency',
            'value_1_description' => 'We believe in transparency in all transactions and partnerships.',
            'value_1_icon' => '/frontend/assets/img/services/service-icon-1.png',
            'value_2_title' => 'Professionalism',
            'value_2_description' => 'Experienced team of experts, always updating knowledge and skills.',
            'value_2_icon' => '/frontend/assets/img/services/service-icon-2.png',
            'value_3_title' => 'Innovation',
            'value_3_description' => 'Continuously innovating and improving to bring optimal solutions.',
            'value_3_icon' => '/frontend/assets/img/services/service-icon-3.png',
            'value_4_title' => 'Responsibility',
            'value_4_description' => 'Committed to responsibility to customers, partners and community.',
            'value_4_icon' => '/frontend/assets/img/services/service-icon-4.png',
        ]);
    }
}
