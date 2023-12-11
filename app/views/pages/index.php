<!-- require header -->
<?php require APPROOT . '/views/inc/cltNavBar.php'; ?>

<main class="my-8 py-4 bg-gray-100 ">
    <!-- ------------------------------------------------------ -->
    <div class="flex items-center justify-center h-39 w-full py-24 sm:py-8 px-4">
        <div class="w-full relative flex items-center justify-center">

            <div class="w-4/5 h-full mx-auto overflow-x-hidden overflow-y-hidden">
                <div id="slider" class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                    <?php
                    $counter = 0;
                    foreach ($data['pub'] as $item) {
                        $text = $item->title;

                        $words = explode(' ', $text);

                        $firstTwoWords = implode(' ', array_slice($words, 0, 2));

                    ?>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="<?php echo URLROOT ?>/public/img/publications/<?= $item->imgUrl ?>" alt="black chair and white table" class="bg-cover object-cover  object-center w-full" style="aspect-ratio: 16/7;" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                <div class="lg:text-xl  capitalize  text-3xl lg:leading-5 flex justify-center dark:text-gray-900">
                                    <h2 class="bg-gray-600 bg-opacity-50 text-center text-7xl font-extrabold text-white px-6 rounded-xl"> <?php echo $firstTwoWords;  ?></h2>
                                </div>

                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900"><?php echo $firstTwoWords; ?></h3>
                                </div>
                            </div>
                        </div>

                    <?php $counter++;
                        if ($counter >= 4) {
                            break;
                        }
                    }; ?>
                </div>

            </div>
        </div>
    </div>
    <!-- ------------------------------------------------------ -->
    <div class="container mx-auto px-6">

        <div class="h-64 rounded-md overflow-hidden bg-cover bg-center" style="background-image: url('<?php echo URLROOT ?>/public/img/vetements.jpg')">
            <a href="" class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                <div class="px-10 max-w-xl">
                    <h2 class="text-2xl text-white font-semibold">Vetements</h2>
                    <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>

                </div>
            </a>
        </div>
        <div class="md:flex mt-8 md:-mx-4">
            <a href="" class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2" style="background-image: url('<?php echo URLROOT ?>/public/img/véhicule.jpg')">
                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-2xl text-white font-semibold">véhicule</h2>
                        <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>

                        </button>
                    </div>
                </div>
            </a>

            <a href="" class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2" style="background-image: url('<?php echo URLROOT ?>/public/img/informatique.png')">
                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-2xl text-white font-semibold">informatique</h2>
                        <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>

                    </div>
                </div>
            </a>
        </div>

        <?php foreach ($data['categories'] as $categories) : ?>
            <div class="flex flex-col bg-transparent m-auto py-12">
                <h3 class="text-gray-600 text-2xl font-medium"><?php echo $categories->name; ?></h3>
                </h3>

                <div class="flex  overflow-x-scroll  hide-scroll-bar rounded-3xl  bg-white py-7">
                    <?php

                    foreach ($data['pub'] as $item) {
                        if ($item->category_Id === $categories->id) {
                            $createdAtTimestamp = strtotime($item->created_at);
                            $date = gmdate("Y-m-d", $createdAtTimestamp);
                    ?>

                            <a href="<?php echo URLROOT . '/Pages/details/' . $item->id; ?>" class="  hover:no-underline text-xr  lg:mx-20 md:mx-10 mx-5 w-80 max-w-sm  rounded-md shadow-md   hover:shadow-xl transition-shadow duration-300 ease-in-out bg-gray-100">
                                <div class="flex items-end justify-end h-56 w-80 bg-cover bg-no-repeat" style="background-image: url('<?php echo URLROOT ?>/public/img/publications/<?php echo $item->imgUrl ?>')">
                                </div>
                                <div class="px-5 py-3 text-center flex flex-col   ">

                                    <h3 class="text-black uppercase text-2xl font-bold  "><?php echo $item->title; ?></h3>
                                    <div>
                                        <span class=" mt-2 text-blue-500 font-bold p-2  "><?php echo $item->prix; ?> DH</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="float-right p-2 text-gray-400 "><?php echo $date; ?></span>
                                        <span class="float-right p-2 text-black-400 bg-blue-100 rounded-2xl "><?php echo $categories->name; ?></span>
                                    </div>
                                </div>

                            </a>

                    <?php }
                    }; ?>


                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <style>
        .hide-scroll-bar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .hide-scroll-bar::-webkit-scrollbar {
            display: none;
        }
    </style>
    </div>

    </div>
</main>
<script>
    let defaultTransform = 0;
    let autoScrollInterval;

    function goNext() {
        defaultTransform = defaultTransform - 1530;
        var slider = document.getElementById("slider");
        if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.2)
            defaultTransform = 0;
        slider.style.transition = "transform 1.5s";
        slider.style.transform = "translateX(" + defaultTransform + "px) ";


    }

    function goPrev() {
        var slider = document.getElementById("slider");
        if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
        else defaultTransform = defaultTransform + 1530;
        slider.style.transform = "translateX(" + defaultTransform + "px)";
        $
    }

    function startAutoScroll() {
        autoScrollInterval = setInterval(goNext, 2000);
        slider.style.animationDelay = 3000;
    }

    function stopAutoScroll() {
        clearInterval(autoScrollInterval);
    }

    document.addEventListener("DOMContentLoaded", function() {
        startAutoScroll();

        document.getElementById("slider").addEventListener("mouseenter", stopAutoScroll);

        document.getElementById("slider").addEventListener("mouseleave", startAutoScroll);
    });


    next.addEventListener("click", goNext);
    prev.addEventListener("click", goPrev);
</script>





<?php require APPROOT . '/views/inc/footer.php'; ?>