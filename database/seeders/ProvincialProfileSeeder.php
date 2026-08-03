<?php

namespace Database\Seeders;

use App\Models\ProvincialProfile;
use Illuminate\Database\Seeder;

class ProvincialProfileSeeder extends Seeder
{
    public function run(): void
    {
        ProvincialProfile::truncate();

        $profiles = [
            [
                'section_key' => 'overview',
                'title' => 'Profile of Camarines Sur',
                'subtitle' => 'The Heart of Bicolandia and Premiere Sports & Eco-Tourism Capital',
                'content' => 'Camarines Sur is the largest province in the Bicol Region (Region V) of the Philippines. Known for its rich cultural heritage, dramatic volcanic landscapes, pristine beaches, and world-class sports facilities, the province stands as a vital economic, educational, and tourism hub in Southern Luzon.',
                'quick_facts' => [
                    'Capital' => 'Pili',
                    'Land Area' => '5,481.60 sq km',
                    'Municipalities' => '35 Municipalities',
                    'Component City' => 'Iriga City',
                    'Independent City' => 'Naga City',
                    'Barangays' => '1,063 Barangays',
                    'Congressional Districts' => '5 Districts',
                    'Region' => 'Region V (Bicol Region)'
                ],
                'image_path' => 'img/about/camsur-capitol.jpg',
                'sort_order' => 1,
            ],
            [
                'section_key' => 'vision',
                'title' => 'Vision Statement',
                'subtitle' => 'CamSur Level Up 2030',
                'content' => 'A globally competitive, resilient, and sustainable Camarines Sur where empowered citizens enjoy high quality of life, robust economic opportunities, progressive infrastructure, and a well-preserved environment under good governance.',
                'quick_facts' => null,
                'image_path' => null,
                'sort_order' => 2,
            ],
            [
                'section_key' => 'mission',
                'title' => 'Mission Statement',
                'subtitle' => 'Our Core Mandate',
                'content' => 'To deliver inclusive public services, accelerate economic growth through eco-tourism and agriculture, foster digital innovation and employment, ensure public safety and disaster resilience, and protect the natural heritage of Camarines Sur.',
                'quick_facts' => null,
                'image_path' => null,
                'sort_order' => 3,
            ],
            [
                'section_key' => 'history',
                'title' => 'Historical Heritage',
                'subtitle' => 'From Ancient Settlements to Modern Distinction',
                'content' => 'The name "Camarines" originates from "camarin," the Spanish term for rice granaries or storehouses discovered by early Spanish explorers along the Bicol River basin. Originally part of a single province known as Tierra de Camarines, it was subdivided into Camarines Norte and Camarines Sur. Through centuries of resilience, Camarines Sur emerged as a center of faith, culture, and progress in Bicolandia.',
                'quick_facts' => null,
                'image_path' => 'img/about/camsur-history.jpg',
                'sort_order' => 4,
            ],
            [
                'section_key' => 'geography',
                'title' => 'Geography & Climate',
                'subtitle' => 'Diverse Terrains and Natural Wonders',
                'content' => 'Situated at the center of the Bicol Peninsula, Camarines Sur is bordered by Camarines Norte and Quezon to the northwest, Albay to the south, the San Bernardino Strait to the east, and Ragay Gulf to the west. Its topography ranges from fertile central plains and mountain ranges like Mt. Isarog and Mt. Iriga, to island archipelagos such as Caramoan.',
                'quick_facts' => [
                    'Climate Type' => 'Type II & Type IV (No dry season / Evenly distributed rainfall)',
                    'Highest Peak' => 'Mt. Isarog (1,966m above sea level)',
                    'Major Lakes' => 'Lake Buhi & Lake Bato',
                    'Coastline' => 'Extensive coastal bays along Pacific & Ragay Gulf'
                ],
                'image_path' => 'img/about/caramoan.jpg',
                'sort_order' => 5,
            ],
        ];

        foreach ($profiles as $profile) {
            ProvincialProfile::create($profile);
        }
    }
}