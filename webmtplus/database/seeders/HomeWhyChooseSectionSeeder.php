<?php

namespace Database\Seeders;

use App\Models\HomeWhyChooseSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeWhyChooseSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeWhyChooseSection::updateOrCreate(
            ['id' => 1],
            [
                'subtitle_vi' => 'Tại sao chọn chúng tôi',
                'subtitle_en' => 'Why Choose Us',
                'heading_vi' => 'ĐỐI TÁC TIN CẬY CHO SỰ PHÁT TRIỂN BỀN VỮNG',
                'heading_en' => 'YOUR TRUSTED PARTNER FOR SUSTAINABLE GROWTH',
                'description_vi' => 'Với cam kết về sự xuất sắc và đam mê đổi mới, chúng tôi cung cấp các giải pháp được thiết kế riêng nhằm thúc đẩy thành công và tạo ra giá trị lâu dài cho khách hàng của mình.',
                'description_en' => 'With a commitment to excellence and a passion for innovation, we deliver tailored solutions that drive success and create lasting value for our clients.',

                // Feature 1
                'feature_1_icon' => '/frontend/assets/img/icons/house-thing.svg',
                'feature_1_title_vi' => 'Minh bạch và đạo đức nghề nghiệp vững chắc',
                'feature_1_title_en' => 'Transparency and strong professional ethics',

                // Feature 2
                'feature_2_icon' => '/frontend/assets/img/icons/mailbox.svg',
                'feature_2_title_vi' => 'Đội ngũ chuyên gia am hiểu thị trường',
                'feature_2_title_en' => 'A team of experts with in-depth market knowledge',

                // Feature 3
                'feature_3_icon' => '/frontend/assets/img/icons/antennas.svg',
                'feature_3_title_vi' => 'Chuẩn hóa, đảm bảo tính nhất quán và hiệu quả',
                'feature_3_title_en' => 'Standardization, ensuring consistency and effectiveness',

                // Feature 4
                'feature_4_icon' => '/frontend/assets/img/icons/skyline.svg',
                'feature_4_title_vi' => 'Xây dựng giá trị thực và hợp tác bền vững',
                'feature_4_title_en' => 'Building real value and sustainable partnerships.',

                'button_url' => 'javascript:void(0)',

                // CEO Message
                'ceo_avatar' => '/frontend/assets/img/about/ceo.jpg',
                'ceo_quote_vi' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."',
                'ceo_quote_en' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."',
                'ceo_name' => 'Edge Yu.',
                'ceo_position_vi' => 'Giám đốc, CEO',
                'ceo_position_en' => 'Director, CEO',

                // Images
                'main_image' => '/frontend/assets/img/about/wh-img-1.jpg',
                'thumb_image' => '/frontend/assets/img/about/wh-img-1.jpg',

                'is_active' => true,
            ]
        );
    }
}
