<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mon IP Sexy</title>
    <meta name="keywords" content="mon ip sexy, gémi mon ip, quelle est mon ip, adresse ip, ip sexy, joui mon ip, gémissement, passion informatique">
    <meta name="description" content="Le texte c'est chiant. Nos filles sexy gémissent votre adresse IP.">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-black">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div>
            <img class="w-full" src="/banner.png" alt="">
        </div>

        <div class="mt-5 p-5 border border-yellow-500 text-white">
            <h3 class="text-xl font-italic text-yellow-500">Votre adresse IP publique</h3>
            <h3 class="text-3xl py-10 text-center"><?= $_SERVER['X-Forwarded-For'] ?? $_SERVER['REMOTE_ADDR'] ?></h3>
        </div>

        <div class="mt-5 p-5 border border-yellow-500 text-white">
            <h3 class="text-xl font-italic text-yellow-500">Partagez nous</h3>
            <p>
                N'hésitez pas à partager ce site avec tous vos amis qui auraient besoin de trouver leur adresse IP.
            </p>
            <div class="mt-5">
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="Une fille sexy viens de gémir mon adresse IP grâce à https://monip.sexy ! Vous connaissez ?" data-via="lucas_dcrk" data-related="lucas_dcrk" data-dnt="true" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>

        <div class="mt-5 p-5 border border-yellow-500 text-white">
            <h3 class="text-xl font-italic text-yellow-500">A propos</h3>
            <p>
                Trouver votre adresse IP est essentiel pour maintenir votre vie privée en ligne. Pourquoi ne pas rendre ça fun et sexy?
                Ce site est dédié à tous les informaticiens qui rendent ce monde meilleur ... profitez-en !
            </p>
            
            <div class="opacity-50 text-center">
                <p class="mt-2">Développé et maintenu par <a href="https://lucas.decrock.me" target="_blank">Lucas Decrock</a>.</p>
                <p>Inspiré de <a href="https://www.moanmyip.com" target="_blank">moanmyip.com</a></p>
            </div>
        </div>
    </div>

    <script async defer data-website-id="5dd7775c-d1d3-4c15-9195-32fe40a933f4" src="https://analytics.sitax.is/umami.js"></script>
</body>
</html>
