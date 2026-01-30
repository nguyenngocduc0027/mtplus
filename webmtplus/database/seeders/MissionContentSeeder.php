<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MissionContent;

class MissionContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vietnamese version
        MissionContent::create([
            'locale' => 'vi',
            'section_2_subtitle' => 'Sứ mệnh',
            'section_2_title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'section_2_description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum pariatur dicta voluptates labore, autem laborum, nesciunt id expedita ipsum libero perspiciatis omnis possimus praesentium? Quas necessitatibus reprehenderit neque ullam iure.',
            'section_2_image' => null,
            'feature_1' => 'Được cấp phép, Bảo hiểm và Tập trung vào An toàn',
            'feature_2' => '10 Năm Kinh nghiệm trong Ngành',
            'feature_3' => 'Tiếp cận Lấy Khách hàng Làm Trung tâm',
            'feature_4' => 'Quản lý Dự án Toàn diện',
        ]);

        // English version
        MissionContent::create([
            'locale' => 'en',
            'section_2_subtitle' => 'Our Mission',
            'section_2_title' => 'Delivering Excellence Through Innovation and Integrity.',
            'section_2_description' => 'Our mission is to provide exceptional services that drive value and foster long-term partnerships. We are committed to maintaining the highest standards of professionalism and innovation in everything we do.',
            'section_2_image' => null,
            'feature_1' => 'Licensed, Insured, And Safety-Focused',
            'feature_2' => '10 Years Of Industry Experience',
            'feature_3' => 'Client-Centered Approach',
            'feature_4' => 'End-to-End Project Management',
        ]);
    }
}
