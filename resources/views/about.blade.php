@extends('layouts.app')
@section('content')

<br>
<div class="container-about" style="background-color:#ffffffBB; border-radius: 25px;">
  <div class="row">
    <div class="col-4"><br>
			<center><img class="myImg" src="https://scontent-vie1-1.xx.fbcdn.net/v/t1.0-9/12961647_1089240374455209_1380323896095173561_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=8vVHn3g0EJYAX97Uu6B&_nc_ht=scontent-vie1-1.xx&oh=19f2f5aca3d8565aac2bd13201fb2f81&oe=607DA0C1"></img></br>
			Silvio Pejić</br> FPMOZ, Informatika </br> Prebivalište: Orašje </br> Srednja škola: Školski Centar fra Martina Nedića </br> Datum rođenja: 25.11.1999. </center>
			<center><img class="myImg" src="https://scontent-vie1-1.xx.fbcdn.net/v/t31.0-8/28946998_1851452314879296_5146595746919815011_o.jpg?_nc_cat=105&ccb=1-3&_nc_sid=cdbe9c&_nc_ohc=mtmJ4sckuOsAX8z3ShW&_nc_ht=scontent-vie1-1.xx&oh=bafc3a59ea1412e35b85658d7990213a&oe=607EA347"></img>
			</br> FPMOZ, Informatika </br> Prebivalište: Orašje </br> Srednja škola: Školski Centar fra Martina Nedića </br> Datum rođenja: 13.05.1999. </center>
			</br></div>
    <div class="col"> <br><p>
                <h1 class="h9000">Zašto smo izabrali ovu temu?</h1 class="h9000"> U slobodno vrijeme volimo čitati knjige, ali nažalost često nailazimo na problem
                da nam dosta velik broj knjiga nije dostupan u sredini u kojoj živimo, a stranice na kojim možemo kupiti željene knjige online
                imaju malu ponudu, ili zbog određenih problema ne privlače kupce. Stoga želimo napraviti vlastiti sustav za prodaju knjiga
                u kojem ćemo osobno nuditi kupcima one knjige koje žele, ali bez potrebe da fizički obavljaju kupnju, nego da je mogu obaviti putem interneta.
                <h1 class="h9000">Koje ćemo tehnologije koristiti?</h1 class="h9000">Što se tiče PHP framework-a, odabrali smo Laravel koji nam se svidio, a koji je trenutno ocijenjen kao najbolji
                na mnogim ranking listama. Dosta je prikladan u razvijanju aplikacija, koliko god kompleksne i bez obzira na veličinu.
                Ima mnoge značajke koje bi mogle pomoći pri uređivanju aplikacija: sigurnost, autentičnost, neometano kretanje podataka i slično. Najviše se ističu brzina i
                sigurnost, što se i očekuje od modernih aplikacija. Koristit ćemo Bootstrap i Vue.js, koje smo već ranije upoznali u kolegiju "Informatički projekt 2",
                jednostavno se koriste i pružaju razne mogućnosti pri uređivanju web stranica.<h1 class="h9000">Kakva je usluga dostupna korisnicima/kupcima?</h1 class="h9000">Kupci će moći pretraživati knjige u ponudi, čitati detalje (autor, broj stranica, cijena i sl.) te,
                ukoliko se registriraju kao korisnici ovog sustava,"ubacivati" knjige u košaru za kupnju. Kada odluče kupiti odabranu knjigu ili knjige, u košarici će potvrditi cijenu, način plaćanja i isporuku na određenu adresu.
                Korisnici će također moći uređivati svoje osobne podatke.
            </p><br>
            <img class="myIcon" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"></img>
            <img class="myIcon" src="https://miro.medium.com/max/1024/1*9HanDsRU11ZMsgDGJwN96w.png"></img>
            <img class="myIcon" src="https://banner2.cleanpng.com/20180526/oqt/kisspng-microsoft-sql-server-mysql-database-logo-5b098c6ebad6d7.7316225815273524307653.jpg"></img>
    </div>
  </div>
</div>



@endsection