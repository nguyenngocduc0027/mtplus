<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $services = [
            [
                'title_vi' => 'Tư vấn đầu tư',
                'title_en' => 'Investment Consulting',
                'slug' => 'tu-van-dau-tu',
                'short_description_vi' => 'Cung cấp giải pháp tư vấn đầu tư toàn diện, phân tích thị trường và đánh giá hiệu quả dự án.',
                'short_description_en' => 'Providing comprehensive investment consulting solutions, market analysis and project effectiveness evaluation.',
                'content_vi' => '<div class="single-para">
    <h1 class="font-secondary">Tư vấn Đầu tư & Môi giới</h1>
    <p>Về mặt tư vấn đầu tư, chúng tôi cung cấp các giải pháp toàn diện bao gồm phân tích thị trường, đánh giá dự án, và quản lý danh mục đầu tư. Cho dù bạn đang tìm kiếm cơ hội đầu tư mới, tối ưu hóa danh mục hiện tại hay cần tư vấn chiến lược,</p>
    <p>MTPlus mang đến dịch vụ đáng tin cậy, kịp thời và chất lượng cao phù hợp với nhu cầu của bạn.</p>
</div>
<div class="single-para">
    <h6>Tổng quan & Thách thức</h6>
    <p>Chúng tôi bắt đầu bằng việc phát triển các khái niệm phân tích sơ bộ nhằm khám phá các cơ hội đầu tư tiềm năng, xu hướng thị trường và chiến lược phân bổ vốn hiệu quả</p>
</div>
<div class="single-para">
    <h6>Dịch vụ Cung cấp</h6>
    <ul class="feature-item-list style-one list-unstyled">
        <li class="position-relative"><span class="text-title fw-semibold me-1">Phân tích Khái niệm:</span>Chúng tôi bắt đầu bằng việc phát triển các khái niệm phân tích sơ bộ nhằm khám phá các cơ hội đầu tư tiềm năng, xu hướng thị trường và chiến lược phân bổ vốn. Những phân tích ban đầu này đóng vai trò nền tảng cho quyết định đầu tư.</li>
        <li class="position-relative"><span class="text-title fw-semibold me-1">Nghiên cứu Thị trường:</span>Dựa trên khái niệm đã được phê duyệt, chúng tôi phát triển các báo cáo nghiên cứu chi tiết làm rõ tổng thể cơ hội, rủi ro và tiềm năng sinh lời của dự án đầu tư.</li>
        <li class="position-relative"><span class="text-title fw-semibold me-1">Đánh giá Dự án:</span>Trong giai đoạn này, chúng tôi đi sâu vào chi tiết, tinh chỉnh chiến lược và kết hợp các yếu tố tài chính, pháp lý và vận hành. Chúng tôi tạo ra các báo cáo chi tiết và khuyến nghị cụ thể.</li>
        <li class="position-relative"><span class="text-title fw-semibold me-1">Quản lý Danh mục:</span>Theo dõi và điều chỉnh danh mục đầu tư để tối ưu hóa lợi nhuận và giảm thiểu rủi ro. Chúng tôi cung cấp báo cáo định kỳ và tư vấn chiến lược dựa trên biến động thị trường.</li>
    </ul>
</div>',
                'content_en' => '<div class="single-para">
    <h1 class="font-secondary">Investment Consulting & Brokerage</h1>
    <p>On the investment consulting side, we offer comprehensive solutions including market analysis, project evaluation, and portfolio management. Whether you\'re looking to explore new investment opportunities, optimize your current portfolio, or need strategic advice,</p>
    <p>MTPlus delivers trusted, timely, and high-quality service tailored to your needs.</p>
</div>
<div class="single-para">
    <h6>Overview & Challenge</h6>
    <p>We start by developing preliminary analysis concepts that explore potential investment opportunities, market trends, and effective capital allocation strategies</p>
</div>
<div class="single-para">
    <h6>Services Offered</h6>
    <ul class="feature-item-list style-one list-unstyled">
        <li class="position-relative"><span class="text-title fw-semibold me-1">Conceptual Analysis:</span>We start by developing preliminary analysis concepts that explore potential investment opportunities, market trends, and capital allocation strategies. These initial analyses serve as the foundation for investment decisions.</li>
        <li class="position-relative"><span class="text-title fw-semibold me-1">Market Research:</span>Building upon the approved concept, we develop detailed research reports that articulate the overall opportunities, risks, and profit potential of investment projects.</li>
        <li class="position-relative"><span class="text-title fw-semibold me-1">Project Evaluation:</span>During this phase, we delve into the details, refining strategies and incorporating financial, legal, and operational considerations. We produce detailed reports and specific recommendations.</li>
        <li class="position-relative"><span class="text-title fw-semibold me-1">Portfolio Management:</span>Monitor and adjust investment portfolios to optimize returns and minimize risks. We provide periodic reports and strategic advice based on market fluctuations.</li>
    </ul>
</div>',
                
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title_vi' => 'Thương mại & Phân phối',
                'title_en' => 'Trade & Distribution',
                'slug' => 'thuong-mai-phan-phoi',
                'short_description_vi' => 'Dịch vụ thương mại và phân phối sản phẩm đa dạng với mạng lưới rộng khắp toàn quốc.',
                'short_description_en' => 'Trade and distribution services for diverse products with nationwide network coverage.',
                'content_vi' => '<div class="single-para">
    <h1 class="font-secondary">Thương mại & Phân phối</h1>
    <p>Về mặt thương mại, chúng tôi cung cấp các giải pháp từ đầu đến cuối bao gồm nhập khẩu sản phẩm, phân phối toàn quốc, logistics và quản lý chuỗi cung ứng hoàn chỉnh. Cho dù bạn đang tìm kiếm đối tác phân phối đáng tin cậy, mở rộng thị trường hay tối ưu hóa chi phí vận hành,</p>
    <p>MTPlus mang đến dịch vụ chuyên nghiệp, hiệu quả và chất lượng cao phù hợp với mọi nhu cầu của bạn.</p>
</div>
<div class="single-para">
    <h6>Tổng quan & Thách thức</h6>
    <p>Chúng tôi bắt đầu bằng việc phát triển các kế hoạch phân phối sơ bộ nhằm khám phá các kênh bán hàng tiềm năng, mạng lưới logistics và chiến lược tiếp cận thị trường hiệu quả</p>
</div>
<div class="single-para">
    <h6>Dịch vụ Cung cấp</h6>
    <ul class="feature-item-list style-one list-unstyled">
        <li class="position-relative"><span class="text-title fw-semibold me-1">Kế hoạch Phân phối:</span>Chúng tôi bắt đầu bằng việc phát triển các kế hoạch phân phối chi tiết nhằm khám phá các kênh bán hàng, mạng lưới đối tác và chiến lược logistics. Những kế hoạch ban đầu này đóng vai trò nền tảng cho hoạt động thương mại.</li>
        <li class="position-relative"><span class="text-title fw-semibold me-1">Quản lý Kho vận:</span>Dựa trên kế hoạch đã được phê duyệt, chúng tôi triển khai hệ thống quản lý kho vận hiện đại giúp tối ưu hóa việc lưu trữ, bảo quản và vận chuyển hàng hóa một cách hiệu quả.</li>
        <li class="position-relative"><span class="text-title fw-semibold me-1">Mạng lưới Phân phối:</span>Trong giai đoạn này, chúng tôi xây dựng và mở rộng mạng lưới phân phối, kết hợp các yếu tố logistics, đối tác bán lẻ và công nghệ theo dõi đơn hàng. Chúng tôi cung cấp giải pháp toàn diện.</li>
        <li class="position-relative"><span class="text-title fw-semibold me-1">Tối ưu Chuỗi cung ứng:</span>Phân tích và cải tiến liên tục các quy trình trong chuỗi cung ứng để giảm chi phí, rút ngắn thời gian giao hàng và nâng cao chất lượng dịch vụ khách hàng.</li>
    </ul>
</div>',
                'content_en' => '<div class="single-para">
    <h1 class="font-secondary">Trade & Distribution</h1>
    <p>On the trade side, we offer end-to-end solutions including product import, nationwide distribution, logistics and complete supply chain management. Whether you\'re looking for a reliable distribution partner, market expansion or cost optimization,</p>
    <p>MTPlus delivers professional, efficient and high-quality service tailored to all your needs.</p>
</div>
<div class="single-para">
    <h6>Overview & Challenge</h6>
    <p>We start by developing preliminary distribution plans that explore potential sales channels, logistics networks and effective market approach strategies</p>
</div>
<div class="single-para">
    <h6>Services Offered</h6>
    <ul class="feature-item-list style-one list-unstyled">
        <li class="position-relative"><span class="text-title fw-semibold me-1">Distribution Planning:</span>We start by developing detailed distribution plans that explore sales channels, partner networks and logistics strategies. These initial plans serve as the foundation for commercial operations.</li>
        <li class="position-relative"><span class="text-title fw-semibold me-1">Warehouse Management:</span>Building upon the approved plan, we implement modern warehouse management systems to optimize storage, preservation and efficient goods transportation.</li>
        <li class="position-relative"><span class="text-title fw-semibold me-1">Distribution Network:</span>During this phase, we build and expand distribution networks, incorporating logistics, retail partners and order tracking technology. We provide comprehensive solutions.</li>
        <li class="position-relative"><span class="text-title fw-semibold me-1">Supply Chain Optimization:</span>Continuously analyze and improve supply chain processes to reduce costs, shorten delivery times and enhance customer service quality.</li>
    </ul>
</div>',
    
                'is_featured' => false,
                'is_active' => true,
            ],
            [
                'title_vi' => 'Giải pháp Công nghệ',
                'title_en' => 'Technology Solutions',
                'slug' => 'giai-phap-cong-nghe',
                'short_description_vi' => 'Phát triển và triển khai các giải pháp công nghệ thông tin tiên tiến cho doanh nghiệp.',
                'short_description_en' => 'Develop and implement advanced information technology solutions for businesses.',
                'content_vi' => '<div class="single-para">
    <h1 class="font-secondary">Giải pháp Công nghệ & Chuyển đổi Số</h1>
    <p>Về mặt công nghệ, chúng tôi cung cấp các giải pháp toàn diện bao gồm phát triển phần mềm, tích hợp hệ thống, chuyển đổi số và quản lý hạ tầng CNTT hoàn chỉnh. Cho dù bạn đang xây dựng từ nền tảng mới, nâng cấp hệ thống hiện có hay đầu tư vào công nghệ với sự tự tin,</p>
    <p>MTPlus mang đến dịch vụ đáng tin cậy, kịp thời và chất lượng cao phù hợp với nhu cầu của bạn.</p>
</div>
<div class="single-para">
    <h6>Tổng quan & Thách thức</h6>
    <p>Chúng tôi bắt đầu bằng việc phát triển các khái niệm giải pháp sơ bộ nhằm khám phá các phương án kiến trúc hệ thống, công nghệ phù hợp và mô hình triển khai hiệu quả</p>
</div>
<div class="single-para">
    <h6>Dịch vụ Cung cấp</h6>
    <ul class="feature-item-list style-one list-unstyled">
        <li class="position-relative"><span class="text-title fw-semibold me-1">Thiết kế Giải pháp:</span>Chúng tôi bắt đầu bằng việc phát triển các khái niệm thiết kế sơ bộ nhằm khám phá các kiến trúc hệ thống, công nghệ và mô hình triển khai phù hợp. Những khái niệm ban đầu này đóng vai trò nền tảng cho dự án công nghệ.</li>
        <li class="position-relative"><span class="text-title fw-semibold me-1">Phát triển Phần mềm:</span>Dựa trên thiết kế đã được phê duyệt, chúng tôi phát triển các ứng dụng và hệ thống phần mềm với chất lượng cao, đáp ứng đầy đủ các yêu cầu nghiệp vụ và kỹ thuật của khách hàng.</li>
        <li class="position-relative"><span class="text-title fw-semibold me-1">Tích hợp Hệ thống:</span>Trong giai đoạn này, chúng tôi đi sâu vào chi tiết, kết nối các hệ thống và dữ liệu hiện có với giải pháp mới. Chúng tôi đảm bảo tính tương thích và hiệu suất tối ưu.</li>
        <li class="position-relative"><span class="text-title fw-semibold me-1">Vận hành & Bảo trì:</span>Cung cấp dịch vụ vận hành, giám sát 24/7, bảo trì định kỳ và hỗ trợ kỹ thuật để đảm bảo hệ thống hoạt động ổn định và hiệu quả liên tục.</li>
    </ul>
</div>',
                'content_en' => '<div class="single-para">
    <h1 class="font-secondary">Technology Solutions & Digital Transformation</h1>
    <p>On the technology side, we offer end-to-end solutions including software development, system integration, digital transformation and complete IT infrastructure management. Whether you\'re building from the ground up, upgrading existing systems or investing in technology with confidence,</p>
    <p>MTPlus delivers trusted, timely, and high-quality service tailored to your needs.</p>
</div>
<div class="single-para">
    <h6>Overview & Challenge</h6>
    <p>We start by developing preliminary solution concepts that explore system architecture options, suitable technologies and effective deployment models</p>
</div>
<div class="single-para">
    <h6>Services Offered</h6>
    <ul class="feature-item-list style-one list-unstyled">
        <li class="position-relative"><span class="text-title fw-semibold me-1">Solution Design:</span>We start by developing preliminary design concepts that explore system architectures, technologies and deployment models. These initial concepts serve as the foundation for technology projects.</li>
        <li class="position-relative"><span class="text-title fw-semibold me-1">Software Development:</span>Building upon the approved design, we develop high-quality applications and software systems that fully meet customer business and technical requirements.</li>
        <li class="position-relative"><span class="text-title fw-semibold me-1">System Integration:</span>During this phase, we delve into the details, connecting existing systems and data with new solutions. We ensure compatibility and optimal performance.</li>
        <li class="position-relative"><span class="text-title fw-semibold me-1">Operations & Maintenance:</span>Provide 24/7 operations, monitoring, periodic maintenance and technical support services to ensure the system operates stably and efficiently continuously.</li>
    </ul>
</div>',
             
                'is_featured' => false,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['slug' => $service['slug']],
                $service
            );
        }
    }
}
