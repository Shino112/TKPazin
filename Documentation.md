# Dokumentacija

## Sadržaj

1. [Struktura web stranice](https://github.com/Shino112/TKPazin/new/master#struktura-web-stranice)
    1. [Prikaz relacijske baze](https://github.com/Shino112/TKPazin/new/master#prikaz-relacijske-baze)
2. [Ubacivanje slika](https://github.com/Shino112/TKPazin/new/master#ubacivanje-slika)
3. [Brisanje bodova igrača na turnirima ako ne igraju u toj sezoni](https://github.com/Shino112/TKPazin/new/master#brisanje-bodova-igra%C4%8Da-na-turnirima-ako-ne-igraju-u-toj-sezoni)
    1. [Skripta](https://github.com/Shino112/TKPazin/new/master#skripta)
4. [Brisanje bodova igrača na piramidi ako ne igraju u toj sezoni](https://github.com/Shino112/TKPazin/new/master#brisanje-bodova-igra%C4%8Da-na-piramidi-ako-ne-igraju-u-toj-sezoni)
    1. [Skripta](https://github.com/Shino112/TKPazin/new/master#skripta-1)
5. [Pretraživanje igrača](https://github.com/Shino112/TKPazin/new/master#pretra%C5%BEivanje-igra%C4%8Da)

## Struktura web stranice

Web stranica ima backend i frontend. Frontend ima 8 stranica:
* Novosti - novosti vezane uz klubu
  * Controller: PostController
    * index: prikaz svih novosti -> view /frontend/novosti
    * show: prikaz određene novosti -> view /frontend/prikaz_novosti
* Rezervacija terena -> prikaz kalendar popunjenosti terena i poveznica na sustav za rezervaciju
* Pojedinačni turniri -> prikaz zdrijeba za određeni turnir
  * Controller: PojedinacniTurnirController:
    * show: prikaz zdrijebova u određenoj sezoni -> view /frontend/pojedinacni_turnir
* Rang liste - turniri -> rang lista turnira
  * Controller: RangListaTurnirController
    * show: prikaz svih igrača koji su nastupili u toj sezoni, ispisuje igrače samo ako im je suma bodova u cijelo sezoni veća od 0 -> /frontend/ranglista_turnir_kola ili /frontend/ranglista_turnir_kola_empty ako nema ni jednog turnira u sezoni
* Rang liste - piramida -> rang lista piramida
  * Controller: RangListaPiramidaController
    * show: prikaz svih igrača koji su nastupili u toj sezoni, ispisuje igrače samo ako im je suma bodova u cijelo sezoni veća od 0 -> /frontend/ranglista_piramida_kola ili /frontend/ranglista_piramida_kola_empty ako nema ni jednog turnira u sezoni
* O klubu -> kratak tekst o klubu i vodstvo
* Galerija -> galerija s albumima slika
  * Controller: AlbumController
    * index: prikaz svih albuma u galeriji -> view /frontend/galerija
    * show: prikaz albuma s njegovim slikama -> view /frontend/album
* Kontakt -> kontakt forma, info podaci i Google Maps
  * Controller: ContactController: služi za slanje forma kao mail na mail kluba
  
Backend ima CRUD za svaki model:
* albume -> kroz albume unosi odmah i slike u taj album, slike nemaju zasebni CRUD
* igraci
* novosti
* sezone
* users -> korisnici koji imaju pristup CMS-u
* turniri -> kroz turnire odmah unosimo i bodove igrača u tom turniru, bodovi nemaju zasebni CRUD
* piramida -> kroz piramidu odmah unosimo i bodove igrača u toj piramidi, bodovi nemaju zasebni CRUD
> Svi Controleri se nalaze u /backend mapi

Svaki model ima sljedeće viewe:
* create -> za unos
* edit -> za izmjenu
* form -> form za unos ili izmjenu podataka
* index -> prikaz svih trenutnih podataka
* message -> prikaz poruka sustava pri radu s CRUD-om
* script -> dodatne JS skripte za model
* table -> tablica za prikaz trenutnih podataka na indexu

### Prikaz relacijske baze

![Slika baze](https://github.com/Shino112/TKPazin/blob/master/baza.png)

## Ubacivanje slika

Slike se ubacuju u albumima. Pošto se slike na serveru spremaju sve u istu mapu potrebno je slike preimenovati na način da se naziv slike ne spominje u mapi.
> Npr: 1a, 2a ako je to već zauzeto 1b, 2b i tako dalje...

## Brisanje bodova igrača na turnirima ako ne igraju u toj sezoni

Pošto način unosa bodova igrača radi tako da se ispiše lista svih igrača s defaultnom vrijednosti 0 potrebno je kad se završi s unosom turnira u toj sezoni izvršiti **SQL skriptu** gdje će se izbrisati svih bodovi igrača koji kao sumu bodova u toj sezoni imaju **nula bodova**.

### Skripta
```sql
DELETE p1
FROM
    nastup_turnirs p1
JOIN
    (
    SELECT
        nastup_turnirs.igrac_id,
        SUM(nastup_turnirs.bodovi)
    FROM
        nastup_turnirs
    WHERE
        nastup_turnirs.turnir_pojedinacni_id BETWEEN 80 AND 87
    GROUP BY
        nastup_turnirs.igrac_id
    HAVING
        SUM(nastup_turnirs.bodovi) = 0
) p2
ON
    p1.igrac_id = p2.igrac_id
WHERE
    p1.bodovi = 0 AND p1.turnir_pojedinacni_id BETWEEN 80 AND 87
```
> u WHERE klauzuli i u **JOINU** i **glavnom** mjenjamo turnir_pojedinačni_id rang ovisno o id-ovima u toj sezoni

Npr: ako nam sezona 2020 ima turnire s id-om od 20 do 25 tada ide
```sql
BETWEEN 20 AND 25
```

## Brisanje bodova igrača na piramidi ako ne igraju u toj sezoni

Pošto način unosa bodova igrača radi tako da se ispiše lista svih igrača s defaultnom vrijednosti 0 potrebno je kad se završi s unosom piramida u toj sezoni izvršiti **SQL skriptu** gdje će se izbrisati svih bodovi igrača koji kao sumu bodova u toj sezoni imaju **nula bodova**.

### Skripta
```sql
DELETE p1
FROM
    nastup_piramidas p1
JOIN
    (
    SELECT
        nastup_piramidas.igrac_id,
        SUM(nastup_piramidas.bodovi)
    FROM
        nastup_piramidas
    WHERE
        nastup_piramidas.turnir_piramida_id BETWEEN 80 AND 87
    GROUP BY
        nastup_piramidas.igrac_id
    HAVING
        SUM(nastup_piramidas.bodovi) = 0
) p2
ON
    p1.igrac_id = p2.igrac_id
WHERE
    p1.bodovi = 0 AND p1.turnir_piramida_id BETWEEN 80 AND 87
```
> u WHERE klauzuli i u **JOINU** i **glavnom** mjenjamo turnir_piramida_id rang ovisno o id-ovima u toj sezoni

Npr: ako nam sezona 2020 ima piramide s id-om od 20 do 25 tada ide
```sql
BETWEEN 20 AND 25
```

## Pretraživanje igrača

U CMS-u pod sekcijom igrači postoji mogućnost pretrage. Pretraga se izvršava tako da se unosi **ili** ime **ili** prezime, nikako oboje!

