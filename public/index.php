
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link rel="stylesheet" href="css/master.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
    <title>wvwall_edusogno_test</title>
</head>
<body class="bg_task">


<section class="uk-container">
    <div>
        <h1 class=" uk-margin-small-top white uk-text-bold " >Benvenuto su EduEventi</h1>
        <p class="blue uk-text-large red uk-text-bold bg">Registrati con pochi semplici passaggi e crea l'evento</p>
    </div>

</section>

<section class="uk-container uk-margin-small-top ">
    <form method="post" class="uk-form-horizontal uk-margin-small ">

        <div class="uk-margin ">
            <label class="uk-form-label uk-text-bold blue size" for="form-horizontal-text">Nome</label>
            <div class="uk-form-controls">
                <input class="uk-input br " id="form-horizontal-text" name="name" required type="text" placeholder="Inserisci il tuo nome...">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label uk-text-bold blue size" for="form-horizontal-text">Cognome</label>
            <div class="uk-form-controls">
                <input class="uk-input br" id="form-horizontal-text" name="lastname" required type="text" placeholder="Il tuo cognome...">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label uk-text-bold blue size " for="form-horizontal-text">Email</label>
            <div class="uk-form-controls">
                <input class="uk-input br" id="form-horizontal-text" type="email" name="email"  required placeholder="Adesso la tua email personale...">
            </div>
        </div>

       <div class="flex-end">
           <input class="uk-button uk-button-danger br uk-animation-scale-down uk-text-bold" type="submit" id="user"value="REGISTRATI">
           <!-- <input id="user" class="uk-button uk-button-danger uk-animation-scale-down uk-margin-small-top uk-text-bold" > -->
       </div>


    </form>


   <form method="post" class="uk-form-horizontal uk-margin-small">

        <div class="uk-margin">
            <label class="uk-form-label uk-text-bold blue size" for="form-horizontal-text">Nome evento</label>
            <div class="uk-form-controls">
                <input class="uk-input br" id="form-horizontal-text" type="text" name="event_name" id="boh" required placeholder="Inserisci il nome dell'evento...">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label uk-text-bold blue size" for="form-horizontal-text">Descrizione</label>
            <div class="uk-form-controls">
                <input class="uk-input br" id="form-horizontal-text" type="text" name="description" id="boh2" required placeholder="Una bella descrizione...">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label uk-text-bold blue size " for="form-horizontal-text">Data</label>
            <div class="uk-form-controls">
                <input class="uk-input br" id="form-horizontal-text" type="date" name="date" id="boh3" required placeholder="Data evento...">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label uk-text-bold blue size" for="form-horizontal-text">Orario</label>
            <div class="uk-form-controls">
                <input class="uk-input br" id="form-horizontal-text" type="time" name="hour" id="boh4" required placeholder="Orario...">
            </div>
        </div>
        <div class="flex-end">
           <button id="event" class="uk-button br uk-button-danger uk-animation-scale-down  uk-text-bold" >CREA EVENTO</button>
       </div>

    </form>
</section>
<script src="js/main.js"></script>
</body>
</html>
