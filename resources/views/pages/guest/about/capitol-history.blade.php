<x-guest-layout>
@php
    $heroImage = 'img/about/capitol-history/capitol-history-bg.png';

    /* =========================================================
     |  CITATION REGISTRY (referenced by key from timeline items)
     * ========================================================= */
    $citations = [
        'pgcs-history' => [
            'title' => 'Province Brief History',
            'publisher' => 'Provincial Government of Camarines Sur',
            'url' => 'https://www.camarinessur.gov.ph/about/province-brief-history',
            'type' => 'Government Record',
        ],
        'camsur-capitol' => [
            'title' => 'Capitol History',
            'publisher' => 'Camarines Sur Provincial Government',
            'url' => 'https://www.camsur.com/about/capitol-history',
            'type' => 'Government Record',
        ],
        'internal' => [
            'title' => "Camarines Sur's Capitol History — Internal Research Compilation",
            'publisher' => 'Office of the Provincial Governor',
            'url' => null,
            'type' => 'Archival',
        ],
        'wiki-ambos' => [
            'title' => 'Ambos Camarines',
            'publisher' => 'Wikipedia',
            'url' => 'https://en.wikipedia.org/wiki/Ambos_Camarines',
            'type' => 'Encyclopedia',
        ],
        'wiki-nueva' => [
            'title' => 'Nueva Cáceres',
            'publisher' => 'Wikipedia',
            'url' => 'https://en.wikipedia.org/wiki/Nueva_C%C3%A1ceres',
            'type' => 'Encyclopedia',
        ],
        'banzuela' => [
            'title' => 'Bikol in the Galleon Times (Part 2)',
            'publisher' => 'Raffi Banzuela — Dateline Ibalon',
            'url' => 'https://dateline-ibalon.com/2022/11/bikol-in-the-galleon-times-part-2-raffi-banzuela/',
            'type' => 'Article',
        ],
        'naga-pano' => [
            'title' => "Naga City's Panoramic Development: From a Glorious Past to a Towering Future",
            'publisher' => 'Naga City Government',
            'url' => 'https://www2.naga.gov.ph/naga-citys-panoramic-development-from-a-glorious-past-to-a-towering-future/',
            'type' => 'Government Record',
        ],
        'sande-caceres' => [
            'title' => 'Francisco de Sande, Fundador de Nueva Cáceres en Filipinas',
            'publisher' => 'Cacereñeando',
            'url' => 'https://juandelacruzgutierrez.es/francisco-de-sande-fundador-de-nueva-caceres-en-filipinas/',
            'type' => 'Article',
        ],
        'sande-ref' => [
            'title' => 'Francisco de Sande — Biographical Facts',
            'publisher' => 'Kiddle Reference',
            'url' => 'https://kids.kiddle.co/Francisco_de_Sande',
            'type' => 'Reference',
        ],
        'kahimyang' => [
            'title' => "Francisco de Sande's 1578 Sulu Expedition",
            'publisher' => 'The Kahimyang Project',
            'url' => 'https://kahimyang.com/articles/3278/francisco-de-sandes-1578-sulu-expedition',
            'type' => 'Article',
        ],
        'act-2809' => [
            'title' => 'Act No. 2809 — An Act to Divide the Province of Ambos Camarines',
            'publisher' => 'Philippine Legislature (via Official Gazette)',
            'url' => 'https://www.officialgazette.gov.ph/',
            'type' => 'Legal Statute',
        ],
        'act-2711' => [
            'title' => 'Act No. 2711 — Revised Administrative Code of 1917',
            'publisher' => 'Philippine Legislature (via Official Gazette)',
            'url' => 'https://www.officialgazette.gov.ph/',
            'type' => 'Legal Statute',
        ],
    ];

    /* =========================================================
     |  ERAS (filter chips)
     * ========================================================= */
    $eras = [
        'origins'   => ['label' => 'Origins & Founding',     'range' => '1569 – 1579', 'tone' => 'amber'],
        'territory' => ['label' => 'Territorial Evolution',  'range' => '1636 – 1917', 'tone' => 'indigo'],
        'capitol'   => ['label' => 'The Capitol Era',        'range' => '1948 – 1976', 'tone' => 'rose'],
        'future'    => ['label' => 'Renewal & Future',       'range' => '1977 – Today','tone' => 'emerald'],
    ];

    /* =========================================================
     |  UNIFIED TIMELINE (milestones + origins + reorganizations)
     * ========================================================= */
    $timeline = [
        [
            'date' => '1569', 'sort' => '1569', 'era' => 'origins', 'label' => 'Spanish Entry', 'icon' => '⚓',
            'title' => 'First Recorded Contact in Bicol',
            'summary' => 'Guzmán and Fr. Giménez sail north from Panay and make landfall at Gibalon — the first documented colonial contact in the region.',
            'image' => 'img/about/capitol-history/early-explorations-begin.jpg',
            'body' => [
                'The early Spanish entry into the Bicol region began through the explorations of Captain Luis Enríquez de Guzmán and the Augustinian friar Fr. Alfonso Giménez, marking the beginning of recorded colonial contact in the area.',
                'Their party sailed north from Panay through Masbate, Ticao, and Burias, making landfall at Gibalon in present-day Magallanes, Sorsogon — the gateway through which the Spanish would eventually reach the Bicol River plain.',
            ],
            'facts' => [
                ['label' => 'Expedition Leaders', 'value' => 'Capt. Luis Enríquez de Guzmán · Fr. Alfonso Giménez, OSA'],
                ['label' => 'Landfall', 'value' => 'Gibalon, Magallanes (present-day Sorsogon)'],
                ['label' => 'Significance', 'value' => 'First documented European contact with Bicol'],
            ],
            'sources' => ['pgcs-history', 'banzuela'],
        ],
        [
            'date' => 'c. 1570s', 'sort' => '1570', 'era' => 'origins', 'label' => 'Etymology', 'icon' => '🌾',
            'title' => 'Where the Name “Camarines” Came From',
            'summary' => 'Spanish officers transliterated the Bikol rice granary — the kamalig — into camarín, and mapmakers labelled the plain Tierra de Camarines.',
            'image' => 'img/about/capitol-history/rice-granary.jpg',
            'body' => [
                'Spanish observers noted the raised wooden rice granaries used by the local population, called kamalig in Central Bikol. Spanish officers transliterated this into camarín (plural: camarines).',
                'Cartographers subsequently began labelling the riverine agricultural plain as Tierra de Camarines — literally, “the land of granaries.” The toponym stuck, and it remains the root of both Camarines Sur and Camarines Norte today.',
            ],
            'facts' => [
                ['label' => 'Bikol Term', 'value' => 'kamalig — raised wooden rice granary'],
                ['label' => 'Spanish Form', 'value' => 'camarín (pl. camarines)'],
                ['label' => 'Map Designation', 'value' => 'Tierra de Camarines'],
            ],
            'sources' => ['wiki-ambos', 'banzuela'],
        ],
        [
            'date' => '1573', 'sort' => '1573', 'era' => 'origins', 'label' => 'Deep Penetration', 'icon' => '🗺️',
            'title' => 'Salcedo Maps the Bicol Valley',
            'summary' => 'Juan de Salcedo pushes inland to Santiago de Libon, charting agricultural networks along the Bicol River.',
            'image' => 'img/about/capitol-history/juan-de-salcedo.jpg',
            'body' => [
                'Captain Juan de Salcedo led an expedition into the central Bicol valley, reaching Santiago de Libon while mapping the agricultural networks strung along the Bicol River.',
                'Spanish interest intensified because of the region’s natural resources — fertile lowlands, spices, and above all reports of gold in Paracale and Mambulao.',
            ],
            'facts' => [
                ['label' => 'Commander', 'value' => 'Capt. Juan de Salcedo'],
                ['label' => 'Furthest Point', 'value' => 'Santiago de Libon'],
                ['label' => 'Motivation', 'value' => 'Gold at Paracale & Mambulao; fertile riverine land'],
            ],
            'sources' => ['pgcs-history', 'kahimyang'],
        ],
        [
            'date' => '1575', 'sort' => '1575', 'era' => 'origins', 'label' => 'Outpost', 'icon' => '⚔️',
            'title' => 'A Spanish Outpost Across the River',
            'summary' => 'Pedro de Chávez subdues resistance near the village of Naga and plants a Spanish settlement directly opposite it.',
            'image' => 'img/about/capitol-history/spanish-outpost.jpg',
            'body' => [
                'Captain Pedro de Chávez subdued native resistance around the village of Naga and established a Spanish outpost directly across the Bicol River.',
                'The site was named La Ciudad de Cáceres in honour of Governor-General Francisco de Sande’s birthplace in Extremadura, Spain — the seed of what would become Nueva Cáceres.',
            ],
            'facts' => [
                ['label' => 'Commander', 'value' => 'Capt. Pedro de Chávez'],
                ['label' => 'Settlement Named', 'value' => 'La Ciudad de Cáceres'],
                ['label' => 'Named After', 'value' => 'Cáceres, Extremadura — birthplace of Gov.-Gen. Sande'],
            ],
            'sources' => ['sande-caceres', 'wiki-nueva'],
        ],
        [
            'date' => 'May 27, 1579', 'sort' => '1579-05-27', 'era' => 'origins', 'label' => 'Official Foundation', 'icon' => '📜',
            'title' => 'Foundation of the Province — Partido de Camarines',
            'summary' => 'Gov.-Gen. Francisco de Sande decrees a centralised province and orders every encomendero in the district to reside there.',
            'image' => 'img/about/capitol-history/1579-foundation.jpg',
            'body' => [
                'The formal institutionalisation of Camarines Sur traces back to a royal decree issued on May 27, 1579 by Dr. Francisco de Sande, third Spanish Governor-General of the Philippines.',
                'The decree established a centralised settlement in the district then known as Camarines and ordered all Spanish encomenderos holding land grants in the region to take up permanent residence there — converting a scattered frontier of private grants and military outposts into an organised administrative territory.',
                'Born in 1540 in Cáceres, Spain, Sande held degrees in Canon Law from Salamanca and Seville and had served as a judge in the Real Audiencia of Mexico. His legal training shaped a highly structured administrative philosophy: curbing colonial abuses, rationalising tax collection, and concentrating encomenderos into supervisable urban centres.',
                'The decree was confirmed through archival research at the Archivo General de Indias in Seville, and remains the official legal baseline for the province’s foundation.',
            ],
            'facts' => [
                ['label' => 'Statute', 'value' => 'Decrees of Gov.-Gen. Francisco de Sande'],
                ['label' => 'Designation', 'value' => 'Partido de Camarines'],
                ['label' => 'Impact', 'value' => 'Centralised province established; encomenderos ordered to relocate to Nueva Cáceres'],
                ['label' => 'Verification', 'value' => 'Archivo General de Indias, Seville'],
            ],
            'sources' => ['pgcs-history', 'sande-caceres', 'sande-ref'],
        ],
        [
            'date' => 'September 16, 1579', 'sort' => '1579-09-16', 'era' => 'origins', 'label' => 'Royal City', 'icon' => '🌉',
            'title' => 'Nueva Cáceres and the City Divided by a River',
            'summary' => 'A follow-up decree names the Spanish settlement Nueva Cáceres and organises its municipal council, elevating it beside Manila, Cebu, and Vigan.',
            'image' => 'img/about/capitol-history/spanish-exploration.jpg',
            'body' => [
                'On September 16, 1579, Sande issued a follow-up decree naming the Spanish settlement Nueva Cáceres and organising its municipal council, elevating it alongside Manila, Cebu, and Vigan as a royal city.',
                'Across the Bicol River stood the native pueblo of Naga, later home also to a growing Chinese merchant community. Though divided by jurisdiction and geography, the two settlements grew into a single economic and ecclesiastical nucleus.',
                'Nueva Cáceres was designated an Episcopal See by Pope Clement VIII in 1595, cementing its role as the religious capital of the whole Bicol peninsula.',
            ],
            'facts' => [
                ['label' => 'Statute', 'value' => 'Decree of Gov.-Gen. Sande, 16 September 1579'],
                ['label' => 'Status Granted', 'value' => 'Royal City (with Manila, Cebu, Vigan)'],
                ['label' => 'Episcopal See', 'value' => 'Erected by Pope Clement VIII, 1595'],
            ],
            'sources' => ['wiki-nueva', 'sande-caceres'],
        ],
        [
            'date' => '1636', 'sort' => '1636', 'era' => 'territory', 'label' => 'Partition of Ibalon', 'icon' => '🧭',
            'title' => 'Ibalon Split from Camarines',
            'summary' => 'A royal colonial reorganisation divides the peninsula into Partido de Ibalon in the south and Partido de Camarines in the north.',
            'image' => 'img/about/capitol-history/map.png',
            'body' => [
                'A royal colonial reorganisation divided the Bicol peninsula into two administrative partidos: Partido de Ibalon covering the south, and Partido de Camarines covering the north.',
                'This is the first of many boundary adjustments that would define the region for the next three centuries, generally driven by the difficulty of governing and taxing a long, mountainous peninsula from a single seat.',
            ],
            'facts' => [
                ['label' => 'Statute', 'value' => 'Royal Colonial Reorganisation'],
                ['label' => 'Designation', 'value' => 'Partition of Ibalon'],
                ['label' => 'Impact', 'value' => 'Division into Partido de Ibalon (south) and Partido de Camarines (north)'],
            ],
            'sources' => ['wiki-ambos'],
        ],
        [
            'date' => '1829', 'sort' => '1829', 'era' => 'territory', 'label' => 'First Division', 'icon' => '✂️',
            'title' => 'Camarines Divided into Sur and Norte',
            'summary' => 'A Spanish administrative decree splits Partido de Camarines into two provinces for the first time.',
            'image' => 'img/about/capitol-history/nakaraan.jpg',
            'body' => [
                'A Spanish administrative decree divided Partido de Camarines into Camarines Sur and Camarines Norte — the first appearance of the two names that survive to this day.',
                'The split was administrative rather than cultural: both halves shared language, church jurisdiction, and trade networks, which is precisely why the division would be reversed repeatedly over the following decades.',
            ],
            'facts' => [
                ['label' => 'Statute', 'value' => 'Spanish Administrative Decree'],
                ['label' => 'Designation', 'value' => 'First Division: Camarines Sur & Camarines Norte'],
                ['label' => 'Impact', 'value' => 'Two separate provincial administrations created'],
            ],
            'sources' => ['wiki-ambos'],
        ],
        [
            'date' => '1854', 'sort' => '1854', 'era' => 'territory', 'label' => 'Reunification', 'icon' => '🔗',
            'title' => 'The Province of Ambos Camarines',
            'summary' => 'Norte and Sur are fused back together to resolve revenue shortfalls — the birth of “Ambos Camarines.”',
            'image' => 'img/about/capitol-history/ambos-camarines.jpg',
            'body' => [
                'A colonial fusion order reunified Camarines Norte and Camarines Sur into a single province known as Ambos Camarines — literally “both Camarines.”',
                'The stated rationale was fiscal: neither half generated enough tribute and tax revenue to independently sustain a full provincial bureaucracy.',
            ],
            'facts' => [
                ['label' => 'Statute', 'value' => 'Colonial Fusion Order'],
                ['label' => 'Designation', 'value' => 'Province of Ambos Camarines'],
                ['label' => 'Impact', 'value' => 'Norte and Sur reunified to resolve revenue shortfalls'],
            ],
            'sources' => ['wiki-ambos'],
        ],
        [
            'date' => '1857 – 1893', 'sort' => '1857', 'era' => 'territory', 'label' => 'Fiscal Flux', 'icon' => '♻️',
            'title' => 'Repeated Separations and Mergers',
            'summary' => 'Four decades of alternating partition (1857) and reunification (1893), each driven by shifting colonial revenue policy.',
            'image' => 'img/about/capitol-history/nakaraan.jpg',
            'body' => [
                'Between 1857 and 1893 the two Camarines were separated and rejoined several times through a series of royal decrees.',
                'Each swing followed the fiscal logic of the colonial treasury: partition when tax yields justified two bureaucracies, reunification when they did not. The instability made permanent infrastructure — including a permanent capitol — practically impossible to plan.',
            ],
            'facts' => [
                ['label' => 'Statute', 'value' => 'Series of Royal Decrees'],
                ['label' => 'Designation', 'value' => 'Repeated Separations and Mergers'],
                ['label' => 'Impact', 'value' => 'Alternating partition (1857) and reunification (1893) driven by fiscal shifts'],
            ],
            'sources' => ['wiki-ambos'],
        ],
        [
            'date' => 'March 10, 1917', 'sort' => '1917-03-10', 'era' => 'territory', 'label' => 'Permanent Separation', 'icon' => '🏛️',
            'title' => 'Act No. 2711 — The Final Division',
            'summary' => 'The Revised Administrative Code definitively separates Camarines Sur and Camarines Norte, fixing the boundary that stands today.',
            'image' => 'img/about/capitol-history/1917-separation.jpg',
            'body' => [
                'Through Act No. 2711, the Revised Administrative Code of 1917, Camarines Sur and Camarines Norte were definitively separated.',
                'Unlike every previous split, this one held. Camarines Sur finally gained a stable administrative identity, a fixed territory, and a permanent provincial government seated in Naga — the precondition for everything that follows in this timeline.',
            ],
            'facts' => [
                ['label' => 'Statute', 'value' => 'Act No. 2711 (Revised Administrative Code)'],
                ['label' => 'Designation', 'value' => 'Permanent Division: Camarines Sur & Camarines Norte'],
                ['label' => 'Impact', 'value' => 'Final, definitive territorial boundary between the two provinces'],
            ],
            'sources' => ['wiki-ambos', 'pgcs-history'],
        ],
        [
            'date' => 'December 15, 1948', 'sort' => '1948-12-15', 'era' => 'capitol', 'label' => 'The Birthplace', 'icon' => '📍',
            'title' => 'Naga Becomes a Chartered City',
            'summary' => 'Republic Act No. 305 charters Naga as a city — prompting provincial officials to seek a seat of government of their own.',
            'image' => 'img/about/capitol-history/pic.png',
            'body' => [
                'The provincial government seat was once situated in downtown Naga, sharing the urban core with the city’s own institutions.',
                'When Naga was proclaimed a chartered city under Republic Act No. 305, provincial officials began recognising the need for a distinct seat of government outside the newly independent city’s jurisdiction.',
            ],
            'facts' => [
                ['label' => 'Statute', 'value' => 'Republic Act No. 305'],
                ['label' => 'Designation', 'value' => 'City of Naga chartered'],
                ['label' => 'Impact', 'value' => 'Triggered the search for a separate provincial capitol site'],
            ],
            'sources' => ['naga-pano', 'camsur-capitol'],
        ],
        [
            'date' => '1952', 'sort' => '1952', 'era' => 'capitol', 'label' => 'The First Move', 'icon' => '🚚',
            'title' => 'Governor Triviño Initiates the Transfer',
            'summary' => 'Gov. Juan F. Triviño begins moving the capitol out of Naga and starts planning the Provincial Capitol Complex at Pili.',
            'image' => 'img/about/capitol-history/juan.png',
            'body' => [
                'Governor Juan F. Triviño initiated the transfer of the provincial capitol from Naga and began the creation of the Provincial Capitol Complex.',
                'Pili was chosen as the new ground — geographically central to the province, on the Maharlika Highway, and with ample land for a purpose-built government complex.',
            ],
            'facts' => [
                ['label' => 'Initiated By', 'value' => 'Gov. Juan F. Triviño'],
                ['label' => 'Selected Ground', 'value' => 'Municipality of Pili'],
                ['label' => 'Impact', 'value' => 'Start of the Provincial Capitol Complex programme'],
            ],
            'sources' => ['camsur-capitol', 'internal'],
        ],
        [
            'date' => 'June 16, 1955', 'sort' => '1955-06-16', 'era' => 'capitol', 'label' => 'Republic Act No. 1336', 'icon' => '⚖️',
            'title' => 'Capitol Site Legally Transferred to Pili',
            'summary' => 'RA 1336 moves the site of the Provincial Capitol from the City of Naga to Barrio Palestina, Pili.',
            'image' => 'img/about/capitol-history/map.png',
            'body' => [
                'Republic Act No. 1336 transferred the site of the Provincial Capitol from the City of Naga to Barrio Palestina in the Municipality of Pili, Camarines Sur.',
                'This is the statutory moment at which Pili became — in law — the capital of Camarines Sur, even though the physical relocation of offices would take decades more to complete.',
            ],
            'facts' => [
                ['label' => 'Statute', 'value' => 'Republic Act No. 1336'],
                ['label' => 'Designation', 'value' => 'Transfer of the provincial capital to Pili'],
                ['label' => 'New Site', 'value' => 'Barrio Palestina, Pili, Camarines Sur'],
            ],
            'sources' => ['camsur-capitol', 'pgcs-history'],
        ],
        [
            'date' => '1962', 'sort' => '1962', 'era' => 'capitol', 'label' => 'Site Selection', 'icon' => '🔍',
            'title' => 'RA 3407 and the Search for the Exact Lot',
            'summary' => 'The President is authorised to select the capitol site on a committee’s recommendation; three candidate lots are studied.',
            'image' => 'img/about/capitol-history/maleniza.png',
            'body' => [
                'Republic Act No. 3407 authorised the President of the Philippines to select the new capitol site upon the recommendation of a committee.',
                'Hacienda Marasigan, a poblacion lot, and the Anayan–Partido road area were among the sites considered, each weighed for accessibility, cost, and room for future expansion.',
            ],
            'facts' => [
                ['label' => 'Statute', 'value' => 'Republic Act No. 3407'],
                ['label' => 'Authority', 'value' => 'President of the Philippines, upon committee recommendation'],
                ['label' => 'Candidate Sites', 'value' => 'Hacienda Marasigan · Poblacion lot · Anayan–Partido road area'],
            ],
            'sources' => ['camsur-capitol', 'internal'],
        ],
        [
            'date' => '1964', 'sort' => '1964', 'era' => 'capitol', 'label' => 'Groundbreaking', 'icon' => '🧱',
            'title' => 'Cornerstone Laying Ceremony',
            'summary' => 'President Diosdado Macapagal leads the groundbreaking and cornerstone laying; construction begins the following year.',
            'image' => 'img/about/capitol-history/1964-groundbreaking.jpg',
            'body' => [
                'President Diosdado Macapagal graced the groundbreaking ceremonies and the laying of the cornerstone of the new provincial capitol.',
                'Construction began the following year, although funding gaps and later political shifts delayed the project well beyond its intended completion.',
            ],
            'facts' => [
                ['label' => 'Officiated By', 'value' => 'President Diosdado Macapagal'],
                ['label' => 'Construction Start', 'value' => '1965'],
                ['label' => 'Outcome', 'value' => 'Project delayed by funding and administrative changes'],
            ],
            'sources' => ['camsur-capitol', 'internal'],
        ],
        [
            'date' => '1968', 'sort' => '1968', 'era' => 'capitol', 'label' => 'Relocation Review', 'icon' => '🤝',
            'title' => 'The Rodriguez Donation',
            'summary' => 'A selection committee reopens the site question and votes for the lot donated by Don Susano Rodriguez.',
            'image' => 'img/about/capitol-history/1968-rodriguez-donation.jpg',
            'body' => [
                'Local leaders pushed for the gradual transfer of provincial offices to Pili and reconsidered the exact capitol site once more.',
                'A selection committee eventually voted for the lot donated by Don Susano Rodriguez — the parcel on which the provincial government complex ultimately stands.',
            ],
            'facts' => [
                ['label' => 'Donor', 'value' => 'Don Susano Rodriguez'],
                ['label' => 'Decision Body', 'value' => 'Capitol Site Selection Committee'],
                ['label' => 'Impact', 'value' => 'Final parcel for the Provincial Capitol Complex secured'],
            ],
            'sources' => ['camsur-capitol', 'internal'],
        ],
        [
            'date' => 'June 26, 1976', 'sort' => '1976-06-26', 'era' => 'capitol', 'label' => 'The Fire', 'icon' => '🔥',
            'title' => 'A Devastating Turning Point',
            'summary' => 'Fire torches the provincial capitol building and destroys irreplaceable public records — forcing immediate reconstruction.',
            'image' => 'img/about/capitol-history/totong.png',
            'body' => [
                'A major fire torched the provincial capitol building, destroying important public documents, land records, and administrative archives.',
                'The tragedy became the urgent catalyst for constructing a new home for the provincial government — turning a decades-long deliberation into an emergency programme.',
            ],
            'facts' => [
                ['label' => 'Date', 'value' => '26 June 1976'],
                ['label' => 'Losses', 'value' => 'Capitol structure and irreplaceable public documents'],
                ['label' => 'Impact', 'value' => 'Immediate mandate to build a new provincial capitol'],
            ],
            'sources' => ['camsur-capitol', 'internal'],
        ],
        [
            'date' => 'Post-1976', 'sort' => '1977', 'era' => 'future', 'label' => 'Bensia Reconstruction', 'icon' => '🏗️',
            'title' => 'The New Capitol Rises',
            'summary' => 'A three-storey reinforced concrete capitol, satellite buildings, and improved highway access are completed.',
            'image' => 'img/about/capitol-history/bensia-reconstruction.jpg',
            'body' => [
                'Under a contract with Bensia Construction of Naga City, a three-storey reinforced concrete capitol building was completed.',
                'The programme also delivered satellite buildings for line departments and improved vehicular access from the Maharlika Highway, establishing the footprint of the Capitol Complex as it is known today.',
            ],
            'facts' => [
                ['label' => 'Contractor', 'value' => 'Bensia Construction, Naga City'],
                ['label' => 'Structure', 'value' => 'Three-storey reinforced concrete capitol'],
                ['label' => 'Scope', 'value' => 'Satellite buildings + Maharlika Highway access'],
            ],
            'sources' => ['camsur-capitol', 'internal'],
        ],
        [
            'date' => 'Present & Future', 'sort' => '2025', 'era' => 'future', 'label' => 'Better, Bolder, Bigger', 'icon' => '🌄',
            'title' => 'The Iconic Capitol and CamSur Uptown',
            'summary' => 'The new Capitol is envisioned as a civic landmark and the centrepiece of the CamSur Uptown master plan.',
            'image' => 'img/about/capitol-history/new-iconic-capitol.jpg',
            'body' => [
                'The new CamSur Capitol is envisioned as a civic landmark and the centrepiece of CamSur Uptown, integrating government service, sustainability, architecture, emergency readiness, public spaces, and future urban development.',
                'Its four-level programme places crisis management at the base, a public plinth above it, administrative floors in the middle, and a public view deck facing Mt. Isarog at the top — an inversion of the traditional closed government building.',
            ],
            'facts' => [
                ['label' => 'Design Motif', 'value' => 'Pili nut husks · Mt. Isarog profile'],
                ['label' => 'Programme', 'value' => 'Crisis centre · Civic plinth · Offices · View deck'],
                ['label' => 'Context', 'value' => 'Centrepiece of the CamSur Uptown master plan'],
            ],
            'sources' => ['camsur-capitol', 'naga-pano'],
        ],
    ];

    usort($timeline, fn ($a, $b) => strcmp($a['sort'], $b['sort']));

    $levels = [
        ['level' => 'First Level',  'title' => 'Crisis Management Center',        'icon' => '🛡️', 'body' => 'Supports evacuation, emergency coordination, and disaster response during crisis situations.'],
        ['level' => 'Second Level', 'title' => 'Multi-Purpose Plinth',            'icon' => '🏟️', 'body' => 'A civic activity level reached by staircases and crowned by a covered open-air atrium.'],
        ['level' => 'Third Level',  'title' => 'Administrative Level',            'icon' => '🏢', 'body' => 'Provincial offices with public amenities — library, cafeteria, and a black box theatre.'],
        ['level' => 'Fourth Level', 'title' => 'Governor’s Quarters & View Deck', 'icon' => '⛰️', 'body' => 'Private quarters plus a public observation deck with panoramic views of Mt. Isarog.'],
    ];

    $governanceCards = [
        ['title' => 'Administrative Hub', 'icon' => '🏢', 'image' => 'img/about/capitol-history/administrative-hub.jpg', 'body' => 'Center of provincial administration and home of the key departments and the Provincial Governor’s Office.'],
        ['title' => 'Economic Symbol',    'icon' => '🌰', 'image' => 'img/about/capitol-history/pili-symbol.jpg',        'body' => 'The new Capitol design pays homage to the Pili nut, one of the province’s defining cultural and economic symbols.'],
        ['title' => 'Civic Landmark',     'icon' => '🏛️', 'image' => 'img/about/capitol-history/civic-landmark.jpg',     'body' => 'With Freedom Stadium, Provincial Park, and Mt. Isarog nearby, the complex is a visible symbol of governance and identity.'],
    ];

    /* =========================================================
     |  NEW ICONIC CAPITOL CAROUSEL SLIDES
     * ========================================================= */
    $carouselSlides = [
        [
            'type' => 'image',
            'src' => 'img/about/capitol-history/slice.png',
            'alt' => 'New Capitol Architectural Cutaway Cross-section Structural Rendering'
        ],
        [
            'type' => 'image',
            'src' => 'img/about/capitol-history/new-iconic-capitol.jpg',
            'alt' => 'New Iconic Capitol Design Concept — Inspired by native Pili nut shapes and Mt. Isarog profile'
        ],
        [
            'type' => 'video',
            'src' => 'https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FProvincialGovernmentofCamarinesSur%2Fvideos%2F2459146950943232%2F&show_text=false&t=0',
            'alt' => 'Province of Camarines Sur Official Facebook Presentation Video'
        ]
    ];

    $payload = [
        'citations' => $citations,
        'eras' => $eras,
        'items' => array_map(function ($item) {
            $item['imageUrl'] = $item['image'] ? asset(ltrim($item['image'], '/')) : null;
            return $item;
        }, $timeline),
    ];
@endphp

@include('pages.guest.capitol-history.styles')

@include('pages.guest.capitol-history.hero')

<main class="mx-auto max-w-7xl space-y-16 px-4 py-14 sm:space-y-24 sm:px-6 sm:py-20 lg:px-8">
    @include('pages.guest.capitol-history.introduction')
    @include('pages.guest.capitol-history.timeline')
    @include('pages.guest.capitol-history.tabs')
    @include('pages.guest.capitol-history.comparison')
    @include('pages.guest.capitol-history.leadership')
    @include('pages.guest.capitol-history.closing')
</main>

@include('pages.guest.capitol-history.modals')
@include('pages.guest.capitol-history.scripts')
</x-guest-layout>