//ZAD DOM ZAMIENIC IMIE I NAZWISKO TAK ABY PIERWSZE LITERY BYLY DUZE W NAZWISKU TEZ TE PO MYŚLNIKU DATA MUSI BYC MNIEJSZA OD DATY DZISIEJSZEJ


var elImie = document.getElementById('imie');
var elNazwisko = document.getElementById('nazwisko');
var elLogin = document.getElementById('login');
var elMail1 = document.getElementById('mail1');
var elMail2 = document.getElementById('mail2');
var elHaslo = document.getElementById('haslo');
var elHaslo2 = document.getElementById('haslo2');
var elData = document.getElementById('data');
var elRegulamin = document.getElementById('regulamin');
var elPrzycisk = document.getElementById('przycisk');
var elPopraw = document.getElementById('popraw');
var elKomunikat = document.getElementById('komunikat');
var regImie = /^[a-ząęćżźółśń]{2,32}$/i;
var regNazwisko = /^[a-ząęćżźółśń]{2,32}(\-[a-ząęćżźółśń]{2,32})?$/i;
//login - Możesz użyć liter i cyfr oraz kropki, myślnika i znaku podkreślenia jako separatora.
var regLogin = /^[a-z0-9]{1}[\w\.\-]{4,30}[a-z0-9]{1}$/gi;
var regMail = /^[a-z]{1}[\w|\.|\-]{0,30}@(\w{1,20}\.){1,7}[a-z]{1,3}$/i;
//hasło musi być bezpieczne tzn. małe i duze litery, cyfry znak specjalny +  minimum 8 znaków

var regHaslo = /^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W\_]).{8,35})$/;


elKomunikat.style.color = 'red';

function sprawdzImie(){
    var sprawdz = regImie.test(this.value);
    if(sprawdz){
        elKomunikat.textContent = '';
        var imie = this.value[0].toUpperCase() + this.value.slice(1).toLowerCase();
        elImie.value = imie;
    }else{
        elKomunikat.textContent = "Błędne imie";
        this.focus();
    }
}

function sprawdzNazwisko(){
    var sprawdz = regNazwisko.test(this.value);
    if(sprawdz){
        elKomunikat.textContent = '';
        var i=0;
        while(i<this.value.length){
            if(i==0)
            var nazwisko = this.value[i].toUpperCase();
            else{
                if(this.value[i]=='-'){
                    nazwisko += this.value[i] + this.value[i+1].toUpperCase();
                    i++;
                }else{
                    nazwisko += this.value[i].toLowerCase();
                }
            }
            i++;
        }
        elNazwisko.value = nazwisko;
    }else{
        elKomunikat.textContent = "Błędne nazwisko";
        this.focus();
    }
}

function sprawdzLogin(){
    var sprawdz = regLogin.test(this.value);
    if(sprawdz){
        elKomunikat.textContent = '';
    }else{
        elKomunikat.textContent = "Błędny login";
        this.focus();
    }
}

function blokujMail(){
    var sprawdz = regMail.test(elMail1.value);
    if(sprawdz){
        elMail2.disabled = false;
        elMail1.disabled = true;
        elKomunikat.textContent = '';
        elMail2.focus();
        }else{
            elKomunikat.textContent = 'Mail nie spełnia wymagań';
            elMail1.focus();
        }
}

function mail(){
    if(elMail1.value != this.value){
        //rozne
        elKomunikat.textContent = "Różne maile";
        elMail1.value = '';
        this.value = '';
        this.disabled = true;
        elMail1.disabled = false;
        elMail1.focus();
        
    }else{
        //takie same
        elKomunikat.textContent = '';
        elMail1.disabled = true;
        this.disabled = true;
        
    }
}

function blokujHaslo(){
    var sprawdz = regHaslo.test(elHaslo.value);
    if(sprawdz){
        elHaslo2.disabled = false;
        elHaslo.disabled = true;
        elHaslo2.focus();
        elKomunikat.textContent = ''
    }else{
        elKomunikat.textContent = 'Hasło nie spełnia wymagań';
        elHaslo.focus();
    }
}
function haslo(){
    if(elHaslo.value != this.value){
        //rozne
        elKomunikat.textContent = "Różne hasla";
        elHaslo.value = '';
        this.value = '';
        this.disabled = true;
        elHaslo.disabled = false;
        elHaslo.focus();
        
    }else{
        //takie same
        elKomunikat.textContent = '';
        elHaslo.disabled = true;
        elHaslo2.disabled = true;
        
    }
}

function regulamin(){
    if(elRegulamin.checked){
    elPrzycisk.disabled = false;
        }else{
            elPrzycisk.disabled = true;
        }
}
function zatwierdz(){
   document.write('<div>');
   /*document.write('Imie: '+'<span class="kolor">'+elImie.value + '</span><br>');
   document.write('Nazwisko: '+'<span class="kolor">'+elNazwisko.value'</span><br>');
   document.write('Login: '+'<span class="kolor">'+elLogin.value + '</span><br>');
   document.write('Mail: '+'<span class="kolor">'+elMail1.value + '</span><br>');
   document.write('Data urodzenia: '+'<span class="kolor">'+elData.value + '</span><br>');*/
   document.write('</div>');
}

function popraw(){
    var zablokowane = document.querySelectorAll('input[disabled]');
    if(zablokowane.length > 0){
        for(var i = 0; i < zablokowane.length; i++){
            zablokowane[i].disabled = false;
        }
    }
}

elImie.addEventListener('blur', sprawdzImie);
elNazwisko.addEventListener('blur', sprawdzNazwisko);
elLogin.addEventListener('blur', sprawdzLogin);
elMail1.addEventListener('blur', blokujMail);
elMail2.addEventListener('blur', mail);
elHaslo.addEventListener('blur', blokujHaslo);
elHaslo2.addEventListener('blur', haslo);
elRegulamin.addEventListener('click', regulamin);
elPrzycisk.addEventListener('click', zatwierdz);
elPopraw.addEventListener('click', popraw);