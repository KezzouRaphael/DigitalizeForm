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
    <section class="flex flex-col border-2 justify-center my-8 mx-4 px-4 py-4 text-sm md:text-base xl:text-lg">
        <h1 class="text-red-900 font-bold mb-2 text-xl">MODALITÉS D’APPLICATION</h1>

        <div class="flex flex-col ">
            <div class="bg-red-900 border-none px-2 py-2">
                <h2 class="text-white">QUEL TERME DÉFINIT AU MIEUX LE PRODUCTEUR OU LA PRODUCTRICE ? **</h2>
            </div>
            <div class="flex flex-col m-4">
                <div class="flex gap-2 items-baseline">
                    <input class="" name="individu" type="checkbox">
                    <label for="individu">Individu</label>
                </div>
                <div class="flex gap-2 items-baseline">
                    <input class="" name="famille" type="checkbox">
                    <label for="famille">Famille</label>
                </div>

                <div class="flex gap-2 items-baseline">
                    <input class="" name="groupe" type="checkbox">
                    <label for="groupe">Groupe
                        d’individus/familles développant la même activité de manière
                        indépendante</label>
                </div>

                <div class="flex gap-2 items-baseline">
                    <input class="" name="association" type="checkbox">
                    <label for="association">
                        Association
                        /coopérative d’individus/familles développant la même activité en
                        synergie</label>
                </div>

                <div class="flex gap-2 items-baseline">
                    <input class="" name="collectivité" type="checkbox">
                    <label for="collectivité">Collectivité/communauté</label>
                </div>
                <div class="flex gap-2 items-baseline">
                    <input class="" name="autre" type="checkbox">
                    <label for="autre">Autre (précisez):</label>
                    <input class="border" for="autre" type="text">

                </div>
            </div>
            <div class="">
                <div class="bg-red-900 border-none px-2 py-2 text-white">
                    <h2 class="">QUI EST PRÉSENT LORS DE L’APPLICATION DE CE QUESTIONNAIRE ?
                    </h2>
                </div>
                <h3 class="text-sm my-2">[Indiquez ici le nombre de producteur(s) ou productrice(s) et de représentant·e·(s)
                    de l’équipe
                    technique présent·e·(s) lors du diagnostic. Si des tiers sont présents, veuillez les identifier (nom
                    ou
                    fonction) et préciser leur rôle lors du diagnostic<sup>4</sup>.]
                </h3>
                <textarea class="h-48 w-full lg:w-[80vw] border-2 my-2 p-2" type="textarea" class="resize-none"></textarea>
            </div>
            <div class="bg-red-900 border-none px-2 py-2 text-white">
                <h2>LES SCORES DES INDICATEURS SONT ATTRIBUÉS PAR : **</h2>
            </div>
            <div class="flex flex-col m-4">
                <div class="flex gap-2 items-baseline">
                    <input class="" name="equipe" type="checkbox">
                    <label for="equipe">L'équipe technique uniquement</label>
                </div>
                <div class="flex gap-2 items-baseline">
                    <input class="" name="equipeproducteur" type="checkbox">
                    <label for="equipeproducteur">L’équipe technique et le producteur ou la productrice</label>
                </div>
                <div class="flex gap-2 items-baseline">
                    <input class="" name="producteur" type="checkbox">
                    <label for="producteur">Le producteur ou la productrice uniquement</label>
                </div>
                <div class="flex gap-2 items-baseline">
                    <input class="" name="tiers" type="checkbox">
                    <label for="tiers">Un/des tiers</label>
                </div>
                <div class="flex gap-2 items-baseline">
                    <input class="" name="autre" type="checkbox">
                    <label for="autre">Autre (précisez):</label>
                    <input class="border" for="autre" type="text">

                </div>
               
            </div>
            <hr>
            <h3 class="py-2">
            [Commentaires éventuels sur les modalités d’application du questionnaire]
            </h3> 
            <textarea class="h-48 w-full lg:w-[80vw] border-2 my-2 p-2" type="textarea" style="resize-none" rows="6" class="resize-none"></textarea>

        </div>
        <div class="flex justify-center py-2">
                <button class="text-sm px-2 mx-8 py-[0.1px] border-2 hover:scale-110 ">Go back</button>
            <button class="text-lg px-2 py-2 border-2 hover:scale-110 text-white bg-red-900">Continue</button>
        </div>
    </section>
</body>

</html>
