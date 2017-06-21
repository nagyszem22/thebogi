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
            <source src="{{ asset('superman.mp3') }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <div class="container">
            <div class="content">
                <div class="section-title">The Bridge (Second Part)</div>
                <div class="paragraph">Újabb funfact, lehet szörnyű dolog, de még sosem vettem virágot olyan embernek aki ne lenne a rokonom. 23 év után épp ideje volt, hogy ez megváltozzon. Mivel láthatóan nincs nagy tapasztalatom virágvásárlásban a biztonság kedvéért vettem egy adag répát is (ha nem vitték el akkor balkéznél találod).</div>
                <div class="paragraph">Szerencsére van pár egyéb olyan dolog amiben még ennél is tapasztalatlanabb vagyok, pl. pontosság, karika fújása vizipipázás közben. Vagy épp annak a közlése ha bejön valaki. Szóval az 5 hetes itthon tartózkodásom ideje alatt meglepően sok új tapasztalatot szereztem miattad, köszke!</div>
                <div class="paragraph">Na jó gyors téma terelés! Tudtad, hogyha lenézel a Dunára akkor az a hordalék ami épp ott úszik, lehet hogy járt már Németbe'? Tök para.</div>
            </div>
        </div>
        <img src="{{ asset('third-step.png') }}">
        <div class="container">
            <div class="content">
                <a class="next-button" href="{{ url('fourth') }}">Ha a híd végén tartasz katt ide!</a>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        setTimeout(function(){
            document.getElementById("myVideo").play();
        }, 5000);
    </script>
</html>
