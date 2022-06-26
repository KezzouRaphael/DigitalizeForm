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
    <img src="/images/Header.png" class="max-w-full">
    <form method="post" action="/validate">
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
        <p class="block mb-2 text-xs text-gray-700 ml-2 pt-2">En remplissant cet outil, le
            producteur ou la productrice et l’équipe technique donnent implicitement leur
            accord pour la diffusion et la communication des informations reprises dans ce rapport. S’ils ou elles
            souhaitent émettre des réserves, celles-ci doivent être précisées et justifiées dans ce cadre.</p>
        <hr class="my-2">
        <button type="submit"
            class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600 my-2">
            Next Page
        </button>
    </form>
    <img class="max-w-full" src="/images/footer.png" />
</body>

</html>
