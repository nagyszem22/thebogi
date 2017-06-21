<!DOCTYPE html>
<html>
    <head>
        <title>The Bogi</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700,900&amp;subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('main.css') }}" crossorigin="anonymous">
    </head>
    <body>
        <audio autoplay>
            <!-- source src="silhouettes.ogg" type="audio/ogg" -->
            <source src="{{ asset('silhouettes.mp3') }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <div class="container">
            <div class="content">
                <div class="section-title">The Bridge</div>
                <div class="paragraph">Hehe. Tök vicces, hogy idáig eljutottál. Jutalmul egy funfact, tudtad, hogy ezeknek az oroszlánoknak nincsen nyelve? Vszeg igen mert egyszer ugyan ezen a helyen megvitattuk már. Egyébként közel olyan hasznos infó mint a Hervis története.</div>
                <div class="paragraph">Amúgy egész jól állsz, most már csak át kell kelned a hídon. A szabály ugyan az, nem muszáj virágokat gyűjtögetned. Nyugodtan otthagyhatod őket, legalább akkor a 9re megbeszélt csajszinak nem kell újakat kiraknom.</div>
                <div class="paragraph">Haha. Marcika már megint nagyon vicces... 10re beszélte meg.</div>
                <div class="paragraph">Na jó nincs is 10 órás lány és valójában az egész hidat beburkoltam volna virágokkal, ha erőforrásaim megengedték volna.</div>
                <div class="paragraph">No mind1 a lényeg, hogy kövesd az irányt!</div>
                <div class="paragraph">Ui.: bocsi a zenéért, gondoltam jó lesz egy kis motivációnak, h segítsen átosonni a hídon.</div>

            </div>
        </div>
        <img src="{{ asset('second-step.png') }}">
        <div class="container">
            <div class="content">
                <a class="next-button" href="{{ url('third') }}">Ha a híd közepén tartasz katt ide!</a>
            </div>
        </div>
    </body>
</html>
