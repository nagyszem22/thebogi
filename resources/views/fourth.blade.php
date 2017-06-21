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
            <source src="{{ asset('icancahnge.mp3') }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <div class="container">
            <div class="content">
                <div class="section-title">The Last Steps</div>
                <div class="paragraph">Na most már csak tényleg pár lépés és utolérsz. Nem tudom, hogy észrevetted-e de túl léptem a korlátaimon és 4 lépésben navigáltalak át egy hídon és nem 3-ban. Ez nálam nagyon komoly előrelépés ám. Előre is bocsi a lépcsőzésért ami még rád vár, nem lesz nagyon hosszú.</div>
                <div class="paragraph">B</div>
                <div class="paragraph">...</div>

            </div>
        </div>
        <img src="{{ asset('fourth-step.png') }}">
    </body>
</html>