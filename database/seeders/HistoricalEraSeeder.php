<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoricalEraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Linisin muna ang table para maiwasan ang duplicate entries
        DB::table('historical_eras')->truncate();

        $eras = [
            [
                'title' => 'Revolutionary Government',
                'slug' => 'revolutionary-government',
                'period' => '1898 – 1900',
                'context' => null,
                'notes' => 'Data Points: Provincial governors (presidentes militares); 23 municipalities organized; ratio of civil to military expenditure; dates of local liberation/occupation.',
                'key_characteristics' => json_encode([
                    'Constitutional Foundation' => "Establishment of Asia's first republic under the Malolos Constitution (January 1899), featuring a presidential system with separation of powers.",
                    'Militarized Governance' => 'Civil administration operated alongside revolutionary warfare against Spanish forces (until December 1898) and American forces (February 1899 onward).',
                    'Centralization vs. Federalism' => 'Tension between Malolos-centered authority and local cantonment governments (Juntas) managing municipal affairs during fluid frontlines.',
                    'Economic Context' => "Collapse of tobacco monopoly, issuance of revolutionary currency (pesos familiar), requisitioning of resources for Aguinaldo's army.",
                    'Legacy' => 'Established Filipino self-governance tradition despite eventual capitulation; created legal precedents for subsequent civil government structures.',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'American Civil Government — Ambos Camarines',
                'slug' => 'american-civil-government-ambos-camarines',
                'period' => '1901 – 1919',
                'context' => 'Ambos Camarines ("Both Camarines") refers to the unified province covering present-day Camarines Norte and Camarines Sur before legislative division in 1919 (Act No. 2809).',
                'notes' => "Administrative Highlight: Governor's annual reports (1901–1919) provide granular data on population, tax collection, disease incidence (malaria/cholera campaigns), and school enrollment rates.",
                'key_characteristics' => json_encode([
                    'Institutional Transplantation' => 'Introduction of American-style bureaucracy—Provincial Board (governor + 2 councilors), municipal councils (consejos municipales), and the justice of the peace system replacing Spanish gobernadorcillo/cabeza de barangay hierarchies.',
                    'Pacification & Order' => 'Transition from military to civilian rule (September 1901); integration of former insurgent elites (principales) into the new civil service via co-optation policies.',
                    'Public Education Explosion' => 'Creation of provincial high schools (1902), implementation of English as medium of instruction, Thomasite deployment to the Bicol region.',
                    'Infrastructure Modernization' => 'Road building programs connecting the agricultural interior to trade ports; telegraph lines; establishment of provincial hospital and sanitary regulations.',
                    'Land & Labor' => 'Early Public Land Acts (1903) opening friar lands for purchase; emergence of abaca (Manila hemp) as cash crop driving provincial economy.',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'American Civil Government — Camarines Sur',
                'slug' => 'american-civil-government-camarines-sur',
                'period' => '1919 – 1935',
                'context' => 'Following the split, Camarines Sur became an independent province with Naga (now Iriga/Naga City area depending on era) as capital.',
                'notes' => 'Demographic Note: Significant Ilocano migration begins (1920s–30s) clearing forestlands for cash crops, permanently altering ethnic composition.',
                'key_characteristics' => json_encode([
                    'Filipinization Acceleration' => 'By the Jones Law (1916), majority-Filipino Legislature allows greater local autonomy; Filipino-elected governors replace American appointees after 1920s elections.',
                    'Agricultural Transformation' => 'Shift from abaca monoculture to coconut/copra economy (1920s coconut boom); establishment of coconut drying plants and early cooperatives.',
                    'Transportation Revolution' => "Construction of Manila Railroad's Main Line South (Legazpi Line) reaching provinces (1930s), altering trade routes and urban hierarchy (rise of Pili/Lupi nodes).",
                    'Health & Sanitation' => 'Anti-malarial drainage projects in rice-growing lowlands; establishment of puericulture centers (maternal-child health).',
                    'Political Consolidation' => 'Rise of Nacionalista Party dominance at local level; increasing participation of mestizo and merchant classes in electoral politics (pre-suffrage for women until 1937).',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Commonwealth Period',
                'slug' => 'commonwealth-period',
                'period' => '1935 – 1946',
                'context' => null,
                'notes' => 'Economic Indicator: Peak copra production years (1937–1941) before Japanese seizure of commodities; establishment of provincial agricultural experimental stations.',
                'key_characteristics' => json_encode([
                    'Autonomy Framework' => 'The 1935 Constitution establishes a semi-independent state controlling internal affairs (except foreign relations/currency/defense). President Manuel Quezon implements "Social Justice" program.',
                    'Local Autonomy Devolution' => 'Province gains greater fiscal autonomy under Commonwealth Act No. 58 (1936) on provincial/municipal taxation.',
                    'Tenancy Crisis Response' => 'National Land Settlement Administration (NLSA) programs attempt to redistribute hacienda lands; creation of barrio councils formalizing grassroots governance.',
                    'Pre-War Mobilization' => 'National defense preparations affect local conscription, evacuation planning, and infrastructure hardening (1941).',
                    'Wartime Interruption (1942)' => 'Commonwealth government-in-exile operates from Washington D.C.; local governance collapses or goes underground as Japanese forces establish military administration (January 1942).',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Japanese Occupation',
                'slug' => 'japanese-occupation',
                'period' => '1942 – 1945',
                'context' => null,
                'notes' => 'Human Cost: Estimates of civilian mortality (starvation/disease/combat); documentation of comfort women stations; property damage assessments (% of pre-war capital stock destroyed).',
                'key_characteristics' => json_encode([
                    'Dual Authority Structure' => 'Japanese Military Administration (Kempeitai police, garrison command, forced labor) vs Collaborationist Civil Government (Philippine Executive Commission and Second Republic under Jose P. Laurel with shucho governors).',
                    'Economic Exploitation' => 'Confiscation of food supplies causing 1944–45 famine; destruction of abaca/coconut processing facilities; hyperinflation of Mickey Mouse money.',
                    'Resistance Geography' => "Guerrilla units (Marking's Fil-American, Hunter's ROTC, peasant militias) operating in Mt. Isarog/Bicol River basin; shadow governments running Free Areas.",
                    'Liberation Trauma (1945)' => 'Battle of Luzon spills into region; retreating Japanese implement scorched earth; U.S. bombardment destroys civic centers in Naga/Iriga.',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Postwar Transition',
                'slug' => 'postwar-transition',
                'period' => '1945 – 1946',
                'context' => null,
                'notes' => 'Milestone: July 4, 1946 independence ceremony in Manila; transfer ceremonies at provincial capitols; last acts of Commonwealth Congress before dissolution.',
                'key_characteristics' => json_encode([
                    'Rehabilitation Era (PCAUSA)' => 'Philippine Civil Affairs Unit administers civil affairs pending return of officials; distribution of UNRRA relief goods.',
                    'Restoration of Institutions' => 'Reactivation of courts, revalidation of disputed property titles due to lost records, and cleanup of currency circulation.',
                    'Political Realignments' => 'Purge debates regarding collaborationist officials; rise of Democratic Alliance (Left) influence in rural areas before 1946 polls.',
                    'Infrastructure Emergency' => 'Rehabilitation of railroad bridges, opening tent classrooms for schools, emergency hospitals treating tuberculosis and malnutrition.',
                    'Pre-Independence Anxiety' => 'Debate over parity rights amendment giving Americans equal access to natural resources affecting local exploitation plans.',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Third Republic',
                'slug' => 'third-republic',
                'period' => '1946 – 1972',
                'context' => "Full sovereign independence under the 1935 Constitution, spanning Roxas through Marcos's first term (pre-Martial Law).",
                'notes' => "Notable Impact: Magsaysay's pacification campaigns; Macapagal's decontrol policies; Marcos's early infrastructure funded by loans pre-1972.",
                'key_characteristics' => json_encode([
                    'Reconstruction & Import Substitution (1950s)' => 'Focus on rebuilding war-torn agriculture; limited industrialization via tariff protection; rural bank expansion; creation of Irrigation Service districts.',
                    'Electoral Democracy (with Flaws)' => 'Regular elections with escalating "guns, goons, gold" politics; Liberal-Nacionalista duopoly; rise of local political dynasties.',
                    'Land Reform Struggles' => 'RA 1199 (1954 Agricultural Tenancy Act); creation of Court of Agrarian Relations (CAR); persistent landlord-peasant tensions causing rural unrest.',
                    'Cold War Alignment' => 'SEATO membership (1954); anti-communist campaigns against labor/peasant groups; Operation Mindanao resettlement drawing Bicol populace southward.',
                    'Educational Expansion' => 'Free Primary Education Act (1968); founding of state colleges/universities; early stages of professional brain drain to Manila/overseas.',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Martial Law / Fourth Republic',
                'slug' => 'martial-law-fourth-republic',
                'period' => '1972 – 1986',
                'context' => null,
                'notes' => 'Local Resistance: Formation of Basic Christian Communities (BCCs) under church networks; Free Legal Assistance Group (FLAG); underground press like Taliba ng Bayan.',
                'key_characteristics' => json_encode([
                    'Constitutional Authoritarianism (1972–1981)' => 'Proclamation No. 1081 suspends habeas corpus; dissolution of Congress; appointment of OICs replacing local elected officials (KB Barangay system imposed 1975).',
                    'The "New Society" Economic Model' => 'Green Revolution programs (Masagana 99) increasing debt; crony infrastructure projects; Coconut Levy Fund exploitation and watershed logging.',
                    'Human Rights Climate' => 'Warrantless arrests, military hamletting against NPA presence, enforced disappearances, and documented torture in detention camps.',
                    'Modified Parliamentary Period (1981–1986)' => 'Lifting of Martial Law with retention of emergency powers; 1973 Constitution establishes Fourth Republic; 1981/1984 elections.',
                    'Economic Collapse (1983–1986)' => 'Aquino assassination sparks capital flight; $26B external debt; inflation exceeds 50%; coconut oil price crash devastates local economy.',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fifth Republic',
                'slug' => 'fifth-republic',
                'period' => '1986 – Present',
                'context' => 'Post-People Power restoration of liberal democracy under the 1987 Freedom Constitution and ratified 1987 Constitution.',
                'notes' => 'Statistical Snapshot: IRA share trends (1992–2024), poverty incidence reduction targets, Human Development Index trajectory, and tourism records.',
                'key_characteristics' => json_encode([
                    'Decentralization & Local Autonomy (1991)' => 'Local Government Code (RA 7160) devolving 40% of national taxes to LGUs; creation of Local Development Councils, School Boards, and RPT/IRA revenue reforms.',
                    'Devolution Challenges' => 'Capability gaps among municipalities; imperial Manila tensions; federalism proposals.',
                    'Modernization Trends' => 'IT-BPO industry growth; eco-tourism branding; high reliance on OFW remittances fueling local construction booms.',
                    'Disaster Risk Governance' => 'Institutionalization of PDRRM (RA 10121) due to typhoon exposure; climate change adaptation integrated into Comprehensive Land Use Plans.',
                    'Political Dynasty Entrenchment' => 'Unregulated political families dominating legislative and executive seats; entry of celebrity-politicians.',
                    'Contemporary Issues (2020s)' => 'COVID-19 recovery and learning loss; "Build Build Build" transport corridors; mining vs agricultural land-use conflicts.',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('historical_eras')->insert($eras);
    }
}