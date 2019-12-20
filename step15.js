var passwort;


zahl1 = 40;
zahl2 = 2;

passwort=prompt("Bitte Passwort eingeben!","");
if (passwort==zahl1+zahl2){
window.location.href="?step=15&a&pass=" + passwort;
}