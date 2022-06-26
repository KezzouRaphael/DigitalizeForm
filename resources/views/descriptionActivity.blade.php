<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <h1 class="text-red-900 font-bold mb-2 text-base mx-8 md:mx-24 mt-8 md:mt-12 md:text-xl">DESCRIPTION SUCCINCTE DE
        L’ACTIVITÉ</h1>
    <section class="flex flex-col justify-center mx-8 text-xs md:text-sm md:mx-24 px-8 pt-2 pb-4 border-2 border-black ">

        <h1 class="pb-4 text-center"><b>A PRIORI</b></h1>
        <h2 class="pb-4"> <em>Cette partie est complétée avant l’entretien avec le producteur ou la productrice sur
                base des
                informations
                disponibles. Cela permet idéalement d’avoir une vue d’ensemble de l’activité. Elle peut
                notamment
                servir de référentiel
                lors de l’attribution des scores dans la suite du diagnostic.
                Si le producteur ou la productrice réalise le diagnostic sans accompagnement, il ou elle ne
                complètera que cette partie « a priori ».</em></h2>
        <textarea class="h-48 w-full lg:w-[80vw] resize-none border-2 my-2 p-2" type="textarea"></textarea>
        <h1 class="pb-4 text-center"><b>EN COMPLÉMENT</b></h1>
        <h2 class="pt-2 pb-4"><em>Cette partie est complétée suite à l’application du diagnostic, dans le but de faire
                ressortir des
                compléments d’information.</em></h2>
        <textarea class="h-48 w-full lg:w-[80vw] resize-none border-2 my-2 p-2" type="textarea"></textarea>
    </section>
    <div class="flex justify-center pt-2 pb-4">
        <button class="text-sm px-2 mx-8 py-[0.1px] border-2 hover:scale-110 ">Go back</button>
        <button class="text-lg px-2 py-2 border-2 hover:scale-110 text-white bg-red-900">Continue</button>
    </div>
</body>

</html>
