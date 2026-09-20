<?php
    // Safe fetching of active counts for each job type
    $govtCount = $govtActiveCount ?? (\App\Models\JobPosting::class && method_exists(\App\Models\JobPosting::class, 'scopeActive') 
        ? \App\Models\JobPosting::active()->ofType('government')->count() 
        : 0);

    $localCount = $localActiveCount ?? (\App\Models\JobPosting::class && method_exists(\App\Models\JobPosting::class, 'scopeActive') 
        ? \App\Models\JobPosting::active()->ofType('private_local')->count() 
        : 0);

    $overseasCount = $overseasActiveCount ?? (\App\Models\JobPosting::class && method_exists(\App\Models\JobPosting::class, 'scopeActive') 
        ? \App\Models\JobPosting::active()->ofType('overseas')->count() 
        : 0);

    $spesCount = $spesActiveCount ?? (\App\Models\JobPosting::class && method_exists(\App\Models\JobPosting::class, 'scopeActive') 
        ? \App\Models\JobPosting::active()->ofType('spes')->count() 
        : 0);

    $totalActiveCount = $govtCount + $localCount + $overseasCount + $spesCount;

    // Partner Agencies Data with In-Depth Mandate, Portal Contribution, and Official Website
    $partnerAgencies = [
        [
            'id' => 'peso',
            'name' => 'PESO CamSur',
            'fullName' => 'Public Employment Service Office',
            'acronym' => 'PESO',
            'role' => 'Provincial Employment & Facilitation Arm',
            'logo' => asset('img/home/careers/peso.jpg'),
            'tag' => 'Provincial Office',
            'badgeColor' => 'border-amber-500/30 bg-amber-500/10 text-amber-300',
            'website' => 'https://www.facebook.com/camsur.peso',
            'contribution' => 'Primary coordinator and manager of local job registries, job fair caravans, and referral services across all 35 municipalities of Camarines Sur.',
            'description' => 'A non-fee charging multi-employment service facility established pursuant to Republic Act No. 8759 (PESO Act of 1999). It provides timely labor market information, career guidance, and facilitates employment matching directly for Bicolano jobseekers.',
            'mandate' => 'RA 8759 (PESO Act) / Provincial Government of Camarines Sur',
            'keyServices' => [
                'Local & Overseas Job Placement Referral',
                'Provincial Job Fair Caravans & Hiring Events',
                'Special Program for Employment of Students (SPES)',
                'Labor Market Information (LMI) & Career Coaching'
            ]
        ],
        [
            'id' => 'dole',
            'name' => 'DOLE',
            'fullName' => 'Department of Labor and Employment',
            'acronym' => 'DOLE Region V',
            'role' => 'National Labor Policy & Worker Welfare',
            'logo' => asset('img/home/careers/dole.png'),
            'tag' => 'Executive Dept.',
            'badgeColor' => 'border-blue-500/30 bg-blue-500/10 text-blue-300',
            'website' => 'https://ro5.dole.gov.ph',
            'contribution' => 'Provides labor standards compliance, technical assistance, Tulong Panghanapbuhay sa Ating Disadvantaged/Displaced Workers (TUPAD), and oversees the PhilJobNet ecosystem.',
            'description' => 'The executive department of the Philippine Government mandated to formulate and implement policies and programs in the field of labor and employment, safeguarding worker rights and promoting gainful employment.',
            'mandate' => 'Executive Order No. 126 / Presidential Decree No. 442 (Labor Code of the Philippines)',
            'keyServices' => [
                'PhilJobNet National Job Matching Portal',
                'TUPAD Community Emergency Employment Program',
                'DOLE Integrated Livelihood Program (DILP)',
                'Labor Standards Inspection & Dispute Resolution'
            ]
        ],
        [
            'id' => 'dmw',
            'name' => 'DMW',
            'fullName' => 'Department of Migrant Workers',
            'acronym' => 'DMW / POEA',
            'role' => 'OFW Protection, Welfare & Placement',
            'logo' => asset('img/home/careers/dmw.png'),
            'tag' => 'Migrant Affairs',
            'badgeColor' => 'border-sky-500/30 bg-sky-500/10 text-sky-300',
            'website' => 'https://dmw.gov.ph',
            'contribution' => 'Validates and authorizes licensed overseas recruitment agencies, issues approved Overseas Job Orders (OJO), and protects CamSur OFWs from illegal recruitment and human trafficking.',
            'description' => 'Created under Republic Act No. 11641, the DMW is the executive department responsible for protecting the rights and promoting the welfare of Overseas Filipino Workers (OFWs) and their families.',
            'mandate' => 'Republic Act No. 11641 (Department of Migrant Workers Act)',
            'keyServices' => [
                'Verification of Licensed Overseas Recruitment Agencies',
                'Anti-Illegal Recruitment & Trafficking-in-Persons Advisories',
                'OFW e-Registration & Overseas Employment Certificate (OEC)',
                'Reintegration & Livelihood Assistance for Returning OFWs'
            ]
        ],
        [
            'id' => 'tesda',
            'name' => 'TESDA',
            'fullName' => 'Technical Education & Skills Dev. Authority',
            'acronym' => 'TESDA CamSur',
            'role' => 'National Certifications & Livelihood Skills',
            'logo' => asset('img/home/careers/tesda.png'),
            'tag' => 'Skills & TVET',
            'badgeColor' => 'border-indigo-500/30 bg-indigo-500/10 text-indigo-300',
            'website' => 'https://www.tesda.gov.ph',
            'contribution' => 'Empowers Bicolanos with National Certificates (NC I, II, III), technical vocational education and training (TVET), and industry-ready credentials demanded by employers.',
            'description' => 'Created under Republic Act No. 7796, TESDA is the government agency tasked to manage and supervise technical education and skills development (TESD) in the Philippines.',
            'mandate' => 'Republic Act No. 7796 (Technical Education and Skills Development Act of 1994)',
            'keyServices' => [
                'Competency Assessment & National Certification (NC I/II/III)',
                'Free Technical Vocational Scholarships (TWSP, STEP, PESFA)',
                'TESDA Online Program (TOP) Digital Learning Courses',
                'Enterprise-Based Training & Apprenticeship Programs'
            ]
        ],
        [
            'id' => 'csc',
            'name' => 'CSC',
            'fullName' => 'Civil Service Commission',
            'acronym' => 'CSC Region V',
            'role' => 'Public Merit, Eligibility & Career Service',
            'logo' => asset('img/home/careers/csc.png'),
            'tag' => 'Civil Service',
            'badgeColor' => 'border-emerald-500/30 bg-emerald-500/10 text-emerald-300',
            'website' => 'https://csc.gov.ph',
            'contribution' => 'Ensures merit and fitness for all provincial government plantilla appointments, publishes civil service vacancies, and conducts the Career Service Examination (CSE).',
            'description' => 'The central personnel agency of the Philippine Government as mandated by the 1987 Constitution. It governs human resource administration, eligibility rules, and ethical standards across civil service institutions.',
            'mandate' => 'Article IX-B, 1987 Philippine Constitution / Administrative Code of 1987',
            'keyServices' => [
                'Career Service Examination (CSE Professional & Sub-Professional)',
                'Civil Service Eligibility Verification & Certificates',
                'Publication of Vacant Positions in Government (CS Job Portal)',
                'Public Personnel Administration Standards & Merit System'
            ]
        ],
        [
            'id' => 'prc',
            'name' => 'PRC',
            'fullName' => 'Professional Regulation Commission',
            'acronym' => 'PRC Regional Office',
            'role' => 'Professional Licensing & Board Verification',
            'logo' => asset('img/home/careers/prc.png'),
            'tag' => 'Licensing Body',
            'badgeColor' => 'border-yellow-500/30 bg-yellow-500/10 text-yellow-300',
            'website' => 'https://www.prc.gov.ph',
            'contribution' => 'Facilitates professional license verification for licensed applicants (engineers, nurses, teachers, accountants) applying for specialized provincial and private careers.',
            'description' => 'Attached to the Department of Labor and Employment under Republic Act No. 8981, PRC is the government body that administers, implements, and enforces regulatory policies with respect to licensing of various professions.',
            'mandate' => 'Republic Act No. 8981 (PRC Modernization Act of 2000)',
            'keyServices' => [
                'Licensure Examinations & Results Verification',
                'Professional Identification Card (PIC) Renewal & Issuance',
                'Continuing Professional Development (CPD) Accreditation',
                'Verification of Professional Licenses and Board Ratings'
            ]
        ],
    ];

    // Current & Upcoming Employment Highlights, Job Fairs, and SRA Across ALL Categories
    // Aligned with the 4 CMS Posting Methods: Manual, Social Media Embed, API Sync, and Bulk Document/Excel Import
    $careerEvents = [
        [
            'id' => 'job-fair',
            'category' => 'Job Fair Caravan',
            'targetCategory' => 'Private Local & Multi-Sectoral',
            'cmsMethod' => 'Manual PESO Dispatch',
            'cmsIcon' => '📝',
            'badge' => 'Major Provincial Event',
            'badgeStyle' => 'bg-emerald-500/20 text-emerald-300 border-emerald-500/30',
            'title' => 'CamSur Provincial Mega Job Fair & Barangay Caravan 2026',
            'schedule' => 'September 25 - 27, 2026 • 8:00 AM - 5:00 PM',
            'venue' => 'Camarines Sur Convention Center, Pili, Camarines Sur',
            'organizer' => 'Provincial Government of CamSur in partnership with DOLE V & PESO',
            'highlights' => [
                '50+ Verified Local & Multi-national Companies',
                '15 DMW-Licensed Overseas Manpower Agencies',
                'Direct On-the-Spot Hiring (HOTS) Stations',
                'One-Stop Gov Service (SSS, PhilHealth, Pag-IBIG, NBI)',
            ],
            'actionText' => 'View Full Fair Mechanics & Schedule',
            'actionRoute' => Route::has('careers.local') ? route('careers.local') : '#',
            'image' => asset('img/home/careers/job_fair_event.jpg'),
        ],
        [
            'id' => 'overseas-sra',
            'category' => 'Special Recruitment Activity (SRA)',
            'targetCategory' => 'Overseas Careers (DMW Verified)',
            'cmsMethod' => 'Social Media Embed / Official Feed',
            'cmsIcon' => '🌐',
            'badge' => 'DMW Approved SRA',
            'badgeStyle' => 'bg-sky-500/20 text-sky-300 border-sky-500/30',
            'title' => 'Special Recruitment Activity (SRA): Licensed Overseas Medical & Skilled Hiring',
            'schedule' => 'October 02 - 04, 2026 • 9:00 AM - 4:00 PM',
            'venue' => 'Provincial PESO Briefing Hall, Capitol Complex, Pili',
            'organizer' => 'Department of Migrant Workers (DMW) & CamSur Migrant Resource Desk',
            'highlights' => [
                'Special Recruitment Authority (SRA) certified by DMW Region V',
                'Verified Job Orders for Hospital Nurses, Technicians & Allied Health',
                'Zero-Placement Fee Skilled Construction & Technical Trades',
                'On-site Pre-Employment Orientation Seminar (PEOS) verification',
            ],
            'actionText' => 'Explore SRA Positions & Requirements',
            'actionRoute' => Route::has('careers.overseas') ? route('careers.overseas') : '#',
            'image' => asset('img/home/stories/cwc.jpg'),
        ],
        [
            'id' => 'student-jobs',
            'category' => 'Youth & Summer Placement',
            'targetCategory' => 'SPES & Student Internships',
            'cmsMethod' => 'Bulk School Registry (Excel/Doc)',
            'cmsIcon' => '📊',
            'badge' => 'Open Application Cycle',
            'badgeStyle' => 'bg-purple-500/20 text-purple-300 border-purple-500/30',
            'title' => 'SPES Youth Employment & Provincial Internship Intake Batch 2',
            'schedule' => 'Application Window: Ongoing for Q4 / Semester Break',
            'venue' => 'Provincial PESO Office & Online Submission via CamSur Portal',
            'organizer' => 'DOLE Region V & Provincial Youth Development Office',
            'highlights' => [
                'Daily Wage Stipend: 60% Provincial LGU + 40% DOLE Subsidy',
                'Open to High School, Senior High, College Students & OSY',
                'Hands-on Administrative, IT, and Field Experience in LGUs',
                'Official Certificate of Public Service Completion',
            ],
            'actionText' => 'Check SPES Requirements & Apply',
            'actionRoute' => Route::has('careers.spes') ? route('careers.spes') : '#',
            'image' => asset('img/home/stories/capitol.jpg'),
        ],
        [
            'id' => 'skills-seminar',
            'category' => 'Skills Training & Hiring Bootcamps',
            'targetCategory' => 'Private Local & Technical Trades',
            'cmsMethod' => 'API Live Synced / PhilJobNet',
            'cmsIcon' => '⚡',
            'badge' => 'TESDA & PESO Certified',
            'badgeStyle' => 'bg-blue-500/20 text-blue-300 border-blue-500/30',
            'title' => 'TESDA-PESO Tech-Voc Skills & IT-BPO Hiring Bootcamps',
            'schedule' => 'Batch 3: October 12 - 23, 2026 (Mon to Fri)',
            'venue' => 'CamSur IT Park & Provincial Livelihood Training Center, Cadlan, Pili',
            'organizer' => 'TESDA Provincial Training Center & CamSur PESO',
            'highlights' => [
                'Free NC II Training: Computer Systems, Tourism & Agri-Tech',
                'Includes Free Daily Allowance & Toolkits upon graduation',
                'Direct Job Matching with Local Industry Partners',
                'Accredited for Senior High School Tech-Voc Graduates',
            ],
            'actionText' => 'Browse Training Programs',
            'actionRoute' => Route::has('careers.local') ? route('careers.local') : '#',
            'image' => asset('img/home/stories/kaogma.jpg'),
        ],
        [
            'id' => 'csc-plantilla',
            'category' => 'Public Merit & Civil Service',
            'targetCategory' => 'Government Career With Us',
            'cmsMethod' => 'Official CSC Bulletin Entry',
            'cmsIcon' => '🏛️',
            'badge' => 'CSC Plantilla Notice',
            'badgeStyle' => 'bg-amber-500/20 text-amber-300 border-amber-500/30',
            'title' => 'Provincial Capitol Plantilla Walk-in Assessment & Merit Screening',
            'schedule' => 'October 15 - 16, 2026 • 8:30 AM - 3:30 PM',
            'venue' => 'Human Resource Management Office (HRMO), Capitol Main, Pili',
            'organizer' => 'Civil Service Commission Region V & Provincial HRMO',
            'highlights' => [
                'Screening for Permanent Plantilla Administrative & Technical Roles',
                'CSC Professional and Sub-Professional eligibility verification',
                'Open to accredited Bicolano civil service eligible applicants',
                'Complete transparent publication under Good Governance Seal',
            ],
            'actionText' => 'View Plantilla Roles & Guidelines',
            'actionRoute' => Route::has('careers.government') ? route('careers.government') : '#',
            'image' => asset('img/home/stories/cuisine.jpg'),
        ],
    ];

    // 4 Core Career Category Portals Structured for Focused 1-Card Landscape Interactive Carousel
    $portalCards = [
        [
            'id' => 'govt',
            'index' => 0,
            'title' => 'Careers With Us',
            'subtitle' => 'Civil Service & Permanent Plantilla',
            'icon' => '🏛️',
            'badgeColor' => 'border-emerald-500/40 bg-emerald-500/10 text-emerald-300',
            'glowColor' => 'hover:border-emerald-500/60 hover:shadow-emerald-900/30',
            'activeRing' => 'ring-2 ring-emerald-400/60 border-emerald-500/60 shadow-2xl shadow-emerald-950/80',
            'vacanciesCount' => $govtCount,
            'vacanciesLabel' => $govtCount > 0 ? "{$govtCount} Active Vacancies" : 'Plantilla Database Open',
            'vacanciesActive' => $govtCount > 0,
            'description' => 'Join the dedicated public service workforce of the Provincial Government of Camarines Sur. Explore permanent plantilla, civil service eligible roles, and provincial administrative openings.',
            'tags' => ['🏛️ CSC Civil Service', '📜 Permanent Plantilla', '📝 Contract of Service (COS)'],
            'btnText' => 'Browse Government Plantilla Jobs',
            'btnClass' => 'bg-emerald-600 hover:bg-emerald-500 text-white shadow-emerald-600/30',
            'route' => Route::has('careers.government') ? route('careers.government') : '#',
            'bannerImage' => asset('img/home/careers/csc.jpg'),
        ],
        [
            'id' => 'local',
            'index' => 1,
            'title' => 'Private Local Jobs',
            'subtitle' => 'DOLE & PESO Accredited Employers',
            'icon' => '🏢',
            'badgeColor' => 'border-blue-500/40 bg-blue-500/10 text-blue-300',
            'glowColor' => 'hover:border-blue-500/60 hover:shadow-blue-900/30',
            'activeRing' => 'ring-2 ring-blue-400/60 border-blue-500/60 shadow-2xl shadow-blue-950/80',
            'vacanciesCount' => $localCount,
            'vacanciesLabel' => $localCount > 0 ? "{$localCount} Local Openings" : 'PESO Network Active',
            'vacanciesActive' => $localCount > 0,
            'description' => 'Connect with accredited private companies, IT-BPO establishments, agricultural enterprises, and commercial businesses registered across Camarines Sur municipalities.',
            'tags' => ['🏢 Local Commercial Firms', '💻 BPO & IT Hubs', '🛠️ Technical & Trades'],
            'btnText' => 'Browse Local Private Opportunities',
            'btnClass' => 'bg-blue-600 hover:bg-blue-500 text-white shadow-blue-600/30',
            'route' => Route::has('careers.local') ? route('careers.local') : '#',
            'bannerImage' => asset('img/home/careers/dole.jpg'),
        ],
        [
            'id' => 'overseas',
            'index' => 2,
            'title' => 'Overseas Careers',
            'subtitle' => 'DMW / POEA Licensed Agencies',
            'icon' => '🌏',
            'badgeColor' => 'border-sky-500/40 bg-sky-500/10 text-sky-300',
            'glowColor' => 'hover:border-sky-500/60 hover:shadow-sky-900/30',
            'activeRing' => 'ring-2 ring-sky-400/60 border-sky-500/60 shadow-2xl shadow-sky-950/80',
            'vacanciesCount' => $overseasCount,
            'vacanciesLabel' => $overseasCount > 0 ? "{$overseasCount} Overseas Vacancies" : 'DMW Verified Job Orders',
            'vacanciesActive' => $overseasCount > 0,
            'description' => 'Explore international employment opportunities managed strictly through DMW/POEA-licensed recruitment agencies with guaranteed labor protections and verified employers.',
            'tags' => ['🌏 DMW / POEA Accredited', '🏥 Skilled & Sea-Based', '🛡️ Anti-Illegal Recruitment'],
            'btnText' => 'Open Verified Overseas Portal',
            'btnClass' => 'bg-sky-600 hover:bg-sky-500 text-white shadow-sky-600/30',
            'route' => Route::has('careers.overseas') ? route('careers.overseas') : '#',
            'bannerImage' => asset('img/home/careers/dmw.jpg'),
        ],
        [
            'id' => 'spes',
            'index' => 3,
            'title' => 'SPES & Student Jobs',
            'subtitle' => 'Youth, Interns & Summer Programs',
            'icon' => '🎓',
            'badgeColor' => 'border-purple-500/40 bg-purple-500/10 text-purple-300',
            'glowColor' => 'hover:border-purple-500/60 hover:shadow-purple-900/30',
            'activeRing' => 'ring-2 ring-purple-400/60 border-purple-500/60 shadow-2xl shadow-purple-950/80',
            'vacanciesCount' => $spesCount,
            'vacanciesLabel' => $spesCount > 0 ? "{$spesCount} Active Programs" : 'Student Intake Active',
            'vacanciesActive' => $spesCount > 0,
            'description' => 'Bridge employment and temporary subsidized placements for High School, Senior High, College students, and Out-of-School Youth (OSY) under DOLE & Provincial LGU funding.',
            'tags' => ['🎓 Student SPES Stipend', '🏫 College & SHS OJT', '🤝 DOLE & LGU Co-Funded'],
            'btnText' => 'Explore Student Jobs & Internships',
            'btnClass' => 'bg-purple-600 hover:bg-purple-500 text-white shadow-purple-600/30',
            'route' => Route::has('careers.spes') ? route('careers.spes') : '#',
            'bannerImage' => asset('img/home/careers/tesda.jpg'),
        ],
    ];
