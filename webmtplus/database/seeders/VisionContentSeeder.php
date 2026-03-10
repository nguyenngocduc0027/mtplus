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
        VisionContent::updateOrCreate(
            ['id' => 1],
            [
                // Vietnamese content
                'title_vi' => 'Tầm nhìn của chúng tôi',
                'description_vi' => 'Chúng tôi hướng tới việc trở thành công ty xây dựng hàng đầu tại Việt Nam, được biết đến với chất lượng dịch vụ xuất sắc, công nghệ tiên tiến và cam kết phát triển bền vững. Chúng tôi mong muốn tạo ra những công trình mang tính biểu tượng, góp phần xây dựng một tương lai tốt đẹp hơn cho cộng đồng và xã hội.',
                'timeline_1_vi' => 'Trở thành công ty xây dựng hàng đầu Việt Nam với chất lượng dịch vụ vượt trội',
                'timeline_2_vi' => 'Mở rộng hoạt động ra khu vực Đông Nam Á và các thị trường quốc tế',
                'timeline_3_vi' => 'Phát triển và ứng dụng công nghệ xây dựng xanh, bền vững cho môi trường',
                'timeline_4_vi' => 'Đào tạo và phát triển đội ngũ nhân lực chuyên nghiệp, sáng tạo hàng đầu',

                // English content
                'title_en' => 'Our Vision',
                'description_en' => 'We aim to become the leading construction company in Vietnam, recognized for excellent service quality, advanced technology, and commitment to sustainable development. We aspire to create iconic projects that contribute to building a better future for the community and society.',
                'timeline_1_en' => 'Become Vietnam\'s leading construction company with superior service quality',
                'timeline_2_en' => 'Expand operations to Southeast Asia and international markets',
                'timeline_3_en' => 'Develop and apply green, sustainable construction technology for the environment',
                'timeline_4_en' => 'Train and develop a leading professional and creative workforce',

                // Main image path
                'image_path' => '/frontend/assets/img/about/feature-img-5.jpg',
            ]
        );
    }
}
