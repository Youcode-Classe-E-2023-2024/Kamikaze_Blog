<?php  require APPROOT . '/views/inc/cltNavBar.php';?>
<?php  
//  echo '<pre>';
//  var_dump($data['publication']); 
//  echo '<pre>';

// $dateString = $data['created_at'];
// $first_time = time();
// $last_time  = strtotime($dateString);
// $diff = $first_time - $last_time ;

// $hours = floor($diff / 3600);
// $minutes = floor(($diff % 3600) / 60);
// $seconds = $diff % 60;

// Format the time difference
// $formattedTime = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
// echo "le timz is : " . $formattedTime . "<br>";




$temps = $data['publication']->created_at;
function chek_time($temps){
    

$dateString = $temps;
$first_time = time();
$last_time  = strtotime($dateString);
$diff = $first_time - $last_time;
$res = $diff - 3600;



if ($res > 0 && $res < 60 || $res < 0 && $res > -60) {

    echo "il y a" . " " . $date = date('s', $res) . " " . "s";

} elseif ($res > 60 && $res < 3600 || $res < -60 && $res > -3600) {

   
    echo "il y a" . " " . $date = date('i', $res) . " " . "m";

} elseif ($res > 3600 && $res < 43200 || $res < -3600 && $res > -43200) {

  
    echo "il y a" . " " . $date = date('H:i', $res) . " " . "h";

} elseif ($res > 43200 && $res < 1296000 || $res < -43200 && $res > -1296000) {

   
    echo " " . $date = date('d', $res) . " " . "jour";

} elseif ($res > 1296000 && $res < 15552000 || $res < -1296000 && $res > -15552000) {

   
    echo " " . $date = date('m', $res) . " " . "mois";

} elseif ($res >= 15552000 || $res <= -15552000 ) {

   
    echo " " . $date = date('y-m', $res) . " " . "années";
    
} else {
    echo "Erreur";
}
}









?>


    <div class=" w-full h-screen flex flex-col justify-start items-center pt-16 my-9">
        
        <div class=" bg-gray-300 w-3/5 h-48 flex justify-center rounded-t-lg">
            <img src="data:image/jpeg;base64,<?php echo base64_encode($data['publication']->imgUrl); ?>" alt="" class=" w-96 h-48 rounded-xl">
            
        </div>
        <div class=" w-3/5 h-[45%]  rounded-b-lg">

            <div class="w-[75%] h-[45%] bg-gray-200 p-3 pt-7 flex flex-col items-center gap-3 rounded-b-lg">
                    <div class="w-full h-fit flex flex-col gap-3 ">

                        <div class=" w-full h-9 flex justify-between items-center  ">
                            <div class=" w-fit h-9 flex justify-center items-end gap-6 ">
                                <h1 class="text-2xl font-bold text-gray-700"><?= $data['publication']->fullName; ?></h1>
                                <h2 class="text-sm  text-gray-600  font-bold"><?= $data['publication']->name; ?></h2>
                            </div>
                            <h4 class="text-lg font-bold text-blue-500"><?= $data['publication']->prix; ?></h4>
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
                                <p class="text-sm font-medium text-gray-600"><?= chek_time($temps); ?></p>
                            </div>
                        </div>

                    </div>


                <div class="w-[100%] h-fit">
                    <h3 class="text-xl font-bold text-gray-700">description</h3>
                    <p class="text-gray-500 text-base"><?= $data['publication']->description; ?></p>
                </div>
            </div>

        </div>
        
    </div>


    
    
    
    
    
    
    
    
    
     
    <div class="m-16">
    <h3 class="text-gray-600 text-2xl font-medium">Autres annonces de cette boutique</h3>
    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1563170351-be82bc888aa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=376&q=80')">
                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </button>
            </div>
            <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">Chanel</h3>
                <span class="text-gray-500 mt-2">$12</span>
            </div>
        </div>
        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1544441893-675973e31985?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80')">
                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </button>
            </div>
            <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">Man Mix</h3>
                <span class="text-gray-500 mt-2">$12</span>
            </div>
        </div>
        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1532667449560-72a95c8d381b?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80')">
                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </button>
            </div>
            <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">Classic watch</h3>
                <span class="text-gray-500 mt-2">$12</span>
            </div>
        </div>
         <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1590664863685-a99ef05e9f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=345&q=80')">
                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </button>
            </div>
            <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">woman mix</h3>
                <span class="text-gray-500 mt-2">$12</span>
            </div>
        </div> 
    </div>
    </div>



<div class="m-16">
    <h3 class="text-gray-600 text-2xl font-medium">Nos Articles Avito Magazine</h3>
    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1563170351-be82bc888aa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=376&q=80')">
                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </button>
            </div>
            <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">Chanel</h3>
                <span class="text-gray-500 mt-2">$12</span>
            </div>
        </div>
         <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1544441893-675973e31985?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80')">
                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </button>
            </div>
            <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">Man Mix</h3>
                <span class="text-gray-500 mt-2">$12</span>
            </div>
        </div> 
        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1532667449560-72a95c8d381b?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80')">
                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </button>
            </div>
            <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">Classic watch</h3>
                <span class="text-gray-500 mt-2">$12</span>
            </div>
        </div>
         <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1590664863685-a99ef05e9f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=345&q=80')">
                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </button>
            </div>
            <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">woman mix</h3>
                <span class="text-gray-500 mt-2">$12</span>
            </div>
        </div> 
    </div>
</div> 

<?php  require APPROOT . '/views/inc/footer.php';?>
