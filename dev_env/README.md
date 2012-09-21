WT PHP development environment
====================================

Uvod
----

Na ispitu iz WT-a se koristi windows desktop, eclipse for php, xampp
LAMP stack.

Na proslom ispitu mi je trebalo 15-tak minuta da podesim eclipse i
kreiram inicijalni php projekat  ...

Na kraju je to radilo, ali mi se prilikom svakog kucanja "]" pokretao
text search.

Zato sam odlučio podesiti okruženje koje bi bilo maksimalno prilagođeno
develperu koji intenzivno koristi konzolu.


Tako je recimo mysql klijent u većini situacija produktivnije okruženje
za developera nego li je to phpmyadmin web frontend.

Eclipse ima dobar text editor, ali on nije stvar koju ćete koristiti da
pogledate neki config fajl ... Za to se na default windows instalaciji
koristi notepad koji je za te stvar najblaže rečeno loš.

Ako imate datoteku sa  unix encodingo notepad će sve zbubati u jednu liniju.

Syntax highlight i slične stvar naravno ne postoje. 
 
Zato sam u instalciju dodao i gvim programerski tekst editor. 

Windows cmd prompt za developera koji intenzivno koristi konzolu
definitivno nije najbolje rješenje, ali  se i on može koliko-toliko
podesiti da se na konzoli mogu obaviti bitne stvari.

Zato sam podesio PATH na aplikacije koje želim imati na dohvat ruke sa
konzole (chromium, gvim, mysql, eclipse-php)
 
Za sve ovo motiviralo me je "eclipse-da-poludiš-]-podešenje-na
bosanskoj" tastaturi.

Kad si pritisnut vremenom, svaka te sitnica može izbaciti iz takta. 

Na eclipse-u podesio:
- debug - XDebug (podešen xampp php.ini da radi out-of-box)
- keyboard mapping kako treba

Takođe, uzeo sam aktuelno 3.0.2 eclipse-PHP okruženje.


INSTALACIJA
============

1) Sa 7zip otpakovati arhivu

[xamp_all_in_one
v0.5 7z](http://knowhow-erp-fmk.googlecode.com/files/xampp_all_in_one_0.5.7z)
=> c:\xampp


2) u cmd promptu ukucati (ovo je sve jedna linija dugačka linija - ne
vidi se kraj na ekranu, uraditi "naslijepo" copy-paste to console):

<pre>
c: & cd \xampp\htdocs & set PATH=c:\xampp;c:\xampp\mysql\bin;c:\xampp\ChromiumPortable;c:\xampp\eclipse-php;%PATH% &  c:\xampp\xampp-control.exe & echo podigni mysql server pa pritisni enter & pause & c:\xampp\eclipse-php\eclipse-php & c:\xampp\ChromiumPortable\Chromium http://localhost/hello_php & c:\xampp\mysql\bin\mysql -u root 
</pre>

 - Prerequisite: Slobodni web portovi 80, 443, 3306 za XAMPP Apache web server, mysql server

Izvršenjem gornje komande izvršavaju se sljedeće operacije:
 1. xampp-control (nakon čega aktiviramo apache i mysql)
 2. (pritisnuti enter za nastavak) 
 3. pokreće se eclipse-php
 4. u chromiumu otvara hello-php projekat 
 5. pokreće mysql klijent
 6. podešava se PATH  za gvim, chromium

Na kraju se dobija ovo:

![WT dev
desktop](https://raw.github.com/hernad/FIT_WT/master/dev_env/wt_win_dev_env.png)

Znači imamo instalirane:
 1. xampp 3.0.12 (php 5.3, mysql 5.5.25)
 2. eclipse-php 3.0.2 (eclipse helios based)
 3. chromium portable (22.0.1201.0)
 4. gvim 7.2


Bilješke
==============

xampp:
---------
c:\xampp\xamp-control.exe


eclipse:
----------

c:\xampp\eclipse-php\eclipse-php.exe


mysql klijent
--------------

C:\xampp\mysql\bin\mysql -u root

rem prikazi aktivne mysql baze 
echo show databases | C:\xampp\mysql\bin\mysql -u root


chromium portable
----------------

otvori hello php index.php

c:\xampp\ChromiumPortable\chromiumP http://localhost/hello_php/


run all-in-one: xampp + eclipse + mysql client + chromium portable +
gvim text editor
--------------------------------------------------------------------------------------

na komandnom promptu ukucati:

PATH
====

<pre>
set PATH=c:\xampp;c:\xampp\mysql\bin;c:\xampp\ChromiumPortable;c:\xampp\eclipse-php;%PATH%
</pre>

dostupne komande nakon podešenja path-a: 

 - mysql
 - eclipse-php
 - gvim


XAMPP
==========

3.0.12

http port: 80
mysql: 3306


Eclipse for PHP Developers
=============================

Version: 3.0.2

Visit http://www.zend.com

This product is based on Eclipse technology.
Visit http://www.eclipse.org


eclipse exe
------------------
c:\xampp\eclipse-php\eclipse-php.exe


Unbind "]"
----------

ctrl+alt+G  - Find Text in workspace - unbindati


Eclipse default podstavke
-----------------------------

XDebug debugger

C:\xampp\htdocs\php
-------------------

[XDebug]
zend_extension = "C:\xampp\php\ext\php_xdebug.dll"

xdebug.remote_enable = 1

DOCS
=========

[WT_docs arhiva](http://knowhow-erp-fmk.googlecode.com/files/WT_docs.7z)

Sadrži:
 * [jquery cheat sheet
1.4](http://labs.impulsestudios.ca/downloads/impulse_studios-jquery_cheat_sheet-1.0.pdf)
 * javascript cheat sheet
 * css 3 cheat sheet
 * css 2.1 cheat sheet
 * php.net manual (5.4.x) u chm formatu 


Napomena:

refcards sa dzone  http://refcardz.dzone.com/ su odlična i free za
download. Međutim, nije ih dozvoljeno distribuirati na ovaj način pa
nisu uvrštena.

BUGS
=========

2012-09-21 uo�io sam da na gvim-u ne radi backspace kako treba. O�igledno ne�to nije dobro u vim config fajlovima koji se u�itavaju, 
