Laravel projekto k?rimas:

1. Terminale: composer create-project laravel/laravel projekto-pavadinimas (sukuria nauj? laravel projekt?);
2. Terminale: cd projekto-pavadinimas (atidaro nurodyt? laravel projekt?);
3.  phpMyAdmin: susikurti nauj? duomen? baz? utf8mb4_unicode_ci ;
4. Projekte: .env > DB_DATABASE pervadinti ? susikurtos db pavadinim? (be kabu?i?. sujungia su sukurta db);
5. config>database.php>'engine' => 'InnoDB', (nurodo db tip?, �iuo atveju local server db);
6. Terminale: php artisan make:model Lentel?s_pavadinimas(vienaskaita) --all (sukuria model?, kuris sukurs duomen? baz?j nauj? lental? pvz. modelis Client, lentel? bus clients. Kiekvienam naujam modeliui atskira komanda terminale);
7.database>migrations>(reikalinga lental?) ? create 'lentel?s pavadinimas' f-cija supildyti reikiamus sukurti stulpelius.
$table->kintamojo r?�is('stulpelio pavadinimas');
pvz. $table->string('name');
pvz. $table->string('image_url', 300);  nurodo kiek simboli? gali tur?ti string'as,
text -neapriboja simboli? kiekio,
bigInteger - gali tur?ti neigiamas reik�mes,
unsignedBigInteger - tik teigiami skai?iai (naudoti su foreign keys stulpeliais, kuri? primary key yra nurodyti atributai 'unsigned';
jei stulpelis yra foreign key, b?tina nurodyti jo ry�?
pvz.  $table->foreign('type_id')->references('id')->on('types'); 
SVARBU!!! file'ai migrations foldery turi eiti herarchine tvarka t.y. pirma turi b?ti sukuriama lentel? su primary key, o tik tada lentel? su foreign key. Tod?l file'? pavadinimai turi tur?t chronologin? sek?.
8.  Terminale: php artisan migrate:fresh (sukuria db nurodytuose lentel?se nurodytus stulpelius)
9. routes>web.php (sukurti nuorodas resursams, kiekvienam modeliui atskirai)
('folderio_pavadinimas' tai yra url kelias po domeno (pvz. www.adresas.com/folderio_pavadinimas), kuris bus toks, koks b?tent nurodytas �itam prefix'e, o ne koks i� tikro bus folderio pavadinimas su dokumentais.)
Route::prefix('folderio_pavadinimas')->group(function() {
(viduj �ios funkcijos nurodomi tikrieji keliai ir j? sutrumpinti pavadinimas. �emiau nurodytu atveju: 
get yra duomen? gavimo metodas (gali b?ti post, jei reikia kokio kintamojo)
'', rodo, kad po prefex'o daugiau nieko n?ra ('create', reik�t? www.adresas.com/folderio_pavadinimas/create), 
('update/{variable}' taip apra�omas route'as, kuris perduoda kartu ir kintam?j?, bet naudojams tik su post)
kelias iki kontrolerio failo @index rodo ? kur? controlerio metod? kreiptis
 ->name('author.index) parodo kaip sutrumpintai kreiptis ? kontrolerio metod?. Galima naudoti tiek kituose controlerio metoduose tiek blade faile pvz. <a href="{{ route('author.index') }}"
Route::get('', 'App\Http\Controllers\FolderiopavadinimasController@index')->name('author.index);
...;
ir t.t.
});
10. (vaizdo dokumentai arba blade file'ai): resources>views>routes>susikurti nauj? aplankal? atitinkant? metod? pvz. jei db lentel? clients tai failas 'client', kuriame bus saugomi su tuo metodu susi?j? CRUD file'ai.
file'ai u�vadinami kaip ir route'ai pvz. index.bade.php 
?ia viskas ra�oma html. jei reikia ?terpti php, galima tai daryti:
tarp dvigub? riestini? skriaust? {{$kintamasis}}
tarp blade sintaks?s pvz. @foreach @endforeach, @if @else @endif
formose b?tina ra�yti @csrf, kuris apsaugo forma nuo i�orinio pakeitimo (be jo neleis submitint formos)
formuose vengti kintam?j? varduose naudoti daugiau nei vien? lower dash simbol?.
11. app>Http>Controllers>reikiamo metodo kontroleris apsira�yti visus reikalingus metodus. Jau yra pagrindas visiems CRUD metodams.
public function index()
    {
        $students = Student::all();
        return view('student.index', ['students' => $students]);
    }
�itas metodas ? $students kintam?j? patalpin? vis? students lentel? i� db (nurodytas modelis ir bazin? laravelio funkcija.  Ir tada gra�ina blade file'? students/index kartu su masyvu 'students', kur? sudaro auk�?iau nurodytas $students kintamasis. 
Logika: 
nar�ykl?j ra�om serverio kelias/students (jei route frefix'as yra 'students')
route web file'as parodo, kok? metod? atlikti i� reikiamo modelio controlerio file'o
controller file'as daro loginius veiksmus pvz. �iuo atveju susigr?�ina reik�mes i� db ir nurodo keli? ? reikiam? blade file'? ir dar kartu siun?ia nurodyt? masyv? su duomenimis, kurie bus prieinami blade file'e.
nar�ykl? atidaro blade file'o html'?
12. Vir�uje controller file'o b?tina nurodyti kokius modelius ir bibliotekas naudosime.
pvz. jei noriu naudoti ne tik Student modelio duomenis, o ir School tai vir�uje prisidedu
use App\Models\School;  (pvzjei noriu naudoti ka�kius duomenis i� db lentel?s, kur yra primary key, kuris atitinka modelio foreign key)
Taip pat ?ra�ymui/atnaujinimui b?tina biblioteka
use Illuminate\Http\Request;

DATA FACTORIES:
1. database>factories> pasirikti reikalingo modelio factory, susikurti �ablon?, galima naudoti faker metodus.
2. database>seeders> pasirinkti reikalingo modelio seeder,
?traukti reikalingo modelio nuorod? dokumento vir�uje,
metode run() ?ra�yti factory paleidim?
pvz. Student::factory()->count(30)->create(); (,kuris sukurs 30 nauj? eilu?i? lentel?je students). Jeigu reikia naudoti tikslingus duomenis, juos i�karto ra�yti ? seeders file'?:
pvz.
DB::table('types')->insert([
            'name' => 'Ma�oji bendrija',
            'short_name' => 'MB',
            'description' => 'ribota atsakomyb?'
        ]);
3. database>seeders>DatabaseSeeder.php sura�yti visus seeders failus, kurius mums reikia paleisti, nes tik �is file'as i�si�aukia i� terminalo naudojant komand?
php artisan migrate:fresh --seed
pvz. 
$this->call([
StudentSeeder::class
]); (tik vir�uje file'o reikia prid?ti nuorodas ? visus naudojamus modelius pvz. 
use App\Models\Student;
SVARBU! Seeders file'? eili�kumas turi b?ti toks, kad vis? laik pirma pildyt?si  lentel?s su primary keys, o po to su foreign keys.

