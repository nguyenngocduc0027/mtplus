<?php

namespace Database\Seeders;

use App\Models\HomeAboutSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeAboutSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeAboutSection::updateOrCreate(
            ['id' => 1],
            [
                'heading_vi' => 'MT Plus cung cấp giải pháp thương mại, dịch vụ tin cậy, lấy sự minh bạch và giá trị thực làm nền tảng phát triển.',
                'heading_en' => 'MT Plus provides reliable trade and service solutions, transparency & long-term value for sustainable growth.',
                'description_vi' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam consequuntur earum nemo alias! Delectus dolorum magni quos vero facere est autem tenetur provident praesentium adipisci, nemo sunt mollitia odio a!',
                'description_en' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam consequuntur earum nemo alias! Delectus dolorum magni quos vero facere est autem tenetur provident praesentium adipisci, nemo sunt mollitia odio a!',
                'about_main_image' => '/frontend/assets/img/about/about-img-1.jpg',
                'about_thumb_image' => '/frontend/assets/img/about/about-bg-1.jpg',
                'button_url' => '/areas-of-operation',

                // Counter 1: Strategic Partners
                'counter_1_title_vi' => 'ĐỐI TÁC CHIẾN LƯỢC',
                'counter_1_title_en' => 'STRATEGIC PARTNERS',
                'counter_1_number' => '20',
                'counter_1_suffix' => '+',
                'counter_1_desc_vi' => 'Tập đoàn và công ty hàng đầu',
                'counter_1_desc_en' => 'Corporations and companies',

                // Counter 2: Consulting Experts
                'counter_2_title_vi' => 'CHUYÊN GIA TƯ VẤN',
                'counter_2_title_en' => 'CONSULTING EXPERTS',
                'counter_2_number' => '10',
                'counter_2_suffix' => 'năm|year',
                'counter_2_desc_vi' => 'Kinh nghiệm chuyên sâu',
                'counter_2_desc_en' => 'Extensive experience',

                // Counter 3: Annual Growth Rate
                'counter_3_title_vi' => 'TĂNG TRƯỞNG Trong NĂM',
                'counter_3_title_en' => 'ANNUAL GROWTH RATE',
                'counter_3_number' => '20',
                'counter_3_suffix' => '%',
                'counter_3_desc_vi' => 'Mức tăng trưởng kì vọng',
                'counter_3_desc_en' => 'Expected growth rate of the year',

                'is_active' => true,
            ]
        );
    }
}
