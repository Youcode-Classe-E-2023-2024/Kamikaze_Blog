<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <style>
        .cards{
            padding: 2rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 3rem;
        }
        .card{
            width: 10rem;
            height: 10rem;
            padding: 1rem;
            /* background-color: #ffe9da; */
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            /* border: 1px solid black; */
        }
        .card img{
            width: 5rem;
        }
        .bout{
            display: flex;
            justify-content: center;
            padding: 1em;
        }
        .bout button{
            width: 10rem;
        }
        .search{
        display: flex;
        justify-content: center;
        gap: 1em;
        padding: 2rem;
        }
        select {
        -webkit-appearance:none;
        -moz-appearance:none;
        -ms-appearance:none;
        appearance:none;
        outline:0;
        box-shadow:none;
        border:0!important;
        background: #f4fffe;
        background-image: none;
        flex: 1;
        padding: 0 .5em;
        color:#fff;
        cursor:pointer;
        font-size: 1em;
        font-family: 'Open Sans', sans-serif;
        }
        select::-ms-expand {
        display: none;
        }
        .select {
        position: relative;
        display: flex;
        width: 20em;
        height: 3em;
        line-height: 3;
        background: #5c6664;
        overflow: hidden;
        border-radius: .35em;
        border: 1px solid black;
        }
        option{
        text-align: center;
        }
        .select::after {
        content: '\25BC';
        position: absolute;
        top: 0;
        right: 0;
        padding: 0 1em;
        background: #f4fffe;
        /* border-bottom: 1px solid black; */
        
        cursor:pointer;
        pointer-events:none;
        transition:.25s all ease;
        }
        .select:hover::after {
        color: #00b9a8;
        }
    </style>
</head>
<body>
    <?php 
    require_once APPROOT.'/views/inc/cltNavBar.php';
    ?>
    <form action="" method="get">
        <div class="relative mt-6 max-w-lg mx-auto">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                    <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>

                <input class="w-full border border-black rounded-md pl-10 pr-4 py-2 focus:border-blue-500 focus:outline-none focus:shadow-outline" type="text" placeholder="Search">
            </div>
        </div>
        
        <div class="search">
        <div class="select">
            <select name="category" id="category">
                <option selected disabled>Category</option>
                <?php 
                foreach ($data['categories'] as $category): ?>
                    <option value="<?php echo $category->name ?>"><?php echo $category->name?></option>
                <?php endforeach; ?>
                <!-- <option>VEHICULES</option>
                <option>INFORMATIQUE ET MULTIMEDIA</option>
                <option>IMMOBILIER</option>
                <option>HABILLEMENT</option>
                <option>SPORT</option> -->
            </select>
        </div>
        <div class="select">
        
            <select name="city" id="city">
                <option selected disabled>Ville</option>
                <?php 
                foreach ($data['cities'] as $city): ?>
                    <option value="<?php echo $city->city?>"><?php echo $city->city?></option>
                <?php endforeach; ?>
            </select>
        </div>
        </div>
        <div class="bout">
            <button type="submit" class="py-2 px-4 bg-blue-700 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
            Save 
            </button>  
        </div>

        <div class="cards">
            <div class="card" style="background-color: #ffe9da">
                <img src="<?php echo URLROOT . "/img/categories/779505_10252-NML4GG-removebg-preview.png" ?>" alt="">
                <h6>VEHICULES</h6>
            </div>
            <div class="card" style="background-color: #e9daff">
                <img src="<?php echo URLROOT . "/img/categories/2606088_5568-removebg-preview.png" ?>" alt="">
                <h6>INFORMATIQUE ET MULTIMEDIA</h6>
            </div>
            <div class="card" style="background-color: #daf0ff">
                <img src="<?php echo URLROOT . "/img/categories/home-icon-sign-front-side-white-background-removebg-preview.png" ?>" alt="">
                <h6>IMMOBILIER</h6>
            </div>
            <div class="card" style="background-color: #ffe9da">
                <img src="<?php echo URLROOT . "/img/categories/20346276_v1057-element-19-removebg-preview.png" ?>" alt="">
                <h6>HABILLEMENT </h6>
            </div>
            <div class="card" style="background-color: #ebebeb">
                <img src="<?php echo URLROOT . "/img/categories/10603279_42615-removebg-preview.png" ?>" alt="">
                <h6>SPORT</h6>
            </div>

        </div>
    </form>
    

    <?php 
    require_once APPROOT.'/views/inc/footer.php';
    ?>
    <script>
        $(document).click(function(event) {
  if(
    $('.toggle > input').is(':checked') &&
    !$(event.target).parents('.toggle').is('.toggle')
  ) {
    $('.toggle > input').prop('checked', false);
  }
})
    </script>
</body>
</html>