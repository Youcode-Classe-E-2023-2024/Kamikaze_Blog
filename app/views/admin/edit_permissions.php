<?php require APPROOT . '/views/inc/sideBarAdmin.php'; ?>

<div class="flex flex-col flex-1 min-h-screen overflow-x-hidden overflow-y-auto">

    <?php require APPROOT . '/views/inc/adminNavBar.php'; ?>
    <!-- Main content -->
    <div class="flex-1 items-center justify-center flex-1 h-full p-4">
        <!-- Main content -->
        <main>
            <!-- Content header -->
            <div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
                <h1 class="text-2xl font-semibold">Manage permissions</h1>

                    <div class="flex justify-between gap-8">
                        <div class="border border border-red-500 p-4 rounded-md bord" id="dropZone" >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </div>
                        <div class="border border border-red-500 p-4 rounded-md bord" id="dropZone" onclick="toggleModal()" >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                        </div>

                    </div>
            </div>
            <!-- End Content header -->

            <!-- Content -->

            <!--End  Content -->
            <div class="w-full my-12 ">


                <div class="flex flex-wrap ">

                    <div class="flex lg:gap-8 text-center" >
                        <?php foreach($data['managerPermissions'] as $permission)  { ?>
                            <div draggable="true" id="card<?= $permission->id ?>" class="p-4 md:w-1/4 sm:w-1/2 w-full" data-card-id="<?= $permission->id ?>">
                                <div  class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">

                                    <h2 class="title-font font-medium text-3xl text-gray-900"><?= ucwords($permission->name )?></h2>
                                    <p class="leading-relaxed"><?= $permission->module ?></p>
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                </div>

            </div>
            <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden ">

                    <form action="<?php echo URLROOT . '/Admin/addPermission' ?>" method="POST">
                        <input type="hidden" id="userId" name="userId" >
                        <div class="form fixed top-1/2 left-1/2 transform -translate-x-1/2 top-5 border border-gray-200  bg-white rounded-md dark:bg-darker">
                            <button type="button" onclick="hideModal()" class="absolute top-3 left-1 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 md:p-5 text-center">
                                <div class="mb-5">
                                    <label for="category" class="block mb-2 font-bold text-gray-600 uppercase">User Role</label>
                                    <div class="relative border border-gray-300 text-gray-800 bg-white shadow-lg">
                                        <label for="category" class="sr-only">My field</label>
                                        <select class="appearance-none w-full py-1 px-2 bg-white" name="role" id="role" >
                                            <option value="">Please choose&hellip;</option>

                                            <?php foreach ($data["roles"] as $item) : ?>
                                                <option value="<?php echo $item->id; ?>"><?= $item->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="pointer-events-none absolute right-0 top-0 bottom-0 flex items-center px-2 text-gray-700 border-l">
                                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="category" class="block mb-2 font-bold text-gray-600 uppercase">Permissions</label>
                                    <div class="relative border border-gray-300 text-gray-800 bg-white shadow-lg">
                                        <label for="category" class="sr-only">My field</label>
                                        <select class="appearance-none w-full py-1 px-2 bg-white" name="permission" id="permission" >
                                            <option value="">Please choose&hellip;</option>

                                            <?php foreach ($data["permissions"] as $item) : ?>
                                                <option value="<?php echo $item->id; ?>"><?= ucwords($item->name ). '-' . $item->module ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="pointer-events-none absolute right-0 top-0 bottom-0 flex items-center px-2 text-gray-700 border-l">
                                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <button name="submit" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                    Add
                                </button>
                            </div>
                        </div>
                    </form>

            </div>







        </main>





    </div>
</div>
</div>
</div>

<!-- All javascript code in this project for now is just for demo DON'T RELY ON IT  -->
<script>
    const cards = document.querySelectorAll('[draggable="true"]');
    const dropZone = document.getElementById('dropZone');

    cards.forEach(card => {
        console.log(card)
        card.addEventListener('dragstart', function (event) {
            event.dataTransfer.setData('text/plain', card.dataset.cardId);
        });
    });

    dropZone.addEventListener('dragover', function (event) {
        event.preventDefault();
    });

    dropZone.addEventListener('drop', function (event) {
        event.preventDefault();
        const droppedCardId = event.dataTransfer.getData('text/plain');
        const droppedCard = document.getElementById(`card${droppedCardId}`);


        fetch(`http://localhost/Kamikaze_Blog/admin/deleteModPer/${droppedCardId}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },

        })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'deleted') {
                    console.log(data.message);

                } else if(data.status === 'failed') {
                    console.log(data.message);

                }else {
                    // Handle errors
                    console.error(data.message);
                }
            })
            .finally(() => {
                location.reload();
            });
    });

    function toggleModal() {
        var modal = document.getElementById('popup-modal');
        modal.style.display = modal.style.display === 'none' ? 'block' : 'none';


    }




    function hideModal() {
        var modal = document.getElementById('popup-modal');
        modal.style.display = 'none';

    }


</script>
<?php require APPROOT . '/views/inc/footerAdmin.php'; ?>
