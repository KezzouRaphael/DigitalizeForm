<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UNI4COOP FORM</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <img src="/images/Header.png" style="width: 100%;">
    <form method="post">
        @csrf
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700 ml-2 pt-2" for="unite_productive">
            Unité Productive :
        </label>
        <input class="border border-gray-400 p-2 w-1/2 ml-2" type="text" name="unite_productive" required>
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700 ml-2 pt-2" for="pays">
            Pays :
        </label>
        <input class="border border-gray-400 p-2 w-1/2 ml-2" type="text" name="pays" required>
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700 ml-2 pt-2" for="region">
            Region/Province :
        </label>
        <input class="border border-gray-400 p-2 w-1/2 ml-2" type="text" name="region" required>
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700 ml-2 pt-2" for="municipalite">
            Municipalité / Commune :
        </label>
        <input class="border border-gray-400 p-2 w-1/2 ml-2" type="text" name="municipalite" required>
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700 ml-2 pt-2" for="producteur">
            Producteur/Productrice :
        </label>
        <input class="border border-gray-400 p-2 w-1/2 ml-2" type="text" name="producteur" required>
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700 ml-2 pt-2" for="coordonnees">
            Coordonnées :
        </label>
        <input class="border border-gray-400 p-2 w-1/2 ml-2" type="text" name="coordonnees" required>
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700 ml-2 pt-2" for="CGU">
            Réserves de confidentialité :
        </label>
        <input class="border border-gray-400 p-2 w-1/2 ml-2" type="text" name="CGU" required>
        <hr>
    </form>
</body>

</html>
