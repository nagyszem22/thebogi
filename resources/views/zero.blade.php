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
                <div class="section-title">Tökre Titkos</div>
                <div class="paragraph">Bocsi, a The Bogi című fejezetet csak akkor láthatod, ha tudod a választ a következő kérdésre, ha Bogi vagy válaszolj!</div>
                <div class="paragraph">Mi a neve annak a vendéglátó ipari egységnek, amihez tartozik egy mászóka amit le fognak bontani? (Csupa kisbetűvel írd be és van benne 2 l. Amúgy amikor ezt a cuccot kódoltam akkor a kislány nevét akartam volna megkérdezni aki ott játszott, valami Tekla szerű, csak elfelejtettem már megint.)</div>
                <div class="paragraph"><input type="text" name="to-continue" placeholder="ide írd a választ"></div>
                <a class="next-button" style="margin-top: 0px">Klikk ide ha beírtad a választ!</a>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.next-button').click(function(){
                if ($('input').val() == 'fellini' || $('input').val() == 'Fellini') {
                    window.location = "{{ url('first') }}";
                }
            });
            $('input').change(function(){
                if ($(this).val() == 'fellini' || $(this).val() == 'Fellini') {
                    window.location = "{{ url('first') }}";
                }
            });
        });
    </script>
</html>
