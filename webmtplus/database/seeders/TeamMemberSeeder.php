<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        // Delete existing data
        TeamMember::truncate();

        // CEO / Featured Member - John Doe
        TeamMember::create([
            'name' => 'John Doe',
            'slug' => 'john-doe',
            'position_vi' => 'CEO, Founder',
            'position_en' => 'CEO, Founder',
            'detailed_position_vi' => 'Chuyên gia Bất động sản Cho thuê',
            'detailed_position_en' => 'Real Estate Rental Specialist',
            'photo' => '/frontend/assets/img/team/team-1.jpg',
            'bio_vi' => 'Với nhiều thập kỷ kinh nghiệm trong lĩnh vực xây dựng, John là người sáng lập và lãnh đạo công ty với tầm nhìn đưa công ty trở thành đơn vị hàng đầu trong ngành.',
            'bio_en' => 'With decades of experience in construction, John is the founder and leader of the company with a vision to make it the leading unit in the industry.',
            'detailed_bio_vi' => 'John Doe là người sáng lập và là trụ cột chính của MT Plus. Với hơn hai thập kỷ kinh nghiệm trong xây dựng nhà ở theo yêu cầu, ông kết hợp chuyên môn kỹ thuật với niềm đam mê thực sự đối với nghề thủ công, đảm bảo mọi dự án đều đáp ứng các tiêu chuẩn chất lượng cao nhất. Ông luôn đặt nhu cầu của khách hàng lên hàng đầu và cam kết mang đến những công trình bền vững.',
            'detailed_bio_en' => 'John Doe is the founder and cornerstone of MT Plus. With over two decades of experience in custom home construction, he combines technical expertise with a genuine passion for craftsmanship, ensuring every project meets the highest quality standards. He always puts customer needs first and is committed to delivering sustainable projects.',
            'experience_years' => 25,
            'location_vi' => 'New Jersey, New York',
            'location_en' => 'New Jersey, New York',
            'field_of_activity_vi' => 'Xây dựng và Phát triển Bất động sản',
            'field_of_activity_en' => 'Construction and Real Estate Development',
            'address' => '608 Imperial St, Los Angeles, CA 90021, Hoa Kỳ',
            'phone' => '+56 647 768 859',
            'email' => 'john.doe@mtplus.vn',
            'fax' => '7585869996',
            'specialties_vi' => [
                'Mua bán và cho thuê bất động sản',
                'Kỹ thuật Xây dựng và Kết cấu',
                'Quản lý xây dựng',
                'Kiến trúc & Thiết kế (CAD, Revit, BIM)',
            ],
            'specialties_en' => [
                'Real Estate Sales and Rental',
                'Construction Engineering and Structure',
                'Construction Management',
                'Architecture & Design (CAD, Revit, BIM)',
            ],
            'experience_list_vi' => [
                'Hàng thập kỷ kinh nghiệm xây dựng',
                'Nghệ nhân kết hợp với đổi mới hiện đại',
                'Xây dựng bền vững với vật liệu chất lượng',
                'Được tin tưởng bởi các chủ nhà',
            ],
            'experience_list_en' => [
                'Decades Of Construction Experience',
                'Craftsmanship Meets Modern Innovation',
                'Built To Last With Quality Materials',
                'Trusted By Homeowners Across',
            ],
            'facebook_url' => 'https://facebook.com',
            'twitter_url' => 'https://twitter.com',
            'linkedin_url' => 'https://linkedin.com',
            'instagram_url' => 'https://instagram.com',
            'is_featured' => true,
            'order' => 1,
            'is_active' => true,
        ]);

        // Team Members - Michael Harper and team
        $teamMembers = [
            [
                'name' => 'Michael Harper',
                'position_vi' => 'Quản lý Dự án',
                'position_en' => 'Project Manager',
                'detailed_position_vi' => 'Chuyên gia Bất động sản Cho thuê',
                'detailed_position_en' => 'Real Estate Rental Specialist',
                'bio_vi' => 'Michael là chuyên gia quản lý dự án với hơn 15 năm kinh nghiệm trong lĩnh vực xây dựng và bất động sản.',
                'bio_en' => 'Michael is a project management expert with over 15 years of experience in construction and real estate.',
                'experience_years' => 15,
                'location_vi' => 'New Jersey, New York',
                'location_en' => 'New Jersey, New York',
                'phone' => '+56 647 768 850',
                'email' => 'michael.harper@mtplus.vn',
                'order' => 2,
            ],
            [
                'name' => 'Sarah Williams',
                'position_vi' => 'Kiến trúc sư Trưởng',
                'position_en' => 'Chief Architect',
                'bio_vi' => 'Sarah chuyên về thiết kế kiến trúc hiện đại với hơn 12 năm kinh nghiệm.',
                'bio_en' => 'Sarah specializes in modern architectural design with over 12 years of experience.',
                'experience_years' => 12,
                'phone' => '+56 647 768 851',
                'email' => 'sarah.williams@mtplus.vn',
                'order' => 3,
            ],
            [
                'name' => 'David Chen',
                'position_vi' => 'Kỹ sư Xây dựng',
                'position_en' => 'Construction Engineer',
                'bio_vi' => 'David là kỹ sư xây dựng giàu kinh nghiệm với chuyên môn về kết cấu công trình.',
                'bio_en' => 'David is an experienced construction engineer with expertise in structural engineering.',
                'experience_years' => 10,
                'phone' => '+56 647 768 852',
                'email' => 'david.chen@mtplus.vn',
                'order' => 4,
            ],
            [
                'name' => 'Emma Rodriguez',
                'position_vi' => 'Giám đốc Kinh doanh',
                'position_en' => 'Business Director',
                'bio_vi' => 'Emma phụ trách phát triển kinh doanh và quan hệ khách hàng.',
                'bio_en' => 'Emma is in charge of business development and customer relations.',
                'experience_years' => 8,
                'phone' => '+56 647 768 853',
                'email' => 'emma.rodriguez@mtplus.vn',
                'order' => 5,
            ],
        ];

        foreach ($teamMembers as $member) {
            TeamMember::create([
                'name' => $member['name'],
                'slug' => \Str::slug($member['name']),
                'position_vi' => $member['position_vi'],
                'position_en' => $member['position_en'],
                'detailed_position_vi' => $member['detailed_position_vi'] ?? null,
                'detailed_position_en' => $member['detailed_position_en'] ?? null,
                'photo' => '/frontend/assets/img/team/team-1.jpg',
                'bio_vi' => $member['bio_vi'],
                'bio_en' => $member['bio_en'],
                'experience_years' => $member['experience_years'] ?? null,
                'location_vi' => $member['location_vi'] ?? null,
                'location_en' => $member['location_en'] ?? null,
                'phone' => $member['phone'] ?? null,
                'email' => $member['email'] ?? null,
                'facebook_url' => 'https://www.facebook.com',
                'twitter_url' => 'https://x.com',
                'linkedin_url' => null,
                'instagram_url' => null,
                'is_featured' => false,
                'order' => $member['order'],
                'is_active' => true,
            ]);
        }
    }
}
