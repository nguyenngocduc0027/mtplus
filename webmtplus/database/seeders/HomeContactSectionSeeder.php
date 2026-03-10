<?php

namespace Database\Seeders;

use App\Models\HomeContactSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeContactSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeContactSection::updateOrCreate(
            ['id' => 1],
            [
                'subtitle_vi' => 'Liên hệ',
                'subtitle_en' => 'Contact',
                'heading_vi' => 'KẾT NỐI CÙNG MT PLUS – KHỞI ĐẦU MỌI CƠ HỘI',
                'heading_en' => 'CONNECT WITH MT PLUS – WHERE OPPORTUNITIES BEGIN',
                'description_vi' => 'Đừng ngần ngại liên hệ với đội ngũ chuyên gia của chúng tôi để bắt đầu kế hoạch bứt phá tương lai ngay hôm nay.',
                'description_en' => "Don't hesitate to contact our expert team to start your future breakthrough plan today.",
                'map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4418.547012515451!2d105.80019557584068!3d20.993992088970764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab24c5621439%3A0xed7a32c6a7340f8e!2zQ8O0bmcgVHkgVE5ISCBHaeG6o2kgUGjDoXAgQ8O0bmcgTmdo4buHIE1ldGFTb2Z0!5e1!3m2!1svi!2s!4v1769661751238!5m2!1svi!2s',
                'is_active' => true,
            ]
        );
    }
}
