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
        MissionContent::updateOrCreate(
            ['id' => 1],
            [
            // Vietnamese content
            'title_vi' => 'Su menh cua chung toi',
            'description_vi' => 'Chung toi cam ket mang den nhung giai phap xay dung toan dien va chat luong cao nhat cho moi khach hang. Voi doi ngu chuyen gia gioi va trang thiet bi hien dai, chung toi khong ngung noi luc de tro thanh doi tac tin cay hang dau trong linh vuc xay dung va phat trien bat dong san.',
            'feature_1_vi' => 'Co giay phep, bao hiem va tap trung vao an toan',
            'feature_2_vi' => '10 nam kinh nghiem trong nganh',
            'feature_3_vi' => 'Phuong phap tiep can lay khach hang lam trung tam',
            'feature_4_vi' => 'Quan ly du an toan dien tu dau den cuoi',

            // English content
            'title_en' => 'Our Mission',
            'description_en' => 'We are committed to delivering comprehensive construction solutions and the highest quality for every client. With our team of expert professionals and modern equipment, we continuously strive to become the leading trusted partner in the construction and real estate development industry.',
            'feature_1_en' => 'Licensed, Insured, And Safety-Focused',
            'feature_2_en' => '10 Years Of Industry Experience',
            'feature_3_en' => 'Client-Centered Approach',
            'feature_4_en' => 'End-to-End Project Management',

            // Background image path (nullable - will be uploaded via admin)
            'background_image_path' => '/frontend/assets/img/about/about-img-1.jpg',
            ]
        );
    }
}
