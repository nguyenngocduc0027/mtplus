<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\HomeHeroSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@mtplus.vn',
            'password' => bcrypt('password'), // password
        ]);

        // Seed Home Hero Section
        HomeHeroSection::create([
            'subtitle_vi' => 'khởi nguồn cơ hội - bứt phá tương lai',
            'subtitle_en' => 'Creating opportunities - breaking through to the future.',
            'heading_vi' => 'Cung cấp GIẢI PHÁP THƯƠNG MẠI & DỊCH VỤ TẬN TÂM - TỐI ƯU!',
            'heading_en' => 'EXPERT TRADING & SERVICE SOLUTIONS TAILORED FOR SUCCESS!',
            'description_vi' => 'Chúng tôi cung cấp các giải pháp kinh doanh toàn diện dựa trên nền tảng minh bạch và chuyên môn cao, nhằm tạo ra giá trị bền vững cho doanh nghiệp của bạn.',
            'description_en' => 'We provide comprehensive business solutions based on transparency and expertise, creating long-term value and sustainable growth for your business.',
            'hero_slide_image' => '/frontend/assets/img/hero/hero-slide-1.jpg',
            'hero_main_image' => '/frontend/assets/img/hero/hero-img-1.png',
            'thumb_para_vi' => 'Giải pháp thông minh cho sự phát triển bền vững của doanh nghiệp.',
            'thumb_para_en' => 'Innovative Solutions For Your Sustainable Business Growth.',
            'video_url' => 'https://www.youtube.com/watch?v=FlUIhTFuDes&list=RDFlUIhTFuDes&start_radio=1',
            'learn_more_url' => 'javascript:void(0)',
            'read_more_url' => 'javascript:void(0)',
            'is_active' => true,
        ]);
    }
}
