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
        <div class="container">
            <div class="content">
                <div class="title">The Bogi</div>
                <div class="section-title">Intro</div>
                <div class="paragraph">Bocsi én egy picit előbb értem ide, szóval előrementem kicsikét. Hogy ne unatkozz amíg utolérsz, csináltam egy weboldalt és útközben elhelyeztem pár virágot, hogy el ne tévedj.</div>
                <div class="paragraph">Egyébként nem tudom, hogy mire gondolsz, vagy mit akarsz mondani. Azt viszont tudom, hogy nem szeretném, hogy ez a következő 10 percben megváltozzon, ezt majd megbeszéljük személyesen.</div>
                <div class="paragraph">Ezenkívül tudom azt is, hogy ha van olyan lány aki megérdemel végtelen mennyiségű virágot az te vagy. Bár ezzel valószínűleg elkéstem, 3 éve kellett volna. Ez azonban továbbra sem változtat a tényen, hogy a The Bogi című fejezet elkészült és ha nincs sok virágot lopkodó turista akkor működik is. (Ha közepesen gáznak érzed random virágok összeszedését az utcán, hagyd csak ott őket, a lényeg, h tudd, hogy miattad vannak ott.)</div>
                <div class="paragraph">No hajrá! Kövesd az útvonalat! Ha az oroszlán a jobb kezednél van kattints az alsó gombra!</div>
                <div class="paragraph">Ui.: Mielőtt elindulnál csapj fel egy fülest úgy élvezhetőbb (talán).</div>
            </div>
        </div>
        <img src="{{ asset('first-step.png') }}">
        <div class="container">
            <div class="content">
                <a href="{{ url('second') }}" class="next-button">Ha az oroszlán a jobb kezednél van katt ide!</a>
            </div>
        </div>
    </body>
</html>
