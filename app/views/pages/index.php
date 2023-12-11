<!-- require header -->
<?php require APPROOT . '/views/inc/cltNavBar.php'; ?>

<main class="my-8 py-4 bg-gray-100 ">
    <!-- ------------------------------------------------------ -->
    <div class="flex items-center justify-center h-39 w-full py-24 sm:py-8 px-4">
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
        <div class="w-full relative flex items-center justify-center">

            <div class="w-4/5 h-full mx-auto overflow-x-hidden overflow-y-hidden">
                <div id="slider" class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                    <?php
                    foreach ($data['pub'] as $item) {
                        $text = $item->title;

                        $words = explode(' ', $text);

                        $firstTwoWords = implode(' ', array_slice($words, 0, 2));

                    ?>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="<?php echo URLROOT ?>/public/img/publications/<?= $item->imgUrl ?>" alt="black chair and white table" class="object-cover  object-center w-full" style="aspect-ratio: 16/9;" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                <div class="lg:text-xl  capitalize  text-3xl lg:leading-5 flex justify-center dark:text-gray-900">
                                    <h2 class="bg-gray-600 bg-opacity-50 text-center text-7xl font-extrabold text-white px-6 rounded-xl"> <?php  echo $firstTwoWords;  ?></h2>
                                </div>
                
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900"><?php echo $firstTwoWords; ?></h3>
                                </div>
                            </div>
                        </div>

                    <?php }; ?>
                </div>

            </div>
        </div>
    </div>
    <!-- ------------------------------------------------------ -->
    <div class="container mx-auto px-6">

        <div class="h-64 rounded-md overflow-hidden bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1577655197620-704858b270ac?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1280&q=144')">
            <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                <div class="px-10 max-w-xl">
                    <h2 class="text-2xl text-white font-semibold">Sport Shoes</h2>
                    <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                    <button class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                        <span>Shop Now</span>
                        <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <nav :class="isOpen ? '' : 'hidden'" class="sm:flex sm:justify-center sm:items-center mt-4">
                <div class="flex flex-col sm:flex-row">
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Home</a>
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Shop</a>

                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Categories</a>
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="index.php?url=contact">Contact</a>

                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="<?php echo URLROOT; ?>/pages/categories">Categories</a>
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Contact</a>

                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">About</a>
                </div>
            </nav>
            <div class="relative mt-6 max-w-lg mx-auto">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                    <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                        <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>

                <input class="w-full border rounded-md pl-10 pr-4 py-2 focus:border-blue-500 focus:outline-none focus:shadow-outline" type="text" placeholder="Search">
            </div>
        </div>
        <div class="md:flex mt-8 md:-mx-4">
            <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2" style="background-image: url('https://images.unsplash.com/photo-1547949003-9792a18a2601?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-2xl text-white font-semibold">Back Pack</h2>
                        <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                        <button class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                            <span>Shop Now</span>
                            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2" style="background-image: url('https://images.unsplash.com/photo-1486401899868-0e435ed85128?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80')">
                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-2xl text-white font-semibold">Games</h2>
                        <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                        <button class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                            <span>Shop Now</span>
                            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
<?php foreach($data['categories'] as $categories):?>
        <div class="flex flex-col bg-transparent m-auto py-12">
            <h3 class="text-gray-600 text-2xl font-medium"><?php echo $categories->name; ?></h3></h3>

            <div class="flex justify-start overflow-x-scroll  hide-scroll-bar  py-7">
                <?php
         
                foreach ($data['pub'] as $item) {
                    if($item->category_Id===$categories->id){
                    $createdAtTimestamp = strtotime($item->created_at);
                    $date = gmdate("Y-m-d", $createdAtTimestamp);
                ?>

                    <a href="<?php echo URLROOT . '/Pages/details/' . $item->id; ?>" class="  hover:no-underline text-xl  lg:ml-40 md:ml-20 ml-10 w-full max-w-sm mx-4 rounded-md shadow-md   hover:shadow-xl transition-shadow duration-300 ease-in-out bg-gray-100">
                        <div class="flex items-end justify-end h-56 w-80 bg-cover" style="background-image: url('<?php echo URLROOT ?>/public/img/publications/<?php echo $item->imgUrl ?>')">
                        </div>
                        <div class="px-5 py-3 text-center">

                            <h3 class="text-black uppercase text-2xl font-bold float-left p-2 "><?php echo $item->title; ?>kjbgjzerkjg kbg</h3><br>
                            <span class=" mt-2 text-blue-500 font-bold p-2  "><?php echo $item->prix; ?> DH</span><br>
                            <span class="float-right p-2 text-gray-400 "><?php echo $date; ?></span>
                        </div>

                    </a>

                <?php }}; ?>


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