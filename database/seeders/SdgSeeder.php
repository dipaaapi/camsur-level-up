<?php

namespace Database\Seeders;

use App\Models\Sdg;
use Illuminate\Database\Seeder;

class SdgSeeder extends Seeder
{
    public function run(): void
    {
        Sdg::truncate();

        $sdgs = [
            [
                'number' => 1, 'code' => 'SDG 1', 'name' => 'No Poverty',
                'un_meaning' => 'End poverty in all its forms everywhere by ensuring social protection, economic opportunity, and equal access to resources.',
                'camsur_commitment' => 'Pagsusulong ng emergency financial aid, livelihood starter kits, at tulong pangkabuhayan sa mga marginalized sectors sa buong 35 bayan.',
                'key_targets' => ['Social Protection Systems', 'Equal Economic Opportunities', 'Disaster Resilience for the Poor'],
                'color_hex' => '#E5243B'
            ],
            [
                'number' => 2, 'code' => 'SDG 2', 'name' => 'Zero Hunger',
                'un_meaning' => 'End hunger, achieve food security and improved nutrition, and promote sustainable agriculture.',
                'camsur_commitment' => 'Pamamahagi ng certified rice seeds, fertilizer subsidies, at modernong farm machineries sa ating mga magsasaka sa Camarines Sur.',
                'key_targets' => ['Sustainable Food Production', 'Agricultural Productivity', 'Malnutrition Interventions'],
                'color_hex' => '#DDA63A'
            ],
            [
                'number' => 3, 'code' => 'SDG 3', 'name' => 'Good Health and Well-Being',
                'un_meaning' => 'Ensure healthy lives and promote well-being for all at all ages through accessible public health services.',
                'camsur_commitment' => 'Libreng konsultasyon, gamot, at mobile medical missions mula sa Provincial Health Office sa mga malalayong coastal towns.',
                'key_targets' => ['Universal Health Coverage', 'Maternal & Child Health', 'Epidemic Prevention & Response'],
                'color_hex' => '#4C9F38'
            ],
            [
                'number' => 4, 'code' => 'SDG 4', 'name' => 'Quality Education',
                'un_meaning' => 'Ensure inclusive and equitable quality education and promote lifelong learning opportunities for all.',
                'camsur_commitment' => 'Paggawad ng educational assistance grants, scholarship programs, at pagpapatayo ng mas modernong pasilidad sa ating pampublikong paaralan.',
                'key_targets' => ['Tertiary Scholarship Access', 'Digital Education Infrastructure', 'Skills Training Programs'],
                'color_hex' => '#C5192D'
            ],
            [
                'number' => 5, 'code' => 'SDG 5', 'name' => 'Gender Equality',
                'un_meaning' => 'Achieve gender equality and empower all women and girls in governance, economy, and community leadership.',
                'camsur_commitment' => 'Pagpapalakas ng Women’s Welfare Programs, Protection of Children, at pagbibigay ng pantay na oportunidad sa pamumuno.',
                'key_targets' => ['Women Leadership Expansion', 'Ending Gender Violence', 'Economic Empowerment'],
                'color_hex' => '#FF3A21'
            ],
            [
                'number' => 6, 'code' => 'SDG 6', 'name' => 'Clean Water and Sanitation',
                'un_meaning' => 'Ensure availability and sustainable management of water and sanitation for all communities.',
                'camsur_commitment' => 'Pagtataguyod ng Level III Potable Water Systems at sanitation facilities sa mga rural barangays ng lalawigan.',
                'key_targets' => ['Safe Drinking Water Infrastructure', 'Water Ecosystem Protection', 'Rural Sanitation Facilities'],
                'color_hex' => '#26BDE2'
            ],
            [
                'number' => 7, 'code' => 'SDG 7', 'name' => 'Affordable and Clean Energy',
                'un_meaning' => 'Ensure access to affordable, reliable, sustainable, and modern energy for all.',
                'camsur_commitment' => 'Pagsusulong ng solar-powered public facilities at pagsuporta sa renewable energy initiatives sa Camarines Sur.',
                'key_targets' => ['Solar Facility Conversions', 'Off-grid Island Powering', 'Clean Energy Adoption'],
                'color_hex' => '#FCC30B'
            ],
            [
                'number' => 8, 'code' => 'SDG 8', 'name' => 'Decent Work and Economic Growth',
                'un_meaning' => 'Promote sustained, inclusive, and sustainable economic growth, full and productive employment, and decent work for all.',
                'camsur_commitment' => 'Pag-aayos ng Job Fairs sa pamamagitan ng PESO Camsur, pagsuporta sa MSMEs, at pagpapalakas ng eco-tourism sector.',
                'key_targets' => ['Youth Employment Initiatives', 'Local Tourism Growth', 'MSME Financial Assistance'],
                'color_hex' => '#A21942'
            ],
            [
                'number' => 9, 'code' => 'SDG 9', 'name' => 'Industry, Innovation and Infrastructure',
                'un_meaning' => 'Build resilient infrastructure, promote inclusive and sustainable industrialization, and foster innovation.',
                'camsur_commitment' => 'Pagpapatayo ng mga farm-to-market roads, digitalization ng mga pampublikong serbisyo, at modernong Capitol facilities.',
                'key_targets' => ['Farm-to-Market Road Networks', 'Digital Government Services', 'Resilient Public Infrastructure'],
                'color_hex' => '#FD6925'
            ],
            [
                'number' => 10, 'code' => 'SDG 10', 'name' => 'Reduced Inequalities',
                'un_meaning' => 'Reduce inequality within communities by empowering vulnerable groups and Indigenous Peoples.',
                'camsur_commitment' => 'Inclusibong pampublikong serbisyo para sa ating Indigenous Peoples (IPs), Senior Citizens, at Persons with Disabilities (PWDs).',
                'key_targets' => ['Indigenous Peoples (IP) Welfare', 'PWD Accessibility & Grants', 'Senior Citizen Social Services'],
                'color_hex' => '#DD1367'
            ],
            [
                'number' => 11, 'code' => 'SDG 11', 'name' => 'Sustainable Cities and Communities',
                'un_meaning' => 'Make cities and human settlements inclusive, safe, resilient, and sustainable.',
                'camsur_commitment' => 'Modernisasyon ng PDRRMO disaster response units, flood mitigation infrastructure, at housing assistance.',
                'key_targets' => ['Disaster Preparedness Units', 'Urban Flood Mitigation', 'Community Housing Programs'],
                'color_hex' => '#FD9D24'
            ],
            [
                'number' => 12, 'code' => 'SDG 12', 'name' => 'Responsible Consumption and Production',
                'un_meaning' => 'Ensure sustainable consumption and production patterns through waste reduction and local product support.',
                'camsur_commitment' => 'Pagsuporta sa locally-sourced organic farm produce at solid waste management programs sa mga munisipyo.',
                'key_targets' => ['Solid Waste Management', 'Local Organic Produce Support', 'Sustainable Tourism Operations'],
                'color_hex' => '#BF8B2E'
            ],
            [
                'number' => 13, 'code' => 'SDG 13', 'name' => 'Climate Action',
                'un_meaning' => 'Take urgent action to combat climate change and its impacts through environmental protection and readiness.',
                'camsur_commitment' => 'Provincial tree-planting drives, coastal mangrove reforestation sa Ragay Gulf, at climate resilience planning.',
                'key_targets' => ['Mangrove Coastal Reforestation', 'Tree Planting Campaigns', 'Climate Adaptation Plans'],
                'color_hex' => '#3F7E44'
            ],
            [
                'number' => 14, 'code' => 'SDG 14', 'name' => 'Life Below Water',
                'un_meaning' => 'Conserve and sustainably use the oceans, seas, and marine resources for sustainable development.',
                'camsur_commitment' => 'Pangangalaga sa marine sanctuaries sa Caramoan Islands at pagbibigay ng suporta sa ating coastal fisherfolk.',
                'key_targets' => ['Marine Sanctuary Protection', 'Coastal Fisherfolk Assistance', 'Anti-Illegal Fishing Patrols'],
                'color_hex' => '#0A97D9'
            ],
            [
                'number' => 15, 'code' => 'SDG 15', 'name' => 'Life on Land',
                'un_meaning' => 'Protect, restore, and promote sustainable use of terrestrial ecosystems and forests.',
                'camsur_commitment' => 'Proteksyon sa Mount Isarog Natural Park, watershed preservation, at anti-illegal logging monitoring.',
                'key_targets' => ['Mount Isarog Protection', 'Watershed Management', 'Forest Reforestation Drives'],
                'color_hex' => '#56C02B'
            ],
            [
                'number' => 16, 'code' => 'SDG 16', 'name' => 'Peace, Justice and Strong Institutions',
                'un_meaning' => 'Promote peaceful and inclusive societies, provide access to justice, and build effective, accountable institutions.',
                'camsur_commitment' => 'Tapat at transparent na pamamahala, compliance sa Seal of Good Local Governance (SGLG), at FOI implementation.',
                'key_targets' => ['Transparency & FOI Compliance', 'SGLG Standards Maintenance', 'Public Governance Integrity'],
                'color_hex' => '#00689D'
            ],
            [
                'number' => 17, 'code' => 'SDG 17', 'name' => 'Partnerships for the Goals',
                'un_meaning' => 'Strengthen the means of implementation and revitalize the Global Partnership for Sustainable Development.',
                'camsur_commitment' => 'Pakikipagtulungan sa mga National Agencies, Private Sector, NGOs, at International Bodies para sa kaunlaran ng Camsur.',
                'key_targets' => ['Inter-Agency Development Pacts', 'Private Sector Investment', 'International Development Grants'],
                'color_hex' => '#19486A'
            ],
        ];

        foreach ($sdgs as $sdg) {
            Sdg::create($sdg);
        }
    }
}