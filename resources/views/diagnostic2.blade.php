<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostic2</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>

    <img src="/images/diagnosticHeader.png" class="w-full pb-8">

    
    <div class="inline-block bg-red-900 mr-auto mx-8 md:ml-24">

        <label class="inline-block items-end py-1 px-3 md:py-2 md:px-6 text-white text-xl font-bold " for="dateHere">DATE </label><input class=" bg-white border-2 p-2 border-black" type="date" name="dateHere" />

    </div>
    <section
        class="text-red-900 mx-8 my-4 text-sm md:text-base md:mx-24 md:my-12 border-2 border-red-900 border-dotted px-8 pt-4 md:pt-8 pb-4 ">

        <p class="py-2">Le diagnostic environnemental est réalisé au travers d’un <b>questionnaire semi-structuré</b>. Celui-ci est divisé
            en 4 thématiques :
        <p>

        <ol class="pb-4 list-decimal ml-12">
            <b>
            <li>Les effets de l’environnement sur l’activité du producteur ou de la productrice ;</li>
            <li>Les effets de l’activité du producteur ou de la productrice sur l’environnement ;</li>
            <li>La volonté d’engagement du producteur ou de la productrice pour l’environnement ;</li>
            <li>Ses capacités et ses besoins pour s’engager.</li>
        </b>
        </ol>

        <p class="pb-4">L’idée est de mettre en évidence les <b>connaissances et perceptions</b> du producteur ou de la productrice par
            rapport à l’environnement, et de dégager les <b>principales relations réciproques (positives ou négatives)
            entre l’activité et l’environnement.</b></p>

        <p class="pb-2">Cette étape de diagnostic environnemental comporte :<br />
        <ol class="list-decimal pb-4 ml-12">
            <li ><b>Les modalités d’application</b> : identification du producteur ou de la productrice, description des
                possibles tiers présents durant le diagnostic et leur rôle (d’observateur, de facilitateur, etc.), et
                détermination de qui attribue les scores des indicateurs ;</li>

            <li><b>Une description brève de l’activité</b> du producteur ou de la productrice ;</li>
            <li><b>Une description brève du contexte environnemental</b>, qui offre un référentiel de la situation
                environnementale dans la zone ou le secteur d’activité ;</li>
            <li><b>Une description brève des effets réciproques entre l’environnement et l’activité</b> du producteur ou de la
                productrice ;</li>
            <li><b>Un questionnaire semi-structuré par thématique</b> ;</li>
            <li><b>Une synthèse</b> qui reprend l’ensemble des scores, ainsi que les principales actions identifiées pour
                améliorer la situation environnementale de l’activité ;</li>
            <li><b>Les leçons apprises</b> permettant de mettre en évidence ce que les protagonistes retirent du diagnostic, et
                d’éventuelles propositions d’amélioration.</li>
        </ol>
        </p>

        <p calss="pb-2">Chaque <b>questionnaire par thématique</b> se compose de :
        <ul class="list-disc ml-12">
            <li><b>Questions cibles</b> : elles ne doivent pas forcément suivre l’ordre établi et elles peuvent être <b>adaptées</b>
            (voire supprimées) selon le contexte ;</li>
            <li>Un <b>indicateur de pondération</b> permettant <b>d’évaluer chaque thématique</b>. Il ne s’agit pas d’un <b>contrôle
                formel</b>, mais d’un bilan informatif des connaissances et capacités du producteur ou de la productrice.
                Pour un diagnostic optimal, il est important que le producteur ou la productrice reste objectif et
                critique par rapport à son activité ;</li>
            <li>Un <b>tableau</b> reprenant la <b>synthèse</b> des réponses aux questions, le <b>score</b> attribué pour la thématique, ainsi
                que des commentaires éventuels.</li>
        </ul>
    

    </section>
    <div class="flex justify-center pt-2 pb-4">
        <button class="text-sm px-2 mx-8 py-[0.1px] border-2 hover:scale-110 ">Go back</button>
        <button class="text-lg px-2 py-2 border-2 hover:scale-110 text-white bg-red-900">Continue</button>
    </div>
    </body>

</html>
