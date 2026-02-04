<?php

namespace Database\Seeders;

use App\Models\HomeTestimonialsSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeTestimonialsSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeTestimonialsSection::updateOrCreate(
            ['id' => 1],
            [
                'subtitle_vi' => 'Cảm nhận khách hàng',
                'subtitle_en' => 'Testimonials',
                'heading_vi' => 'KHÁCH HÀNG NÓI GÌ VỀ CHÚNG TÔI',
                'heading_en' => 'WHAT OUR CLIENTS SAY ABOUT US',

                // Rating Box Info
                'rating_score' => '4.9',
                'customer_count' => '500+',
                'customer_text_vi' => 'Khách hàng hài lòng',
                'customer_text_en' => 'Satisfied Customers',

                // Testimonial 1
                'testimonial_1_name' => 'Nguyễn Văn An',
                'testimonial_1_position_vi' => 'Giám đốc điều hành',
                'testimonial_1_position_en' => 'CEO',
                'testimonial_1_company' => 'Công ty TNHH ABC',
                'testimonial_1_avatar' => '/frontend/assets/img/user-1.jpg',
                'testimonial_1_quote_vi' => 'Chúng tôi đã hợp tác với MT Plus trong nhiều dự án và luôn hài lòng với chất lượng công trình cũng như sự chuyên nghiệp trong từng giai đoạn thi công. Đội ngũ kỹ sư và công nhân đều có trình độ cao.',
                'testimonial_1_quote_en' => 'We have collaborated with MT Plus on multiple projects and have always been satisfied with the quality of the work and professionalism at every construction phase. The engineering team and workers are highly skilled.',
                'testimonial_1_rating' => 5,

                // Testimonial 2
                'testimonial_2_name' => 'Trần Thị Bình',
                'testimonial_2_position_vi' => 'Quản lý dự án',
                'testimonial_2_position_en' => 'Project Manager',
                'testimonial_2_company' => 'Tập đoàn XYZ',
                'testimonial_2_avatar' => '/frontend/assets/img/user-1.jpg',
                'testimonial_2_quote_vi' => 'MT Plus đã giúp chúng tôi hoàn thành dự án đúng tiến độ với chất lượng vượt mong đợi. Họ luôn lắng nghe và đưa ra giải pháp tối ưu cho mọi vấn đề phát sinh trong quá trình thi công.',
                'testimonial_2_quote_en' => 'MT Plus helped us complete the project on schedule with quality exceeding expectations. They always listen and provide optimal solutions for any issues arising during construction.',
                'testimonial_2_rating' => 5,

                // Testimonial 3
                'testimonial_3_name' => 'Lê Minh Cường',
                'testimonial_3_position_vi' => 'Chủ đầu tư',
                'testimonial_3_position_en' => 'Investor',
                'testimonial_3_company' => 'Công ty Cổ phần DEF',
                'testimonial_3_avatar' => '/frontend/assets/img/user-1.jpg',
                'testimonial_3_quote_vi' => 'Tôi đánh giá cao năng lực quản lý dự án và tinh thần trách nhiệm của MT Plus. Từ khâu thiết kế đến thi công đều được giám sát chặt chẽ, đảm bảo an toàn và tiến độ công trình.',
                'testimonial_3_quote_en' => 'I highly appreciate MT Plus\'s project management capabilities and sense of responsibility. From design to construction, everything is closely monitored to ensure safety and project timeline.',
                'testimonial_3_rating' => 5,

                // Testimonial 4
                'testimonial_4_name' => 'Phạm Thị Diệu',
                'testimonial_4_position_vi' => 'Giám đốc Kinh doanh',
                'testimonial_4_position_en' => 'Business Director',
                'testimonial_4_company' => 'Tổng công ty GHI',
                'testimonial_4_avatar' => '/frontend/assets/img/user-1.jpg',
                'testimonial_4_quote_vi' => 'Chất lượng thi công và dịch vụ hậu mãi của MT Plus rất tốt. Đội ngũ nhân viên nhiệt tình, chuyên nghiệp và luôn sẵn sàng hỗ trợ khi có yêu cầu. Chúng tôi hoàn toàn tin tưởng và sẽ tiếp tục hợp tác.',
                'testimonial_4_quote_en' => 'MT Plus\'s construction quality and after-sales service are excellent. The staff is enthusiastic, professional, and always ready to assist when needed. We completely trust them and will continue our collaboration.',
                'testimonial_4_rating' => 5,

                'is_active' => true,
            ]
        );
    }
}
