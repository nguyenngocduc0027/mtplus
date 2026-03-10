<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AreasOperationSection;

class AreasOperationSectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Section 1 - Residential and Industrial Construction
        AreasOperationSection::updateOrCreate(
            ['section_number' => 1],
            [
                'image_layout' => 'left',
                'subtitle_vi' => 'LĨNH VỰC HOẠT ĐỘNG',
                'subtitle_en' => 'AREAS OF OPERATION',
                'title_vi' => 'Xây dựng dân dụng và công nghiệp',
                'title_en' => 'Residential and Industrial Construction',
                'description_vi' => 'Chúng tôi chuyên xây dựng các công trình dân dụng và công nghiệp với chất lượng cao, đáp ứng mọi nhu cầu của khách hàng từ nhà ở đến nhà máy sản xuất.',
                'description_en' => 'We specialize in constructing residential and industrial buildings with high quality, meeting all customer needs from housing to manufacturing facilities.',
                'card_1_text_vi' => 'Nhà ở cao tầng và biệt thự',
                'card_1_text_en' => 'High-rise buildings and villas',
                'card_2_text_vi' => 'Trung tâm thương mại và văn phòng',
                'card_2_text_en' => 'Shopping centers and offices',
                'card_3_text_vi' => 'Nhà máy và kho bãi công nghiệp',
                'card_3_text_en' => 'Factories and industrial warehouses',
                'main_image_path' => '/frontend/assets/img/about/about-img-1.jpg',
                'thumbnail_image_path' => '/frontend/assets/img/about/about-bg-1.jpg',
            ]
        );

        // Section 2 - Infrastructure Development
        AreasOperationSection::updateOrCreate(
            ['section_number' => 2],
            [
                'image_layout' => 'right',
                'subtitle_vi' => 'LĨNH VỰC HOẠT ĐỘNG',
                'subtitle_en' => 'AREAS OF OPERATION',
                'title_vi' => 'Phát triển hạ tầng giao thông',
                'title_en' => 'Infrastructure Development',
                'description_vi' => 'Với đội ngũ kỹ sư giàu kinh nghiệm, chúng tôi thực hiện các dự án hạ tầng giao thông quy mô lớn, góp phần phát triển kinh tế - xã hội.',
                'description_en' => 'With a team of experienced engineers, we implement large-scale infrastructure projects, contributing to socio-economic development.',
                'card_1_text_vi' => 'Đường cao tốc và cầu đường',
                'card_1_text_en' => 'Highways and bridges',
                'card_2_text_vi' => 'Hệ thống cấp thoát nước',
                'card_2_text_en' => 'Water supply and drainage systems',
                'card_3_text_vi' => 'Sân bay và cảng biển',
                'card_3_text_en' => 'Airports and seaports',
                'main_image_path' => '/frontend/assets/img/about/about-img-1.jpg',
                'thumbnail_image_path' => '/frontend/assets/img/about/about-bg-1.jpg',
            ]
        );

        // Section 3 - Energy and Environmental Projects
        AreasOperationSection::updateOrCreate(
            ['section_number' => 3],
            [
                'image_layout' => 'left',
                'subtitle_vi' => 'LĨNH VỰC HOẠT ĐỘNG',
                'subtitle_en' => 'AREAS OF OPERATION',
                'title_vi' => 'Năng lượng và môi trường',
                'title_en' => 'Energy and Environmental Projects',
                'description_vi' => 'Chúng tôi cam kết phát triển các dự án năng lượng sạch và bảo vệ môi trường, hướng tới phát triển bền vững cho tương lai.',
                'description_en' => 'We are committed to developing clean energy projects and environmental protection, aiming for sustainable development for the future.',
                'card_1_text_vi' => 'Nhà máy điện mặt trời và gió',
                'card_1_text_en' => 'Solar and wind power plants',
                'card_2_text_vi' => 'Hệ thống xử lý nước thải',
                'card_2_text_en' => 'Wastewater treatment systems',
                'card_3_text_vi' => 'Công trình xử lý chất thải',
                'card_3_text_en' => 'Waste treatment facilities',
                'main_image_path' => '/frontend/assets/img/about/about-img-1.jpg',
                'thumbnail_image_path' => '/frontend/assets/img/about/about-bg-1.jpg',
            ]
        );
    }
}
