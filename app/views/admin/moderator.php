<?php require APPROOT . '/views/inc/sideBarAdmin.php'; ?>

  <div class="flex flex-col flex-1 min-h-screen overflow-x-hidden overflow-y-auto">
    
  <?php require APPROOT . '/views/inc/adminNavBar.php'; ?>
    <!-- Main content -->
    <div class="flex-1 items-center justify-center flex-1 h-full p-4">
       <!-- Main content -->
      <main>
        <!-- Content header -->
        <div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
          <h1 class="text-2xl font-semibold">Manage users</h1>
          
        </div>
        <!-- End Content header -->

        <!-- Content -->
        

         <div class="flex items-center justify-center w-full "  >
            <div class="flex flex-wrap  sm:w-full lg:w-1/2"     >
                    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
                        <p class="text-xl pb-6 flex items-center">
                            <i class="fas fa-list mr-3"></i> Add moderator
                        </p>
                        <div class="leading-loose ">
                            <form class="p-10 w-full rounded shadow-xl bg-white border-r dark:border-primary-darker dark:bg-darker" method="POST" action="<?php echo URLROOT . '/admin/add_Moderator' ?>" enctype="multipart/form-data"  >
                                
                                <div class="my-4">
                                    <span class="text-red-700"><?php if(!empty($data['fullName_err']))echo '*' . $data['fullName_err']; ?></span>
                                    <label class="block text-sm text-gray-600" for="name">Full Name</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="fullName" type="text"  placeholder="Enter the  Name" aria-label="Name">
                                </div>
                                <div class="my-4">
                                    <span class="text-red-700"><?php if(!empty($data['email_err']))echo  '*' . $data['email_err']; ?></span>
                                    <label class="block text-sm text-gray-600" for="name">Email</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="email" type="email"  placeholder="Enter the  Email" aria-label="Name">
                                </div>
                                <div class="my-4">
                                    <span class="text-red-700"><?php if(!empty($data['city_err']))echo  '*' . $data['city_err']; ?></span>
                                    <label class="block text-sm text-gray-600" for="name">City</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="city" type="text"  placeholder="Enter the city" aria-label="Name">
                                </div>
                                <div> 
                                    <?php if(!empty($data['img_err']))echo  '*' . $data['img_err']; ?></span>
                                    <label class="block text-sm text-gray-600" for="file_input">Upload file</label>
                                    <input name="moderator_Img" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                </div>
                                <div class="mt-6">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
         </div>       
        
        <!--End  Content -->
        
        </main>
          
          </div>
        </div>
      </div>
    </div>
    <!-- All javascript code in this project for now is just for demo DON'T RELY ON IT  -->

<?php require APPROOT . '/views/inc/footerAdmin.php'; ?>
