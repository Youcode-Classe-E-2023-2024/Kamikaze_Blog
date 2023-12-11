<?php  require APPROOT . '/views/inc/cltNavBar.php';?>


    <div class=" w-full h-full flex flex-col  items-center pt-9 my-9">
        
        <div class=" bg-gray-100 w-3/5 h-90 flex justify-center rounded-t-lg">
            <img src=" <?=
             URLROOT . '/img/publications/' . $data['publication']->imgUrl;?>" alt="" class=" w-1/2 h-full rounded-xl">
        </div>
        <div class=" w-3/5 h-[45%]  rounded-b-lg">

            <div class="w-[75%] h-[45%]  p-3 pt-7 flex flex-col items-center gap-3 rounded-b-lg">
                <div class="w-full h-fit flex flex-col gap-3 ">
                    <div class=" w-full h-9 flex justify-between items-center  ">
                        <div class=" w-full  h-9 flex justify-between items-end gap-6 ">
                            <h1 class="text-2xl font-bold text-gray-700 "><?= $data['publication']->fullName; ?></h1>
                            <span class="text-l rounded-xl  p-2 text-blue-300 bg-gray-600 shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75  font-bold"><?= $data['publication']->category_name; ?></span>
                        </div>
                        
                    </div>
                    <div class="w-[100%] h-fit flex  items-center gap-2 ">
                        <div class="w-fit h-6 flex justify-evenly items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                                <path
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                            </svg>
                            <p class="text-sm font-medium text-gray-600"><?= $data['publication']->name; ?></p>
                        </div>
                        <div class="w-fit h-6 flex justify-evenly items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                <path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                            </svg>

                            <p class="text-sm font-medium text-gray-600">ily a 33 min</p>

<!--                            <p class="text-sm font-medium text-gray-600">--><?//= chek_time($temps); ?><!--</p>-->

                        </div>
                    </div>
                </div>


                <div class=" w-full h-fit ">
                <h4 class="text-2xl font-bold text-blue-500"><?= $data['publication']->prix; ?></h4>
                    
                </div>
            </div>

        </div>
        
    </div>

    <div class="desc">
    <h3 class="text-2xl font-bold text-gray-700">description</h3>
    <p class="text-gray-500 text-xl"><?= $data['publication']->description; ?></p>
    </div>

<div class="flex flex-col bg-transparent m-auto py-12">
    <h3 class="text-gray-600 text-2xl ml-12 mb-4 font-medium">Related publications</h3>

    <div class="flex overflow-x-scroll  hide-scroll-bar  py-7">
        <?php
        
        foreach($data['publication_category'] as $item):
            ?>

            <!-- <a href="<?php echo URLROOT . '/Pages/details/' . $item->id; ?>" class="  hover:no-underline text-xl  lg:ml-40 md:ml-20 ml-10 w-full max-w-sm mx-4 rounded-md shadow-md   hover:shadow-xl transition-shadow duration-300 ease-in-out bg-white">
                <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('<?php echo URLROOT ?>/public/img/publications/<?php echo $item->imgUrl ?>')">
                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase  "><?php echo $item->title; ?></h3>
                    <span class="text-gray-500 mt-2  ">$<?php echo $item->prix; ?></span><br>
                    <span class="text-gray-500 mt-2  ">$<?php echo $item->created_at; ?></span>
                </div>

            </a> -->

            <a href="<?php echo URLROOT . '/Pages/details/' . $item->id; ?>" class="  hover:no-underline text-xr  lg:mx-20 md:mx-10 mx-5 w-80 max-w-sm  rounded-md shadow-md   hover:shadow-xl transition-shadow duration-300 ease-in-out bg-gray-100">
                        <div class="flex items-end justify-end h-56 w-80 bg-cover bg-no-repeat" style="background-image: url('<?php echo URLROOT ?>/public/img/publications/<?php echo $item->imgUrl ?>')">
                        </div>
                        <div class="px-5 py-3 text-center flex flex-col   ">

                            <h3 class="text-black uppercase text-2xl font-bold  "><?php echo $item->title; ?></h3>
                            <div>
                                <span class=" mt-2 text-blue-500 font-bold p-2  "><?php echo $item->prix; ?> DH</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="float-right p-2 text-gray-400 "><?php echo $item->created_at; ?></span>
                                <span class="float-right p-2 text-black-400 bg-blue-100 rounded-2xl "> <?php echo$data['publication']->category_name; ?></span>
                            </div>
                        </div>

                    </a>
            

        <?php endforeach ?>


    </div>
</div>

</div>
<style>
    .hide-scroll-bar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .hide-scroll-bar::-webkit-scrollbar {
        display: none;
    }
    .desc{
        background-color: #F2FFE9;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        border-top:1px solid black;
        border-bottom:1px solid black;
        height: 35vh;
        gap: 2rem;

    }
</style>






<?php  require APPROOT . '/views/inc/footer.php';?>