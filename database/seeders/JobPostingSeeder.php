<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobPostingSeeder extends Seeder
{
    /**
     * Total job postings to generate.
     */
    private const TOTAL_POSTS = 1000;

    /**
     * Percentage of posts that should resolve to "active".
     * Since the table has no is_active column, "active" is derived from
     * deadline (null or in the future = active; past = inactive).
     */
    private const ACTIVE_RATIO = 0.90;

    public function run(): void
    {
        DB::table('job_postings')->truncate();

        $now = Carbon::now();

        $titles = [
            'government'    => [
                'Administrative Aide IV',
                'Local Government Operations Officer',
                'Municipal Agriculturist Staff',
                'Records Officer I',
                'Provincial Health Office Nurse',
                'Job Order - Utility Worker',
                'Bookkeeper III (LGU)',
                'Statistician I',
                'Human Resource Management Officer I',
                'Engineering Aide',
            ],
            'private_local' => [
                'Sales Associate',
                'Accounting Clerk',
                'IT Support Technician',
                'Store Supervisor',
                'Human Resource Assistant',
                'Marketing Officer',
                'Customer Service Representative',
                'Warehouse Staff',
                'Bank Teller',
                'Branch Operations Assistant',
            ],
            'overseas'      => [
                'Household Service Worker',
                'Construction Worker (Skilled)',
                'Hotel and Restaurant Staff',
                'Able Seaman',
                'Caregiver',
                'Welder (NC II)',
                'Factory Worker',
                'Housekeeping Cabin Crew (Cruise Ship)',
                'Domestic Helper',
                'Plumber (Skilled Worker)',
            ],
            'spes'          => [
                'Student Clerical Assistant',
                'Youth Summer Job - Records Section',
                'SPES Encoder',
                'Student Aide - Provincial Library',
                'SPES Utility Assistant',
                'Student Research Assistant',
            ],
        ];

        $companies = [
            'government'    => [
                'Provincial Government of Camarines Sur',
                'DOLE Camarines Sur',
                'PESO Camarines Sur',
                'Municipality of Pili',
                'City Government of Naga',
                'Department of Agriculture - Region V',
                'Bureau of Internal Revenue - Camarines Sur',
                'Municipality of Goa',
            ],
            'private_local' => [
                'SM City Naga',
                'Avida Land Corp.',
                'Bicol Agro-Industrial Producers Cooperative',
                'CamSur Rural Bank',
                'Robinsons Place Naga',
                'Metrobank Naga Branch',
                'Naga City Chamber of Commerce Partner Firm',
                'Bicol Isarog Agro-Industrial Corp.',
            ],
            'overseas'      => [
                'Al Habtoor Group - UAE',
                'Sinopharm Weiqida Healthcare - Saudi Arabia',
                'Princess Cruise Lines',
                'Maersk Line Manning Agency',
                'NCL Corporation Ltd.',
                'Qatar Airways Ground Services',
                'Singapore Manpower Solutions',
                'Carnival Cruise Lines',
            ],
            'spes'          => [
                'Provincial Government of Camarines Sur - SPES Program',
                'City Government of Naga - Youth Employment Office',
                'Municipality of Pili - SPES Program',
                'DOLE Special Program for Employment of Students',
            ],
        ];

        $locations = [
            'government'    => ['Naga City, Camarines Sur', 'Pili, Camarines Sur', 'Iriga City, Camarines Sur', 'Goa, Camarines Sur', 'Calabanga, Camarines Sur'],
            'private_local' => ['Naga City, Camarines Sur', 'Pili, Camarines Sur', 'Sipocot, Camarines Sur', 'Iriga City, Camarines Sur'],
            'overseas'      => ['Dubai, UAE', 'Riyadh, Saudi Arabia', 'Singapore', 'Onboard Vessel (International Waters)', 'Doha, Qatar'],
            'spes'          => ['Naga City, Camarines Sur', 'Pili, Camarines Sur', 'Iriga City, Camarines Sur'],
        ];

        $employmentTypes = [
            'government'    => ['Full-time', 'Job Order', 'Contract of Service'],
            'private_local' => ['Full-time', 'Part-time', 'Contractual'],
            'overseas'      => ['Full-time', 'Contract-based (2 years)', 'Contract-based (3 years)'],
            'spes'          => ['Part-time', 'Temporary'],
        ];

        $requirementsPool = [
            'At least a high school graduate; college level preferred.',
            'Must have relevant work experience of at least 1 year.',
            'Good communication and interpersonal skills.',
            'Willing to undergo training and orientation.',
            'Must be a resident of Camarines Sur or nearby province.',
            "Valid NBI clearance and barangay certification required.",
            'Computer literate, with basic MS Office skills.',
            'Physically fit and can work under minimal supervision.',
        ];

        $contactPool = [
            'peso.camsur@gmail.com',
            'careers@company-camsur.ph',
            '(054) 123-4567',
            '0917-000-1234',
            'https://apply.pesocamsur.gov.ph',
            'hr.recruitment@bicolfirm.com',
        ];

        $types = array_keys($titles);

        $months = $this->buildMonthBuckets($now);
        $monthCount = count($months);

        $basePerMonth = intdiv(self::TOTAL_POSTS, $monthCount);
        $remainder = self::TOTAL_POSTS % $monthCount;

        $rows = [];

        foreach ($months as $index => $monthStart) {
            /** @var Carbon $monthStart */
            $postsThisMonth = $basePerMonth + ($index < $remainder ? 1 : 0);
            $monthEnd = (clone $monthStart)->endOfMonth();
            if ($monthEnd->greaterThan($now)) {
                $monthEnd = $now->copy();
            }

            for ($i = 0; $i < $postsThisMonth; $i++) {
                $type = $types[array_rand($types)];
                $title = $titles[$type][array_rand($titles[$type])];
                $company = $companies[$type][array_rand($companies[$type])];
                $location = $locations[$type][array_rand($locations[$type])];
                $employmentType = $employmentTypes[$type][array_rand($employmentTypes[$type])];

                $postedAt = Carbon::createFromTimestamp(
                    random_int($monthStart->timestamp, max($monthStart->timestamp, $monthEnd->timestamp))
                );

                // Determine active/inactive (90% active) via deadline logic
                $shouldBeActive = (mt_rand(1, 100) <= (self::ACTIVE_RATIO * 100));

                if ($shouldBeActive) {
                    // 70% of active rows: no deadline (evergreen/active)
                    // 30% of active rows: deadline still in the future relative to now
                    if (mt_rand(1, 100) <= 70) {
                        $deadline = null;
                    } else {
                        $deadline = $now->copy()->addDays(random_int(5, 90));
                    }
                } else {
                    // Inactive: deadline already passed relative to now,
                    // but still after posted_at so it stays logically valid.
                    $deadlineCeiling = $now->copy()->subDay();
                    $earliestDeadline = $postedAt->copy()->addDays(1);
                    if ($earliestDeadline->greaterThanOrEqualTo($deadlineCeiling)) {
                        $deadline = $deadlineCeiling;
                    } else {
                        $deadline = Carbon::createFromTimestamp(
                            random_int($earliestDeadline->timestamp, $deadlineCeiling->timestamp)
                        );
                    }
                }

                $cscRequired = $type === 'government' ? (mt_rand(1, 100) <= 60) : false;

                $requirements = collect($requirementsPool)
                    ->shuffle()
                    ->take(random_int(3, 5))
                    ->map(fn ($r) => "- {$r}")
                    ->implode("\n");

                $rows[] = [
                    'title'                      => $title,
                    'department_or_company'      => $company,
                    'type'                       => $type,
                    'location'                   => $location,
                    'employment_type'            => $employmentType,
                    'csc_eligibility_required'   => $cscRequired,
                    'description'                => "We are looking for a qualified {$title} to join {$company}. This opportunity is coordinated through PESO Camarines Sur under the {$type} category.",
                    'requirements'               => $requirements,
                    'application_link_or_email'  => $contactPool[array_rand($contactPool)],
                    'image'                      => null,
                    'posted_at'                  => $postedAt,
                    'deadline'                   => $deadline,
                    'created_at'                 => $postedAt,
                    'updated_at'                 => $postedAt,
                ];
            }
        }

        foreach (array_chunk($rows, 200) as $chunk) {
            DB::table('job_postings')->insert($chunk);
        }
    }

    /**
     * Build month buckets (first day of month) from Jan 2020 up to and
     * including the current month, so this month, last month, and every
     * month back to 2020 are guaranteed coverage.
     */
    private function buildMonthBuckets(Carbon $now): array
    {
        $start = Carbon::create(2020, 1, 1)->startOfMonth();
        $end = $now->copy()->startOfMonth();

        $months = [];
        $cursor = $start->copy();
        while ($cursor->lessThanOrEqualTo($end)) {
            $months[] = $cursor->copy();
            $cursor->addMonth();
        }

        return $months;
    }
}