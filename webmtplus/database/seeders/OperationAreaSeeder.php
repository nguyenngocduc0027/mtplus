<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OperationArea;
use Illuminate\Support\Str;

class OperationAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OperationArea::create([
            'title' => 'Tư vấn Đầu tư',
            'subtitle' => 'Chiến lược Đầu tư Toàn cầu',
            'slug' => Str::slug('Tư vấn Đầu tư'),
            'image_path' => '/frontend/assets/img/about/about-img-1.jpg',
            'content' => 'Chúng tôi cung cấp các dịch vụ tư vấn đầu tư chuyên nghiệp, giúp khách hàng xây dựng và quản lý danh mục đầu tư hiệu quả, tối ưu hóa lợi nhuận và giảm thiểu rủi ro.',
            'card_1_text' => 'Phân tích và Đánh giá Thị trường',
            'card_2_text' => 'Quản lý Danh mục Đầu tư',
            'card_3_text' => 'Đánh giá Rủi ro',
        ]);

        OperationArea::create([
            'title' => 'Giải pháp Công nghệ',
            'subtitle' => 'Dịch vụ Công nghệ Tiên tiến',
            'slug' => Str::slug('Giải pháp Công nghệ'),
            'image_path' => '/frontend/assets/img/about/about-img-2.jpg', // Placeholder for another image
            'content' => 'Cung cấp các giải pháp công nghệ sáng tạo để thúc đẩy tăng trưởng kinh doanh và hiệu quả hoạt động trên nhiều ngành khác nhau. Từ phát triển phần mềm đến điện toán đám mây và trí tuệ nhân tạo.',
            'card_1_text' => 'Phát triển Phần mềm Tùy chỉnh',
            'card_2_text' => 'Điện toán Đám mây và DevOps',
            'card_3_text' => 'Trí tuệ Nhân tạo & Học máy',
        ]);

        OperationArea::create([
            'title' => 'Tư vấn Quản lý',
            'subtitle' => 'Tối ưu hóa Hiệu suất Doanh nghiệp',
            'slug' => Str::slug('Tư vấn Quản lý'),
            'image_path' => '/frontend/assets/img/about/about-img-3.jpg', // Placeholder
            'content' => 'Hỗ trợ các tổ chức cải thiện hiệu suất, giải quyết các thách thức phức tạp và đạt được mục tiêu chiến lược thông qua các dịch vụ tư vấn quản lý chuyên sâu.',
            'card_1_text' => 'Chiến lược Kinh doanh',
            'card_2_text' => 'Tái cấu trúc Tổ chức',
            'card_3_text' => 'Quản lý Dự án',
        ]);

        OperationArea::create([
            'title' => 'Phát triển Bất động sản',
            'subtitle' => 'Giải pháp Bất động sản Toàn diện',
            'slug' => Str::slug('Phát triển Bất động sản'),
            'image_path' => '/frontend/assets/img/about/about-img-4.jpg', // Placeholder
            'content' => 'Chúng tôi cung cấp các dịch vụ phát triển bất động sản từ lập kế hoạch, thiết kế, xây dựng đến quản lý và tiếp thị, đảm bảo các dự án được thực hiện thành công và bền vững.',
            'card_1_text' => 'Phân tích Khả thi Dự án',
            'card_2_text' => 'Thiết kế và Xây dựng',
            'card_3_text' => 'Tiếp thị và Bán hàng',
        ]);
    }
}
