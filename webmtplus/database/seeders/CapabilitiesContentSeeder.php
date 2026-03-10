<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CapabilitiesContent;

class CapabilitiesContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CapabilitiesContent::updateOrCreate(
            ['id' => 1],
            [
                // Section 1
                'section_1_title_vi' => 'Đối tác chân thực trong mọi khía cạnh phát triển',
                'section_1_title_en' => 'Genuine Partner In Every Aspect Of Development',

                // Feature 1
                'feature_1_icon_path' => '/frontend/assets/img/features/feature-1.png',
                'feature_1_title_vi' => 'Quản lý dự án',
                'feature_1_title_en' => 'Project Management',
                'feature_1_description_vi' => 'Chúng tôi xử lý mọi thứ từ giấy phép đến khảo sát cuối cùng, giao tiếp từng bước',
                'feature_1_description_en' => 'We handle everything from permits to final walkthrough communication every step of the way',

                // Feature 2
                'feature_2_icon_path' => '/frontend/assets/img/features/feature-2.png',
                'feature_2_title_vi' => 'Đội ngũ kỹ năng cao',
                'feature_2_title_en' => 'Skilled Team',
                'feature_2_description_vi' => 'Chuyên gia giàu kinh nghiệm cam kết về độ chính xác và an toàn với mục tiêu zero sự cố',
                'feature_2_description_en' => 'Experienced professionals committed to precision and safety goal is zero incidents',

                // Feature 3
                'feature_3_icon_path' => '/frontend/assets/img/features/feature-3.png',
                'feature_3_title_vi' => 'Vật liệu cao cấp',
                'feature_3_title_en' => 'Premium Materials',
                'feature_3_description_vi' => 'Chỉ sử dụng vật liệu cao cấp cho độ bền và phong cách lâu dài',
                'feature_3_description_en' => 'Only top-grade materials used for lasting strength and style',

                // Feature 4
                'feature_4_icon_path' => '/frontend/assets/img/features/feature-4.png',
                'feature_4_title_vi' => 'Xây dựng nhà tùy chỉnh',
                'feature_4_title_en' => 'Custom Home Builds',
                'feature_4_description_vi' => 'Thiết kế phù hợp được xây dựng từ nền móng phù hợp với tầm nhìn của bạn',
                'feature_4_description_en' => 'Tailored designs built from the ground match your vision with reliable timelines',

                // Section 3
                'main_image_path' => '/frontend/assets/img/about/wh-img-2.jpg',
                'thumbnail_image_path' => '/frontend/assets/img/about/wh-thumb-2.jpg',
                'section_3_title_vi' => 'Trải nghiệm xây dựng được cá nhân hóa phù hợp với tầm nhìn của bạn',
                'section_3_title_en' => 'Personalized Building Experience Tailored to Your Vision',
                'section_3_description_vi' => 'Renius có nghĩa là hợp tác với đội ngũ coi sự hài lòng của khách hàng lên hàng đầu. Chúng tôi mang đến nhiều năm kinh nghiệm và đã được chứng minh',
                'section_3_description_en' => 'Renius means partnering with team that values customer satisfaction above all else. We bring years of experience and a proven',

                // Progress bars
                'progress_1_title_vi' => 'Thiết kế nội thất chung cư',
                'progress_1_title_en' => 'Apartment Interior Design',
                'progress_1_percentage' => 70,

                'progress_2_title_vi' => 'Thiết kế kiến trúc',
                'progress_2_title_en' => 'Architecture Design',
                'progress_2_percentage' => 80,

                'progress_3_title_vi' => 'Xây dựng công trình',
                'progress_3_title_en' => 'Construction Build',
                'progress_3_percentage' => 90,
            ]
        );
    }
}
