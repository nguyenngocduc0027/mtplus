<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsCategory;
use App\Models\NewsTag;
use App\Models\News;
use App\Models\NewsComment;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Create Categories
        $categories = [
            [
                'name_vi' => 'Xây dựng',
                'name_en' => 'Building',
                'slug' => 'building',
                'description_vi' => 'Tin tức về xây dựng và thi công',
                'description_en' => 'News about building and construction',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name_vi' => 'Kiến trúc',
                'name_en' => 'Architecture',
                'slug' => 'architecture',
                'description_vi' => 'Tin tức về thiết kế kiến trúc',
                'description_en' => 'News about architectural design',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name_vi' => 'Thiết kế nội thất',
                'name_en' => 'Interior Design',
                'slug' => 'interior-design',
                'description_vi' => 'Tin tức về thiết kế nội thất',
                'description_en' => 'News about interior design',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name_vi' => 'Thi công',
                'name_en' => 'Construction',
                'slug' => 'construction',
                'description_vi' => 'Tin tức về thi công và giám sát',
                'description_en' => 'News about construction and supervision',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'name_vi' => 'Bất động sản',
                'name_en' => 'Real Estate',
                'slug' => 'real-estate',
                'description_vi' => 'Tin tức về thị trường bất động sản',
                'description_en' => 'News about real estate market',
                'order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            NewsCategory::create($category);
        }

        // 2. Create Tags
        $tags = [
            ['name_vi' => 'Kinh doanh', 'name_en' => 'Business', 'slug' => 'business'],
            ['name_vi' => 'Phát triển', 'name_en' => 'Development', 'slug' => 'development'],
            ['name_vi' => 'Thiết kế', 'name_en' => 'Design', 'slug' => 'design'],
            ['name_vi' => 'Marketing', 'name_en' => 'Marketing', 'slug' => 'marketing'],
            ['name_vi' => 'Bất động sản', 'name_en' => 'Real Estate', 'slug' => 'real-estate'],
            ['name_vi' => 'Tài sản', 'name_en' => 'Property', 'slug' => 'property'],
            ['name_vi' => 'Đầu tư', 'name_en' => 'Investment', 'slug' => 'investment'],
            ['name_vi' => 'Xu hướng', 'name_en' => 'Trends', 'slug' => 'trends'],
        ];

        foreach ($tags as $tag) {
            NewsTag::create($tag);
        }

        // 3. Create News Posts
        $newsPosts = [
            [
                'title_vi' => 'Mẹo Cải Tạo Nhà Bếp Hàng Đầu Để Tối Đa Hóa Không Gian Và Phong Cách',
                'title_en' => 'Top Kitchen Renovation Tips To Maximize Space And Style',
                'slug' => 'top-kitchen-renovation-tips',
                'category_id' => 3, // Interior Design
                'excerpt_vi' => 'Khám phá những mẹo cải tạo nhà bếp tốt nhất để tạo ra không gian vừa chức năng vừa đẹp mắt.',
                'excerpt_en' => 'Discover the best kitchen renovation tips to create a space that is both functional and beautiful.',
                'content_vi' => '<h6>Làm Thế Nào Thời Tiết Có Thể Ảnh Hưởng Đến Dự Án Xây Dựng</h6>
<p>Tại Renius Real Estate & Construction Group, chúng tôi tin rằng kiến thức giúp đưa ra quyết định tốt hơn - cho dù bạn đang đầu tư vào bất động sản, quản lý dự án xây dựng hay khám phá các xu hướng ngành. Blog của chúng tôi là không gian chuyên biệt nơi chúng tôi chia sẻ những hiểu biết chuyên môn, điểm nổi bật của dự án.</p>
<p>Cập nhật thị trường và tư duy lãnh đạo về bất động sản và xây dựng. Dù bạn là khách hàng, đối tác hay chuyên gia ngành, bạn sẽ tìm thấy nội dung có giá trị.</p>

<h6>Tổng Quan & Thách Thức</h6>
<p>Chúng tôi bắt đầu bằng cách phát triển các khái niệm thiết kế sơ bộ khám phá các cách bố trí không gian khác nhau, mô hình lưu thông và phong cách kiến trúc.</p>',
                'content_en' => '<h6>How Weather Can Impact a Construction Project</h6>
<p>At Renius Real Estate & Construction Group, we believe knowledge empowers better decisions—whether you\'re investing in property, managing a build, or exploring industry trends. Our blog is a dedicated space where we share expert insights, project highlights.</p>
<p>Market updates, and thought leadership on real estate and construction. Whether you\'re a client, partner, or industry professional, you\'ll find valuable content.</p>

<h6>Overview & Challenge</h6>
<p>We start by developing preliminary design concepts that explore various spatial arrangements, circulation patterns, and architectural styles.</p>',
                'featured_image' => '/frontend/assets/img/blog/blog-1.jpg',
                'author_name' => 'Admin',
                'published_at' => now()->subDays(5),
                'status' => 'published',
                'is_featured' => true,
                'is_active' => true,
                'view_count' => 156,
                'comment_count' => 3,
            ],
            [
                'title_vi' => 'Xu Hướng Cải Tạo Ngoài Trời Sẽ Nâng Tầm Sân Sau Của Bạn',
                'title_en' => 'Outdoor Renovation Trends That Will Elevate Your Backyard',
                'slug' => 'outdoor-renovation-trends',
                'category_id' => 2, // Architecture
                'excerpt_vi' => 'Khám phá những xu hướng cải tạo ngoài trời mới nhất để biến sân sau thành ốc đảo thư giãn.',
                'excerpt_en' => 'Explore the latest outdoor renovation trends to transform your backyard into a relaxation oasis.',
                'content_vi' => '<h6>Xu Hướng Thiết Kế Sân Vườn Hiện Đại</h6>
<p>Trong những năm gần đây, không gian ngoài trời đã trở thành phần mở rộng quan trọng của ngôi nhà. Chúng tôi tại Renius đã chứng kiến sự gia tăng nhu cầu về các giải pháp thiết kế sân vườn sáng tạo.</p>
<p>Từ khu vực nấu ăn ngoài trời đến khu vườn thiền, mỗi dự án đều phản ánh phong cách sống độc đáo của gia chủ.</p>

<h6>Giải Pháp Bền Vững</h6>
<p>Chúng tôi ưu tiên sử dụng vật liệu thân thiện với môi trường và hệ thống tưới tiết kiệm nước để tạo ra không gian xanh bền vững.</p>',
                'content_en' => '<h6>Modern Garden Design Trends</h6>
<p>In recent years, outdoor spaces have become an important extension of the home. We at Renius have witnessed a surge in demand for innovative garden design solutions.</p>
<p>From outdoor cooking areas to zen gardens, each project reflects the unique lifestyle of homeowners.</p>

<h6>Sustainable Solutions</h6>
<p>We prioritize the use of environmentally friendly materials and water-saving irrigation systems to create sustainable green spaces.</p>',
                'featured_image' => '/frontend/assets/img/blog/blog-2.jpg',
                'author_name' => 'Admin',
                'published_at' => now()->subDays(10),
                'status' => 'published',
                'is_trending' => true,
                'is_active' => true,
                'view_count' => 243,
                'comment_count' => 2,
            ],
            [
                'title_vi' => 'Tránh Những Sai Lầm Phổ Biến Khi Cải Tạo Nhà',
                'title_en' => 'Avoid These Common Mistakes During Your Home Renovation',
                'slug' => 'avoid-common-renovation-mistakes',
                'category_id' => 1, // Building
                'excerpt_vi' => 'Tìm hiểu những sai lầm phổ biến trong cải tạo nhà và cách tránh chúng để dự án thành công.',
                'excerpt_en' => 'Learn about common home renovation mistakes and how to avoid them for a successful project.',
                'content_vi' => '<h6>Lập Kế Hoạch Là Chìa Khóa</h6>
<p>Một trong những sai lầm lớn nhất là bắt đầu cải tạo mà không có kế hoạch chi tiết. Tại Renius, chúng tôi luôn nhấn mạnh tầm quan trọng của giai đoạn lập kế hoạch.</p>
<p>Kế hoạch tốt giúp kiểm soát ngân sách, thời gian và đảm bảo chất lượng công trình.</p>

<h6>Ngân Sách Hợp Lý</h6>
<p>Đừng quên dự phòng 10-20% ngân sách cho những chi phí phát sinh không lường trước được.</p>',
                'content_en' => '<h6>Planning Is Key</h6>
<p>One of the biggest mistakes is starting a renovation without a detailed plan. At Renius, we always emphasize the importance of the planning phase.</p>
<p>A good plan helps control budget, timeline and ensures construction quality.</p>

<h6>Reasonable Budget</h6>
<p>Don\'t forget to reserve 10-20% of your budget for unforeseen costs.</p>',
                'featured_image' => '/frontend/assets/img/blog/blog-3.jpg',
                'author_name' => 'Admin',
                'published_at' => now()->subDays(15),
                'status' => 'published',
                'is_active' => true,
                'view_count' => 189,
                'comment_count' => 3,
            ],
            [
                'title_vi' => '5 Xu Hướng Định Hình Tương Lai Phát Triển Bất Động Sản Năm 2025',
                'title_en' => '5 Trends Shaping The Future Of Real Estate Development In 2025',
                'slug' => 'real-estate-trends-2025',
                'category_id' => 5, // Real Estate
                'excerpt_vi' => 'Khám phá 5 xu hướng lớn đang định hình thị trường bất động sản trong năm 2025.',
                'excerpt_en' => 'Discover 5 major trends shaping the real estate market in 2025.',
                'content_vi' => '<h6>Công Nghệ Thông Minh</h6>
<p>Smart home technology đang trở thành tiêu chuẩn mới trong các dự án bất động sản cao cấp. Từ hệ thống quản lý năng lượng đến an ninh thông minh.</p>

<h6>Phát Triển Bền Vững</h6>
<p>Xu hướng xây dựng xanh không còn là lựa chọn mà đã trở thành yêu cầu bắt buộc trong nhiều dự án.</p>',
                'content_en' => '<h6>Smart Technology</h6>
<p>Smart home technology is becoming the new standard in high-end real estate projects. From energy management systems to smart security.</p>

<h6>Sustainable Development</h6>
<p>Green building trends are no longer optional but have become mandatory requirements in many projects.</p>',
                'featured_image' => '/frontend/assets/img/blog/blog-4.jpg',
                'author_name' => 'Admin',
                'published_at' => now()->subDays(20),
                'status' => 'published',
                'is_featured' => true,
                'is_active' => true,
                'view_count' => 312,
                'comment_count' => 0,
            ],
            [
                'title_vi' => 'Điều Gì Mong Đợi Khi Hợp Tác Với Tập Đoàn Xây Dựng Toàn Diện',
                'title_en' => 'Expect When Partnering With A Full-Service Construction Group',
                'slug' => 'partnering-with-construction-group',
                'category_id' => 4, // Construction
                'excerpt_vi' => 'Tìm hiểu lợi ích và quy trình làm việc khi hợp tác với tập đoàn xây dựng toàn diện.',
                'excerpt_en' => 'Learn about the benefits and workflow when partnering with a full-service construction group.',
                'content_vi' => '<h6>Quy Trình Làm Việc Chuyên Nghiệp</h6>
<p>Khi hợp tác với Renius, bạn có được đối tác đồng hành từ khâu thiết kế, thi công đến bàn giao. Chúng tôi cam kết minh bạch trong mọi giai đoạn dự án.</p>

<h6>Đội Ngũ Chuyên Gia</h6>
<p>Với đội ngũ kỹ sư, kiến trúc sư và quản lý dự án giàu kinh nghiệm, chúng tôi đảm bảo chất lượng cao nhất.</p>',
                'content_en' => '<h6>Professional Workflow</h6>
<p>When partnering with Renius, you get a companion from design, construction to handover. We commit to transparency in every project phase.</p>

<h6>Expert Team</h6>
<p>With experienced engineers, architects and project managers, we ensure the highest quality.</p>',
                'featured_image' => '/frontend/assets/img/blog/blog-5.jpg',
                'author_name' => 'Admin',
                'published_at' => now()->subDays(25),
                'status' => 'published',
                'is_active' => true,
                'view_count' => 145,
                'comment_count' => 0,
            ],
            [
                'title_vi' => 'Bên Trong Dự Án Renius: Các Giai Đoạn Xây Dựng Thương Mại',
                'title_en' => 'Inside A Renius Project The Phases Of Commercial Construction',
                'slug' => 'phases-of-commercial-construction',
                'category_id' => 1, // Building
                'excerpt_vi' => 'Khám phá chi tiết các giai đoạn của dự án xây dựng thương mại từ ý tưởng đến hoàn thiện.',
                'excerpt_en' => 'Explore detailed phases of commercial construction projects from concept to completion.',
                'content_vi' => '<h6>Giai Đoạn Tiền Thiết Kế</h6>
<p>Mọi dự án lớn đều bắt đầu từ giai đoạn khảo sát, phân tích và lập kế hoạch chi tiết. Chúng tôi làm việc chặt chẽ với khách hàng để hiểu rõ nhu cầu.</p>

<h6>Thi Công & Giám Sát</h6>
<p>Giai đoạn thi công được giám sát chặt chẽ với hệ thống báo cáo tiến độ hàng tuần, đảm bảo chất lượng và tiến độ.</p>',
                'content_en' => '<h6>Pre-Design Phase</h6>
<p>Every major project starts with surveying, analysis and detailed planning. We work closely with clients to understand their needs.</p>

<h6>Construction & Supervision</h6>
<p>The construction phase is closely supervised with weekly progress reporting system, ensuring quality and timeline.</p>',
                'featured_image' => '/frontend/assets/img/blog/blog-6.jpg',
                'author_name' => 'Admin',
                'published_at' => now()->subDays(30),
                'status' => 'published',
                'is_active' => true,
                'view_count' => 98,
                'comment_count' => 0,
            ],
        ];

        foreach ($newsPosts as $index => $newsData) {
            $news = News::create($newsData);

            // Attach random tags (2-3 tags per post)
            $tagIds = NewsTag::inRandomOrder()->limit(rand(2, 3))->pluck('id');
            $news->tags()->attach($tagIds);
        }

        // 4. Create Sample Comments (for first 3 posts)
        $comments = [
            [
                'news_id' => 1,
                'author_name' => 'Nguyễn Văn A',
                'author_email' => 'nguyenvana@example.com',
                'content' => 'Bài viết rất hữu ích! Cảm ơn đội ngũ Renius đã chia sẻ.',
                'is_approved' => true,
            ],
            [
                'news_id' => 1,
                'author_name' => 'Trần Thị B',
                'author_email' => 'tranthib@example.com',
                'content' => 'Tôi đang có kế hoạch cải tạo nhà bếp, những mẹo này rất thiết thực.',
                'is_approved' => true,
            ],
            [
                'news_id' => 2,
                'author_name' => 'Lê Văn C',
                'author_email' => 'levanc@example.com',
                'content' => 'Thiết kế sân vườn của Renius rất đẹp, mong có thêm nhiều dự án mẫu.',
                'is_approved' => true,
            ],
            [
                'news_id' => 3,
                'author_name' => 'Phạm Thị D',
                'author_email' => 'phamthid@example.com',
                'content' => 'Những lời khuyên rất bổ ích cho người mới bắt đầu cải tạo nhà.',
                'is_approved' => true,
            ],
        ];

        foreach ($comments as $comment) {
            NewsComment::create($comment);
        }

        echo "✅ Created " . NewsCategory::count() . " categories\n";
        echo "✅ Created " . NewsTag::count() . " tags\n";
        echo "✅ Created " . News::count() . " news posts\n";
        echo "✅ Created " . NewsComment::count() . " comments\n";
    }
}
