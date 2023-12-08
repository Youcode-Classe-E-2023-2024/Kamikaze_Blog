<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <title>
        <?php echo SITENAME; ?>
    </title>
    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/tailwind.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    <title>about page</title>
</head>

<body>
    <!-------------------------- navbar ------------------------------->

    <?php require APPROOT . '\views\inc\header.php'; ?>

    <div x-data="{ isOpen: false }" class="bg-white">
        <header>
            <div class=" container mx-auto px-6 py-3">
                <div class="flex items-center justify-between">
                    <div class="hidden h-12 w-full  border-b-4 border-red-500 text-gray-600 md:flex md:items-center">
                        <span class="mx-1 text-sm">Kamikaze_Blog</span>
                    </div>
                    <div
                        class="w-full uppercase h-12 text-gray-700 border-b-4 border-green-500 md:text-center text-2xl font-semibold">
                        avito
                    </div>
                    <div class="flex h-12 items-center border-b-4 border-blue-500 justify-end w-full">


                        <div class="flex sm:hidden">
                            <button @click="isOpen = !isOpen" type="button"
                                class="text-gray-600 hover:text-gray-500 focus:outline-none focus:text-gray-500"
                                aria-label="toggle menu">
                                <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                    <path fill-rule="evenodd"
                                        d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <nav :class="isOpen ? '' : 'hidden'" class="sm:flex sm:justify-center sm:items-center mt-4">
                    <div class="flex flex-col sm:flex-row">
                        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Home</a>
                        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Post</a>
                        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Categories</a>
                        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Contact</a>
                        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">About</a>
                        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Login</a>
                        <!-- test  -->
                        <a href="#"
                            class=" flex justify-around bg-red-400 no-underline hover:bg-red-600  hover:no-underline hover:text-white rounded-md py-3 p-1 shadow-md hover:shadow-2xl transition duration-500">
                            <svg class="av-icon" height="24" width="24" viewBox="0 0 18 18"
                                xmlns="http://www.w3.org/2000/svg" aria-labelledby="AddNoteTitleID"
                                style="fill: currentcolor; stroke: currentcolor; stroke-width: 0;">
                                <title id="AddNoteTitleID">AddNote Icon</title>
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M1.5 5.667c.46 0 .833.373.833.833v9.167H11.5a.833.833 0 010 1.666H2.333c-.92 0-1.666-.746-1.666-1.666V6.5c0-.46.373-.833.833-.833z"
                                    clip-rule="evenodd"></path>
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M15.667 2.333h-10v10h10v-10zm-10-1.666h10c.92 0 1.666.746 1.666 1.666v10c0 .92-.746 1.667-1.666 1.667h-10C4.747 14 4 13.254 4 12.333v-10c0-.92.746-1.666 1.667-1.666z"
                                    clip-rule="evenodd"></path>
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M10.667 4c.46 0 .833.373.833.833v5a.833.833 0 01-1.667 0v-5c0-.46.373-.833.834-.833z"
                                    clip-rule="evenodd"></path>
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M7.333 7.333c0-.46.374-.833.834-.833h5a.833.833 0 110 1.667h-5a.833.833 0 01-.834-.834z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Publier une annonce
                        </a>


                    </div>
                </nav>

            </div>
        </header>
    </div>
    <!----------------------- end navbar -------------------->

    <!-- IMAGE -->
    <section>

        <div class="relative bg-center bg-no-repeat bg-cover "
            style="min-height: 500px; background-image: url(<?php echo URLROOT . '/img/t-shirt.png' ?>)"
            title="Bali, Indonesia">
            <div class="absolute inset-0 flex flex-col items-center justify-center p-10 text-center text-white  ">
                <div class="max-w-3xl mx-auto text-center">
                    <h1 class="mb-4 text-4xl font-semibold text-black dark:text-gray-300">
                        about us
                    </h1>
                    <div class="flex flex-wrap items-center justify-center">
                        <button
                            class="inline-flex items-center px-4 py-2 my-4 font-bold text-white bg-black border border-black rounded hover:bg-white hover:text-black">
                            <span>Find out more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-4 h-4 ml-3 bi bi-arrow-right" viewBox="0 0 16 16" class="w-4 h-4 ml-2">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- END -->

    <!-- ABOUT US -->
    <div class="justify-center flex-1 max-w-6xl py-4 mx-auto lg:py-6 md:px-6">
        <div class="flex flex-wrap ">
            <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0">
                <div class="relative rounded-md">
                    <img src="https://i.postimg.cc/QtyYkbxp/pexels-andrea-piacquadio-927022.jpg" alt=""
                        class="relative z-40 object-cover w-full h-96 lg:rounded-tr-[80px] lg:rounded-bl-[80px] rounded">
                    <div
                        class="absolute z-10 hidden w-full h-full bg-blue-400 rounded-bl-[80px] rounded -bottom-6 right-6 lg:block">
                    </div>

                </div>
            </div>
            <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0 ">
                <div class="relative">
                    <h1
                        class="absolute -top-20   left-0 text-[20px] lg:text-[100px] text-gray-900 font-bold  dark:text-gray-200 opacity-5 md:block hidden">
                        About Us
                    </h1>
                    <h1 class="pl-2 text-3xl font-bold border-l-8 border-blue-400 md:text-5xl dark:text-white">
                        Welcome to AVITO
                    </h1>
                </div>
                <p class="mt-6 mb-10 text-base leading-7 text-gray-500 dark:text-gray-400">
                    A retenir:
                    Cette rubrique contient l'ensemble des règles que vous devez respecter pour que votre annonce
                    soit diffusée, sur notre site qui a pour objet la mise en relation de plusieurs parties en vue
                    de la vente d'un bien ou de la fourniture d'un service.
                    Le non-respect de ces règles est susceptible d'entraîner le refus de votre annonce, c'est-à-dire
                    sa suppression de notre site.
                    Si une annonce est refusée pour non respect du règlement, il sera proposé à l'annonceur de la
                    modifier. Avito.ma se réserve le droit de juger de la conformité d'une annonce au règlement et à
                    l'esprit du site. Le règlement est susceptible d'être modifié et peut être réactualisé en
                    permanence.
                    Note 1: La durée de vie d'une annonce sur Avito est trois mois.
                    Note 2: Le nombre d’annonces actives gratuites par utilisateur sur Avito.ma est limité, Pour
                    plus de visibilité sur la limitation des annonces consultez l'articles suivant:
                    https://aide.avito.ma/le-nombre-dannonces-gratuites/
                    Doublons: Il est interdit de publier plusieurs annonces pour un même article, service ou emploi.
                    Patientez un délai de 7 jours Supprimez l'ancienne annonce désactivée, puis publiez votre
                    nouvelle annonce. De même, il est interdit de publier des annonces pour un même article, service
                    ou emploi sous différentes catégories ou dans différentes régions.Si vous voulez remonter votre
                    annonce en haut de la page, il suffit d'opter pour notre service Renouvellement.
                    Marketing: Seules sont autorisées les annonces de vente, location, emploi ou service.
                    L'utilisation d'une annonce à des fins de marketing pur est interdite.
                    Annonce de particulier: Les annonces catégorisées comme "Particulier" publiées sur Avito.ma sont
                    réservées aux personnes non commerciales, autorisées à s'engager par contrat légal.
                    Annonce de professionnel: Les annonces catégorisées comme "Professionnel" publiées sur Avito.ma
                    sont réservées aux entreprises. Avito.ma se réserve le droit de juger du caractère professionnel
                    d'une annonce.
                    Services: Les services proposés ou recherchés doivent respecter les lois en vigueur au Maroc
                    pour chaque profession.
                    Titre de l'annonce: Le titre de l'annonce doit brièvement décrire l'article ou le service
                    proposé. Il ne doit pas contenir des numéros de téléphones ou de termes tels que: - Urgent -
                    Adresse web - Une date - Un nom d'entreprise - Une URL (adresse Web) - Un numéro de téléphone -
                    Un lien ou un compte de réseaux sociaux Avito.ma se réserve le droit de modifier le titre de
                    l'annonce pour qu'il soit conforme au règlement. Aucun caractère inutile n'est autorisé dans le
                    titre
                    Texte de l'annonce: L'article ou le service doit être décrit dans le texte de l'annonce. Il est
                    interdit de proposer simplement un lien vers une autre page. Le texte des annonces ne doit pas
                    être copié sur une autre annonce : ces textes sont protégés par le droit d'auteur.
                    Langue: Seules les annonces en Français ou en Arabe sont autorisées.
                    Catégories: L'annonce doit être placée dans la catégorie décrivant le mieux l'article ou le
                    service. Le cas échéant, Avito.ma peut la déplacer dans la catégorie correspondante. Les biens
                    et services n'appartenant pas à la même catégorie doivent être proposés dans des annonces
                    séparées. Les annonces de vente doivent être classées sous "Offre", les annonces de recherche
                    sous "Demande". "A louer" et "Demande de location" sont disponibles sous certaines catégories.
                    Dans d'autres catégories, les annonces "A louer" doivent être classées sous "Offre (vous vendez
                    un bien)", les annonces de demandes de location sous "Demande (vous recherchez un bien)".



                </p>
                <a href="#"
                    class="px-4 py-3 text-gray-50 transition-all transform bg-blue-400 rounded-[80px] hover:bg-blue-500 dark:hover:text-gray-100 dark:text-gray-100 ">
                    Learn more
                </a>
            </div>
        </div>
    </div>
    <!-- END -->

    <!------------------------ form ------------------------------->
    <?php foreach ($data["about"] as $item): ?>

    <div class="justify-center flex-1 max-w-6xl px-4 py-4 mx-auto lg:py-4 md:px-6">
        <div class="flex flex-wrap justify-center ">
            <div class="w-full py-5 md:w-1/2 lg:w-1/3 md:px-5">
                <div class="px-6 py-8 bg-white rounded shadow dark:bg-gray-700 border border-black">
                    <div class="flex items-center mb-4">
                        <img class="object-cover w-16 h-16 rounded-full" src="<?php echo URLROOT . '/img/profil.png' ?>"
                            alt="">
                        <div class="pl-4">
                            <p class="text-xl font-bold dark:text-gray-300">
                                <?= $item->username; ?>
                            </p>


                            <p class="font-medium text-blue-600 dark:text-blue-400">
                                <?= $item->role; ?>
                            </p>
                        </div>
                    </div>
                    <p class="mb-4 leading-loose text-gray-500 dark:text-gray-400">
                        <?= $item->description; ?>
                    </p>
                    <div class="flex items-center justify-start">
                        <a class="inline-block mr-5 text-black dark:text-gray-400 hover:text-blue-600" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-6 h-6 bi bi-facebook " viewBox="0 0 496 512">
                                <path
                                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                            </svg>
                        </a>
                        <a class="inline-block mr-5 text-blue-500 dark:text-gray-400 hover:text-blue-400" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-6 h-6 bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                        </a>
                        <a class="inline-block text-pink-600 dark:text-gray-400 hover:text-pink-500" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-6 h-6 bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <!----------------------- end form ------------------------->

    <!--------------- footer ------------------>
    <footer class="bg-gray-200">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-gray-500 hover:text-gray-400">Kamikaze_Blog</a>
            <p class="py-2 text-gray-500 sm:py-0">All rights reserved</p>
        </div>
    </footer>
    <script src="<?php echo URLROOT; ?>/js/main.js"></script>


    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>

</html>