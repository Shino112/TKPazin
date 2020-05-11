<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();

        $date = Carbon::create(2020, 3, 1 , 9);

        DB::table('posts')->insert(
            [
                [
                    'naslov' => "Otvoreni turnir u 10 mjesecu",
                    'tekst' => "Vozači F1 su zbog svojih uspjeha uvijek u centru pozornosti, potpuno opravdano, a mnoge bolide slavimo i divimo im se, što zbog njihove ljepote, što zbog njihovog uspjeha. Nažalost, uvijek se nekako po strani, potpuno nepravedno, ostave njihovi dizajneri te rijetko kad nam padne na pamet da su za takve bolide najzaslužniji upravo oni. No ipak postoji jedan dizajner bolida koji je ostavio traga u F1 i koji je nerijetko slavniji od svojih bolida te su se mnogi vozači borili upravo njega, a ne protiv vozača koji su vozili njegove bolide. Taj čovjek je Adrian Newey, zasigurno najpoznatiji dizajner bolida svih vremena, jedan od najtrofejnijih ljudi ovog sporta te čovjek koji od G klase zasigurno može napraviti aerodinamički učinkovitiji automobil od Opela Calibre.",
                    'slika' => "/img/vijesti.jpg",
                    'created_at' => $date,
                    'updated_at' => $date
                ],

                [
                    'naslov' => "Otvoreni turnir u 9 mjesecu",
                    'tekst' => "Adrian Newey je rođen 1958. u Stratford-upon-Avonu te je pohađao Repton srednju školu u isto vrijeme kao i Jeremy Clarkson. Studij aeronautike i aerodinamike završava 1980. na Sveučilištu u Southamptonu i odmah se zapošljava u Fittipaldi F1 momčadi pod budnim okom Harveya Postlethwaitea, ali ubrzo prelazi raditi za March gdje prvotno radi kao trkaći inženjer Johnnya Cecotta u europskoj Formuli 2, a kasnije stvara svoj prvi automobil, March GTP, bolid koji je pokorio IMSA GTP trkaću seriju. Inače, Adrian Newey je zamalo izbačen iz srednje škole jer je na jednom školskom koncertu pojačao zvučnike toliko jako da su popucala stakla na školskim prozorima.",
                    'slika' => "/img/vijesti.jpg",
                    'created_at' => $date,
                    'updated_at' => $date
                ],

                [
                    'naslov' => "Otvoreni turnir u 8 mjesecu",
                    'tekst' => "March ga 1984. šalje da radi na March CART projektu kao dizajner bolida i trkaći inženjer za Bobbya Rahala, s kojim sklapa veliko i snažno prijateljstvo. I opet Neweyev rad donosi odlične rezultate. 1985. Neweyev March 85C donosi Alu Unseru naslov CART prvaka i Dannyu Sullivanu pobjedu na Indy 500 te godine. 1986. radi za Kraco kao trkaći inženjer Mariju Andrettiju, a Neweyev March 86C donosi Bobbyu Rahalu CART naslov i Indy 500 pobjedu te godine. Iako je krajem 1986. otišao u Haas-Lolu F1 momčad da im poboljša rezultate, momčad se raspala te se vraća u CART, te se godinu kasnije vraća u March i počinje raditi na njihovom novom F1 bolidu, March 881.",
                    'slika' => "/img/vijesti.jpg",
                    'created_at' => $date,
                    'updated_at' => $date
                ],

                [
                    'naslov' => "Otvoreni turnir u 7 mjesecu",
                    'tekst' => "Bolid je bio mnogo konkurentniji nego što je itko mogao očekivati, Ivan Capelli je čak uspio dva puta doći do podija (3. mjesto u Belgiji i 2. u Portugalu) i preteknuti Alaina Prosta u McLarenu MP4/4 na Velikoj Nagradi Japana, a Mauricio Gugelmin je uspio doći do trećeg mjesta u prvoj utrci sezone 1989. u Brazilu, budući da novi CG891 nije još bio spreman. Njegov nasljednik CG891 nažalost nije bio konkurentan te je imao puno odustajanja. Inače, tijekom 1989. Leyton House kupuje March te momčad mijenja ime u Leyton House Racing. Sljedeća sezona nije počela dobro, a loši rezultati traju sve do Velike Nagrade Francuske kad momčad donosi B specifikaciju bolida te Capelli dovodi bolid do 2. mjesta na toj utrci. Ostatak sezone je bio obilježen lošom pouzdanošću te su još samo jednom osvojili bodove.",
                    'slika' => "/img/vijesti.jpg",
                    'created_at' => $date,
                    'updated_at' => $date
                ],
                [
                    'naslov' => "Otvoreni turnir u 6 mjesecu",
                    'tekst' => "Iako nije sudjelovao u dizajniranju MP4/12, odličnim nadogradnjama ga uspijeva poboljšati, što donosi McLarenu 1-2 pobjedu na Velikoj Nagradi Europe. Ali sezona 1998. je protekla u znaku dominacije Neweyeva McLarena MP4/13 kojim Hakkinen osvaja vozački, a McLaren konstruktorski naslov. Sljedeća sezona je bila nešto manje uspješna, ali ipak Hakkinen uspijeva ponovno osvojiti naslov prvaka, a McLaren završava sezonu na 2. mjestu, iza Ferrarija. Nažalost, sljedećih 5 sezona prolazi u dominaciji Ferrarija i Michaela Schumachera, a McLaren i Williams nisu mogli ništa. Tijekom 2001. Newey potpisuje ugovor s Jaguarom, ali na kraju ipak ne prelazi u Jaguar jer ga je Ron Dennis nagovorio da ostane u McLarenu. Kako bi zaustavili Ferrari, McLaren i Newey rade MP4/18, poprilično radikalan bolid, ali bolid ispada katastrofa te je umjesto njega korišten MP4/17D, nadograđeni bolid iz 2002. godine. Tijekom 2004. kružile su razne spekulacije da će Newey otići iz McLarena, što se i događa krajem 2005. kad prelazi u Red Bull.",
                    'slika' => "/img/vijesti.jpg",
                    'created_at' => $date,
                    'updated_at' => $date
                ],
                [
                    'naslov' => "Otvoreni turnir u 5 mjesecu",
                    'tekst' => "Tijekom prve 3 sezone što je Newey radio za Red Bull, momčad, uz ponešto podija, nije imala neki značajan rezultat, ali sve se mijenja promjenom pravila za 2009. kad Newey dizajnira odličan bolid te Red Bull osvaja svoju prvu pobjedu u povijesti na Velikoj Nagradi Kine. Iako u drugom dijelu sezone je Red Bull očito ima najbolji bolid, prednost koju je Brawn stekao tijekom prvog dijela sezone zbog dvostrukog difuzora je bila prevelika. Ali sljedeće 4 sezone su prošle u iznimnoj dominaciji Red Bulla, Vettela koji je za Red Bull osvojio 4 uzastopna naslova prvaka te Neweya koji je dizajnirao Red Bullove bolide. Posebno dominantni su bili 2011. kad Red Bull pobjeđuje na 12 utrka, od toga Vettel 11, te ostvario 18 od 19 pole positiona. Isto tako impresivni su bili 2013. kad Red Bull pobjeđuje na 13 utrka(svaku od njih je ostvario Sebastian Vettel), od toga 9 u nizu. Nažalost, promjenom pravila po pitanju pogonskih jedinica za 2014. Red Bull i Newey se ne snalaze najbolje, ponajviše zbog Renaultovih motora koji nisu bili na razini Mercedesa, ali ipak uspijevaju održati konkurentnost i biti pri vrhu, a svi Red Bullovi bolidi, uz iznimku RB11, uspijevaju pobijediti na barem 2 utrke u sezoni, a 2014. i 2016. završavaju drugi na konstruktorskoj tablici. Isto tako, unatoč primamljivoj ponudi iz Ferrarija, Newey odlučuje ostati u Red Bullu u kojem se nalazi i danas.",
                    'slika' => "/img/vijesti.jpg",
                    'created_at' => $date,
                    'updated_at' => $date
                ],
                [
                    'naslov' => "Otvoreni turnir u 4 mjesecu",
                    'tekst' => "Adrian Newey je jedini, uz eventualno Rossa Brawna, kojeg se može nazvati zvijezdom Formule 1 i koji je iznimno popularan, a da nije vozač ili šef momčadi, a to je svakako izniman uspjeh. Isto tako, on je veliki kolekcionar automobila i obožavatelj motosporta, koji je i sam povremeno nastupao na raznim natjecanjima, a 2007. čak nastupa na 24 sata Le Mansa za volanom Ferrarija F430 s kojim završava na 22. mjestu ukupnog poretka, te 4. u klasi. Nadalje, unatoč razvoju tehnologije i raznih programa za crtanje, on i dalje koristi olovku, papir i ostali pribor za crtanje, kao što su ravnala i trokuti, što ipak izaziva određeni respekt. Iako za neke on snosi dio odgovornosti za Senninu smrt, njegova ostavština u obliku Williamsa FW14, McLarena MP4/13, Red Bulla RB6 i ostalih legendarnih bolida ipak ćemo Neweya pamtiti po dobrom, kad više ne bude dijelom F1.",
                    'slika' => "/img/vijesti.jpg",
                    'created_at' => $date,
                    'updated_at' => $date
                ],
                [
                    'naslov' => "Otvoreni turnir u 3 mjesecu",
                    'tekst' => "Vozači F1 su zbog svojih uspjeha uvijek u centru pozornosti, potpuno opravdano, a mnoge bolide slavimo i divimo im se, što zbog njihove ljepote, što zbog njihovog uspjeha. Nažalost, uvijek se nekako po strani, potpuno nepravedno, ostave njihovi dizajneri te rijetko kad nam padne na pamet da su za takve bolide najzaslužniji upravo oni. No ipak postoji jedan dizajner bolida koji je ostavio traga u F1 i koji je nerijetko slavniji od svojih bolida te su se mnogi vozači borili upravo njega, a ne protiv vozača koji su vozili njegove bolide. Taj čovjek je Adrian Newey, zasigurno najpoznatiji dizajner bolida svih vremena, jedan od najtrofejnijih ljudi ovog sporta te čovjek koji od G klase zasigurno može napraviti aerodinamički učinkovitiji automobil od Opela Calibre.",
                    'slika' => "/img/vijesti.jpg",
                    'created_at' => $date,
                    'updated_at' => $date
                ],
                [
                    'naslov' => "Otvoreni turnir u 2 mjesecu",
                    'tekst' => "Vozači F1 su zbog svojih uspjeha uvijek u centru pozornosti, potpuno opravdano, a mnoge bolide slavimo i divimo im se, što zbog njihove ljepote, što zbog njihovog uspjeha. Nažalost, uvijek se nekako po strani, potpuno nepravedno, ostave njihovi dizajneri te rijetko kad nam padne na pamet da su za takve bolide najzaslužniji upravo oni. No ipak postoji jedan dizajner bolida koji je ostavio traga u F1 i koji je nerijetko slavniji od svojih bolida te su se mnogi vozači borili upravo njega, a ne protiv vozača koji su vozili njegove bolide. Taj čovjek je Adrian Newey, zasigurno najpoznatiji dizajner bolida svih vremena, jedan od najtrofejnijih ljudi ovog sporta te čovjek koji od G klase zasigurno može napraviti aerodinamički učinkovitiji automobil od Opela Calibre.",
                    'slika' => "/img/vijesti.jpg",
                    'created_at' => $date,
                    'updated_at' => $date
                ],
                [
                    'naslov' => "Otvoreni turnir u 1 mjesecu",
                    'tekst' => "Vozači F1 su zbog svojih uspjeha uvijek u centru pozornosti, potpuno opravdano, a mnoge bolide slavimo i divimo im se, što zbog njihove ljepote, što zbog njihovog uspjeha. Nažalost, uvijek se nekako po strani, potpuno nepravedno, ostave njihovi dizajneri te rijetko kad nam padne na pamet da su za takve bolide najzaslužniji upravo oni. No ipak postoji jedan dizajner bolida koji je ostavio traga u F1 i koji je nerijetko slavniji od svojih bolida te su se mnogi vozači borili upravo njega, a ne protiv vozača koji su vozili njegove bolide. Taj čovjek je Adrian Newey, zasigurno najpoznatiji dizajner bolida svih vremena, jedan od najtrofejnijih ljudi ovog sporta te čovjek koji od G klase zasigurno može napraviti aerodinamički učinkovitiji automobil od Opela Calibre.",
                    'slika' => "/img/vijesti.jpg",
                    'created_at' => $date,
                    'updated_at' => $date
                ],
            ]
            );
    }
}
