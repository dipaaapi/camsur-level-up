<?php

namespace Database\Seeders;

use App\Models\WordOfWisdom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordOfWisdomSeeder extends Seeder
{
    /**
     * How many rows to generate per category_type.
     */
    private const PER_CATEGORY = 60;

    public function run(): void
    {
        WordOfWisdom::truncate();

        $govQuotes = [
            "Ang tunay na serbisyo publiko ay nagmumula sa pusong tapat at handang maglingkod nang walang kapalit.",
            "In every government document you process, remember there is a citizen whose life you are improving.",
            "Integrity is doing the right thing, even when no one is watching in the public hall.",
            "Public service is a public trust. Serve Camarines Sur with pride, honor, and dedication.",
            "Ang husay at galing ng Bicolano ay ang tunay na pundasyon ng kaunlaran ng ating lalawigan.",
            "A public servant's greatest reward is the trust of the people they serve.",
            "Malasakit at katapatan ang dalawang haligi ng tunay na paglilingkod bayan.",
            "Efficient, honest, and compassionate service builds a government the people can believe in.",
            "Every signature you affix carries the weight of public trust. Sign with integrity.",
            "Ang lingkod-bayan na may pusong malinis ay kayang baguhin ang buhay ng maraming Bicolano.",
            "Transparency in governance is not optional. It is the foundation of public confidence.",
            "Serve not for recognition, but because Camarines Sur deserves your best.",
            "Small acts of diligence in public office create large waves of positive change.",
            "Ang bureaucracy ay nagiging makabuluhan kapag dinaluhan ng tunay na malasakit.",
            "Accountability today builds the trust that Camarines Sur will need tomorrow.",
            "Your desk may be small, but the impact of honest public service is immeasurable.",
            "Katapatan sa tungkulin ang pinakamahalagang regalo ng isang tunay na lingkod-bayan.",
            "Good governance begins with the willingness to listen to every citizen's concern.",
            "The uniform of public service is worn with humility, not entitlement.",
            "Ang bawat proyekto ng pamahalaan ay pagkakataong itaas ang antas ng buhay ng Bicolano."
        ];

        $privateQuotes = [
            "Your dedication in the private sector drives the economic engine of our local communities.",
            "Excellence is not a skill, it is an attitude. Bring your best self to your work every day.",
            "Success in local enterprise creates ripple effects of progress throughout Camarines Sur.",
            "Continuous learning and skill mastery are your greatest career investments.",
            "Ang sipag at tiyaga ng Bicolano ay susi sa tagumpay sa anumang kumpanya.",
            "Every business you help grow strengthens the local economy of Camarines Sur.",
            "Professionalism is shown not in words, but in the quality of everyday work.",
            "Ang disiplina sa trabaho ang unang hakbang tungo sa tagumpay sa karera.",
            "A strong local workforce is the backbone of a thriving provincial economy.",
            "Innovation begins when you challenge yourself to do more than what is expected.",
            "Bawat resibo, bawat benta, ay patunay ng pagsisikap ng manggagawang Bicolano.",
            "Great companies are built by employees who treat every task as their own.",
            "Your work ethic today shapes the career opportunities that await you tomorrow.",
            "Ang tunay na propesyonal ay gumagawa ng maayos kahit walang nakatingin.",
            "Teamwork transforms individual effort into collective business success.",
            "Reliability is the quiet quality that makes careers and companies last.",
            "Ang bawat oras na inilaan mo sa trabaho ay puhunan para sa iyong kinabukasan.",
            "Customer trust is earned one honest transaction at a time.",
            "Adaptability in the workplace is the mark of a future-ready employee.",
            "Sa bawat pagsubok sa negosyo, may nakatagong aral para sa paglago."
        ];

        $overseasQuotes = [
            "Every OFW is a living testament to Filipino resilience, strength, and love for family.",
            "Distance may separate you from Camsur, but your hard work shines brightly across the global stage.",
            "You carry the dignity and talent of the Bicolano wherever your journey leads.",
            "Ang sakripisyo mo ngayon ay magbubunga ng masaganang bukas para sa iyong pamilya.",
            "Work with honor globally, but always keep Camarines Sur in your heart.",
            "The world becomes smaller when Filipino hands are willing to work hard anywhere.",
            "Malayo man sa pamilya, ang pagmamahal at sakripisyo ay laging malapit sa puso.",
            "Every remittance sent home is a story of love, courage, and perseverance.",
            "Your strength abroad inspires the family and community you left behind.",
            "Bicolano excellence knows no borders, no oceans, no distance.",
            "Homesickness fades when you remember the purpose behind your journey.",
            "Ang tagumpay sa ibang bansa ay bunga ng tiyaga at pananalig sa Diyos.",
            "You are not just working abroad, you are building a legacy for generations.",
            "Every contract signed overseas is a promise kept to your family back home.",
            "Kahit gaano kalayo, ang puso ng isang OFW ay laging nasa Pilipinas.",
            "Your courage to leave home reflects the depth of your love for family.",
            "Resilience is the quiet strength that carries every overseas Filipino worker forward.",
            "Bawat hirap sa ibayong-dagat ay may katumbas na pag-asa para sa kinabukasan.",
            "The Filipino spirit travels well, adapting and thriving in every corner of the world.",
            "Your sacrifice today writes a better story for the next generation of your family."
        ];

        $spesQuotes = [
            "Your student internship is the first step toward building a lifetime of achievement.",
            "Ang kabataan ang pag-asa ng bayan. Gamitin ang pagkakataong ito upang matuto at lumago.",
            "Small beginnings in student programs lead to great career milestones.",
            "Learn with curiosity, work with enthusiasm, and build your future with confidence.",
            "Every task in SPES is a stepping stone to your professional dreams.",
            "The lessons you learn as a student worker will serve you for a lifetime.",
            "Ang bawat karanasan sa trabaho, kahit maliit, ay malaking hakbang tungo sa paglago.",
            "SPES is not just a summer job, it is the beginning of your career story.",
            "Discipline learned early in life becomes the foundation of future success.",
            "Ipakita ang husay mo ngayon, dahil ito ang simula ng iyong pangarap.",
            "Every student worker today is a future leader of Camarines Sur.",
            "Curiosity and effort are the two best tools a young worker can carry.",
            "Your first job teaches you more about yourself than any classroom ever could.",
            "Ang tiwala na ibinigay sa iyo ngayon ay dapat sagutin ng tapat na paggawa.",
            "Growth happens outside your comfort zone, especially in your very first job.",
            "SPES students today, professionals and leaders of Camarines Sur tomorrow.",
            "Every deadline you meet as a student worker builds the habits of a future professional.",
            "Ang pagsisikap mo ngayon bilang estudyante ay puhunan sa iyong kinabukasan.",
            "Take pride in even the smallest task, for it reflects your character.",
            "Your youthful energy today can spark the innovations Camarines Sur needs tomorrow."
        ];

        $allQuotes = [
            "Opportunities don't just happen, you create them through hard work and preparation.",
            "Believing in yourself is the first secret to career success.",
            "Camarines Sur thrives when its workforce is empowered, inspired, and motivated.",
            "Ang bawat pangarap ay kayang abutin sa tulong ng sipag, tiyaga, at pananalig.",
            "Your potential is endless. Go after your career goals with passion.",
            "Every job, big or small, contributes to the progress of our province.",
            "Success is built one honest day of work at a time.",
            "Ang tagumpay ay hindi bigla-bigla; ito ay bunga ng patuloy na pagsisikap.",
            "A career well-built starts with the courage to take the first step.",
            "Employment is not just income, it is dignity, purpose, and pride.",
            "Kapag tapat ka sa iyong trabaho, tapat din ang tagumpay na darating sa iyo.",
            "Progress for Camarines Sur begins with every Bicolano who chooses to work hard.",
            "The right opportunity, met with the right preparation, changes everything.",
            "Ang bawat manggagawa ay bahagi ng kwento ng pag-unlad ng Camarines Sur.",
            "Never underestimate the value of consistent, honest effort over time.",
            "Your career journey is unique, but your determination should never waver.",
            "Sa bawat pagkakataong ibinibigay, dapat may kasamang dedikasyon at disiplina.",
            "A hopeful workforce today builds a prosperous Camarines Sur tomorrow.",
            "Every application, every interview, every effort brings you closer to your goal.",
            "Patience, preparation, and perseverance are the pillars of lasting career success."
        ];

        $categories = [
            'government'    => $govQuotes,
            'private_local' => $privateQuotes,
            'overseas'      => $overseasQuotes,
            'spes'          => $spesQuotes,
            'all'           => $allQuotes,
        ];

        $sources = [
            'Provincial Government of Camarines Sur',
            'Provincial Government of Camarines Sur - PESO',
            'Provincial Government of Camarines Sur - Office of the Governor',
            'PESO Camarines Sur',
        ];

        $now = now();
        $rows = [];

        // Seed PER_CATEGORY items per category, cycling through the unique
        // quote pool so repeats are spaced out instead of immediately adjacent.
        foreach ($categories as $type => $quotesList) {
            $pool = $quotesList;
            shuffle($pool); // randomize order per run

            for ($i = 0; $i < self::PER_CATEGORY; $i++) {
                $quoteText = $pool[$i % count($pool)];

                $rows[] = [
                    'category_type'    => $type,
                    'quote'            => $quoteText,
                    'author_or_source' => $sources[array_rand($sources)],
                    'created_at'       => $now,
                    'updated_at'       => $now,
                ];
            }
        }

        foreach (array_chunk($rows, 200) as $chunk) {
            DB::table('words_of_wisdom')->insert($chunk);
        }
    }
}