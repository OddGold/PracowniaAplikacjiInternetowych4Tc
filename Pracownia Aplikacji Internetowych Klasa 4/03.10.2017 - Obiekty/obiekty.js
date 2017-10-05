//Tworzenie obiektu za pomocą literału obiektu

/*var janusz = {
    wzrost: 185,
    waga: 89,
    miejsceUrodzenia: 'Poznań',
    plec: 'm'
};*/

/*console.log(janusz);

document.write(janusz); DUZA ROZNICA DO CONSOLE.LOG()!!!!*/

/*console.log(janusz.wzrost);*/

//utworz obiekt z wlasciwosciami marka, model, predkosc wsywietl(metoda)

/*var autko = {
    marka: 'BMW',
    model: 'Szybki',
    predkosc: 69,
    
    wyswietl(){
       //document.write(this.marka+'<br>'+this.model+'<br>'+this.predkosc+'<br>'); 
       return 'Marka: ' + this.marka; 
    }
};

console.log(autko.wyswietl());*/

//****************************************************************


/*var ksiazka = {
    tytul: 'PanTadeusz',
    rokWydania: '1834',
    gatunek: 'Poemat epicki',
        autor: {
            imie: 'Adam',
            nazwisko: 'Mickiewicz',
            wyswietlDane(){
                return 'Imie: ' + this.imie + '<br>Nazwisko: ';
            }
        }
}*/


//console.log(ksiazka.autor.imie);

//console.log(ksiazka['autor']['nazwisko']);

//console.log(ksiazka.autor['nazwisko']);

/*var klucz = 'imie';*/

//console.log(ksiazka.autor[klucz]);


//**************************************************************************

//tworzenie pystego obiektu

/*var produkt = {};*/

//sprawdzamy czy właściwość istnieje

//console.log(typeof(produkt.nazwa)); //undefined

//dodawanie wlasciwosci i metod

/*produkt.nazwa = 'pralka';
produkt.firma = 'bosh';
produkt.model = 'WAK2024PI';
produkt.waga = 8;
produkt.cena = 1500;*/

/*produkt.wyswietl = function(){
    return 'Nazwa produktu: ' + this.nazwa + '<br>Firma: ' + this.firma + '<br>Model: ' + this.model + '<br>Waga: ' + this.waga + '<br>Cena: ' + this.cena+'zł';
}*/

//console.log(produkt.wyswietl());
/*document.write(produkt.wyswietl());
console.log(typeof(produkt.nazwa)); // string
console.log(typeof(produkt.waga)); // number
console.log(typeof(produkt.wyswietl)); //function*/

//DOM PRZEROBIĆ metode wyswietl dla obiektu produkt (forEach albo forIn)

//console.log(typeof(produkt)); //object

/*function tekst2(z){
    var opis;
    if(typeof(z)== 'string' || typeof(z)=='number'){
        document.write(z + '<Br>');
    }
}*/

/*produkt.wyswietl = function(){
var opis = '';
for (var x in produkt){  
    if(typeof(produkt[x])!= 'function'){
        opis += x + ': '+produkt[x] + '<Br>';
    }
}
    return opis;
}

document.write(typeof(produkt.wyswietl));*/

//*********************05.10.2017***********************

/*delete produkt.wyswietl;
//delete produkt.wyswietl(); ***nie działa tak***

console.log(typeof(produkt.wyswietl));


document.write('<br>' +produkt.wyswietl);*/


/*var hotel = new Object();
    hotel.nazwa = 'ZSK';
    hotel.pokoje = 50;
    hotel.zarezerwowaniePokoje = 25;
    hotel.silownia = true;
    hotel.basen = true;
    
    hotel.rodzajPokoju = ['pojedynczy','podwojny','rodzinny', 'apartament'];
    
    hotel.wolnePokoje = function(){
        return  this.pokoje - this.zarezerwowaniePokoje;
    }

console.log('Wolne pokoje: ' + hotel.wolnePokoje());*/

/*function Hotel(nazwa,pokoje,zarezerwowaniePokoje){
    this.nazwa = nazwa;
    this.pokoje = pokoje;
    this.zarezerwowaniePokoje = zarezerwowaniePokoje;
    
    this.wolnePokoje = function(){
        return this.pokoje - this.zarezerwowaniePokoje;
    }
};


var hotelLech = new Hotel('Lech',40,15);
var hotelMerkury = new Hotel('Merkury',600,250);

document.write('Wolne pokoje w hotelu Lech: '+hotelLech.wolnePokoje()+'<br>');
document.write('Wolne pokoje w hotelu Merkury: '+hotelMerkury.wolnePokoje());*/

