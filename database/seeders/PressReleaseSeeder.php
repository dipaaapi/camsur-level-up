<?php

namespace Database\Seeders;

use App\Models\PressRelease;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PressReleaseSeeder extends Seeder
{
    public function run(): void
    {
        PressRelease::truncate();

        $authors = [
            'Office of the Provincial Governor',
            'Provincial Information Office',
            'Provincial Engineering Office',
            'Provincial Health Office',
            'Camsur Tourism Board',
            'Provincial Agriculture Office',
            'Youth & Scholarship Office',
            'PENRO Camsur',
            'PESO Camsur',
            'PDRRMO Camsur',
            'Provincial Trade & Industry Center'
        ];

        $categories = ['Governance', 'Infrastructure', 'Health & Welfare', 'Tourism', 'Agriculture', 'Education', 'Environment', 'Livelihood', 'Public Safety', 'Commerce'];

        $sdgOptions = [
            ['SDG 1: No Poverty', 'SDG 2: Zero Hunger'],
            ['SDG 3: Good Health & Well-being'],
            ['SDG 4: Quality Education'],
            ['SDG 8: Decent Work', 'SDG 9: Innovation'],
            ['SDG 9: Infrastructure', 'SDG 11: Sustainable Cities'],
            ['SDG 13: Climate Action', 'SDG 15: Life on Land'],
            ['SDG 16: Strong Institutions', 'SDG 17: Partnerships']
        ];

        $images = [
            'https://images.unsplash.com/photo-1541872703-74c5e44368f9?auto=format&fit=crop&w=600&q=80',
            'https://images.unsplash.com/photo-1526628953301-3e589a6a8b74?auto=format&fit=crop&w=600&q=80',
            'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=600&q=80',
            'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=600&q=80',
            'https://images.unsplash.com/photo-1500937386664-56d1dfef3854?auto=format&fit=crop&w=600&q=80',
            'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=600&q=80',
            'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&w=600&q=80',
            'https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=600&q=80'
        ];

        // 🌟 1. Single Featured Item
        PressRelease::create([
            'title' => 'Provincial Government Unveils Modernized Digital Public Service & Transparency Portal',
            'slug' => Str::slug('Provincial Government Unveils Modernized Digital Public Service Transparency Portal'),
            'excerpt' => 'The Provincial Capitol launches its upgraded digital platform designed to fast-track public applications and enhance transparency seal compliance.',
            'content' => 'Full details regarding the launch of the new digital portal in Camarines Sur...',
            'author' => 'Office of the Provincial Governor',
            'category' => 'Governance',
            'sdgs' => ['SDG 9: Industry & Innovation', 'SDG 16: Strong Institutions'],
            'image' => 'https://images.unsplash.com/photo-1541872703-74c5e44368f9?auto=format&fit=crop&w=1200&q=80',
            'is_featured' => true,
            'published_at' => Carbon::now(),
        ]);

        // 📋 2. Generate 199 Records Spanning Current Time back to Past Years
        for ($i = 1; $i <= 199; $i++) {
            $cat = $categories[array_rand($categories)];
            $author = $authors[array_rand($authors)];
            $sdgs = $sdgOptions[array_rand($sdgOptions)];
            $img = $images[array_rand($images)];

            // Spread dates over the last ~2 years
            $pubDate = Carbon::now()->subHours($i * 9);

            $title = match ($cat) {
                'Governance' => "Capitol Initiates Phase {$i} of Public Governance Efficiency Reform",
                'Infrastructure' => "Road Network Expansion Project Completed in District #{$i}",
                'Health & Welfare' => "Mobile Health Mission Serves Rural Barangays Batch #{$i}",
                'Tourism' => "Camarines Sur Eco-Tourism Promotion Drive Highlighted in Regional Summit #{$i}",
                'Agriculture' => "Distribution of Seed & Fertilizer Subsidies to Farmers Batch #{$i}",
                'Education' => "Tertiary Educational Assistance Grants Distribution #{$i}",
                'Environment' => "Coastal Reforestation Activity Planted Mangrove Seedlings #{$i}",
                'Livelihood' => "Mega Job Fair Connects Applicants with Local & Foreign Employers #{$i}",
                'Public Safety' => "Disaster Preparedness Equipment Inspection & Drill Session #{$i}",
                default => "Micro-Enterprise Trade Fair Generates Record Local Sales #{$i}",
            };

            PressRelease::create([
                'title' => $title,
                'slug' => Str::slug($title . '-' . $i),
                'excerpt' => "Official statement regarding {$title}. The Provincial Capitol continues to implement sustainable public programs across all districts.",
                'content' => "Full details of official statement #{$i}...",
                'author' => $author,
                'category' => $cat,
                'sdgs' => $sdgs,
                'image' => $img,
                'is_featured' => false,
                'published_at' => $pubDate,
            ]);
        }
    }
}