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
    <section
        class=" mx-8 my-4 text-sm md:text-base md:mx-24 md:my-12 px-8 pt-4 md:pt-8 pb-4 ">

    <img src="/images/Header.png" style="width: 100%;">
    <form class="pt-2 pb-4" method="post">
        @csrf
        <label class="block  uppercase font-bold text-xs text-gray-700 ml-2 pt-2 pb-1" for="unite_productive">
            Unité Productive :
        </label>
        <input class="border border-gray-400 p-2 w-1/2 ml-2" type="text" name="unite_productive" required>
        <label class="block  uppercase font-bold text-xs text-gray-700 ml-2 pt-2 pb-1" for="pays">
            Pays :
        </label>
        <input class="border border-gray-400 p-2 w-1/2 ml-2" type="text" name="pays" required>
        <label class="block  uppercase font-bold text-xs text-gray-700 ml-2 pt-2 pb-1" for="region">
            Region/Province :
        </label>
        <input class="border border-gray-400 p-2 w-1/2 ml-2" type="text" name="region" required>
        <label class="block  uppercase font-bold text-xs text-gray-700 ml-2 pt-2 pb-1" for="municipalite">
            Municipalité / Commune :
        </label>
        <input class="border border-gray-400 p-2 w-1/2 ml-2" type="text" name="municipalite" required>
        <label class="block  uppercase font-bold text-xs text-gray-700 ml-2 pt-2 pb-1" for="producteur">
            Producteur/Productrice :
        </label>
        <input class="border border-gray-400 p-2 w-1/2 ml-2" type="text" name="producteur" required>
        <label class="block  uppercase font-bold text-xs text-gray-700 ml-2 pt-2 pb-1" for="coordonnees">
            Coordonnées :
        </label>
        <input class="border border-gray-400 p-2 w-1/2 ml-2" type="text" name="coordonnees" required>
        <label class="block  uppercase font-bold text-xs text-gray-700 ml-2 pt-2 pb-1" for="CGU">
            Réserves de confidentialité :
        </label>
        <textarea class="border border-gray-400 p-2 ml-2 h-48 w-full lg:w-[60vw] resize-none my-2" type="text" name="CGU" required></textarea>
    </form> 
    <div class="flex justify-center pt-2 pb-4">
        <button class="text-sm px-2 mx-8 py-[0.1px] border-2 hover:scale-110 ">Go back</button>
        <button class="text-lg px-2 py-2 border-2 hover:scale-110 text-white bg-[#CBCA04]">Continue</button>
    </div>
    <img src="/images/homesponsors.png" class="flex mx-auto w-[60vw] pt-4 pb-8">
</section>
</body>

</html>