//****************************************************************************

//tablice w obiekcie

/*var platnosci = {
    pokoj1: [50,100],
    pokoj2: [150,300,1000],
    pokoj3: [70,220],
    pokoj4: [90,120]
};

console.log(platnosci.pokoj1[0]);
console.log(platnosci.pokoj2.length);*/

/*function Auto(){
    this.marka = 'Ferrari';
}

var samochod = new Auto();

console.log(samochod.marka);

function Osoba(imie, nazwisko, wiek, plec){
    this.imie = imie;
    this.nazwisko = nazwisko;
    this.wiek = wiek;
    this.plec = plec;
    this.narodowosc = 'Polska';
}

var czarek = new Osoba('Czarek','Nowacki',19,'M');
console.log(czarek.narodowosc);*/

//UTWORZ KONSTRUKTOR PIES I PARAMETRACH IMIE, RASA, WAGA ORAZ ZAJĘCIA ULUBIONE (tablica) - moze byc wiele watrosci utworz 3 obiekty o nazwach Azor, Edi oraz Saba

//function Pies(imie,rasa,waga,zajecia){
//    this.imie = imie;
//    this.rasa = rasa;
//    this.waga = waga;
//    
//    this.zajecia = zajecia;
//}


/*var Azor = new Pies('Azor','Kundel',29,['Aportowanie','Bieganie']);
var Edi = new Pies('Edi','Labrador',25,['Jedzenie','Kupa']);
var Saba = new Pies('Saba','Jamnik',8,['Dawanie łapy','Spanie']);

console.log(Azor);
console.log(Edi);
console.log(Saba);

var psy = [Azor, Edi, Saba];

Edi.zajecia.push('Spacer');

var rozmiar

for(var i=0; i<psy.length;i++){
    rozmiar = 'maly';
    if(psy[i].waga>10) rozmiar='duży';
    document.write('Pies <span style="color: blue">' + psy[i].imie+'</span> to '+rozmiar+' pies. Ponieważ waży '+psy[i].waga+' kilo<br>');
}*/


//*************************************************************************

/*var a;
for (a in Edi){
	if(a=='imie' || a=='rasa')
	document.write(a+': '+Edi[a]+' <br>');
}


var tab = ['Jan','Nowak','Poznań'];

for(var i in tab){
	document.write(tab[i]+' '+ i + ' ');
}*/



//*********************************************************************************

//PROTOTYPE

/*function Pole(a,b){
	return a*b;
}

console.log(Pole.length); //2

console.log(Pole.constructor); //Function() { [native code] }

console.log(Pole.prototype); //constructor ƒ */


/*function Uczen(imie,nazwisko){
	this.imie = imie;
	this.nazwisko = nazwisko;
}

var maciej = new Uczen('Maciej','Trybuś');

Uczen.prototype.narodowosc = 'Polska';

Uczen.prototype.wyswietlUcznia = function(){
	var tekst='';
	for(var i in this){
		if(typeof(this[i])!='function')
		tekst+= i+': '+this[i]+'<br>';
	}
	return tekst;
}

//document.write(maciej.wyswietlUcznia());

document.write(Uczen.prototype);

document.write(Uczen.prototype.wyswietlUcznia());
document.write(maciej.constructor);
console.log(maciej.constructor.prototype.narodowosc);*/

//******************************************************************************

/*function Rower(firma,kolor){
	this.firma = firma;
	this.kolor = kolor;
}

Rower.prototype.iloscKol = 2;

Rower.prototype.wyswietl=function(){
	var tekst='';
	for(i in this){
		if(typeof(this[i])!='function')
			tekst+= i+': '+this[i]+'<br>';
	}
	return tekst;
}

var romet = new Rower('Romet','biały');

document.write(romet.wyswietl());

console.log(romet.hasOwnProperty('iloscKol')); //false ROZPOZNAJEMY CZY JEST PROTOTYPE CZY NIE

for(var i in romet){
	if(romet.hasOwnProperty(i))
	document.write('Własny obiekt: '+ i+'<br>')
}*/


var pies={
	nazwa: 'Pies',
	waga: 10
};

function Zwierze(imie){
	this.imie = imie;
}

Zwierze.prototype = pies;

var kajtek = new Zwierze('kajtek');

console.log(pies.isPrototypeOf(kajtek));
console.log(kajtek);




















































































