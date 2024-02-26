<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $posts = [
            [
                'title' => 'Exploring the Beauty of Nature',
                'author' => 'John Doe',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image_url' => 'https://fastly.picsum.photos/id/43/1280/831.jpg?hmac=glK-rQ0ppFClW-lvjk9FqEWKog07XkOxJf6Xg_cU9LI',
                'likes' => 25,
            ],
            [
                'title' => 'A Journey Through Time and Space',
                'author' => 'Jane Smith',
                'content' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'image_url' => 'https://fastly.picsum.photos/id/9/5000/3269.jpg?hmac=cZKbaLeduq7rNB8X-bigYO8bvPIWtT-mh8GRXtU3vPc',
                'likes' => 30,
            ],
            [
                'title' => 'Capturing Moments: Photography Adventures',
                'author' => 'Alice Johnson',
                'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image_url' => 'https://fastly.picsum.photos/id/21/3008/2008.jpg?hmac=T8DSVNvP-QldCew7WD4jj_S3mWwxZPqdF0CNPksSko4',
                'likes' => 15,
            ],
            [
                'title' => 'Dreamy Landscapes: A Visual Journey',
                'author' => 'Bob Williams',
                'content' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'image_url' => 'https://fastly.picsum.photos/id/26/4209/2769.jpg?hmac=vcInmowFvPCyKGtV7Vfh7zWcA_Z0kStrPDW3ppP0iGI',
                'likes' => 20,
            ],
            [
                'title' => 'Adventures in the Wilderness: Exploring the Unknown',
                'author' => 'Emma Brown',
                'content' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'image_url' => 'https://fastly.picsum.photos/id/27/3264/1836.jpg?hmac=p3BVIgKKQpHhfGRRCbsi2MCAzw8mWBCayBsKxxtWO8g',
                'likes' => 18,
            ],
            [
                'title' => 'In the Footsteps of Giants: Epic Landscapes and Adventures',
                'author' => 'David Wilson',
                'content' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.',
                'image_url' => 'https://fastly.picsum.photos/id/28/4928/3264.jpg?hmac=GnYF-RnBUg44PFfU5pcw_Qs0ReOyStdnZ8MtQWJqTfA',
                'likes' => 22,
            ],
            [
                'title' => 'Discovering Hidden Treasures: Journey to the Unknown',
                'author' => 'Olivia Taylor',
                'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.',
                'image_url' => 'https://fastly.picsum.photos/id/22/4434/3729.jpg?hmac=fjZdkSMZJNFgsoDh8Qo5zdA_nSGUAWvKLyyqmEt2xs0',
                'likes' => 16,
            ],
            [
                'title' => 'A Glimpse of Paradise: Exploring Exotic Destinations',
                'author' => 'James Lee',
                'content' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.',
                'image_url' => 'https://fastly.picsum.photos/id/16/2500/1667.jpg?hmac=uAkZwYc5phCRNFTrV_prJ_0rP0EdwJaZ4ctje2bY7aE',
                'likes' => 28,
            ],
            [
                'title' => 'Unveiling Mysteries: Journey to the Unknown',
                'author' => 'Sophia Garcia',
                'content' => 'Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.',
                'image_url' => 'https://fastly.picsum.photos/id/14/2500/1667.jpg?hmac=ssQyTcZRRumHXVbQAVlXTx-MGBxm6NHWD3SryQ48G-o',
                'likes' => 12,
            ],
            [
                'title' => 'A Walk Through the Enchanted Forest: Nature\'s Wonders',
                'author' => 'Michael Brown',
                'content' => 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.',
                'image_url' => 'https://fastly.picsum.photos/id/13/2500/1667.jpg?hmac=SoX9UoHhN8HyklRA4A3vcCWJMVtiBXUg0W4ljWTor7s',
                'likes' => 14,
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
