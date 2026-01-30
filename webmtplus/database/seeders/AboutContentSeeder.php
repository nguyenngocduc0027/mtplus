<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutContent;

class AboutContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vietnamese version
        AboutContent::create([
            'locale' => 'vi',
            'subtitle' => 'Giới thiệu',
            'title' => 'MT Plus cung cấp giải pháp thương mại, dịch vụ tin cậy, lấy sự minh bạch và giá trị thực làm nền tảng phát triển.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam consequuntur earum nemo alias! Delectus dolorum magni quos vero facere est autem tenetur provident praesentium adipisci, nemo sunt mollitia odio a!',
            'image_main' => '/frontend/assets/img/about/about-img-1.jpg',
            'image_small' => '/frontend/assets/img/about/about-bg-1.jpg',
            'counter_1_title' => 'ĐỐI TÁC CHIẾN LƯỢC',
            'counter_1_number' => '20+',
            'counter_1_description' => 'Tập đoàn và công ty hàng đầu',
            'counter_2_title' => 'CHUYÊN GIA TƯ VẤN',
            'counter_2_number' => '10 năm',
            'counter_2_description' => 'Kinh nghiệm chuyên sâu',
            'counter_3_title' => 'TĂNG TRƯỞNG TRONG NĂM',
            'counter_3_number' => '20%',
            'counter_3_description' => 'Mức tăng trưởng kì vọng',
        ]);

        // English version
        AboutContent::create([
            'locale' => 'en',
            'subtitle' => 'About Us',
            'title' => 'MT Plus provides reliable trade and service solutions, transparency & long-term value for sustainable growth.',
            'description' => 'We deliver professional solutions that help businesses achieve their goals through innovative strategies and dedicated service.',
            'image_main' => '/frontend/assets/img/about/about-img-1.jpg',
            'image_small' => '/frontend/assets/img/about/about-bg-1.jpg',
            'counter_1_title' => 'STRATEGIC PARTNERS',
            'counter_1_number' => '20+',
            'counter_1_description' => 'Leading corporations and companies',
            'counter_2_title' => 'CONSULTING EXPERTS',
            'counter_2_number' => '10 years',
            'counter_2_description' => 'Deep industry experience',
            'counter_3_title' => 'ANNUAL GROWTH RATE',
            'counter_3_number' => '20%',
            'counter_3_description' => 'Expected growth rate',
        ]);
    }
}