?>

<section class="py-16 bg-slate-950 text-white relative overflow-hidden"
         x-data="{
             agencyModalOpen: false,
             selectedAgency: null,
             activeEventIndex: 0,
             activePortalIdx: 0,
             portalTimer: null,
             totalPortals: 4,

             nextPortal() {
                 this.activePortalIdx = (this.activePortalIdx + 1) % this.totalPortals;
             },
             prevPortal() {
                 this.activePortalIdx = (this.activePortalIdx - 1 + this.totalPortals) % this.totalPortals;
             },
             setPortal(i) {
                 this.activePortalIdx = i;
             },
             startPortalLoop() {
                 this.portalTimer = setInterval(() => { this.nextPortal(); }, 4500);
             },
             stopPortalLoop() {
                 if (this.portalTimer) clearInterval(this.portalTimer);
             }
         }"
         x-init="
             startPortalLoop();
             $watch('agencyModalOpen', val => {
                 if (val) {
                     document.body.classList.add('overflow-hidden');
                 } else {
                     document.body.classList.remove('overflow-hidden');
                 }
             });
         ">
    
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-emerald-600/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-purple-600/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-1/2 right-10 w-80 h-80 bg-blue-600/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 pb-6 border-b border-slate-800">
            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-amber-400/10 rounded-full border border-amber-400/20">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                    <span class="text-xs font-black text-amber-400 uppercase tracking-widest">
                        Government Employment & Placement Network
                    </span>
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white tracking-tight mt-3">
                    Explore Career Opportunities
                </h2>
                <p class="text-slate-400 text-sm max-w-2xl mt-2 leading-relaxed">
                    Connecting Camarines Sur jobseekers with verified public sector plantilla, local commercial industries, licensed overseas employment, and subsidized student apprenticeships.
                </p>
            </div>
            <div class="mt-4 md:mt-0 text-left md:text-right shrink-0">
                <?php if($totalActiveCount > 0): ?>
                    <span class="inline-flex items-center gap-2 text-xs font-bold text-emerald-400 bg-emerald-950/80 px-3.5 py-1.5 rounded-full border border-emerald-800/50 shadow-lg shadow-emerald-950/50">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                        <?php echo e($totalActiveCount); ?> Active Job Vacancies Available Today
                    </span>
                <?php else: ?>
                    <span class="inline-flex items-center gap-1.5 text-xs font-bold text-slate-400 bg-slate-900 px-3 py-1.5 rounded-full border border-slate-800">
                        <span class="w-2 h-2 rounded-full bg-slate-500"></span>
                        PESO Job Database Updated Daily
                    </span>
                <?php endif; ?>
            </div>
        </div>

        
        <div class="mb-12">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-2">
                    <span class="text-base">🤝</span>
                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-300">
                        Accredited Government Employment & Regulation Bodies
                    </h3>
                </div>
                <span class="text-[11px] text-slate-400 hidden sm:inline-block">
                    Click any agency badge to view mandate, role, and official portal
                </span>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-4">
                <?php $__currentLoopData = $partnerAgencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button type="button"
                            @click="selectedAgency = <?php echo e(json_encode($agency)); ?>; agencyModalOpen = true"
                            class="w-full bg-slate-900/90 border border-slate-800 hover:border-amber-400/60 focus:border-amber-400 rounded-2xl p-3.5 flex flex-col items-center text-center transition-all duration-300 hover:shadow-xl hover:shadow-amber-500/10 hover:-translate-y-1 group cursor-pointer text-left focus:outline-none">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-white p-1.5 shadow-md flex items-center justify-center mb-3 group-hover:scale-105 group-hover:shadow-amber-400/20 transition-all">
                            <img src="<?php echo e($agency['logo']); ?>" 
                                 alt="<?php echo e($agency['name']); ?> Logo" 
                                 class="w-full h-full object-contain rounded-xl"
                                 loading="lazy"
                                 onerror="this.onerror=null; this.src='<?php echo e(asset('img/camsur-logo.png')); ?>';">
                        </div>
                        <div class="w-full">
                            <div class="flex items-center justify-center gap-1">
                                <span class="font-extrabold text-sm text-white group-hover:text-amber-400 transition-colors">
                                    <?php echo e($agency['name']); ?>

                                </span>
                            </div>
                            <p class="text-[10px] text-slate-400 line-clamp-1 mt-0.5 font-medium" title="<?php echo e($agency['fullName']); ?>">
                                <?php echo e($agency['fullName']); ?>

                            </p>
                            <span class="inline-block mt-2 text-[9px] font-semibold px-2 py-0.5 rounded-full border <?php echo e($agency['badgeColor']); ?>">
                                <?php echo e($agency['tag']); ?>

                            </span>
                            <div class="mt-2 text-[10px] font-bold text-amber-400/90 group-hover:text-amber-300 flex items-center justify-center gap-1 opacity-80 group-hover:opacity-100 transition-opacity">
                                <span>Learn Mandate</span>
                                <span>&rarr;</span>
                            </div>
                        </div>
                    </button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        
        <div class="mb-12 bg-slate-900/90 border border-slate-800/90 rounded-3xl p-5 sm:p-7 shadow-2xl backdrop-blur-xl">
            
            
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 pb-6 border-b border-slate-800">
                <div>
                    <div class="inline-flex items-center gap-2 text-xs font-black uppercase tracking-wider text-rose-400">
                        <span class="flex h-2 w-2 relative">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-rose-500"></span>
                        </span>
                        <span>Key Employment Highlights & Initiatives</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-black text-white mt-1">
                        Upcoming Job Fairs, Special Recruitment (SRA) & Programs
                    </h3>
                    <p class="text-xs text-slate-400 mt-1">
                        Real-time dispatches aggregated via Direct CMS, Social Media Feeds, API Sync, and PESO Bulk Registries
                    </p>
                </div>

                
                <div class="flex flex-wrap gap-2">
                    <?php $__currentLoopData = $careerEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <button type="button"
                                @click="activeEventIndex = <?php echo e($idx); ?>"
                                :class="activeEventIndex === <?php echo e($idx); ?> 
                                    ? 'bg-amber-400 text-slate-950 font-extrabold shadow-md shadow-amber-400/20' 
                                    : 'bg-slate-800/90 hover:bg-slate-800 text-slate-300 font-semibold border border-slate-700/60'"
                                class="text-xs px-3.5 py-2 rounded-xl transition-all duration-200 flex items-center gap-1.5 cursor-pointer">
                            <span>
                                <?php if($event['id'] === 'job-fair'): ?> 🎪
                                <?php elseif($event['id'] === 'overseas-sra'): ?> ✈️
                                <?php elseif($event['id'] === 'student-jobs'): ?> 🎓
                                <?php elseif($event['id'] === 'skills-seminar'): ?> 🛠️
                                <?php elseif($event['id'] === 'csc-plantilla'): ?> 🏛️
                                <?php endif; ?>
                            </span>
                            <span><?php echo e($event['category']); ?></span>
                        </button>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            
            <?php $__currentLoopData = $careerEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div x-show="activeEventIndex === <?php echo e($idx); ?>" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-y-2"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-cloak
                     class="mt-6 grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
                    
                    
                    <div class="lg:col-span-5 relative rounded-2xl overflow-hidden border border-slate-700/70 aspect-video lg:aspect-4/3 bg-slate-950 group">
                        <img src="<?php echo e($event['image']); ?>" 
                             alt="<?php echo e($event['title']); ?>" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent"></div>
                        
                        
                        <div class="absolute top-3 left-3 right-3 flex items-center justify-between gap-2 flex-wrap">
                            <span class="text-[11px] font-bold px-2.5 py-1 rounded-full border backdrop-blur-md <?php echo e($event['badgeStyle']); ?>">
                                <?php echo e($event['badge']); ?>

                            </span>
                            <span class="text-[10px] font-bold px-2 py-0.5 rounded-md bg-black/75 text-slate-300 border border-white/10 backdrop-blur-md flex items-center gap-1">
                                <span><?php echo e($event['cmsIcon']); ?></span>
                                <span><?php echo e($event['cmsMethod']); ?></span>
                            </span>
                        </div>

                        
                        <div class="absolute bottom-3 left-3 right-3 text-xs text-slate-300">
                            <div class="flex items-center gap-1.5 text-amber-300 font-bold mb-1">
                                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                <span><?php echo e($event['schedule']); ?></span>
                            </div>
                            <div class="flex items-center gap-1.5 text-slate-300 text-[11px] line-clamp-1">
                                <svg class="w-3.5 h-3.5 shrink-0 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                <span><?php echo e($event['venue']); ?></span>
                            </div>
                        </div>
                    </div>

                    
                    <div class="lg:col-span-7 flex flex-col justify-between space-y-4">
                        <div>
                            <div class="flex items-center gap-2 mb-1 flex-wrap">
                                <span class="text-xs font-extrabold text-amber-400 uppercase tracking-wider">
                                    <?php echo e($event['organizer']); ?>

                                </span>
                                <span class="text-xs text-slate-500">&bull;</span>
                                <span class="text-xs font-semibold text-blue-300">
                                    Target: <?php echo e($event['targetCategory']); ?>

                                </span>
                            </div>
                            <h4 class="text-xl sm:text-2xl font-bold text-white tracking-tight leading-snug">
                                <?php echo e($event['title']); ?>

                            </h4>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 mt-4">
                                <?php $__currentLoopData = $event['highlights']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $highlight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="flex items-start gap-2 bg-slate-800/60 border border-slate-700/60 rounded-xl p-3">
                                        <span class="text-emerald-400 font-bold shrink-0 mt-0.5">✓</span>
                                        <span class="text-xs text-slate-200 font-medium leading-tight">
                                            <?php echo e($highlight); ?>

                                        </span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        <div class="pt-3 border-t border-slate-800/80 flex flex-wrap items-center justify-between gap-3">
                            <div class="text-xs text-slate-400 flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                                <span>Verified posting & updates open to all qualified applicants</span>
                            </div>
                            <a href="<?php echo e($event['actionRoute']); ?>" 
                               class="inline-flex items-center gap-2 bg-amber-400 hover:bg-amber-300 text-slate-950 font-black text-xs px-5 py-2.5 rounded-xl transition-all shadow-md shadow-amber-400/20 group/act">
                                <span><?php echo e($event['actionText']); ?></span>
                                <svg class="w-3.5 h-3.5 group-hover/act:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        
        <div class="mb-4"
             @mouseenter="stopPortalLoop()"
             @mouseleave="startPortalLoop()">
            
            
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                <div>
                    <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-amber-400">
                        <span>🧭</span>
                        <span>Official Employment Gateways</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-black text-white mt-1">
                        Explore Specialized Career Categories
                    </h3>
                    <p class="text-xs text-slate-400 mt-0.5">
                        Interactive carousel featuring the 4 official placement streams of Camarines Sur
                    </p>
                </div>

                
                <div class="flex items-center gap-3 self-start sm:self-auto">
                    <span class="text-xs text-slate-400 font-mono hidden sm:inline" x-text="(activePortalIdx + 1) + ' of 4 Categories'"></span>
                    <div class="flex items-center gap-1.5">
                        <button type="button"
                                @click="prevPortal()"
                                aria-label="Previous Category"
                                class="w-9 h-9 rounded-xl bg-slate-900 border border-slate-700 hover:border-amber-400 hover:bg-amber-400 hover:text-slate-950 text-white flex items-center justify-center transition-all shadow-md">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <button type="button"
                                @click="nextPortal()"
                                aria-label="Next Category"
                                class="w-9 h-9 rounded-xl bg-slate-900 border border-slate-700 hover:border-amber-400 hover:bg-amber-400 hover:text-slate-950 text-white flex items-center justify-center transition-all shadow-md">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            
            <div class="flex items-center gap-2 overflow-x-auto pb-2 mb-4 scrollbar-none">
                <?php $__currentLoopData = $portalCards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $i = $card['index']; ?>
                    <button type="button"
                            @click="setPortal(<?php echo e($i); ?>)"
                            :class="activePortalIdx === <?php echo e($i); ?> 
                                ? 'bg-amber-400 text-slate-950 font-black shadow-lg shadow-amber-400/20 border-amber-400' 
                                : 'bg-slate-900/80 text-slate-300 hover:text-white border-slate-800 hover:border-slate-700'"
                            class="px-3.5 py-1.5 rounded-xl border text-xs whitespace-nowrap transition-all duration-200 flex items-center gap-2 shrink-0">
                        <span class="text-sm"><?php echo e($card['icon']); ?></span>
                        <span><?php echo e($card['title']); ?></span>
                        <span :class="activePortalIdx === <?php echo e($i); ?> ? 'bg-slate-950/20 text-slate-950' : 'bg-slate-800 text-slate-400'"
                              class="text-[10px] font-bold px-1.5 py-0.5 rounded-full">
                            <?php echo e($card['vacanciesCount']); ?>

                        </span>
                    </button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <div class="relative py-1">
                <?php $__currentLoopData = $portalCards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $i = $card['index']; ?>
                    <div x-show="activePortalIdx === <?php echo e($i); ?>"
                         x-transition:enter="transition ease-out duration-300 transform"
                         x-transition:enter-start="opacity-0 translate-y-3 scale-[0.99]"
                         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                         x-cloak
                         class="rounded-3xl p-6 sm:p-8 bg-slate-900/90 border border-slate-800 shadow-2xl backdrop-blur-xl relative overflow-hidden">
                        
                        
                        <div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full blur-3xl pointer-events-none opacity-20 bg-amber-400"></div>

                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center relative z-10">
                            
                            
                            <div class="lg:col-span-5 flex flex-col justify-between h-full">
                                <div class="relative rounded-2xl overflow-hidden border border-slate-700/70 aspect-video bg-slate-950 shadow-inner group">
                                    <img src="<?php echo e($card['bannerImage']); ?>" 
                                         alt="<?php echo e($card['title']); ?>" 
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                         loading="lazy">
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent"></div>

                                    
                                    <div class="absolute top-3 left-3 flex items-center gap-1.5 bg-amber-400 text-slate-950 text-[10px] font-black uppercase tracking-wider px-3 py-1 rounded-full shadow-lg">
                                        <span class="w-1.5 h-1.5 rounded-full bg-slate-950 animate-ping"></span>
                                        <span>Active Focus</span>
                                    </div>

                                    
                                    <div class="absolute top-3 right-3">
                                        <span class="text-[11px] font-bold px-3 py-1 rounded-full border backdrop-blur-md <?php echo e($card['badgeColor']); ?> flex items-center gap-1.5 shadow-md">
                                            <?php if($card['vacanciesActive']): ?>
                                                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                            <?php else: ?>
                                                <span class="w-2 h-2 rounded-full bg-slate-500"></span>
                                            <?php endif; ?>
                                            <span><?php echo e($card['vacanciesLabel']); ?></span>
                                        </span>
                                    </div>

                                    
                                    <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between">
                                        <div class="flex items-center gap-2">
                                            <div class="w-10 h-10 rounded-xl bg-slate-900/90 border border-white/10 flex items-center justify-center text-xl backdrop-blur-md shadow-md">
                                                <span><?php echo e($card['icon']); ?></span>
                                            </div>
                                            <div>
                                                <p class="text-[10px] font-bold text-slate-300 uppercase tracking-wider">Gateway <?php echo e($i + 1); ?> of 4</p>
                                                <p class="text-xs font-bold text-white"><?php echo e($card['title']); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="lg:col-span-7 flex flex-col justify-between space-y-5">
                                <div>
                                    <div class="flex items-center gap-2 flex-wrap mb-2">
                                        <span class="text-xs font-black uppercase tracking-wider text-amber-400">
                                            <?php echo e($card['subtitle']); ?>

                                        </span>
                                        <span class="text-xs text-slate-600">&bull;</span>
                                        <span class="text-xs font-semibold text-slate-400">
                                            Official Placement Stream
                                        </span>
                                    </div>

                                    <h4 class="text-2xl sm:text-3xl font-black text-white tracking-tight leading-tight">
                                        <?php echo e($card['title']); ?>

                                    </h4>

                                    <p class="text-slate-300 text-sm mt-3 leading-relaxed">
                                        <?php echo e($card['description']); ?>

                                    </p>

                                    
                                    <div class="mt-4">
                                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">Coverage & Specializations:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <?php $__currentLoopData = $card['tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <span class="text-xs text-slate-200 bg-slate-800/90 hover:bg-slate-800 px-3 py-1 rounded-xl border border-slate-700/70 shadow-sm flex items-center gap-1.5">
                                                    <?php echo e($tag); ?>

                                                </span>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="pt-4 border-t border-slate-800/80 flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-4">
                                    <div class="text-xs text-slate-400 flex items-center gap-2">
                                        <span class="w-2 h-2 rounded-full bg-emerald-400 shrink-0"></span>
                                        <span>Official Provincial employment pathway & verified job listings</span>
                                    </div>

                                    <a href="<?php echo e($card['route']); ?>"
                                       class="inline-flex items-center justify-center gap-2 font-bold py-3 px-6 rounded-xl transition-all duration-200 text-xs shadow-lg <?php echo e($card['btnClass']); ?> group/btn shrink-0">
                                        <span><?php echo e($card['btnText']); ?></span>
                                        <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                        </svg>
                                    </a>
                                </div>

                            </div>

                        </div>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
                <div class="flex items-center justify-center gap-2 mt-6">
                    <?php $__currentLoopData = $portalCards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $i = $card['index']; ?>
                        <button type="button"
                                @click="setPortal(<?php echo e($i); ?>)"
                                :class="activePortalIdx === <?php echo e($i); ?> ? 'w-8 bg-amber-400' : 'w-2 bg-slate-700 hover:bg-slate-600'"
                                class="h-1.5 rounded-full transition-all duration-300 focus:outline-none"
                                aria-label="Go to Category <?php echo e($i + 1); ?>">
                        </button>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        </div>

    </div>

    
    <div x-show="agencyModalOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @keydown.escape.window="agencyModalOpen = false"
         class="fixed inset-0 z-[9999] flex items-center justify-center p-4 sm:p-6 bg-slate-950/80 backdrop-blur-md"
         style="display: none;"
         x-cloak>

        <div @click.away="agencyModalOpen = false"
             x-show="agencyModalOpen"
             x-transition:enter="transition ease-out duration-300 transform"
             x-transition:enter-start="opacity-0 scale-95 translate-y-4"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200 transform"
             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
             x-transition:leave-end="opacity-0 scale-95 translate-y-4"
             class="relative w-full max-w-2xl bg-slate-900 border border-slate-700/80 rounded-3xl shadow-2xl overflow-hidden flex flex-col max-h-[90vh]">

            
            <div class="relative bg-gradient-to-r from-blue-950 via-slate-900 to-indigo-950 p-6 sm:p-7 border-b border-slate-800 flex items-center justify-between gap-4">
                <div class="flex items-center gap-4 sm:gap-5">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl bg-white p-2 shadow-xl flex items-center justify-center shrink-0 border border-slate-200">
                        <img :src="selectedAgency?.logo" 
                             :alt="selectedAgency?.name + ' Logo'"
                             class="w-full h-full object-contain">
                    </div>
                    <div>
                        <div class="flex items-center gap-2 mb-1.5">
                            <span class="text-xs font-black uppercase tracking-widest text-amber-400" x-text="selectedAgency?.name"></span>
                            <span class="text-[10px] font-semibold px-2.5 py-0.5 rounded-full border" 
                                  :class="selectedAgency?.badgeColor" 
                                  x-text="selectedAgency?.tag">
                            </span>
                        </div>
                        <h3 class="text-lg sm:text-2xl font-black text-white leading-snug" x-text="selectedAgency?.fullName"></h3>
                        <p class="text-xs sm:text-sm text-slate-300 mt-1 font-medium" x-text="selectedAgency?.role"></p>
                    </div>
                </div>
            </div>

            
            <div class="p-6 sm:p-8 overflow-y-auto space-y-6 text-sm text-slate-300 leading-relaxed">
                
                
                <div class="bg-amber-400/10 border border-amber-400/30 rounded-2xl p-4 sm:p-5">
                    <div class="flex items-center gap-2 text-amber-300 font-extrabold text-xs uppercase tracking-wider mb-2">
                        <span>🎯</span>
                        <span>Role & Contribution to CamSur Jobseekers</span>
                    </div>
                    <p class="text-xs sm:text-sm text-amber-100/90 font-medium" x-text="selectedAgency?.contribution"></p>
                </div>

                
                <div>
                    <h4 class="text-xs font-black uppercase tracking-widest text-slate-400 mb-2 flex items-center gap-1.5">
                        <span>⚖️</span>
                        <span>Legal Mandate & Agency Overview</span>
                    </h4>
                    <p class="text-xs sm:text-sm text-slate-300" x-text="selectedAgency?.description"></p>
                    <div class="mt-2 text-[11px] font-mono text-slate-400 bg-slate-950/60 p-2.5 rounded-xl border border-slate-800">
                        <strong class="text-slate-300">Governing Law:</strong> <span x-text="selectedAgency?.mandate"></span>
                    </div>
                </div>

                
                <div>
                    <h4 class="text-xs font-black uppercase tracking-widest text-slate-400 mb-2.5 flex items-center gap-1.5">
                        <span>📋</span>
                        <span>Key Public Services & Programs</span>
                    </h4>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                        <template x-for="(service, idx) in selectedAgency?.keyServices || []" :key="idx">
                            <div class="bg-slate-950/60 border border-slate-800/80 rounded-xl p-3 flex items-start gap-2 text-xs">
                                <span class="text-emerald-400 font-bold shrink-0">✓</span>
                                <span class="text-slate-200 font-medium" x-text="service"></span>
                            </div>
                        </template>
                    </div>
                </div>

            </div>

            
            <div class="p-5 sm:p-6 bg-slate-950/95 border-t border-slate-800/90 flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="text-xs text-slate-400 text-center sm:text-left leading-relaxed">
                    Accreditation verified by the Provincial Government of Camarines Sur.
                </div>
                <div class="flex items-center gap-3 w-full sm:w-auto shrink-0 justify-end">
                    <button type="button"
                            @click="agencyModalOpen = false"
                            class="w-full sm:w-auto px-5 py-2.5 rounded-xl text-xs font-bold text-slate-300 bg-slate-800/90 hover:bg-slate-700 hover:text-white transition border border-slate-700">
                        Close
                    </button>
                    <a :href="selectedAgency?.website" 
                       target="_blank" 
                       rel="noopener noreferrer"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-2.5 rounded-xl text-xs font-black uppercase tracking-wider bg-amber-400 hover:bg-amber-300 text-slate-950 transition shadow-lg shadow-amber-400/20">
                        <span>Visit Official Portal</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section><?php /**PATH /var/www/resources/views/components/home/careers.blade.php ENDPATH**/ ?>