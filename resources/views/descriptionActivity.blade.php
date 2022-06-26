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
        <section class="flex flex-col border-2 justify-center my-8 mx-4 px-4 py-4 text-sm md:text-base xl:text-lg">
            <h1>DESCRIPTION SUCCINCTE DE L’ACTIVITÉ</h1>
            <h1>A PRIORI<h1>
               <h2> Cette partie est complétée avant l’entretien avec le producteur ou la productrice sur base des informations
                disponibles. Cela permet idéalement d’avoir une vue d’ensemble de l’activité. Elle peut notamment servir de référentiel
                lors de l’attribution des scores dans la suite du diagnostic.
                Si le producteur ou la productrice réalise le diagnostic sans accompagnement, il ou elle ne
                complètera que cette partie « a priori ».</h2>
                <textarea class="h-48 w-full lg:w-[60vw] resize-none border-2 my-2 p-2" type="textarea" ></textarea>
            <br/>
            <br/>
            <h2>Cette partie est complétée suite à l’application du diagnostic, dans le but de faire ressortir des compléments d’information.</h2>
            <textarea class="h-48 w-full lg:w-[60vw] resize-none border-2 my-2 p-2" type="textarea" ></textarea>
        </section>
    </body>
</html>
