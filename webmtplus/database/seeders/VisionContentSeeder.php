<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VisionContent;

class VisionContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vietnamese version
        VisionContent::create([
            'locale' => 'vi',
            'section_subtitle' => 'Tầm nhìn',
            'section_title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'section_description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi perferendis repudiandae iure natus est necessitatibus minus nostrum sit libero, eum odit ad culpa voluptates, dolorum amet? Magnam expedita repudiandae assumenda. Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, voluptatum? Ea qui quam et porro ducimus quaerat non. Et assumenda hic facilis dolorum illo voluptate? Laboriosam explicabo eveniet ipsam quam!',
            'section_image' => '/frontend/assets/img/about/feature-img-5.jpg',
            'timeline_1' => 'Trở thành đối tác tin cậy hàng đầu trong lĩnh vực thương mại',
            'timeline_2' => 'Phát triển bền vững và tạo giá trị lâu dài cho khách hàng',
            'timeline_3' => 'Đổi mới sáng tạo và ứng dụng công nghệ tiên tiến',
            'timeline_4' => 'Xây dựng đội ngũ chuyên nghiệp và môi trường làm việc tốt nhất',
        ]);

        // English version
        VisionContent::create([
            'locale' => 'en',
            'section_subtitle' => 'Our Vision',
            'section_title' => 'Building a Sustainable Future Through Innovation and Excellence',
            'section_description' => 'We envision becoming the leading partner in providing comprehensive trade and service solutions. Our commitment is to create lasting value for our clients through innovation, transparency, and excellence in everything we do. We strive to build a sustainable future where businesses thrive and communities prosper together.',
            'section_image' => '/frontend/assets/img/about/feature-img-5.jpg',
            'timeline_1' => 'Become the most trusted partner in trade and commerce',
            'timeline_2' => 'Achieve sustainable growth and create long-term value',
            'timeline_3' => 'Drive innovation through advanced technology adoption',
            'timeline_4' => 'Build professional teams in excellent work environments',
        ]);
    }
}
