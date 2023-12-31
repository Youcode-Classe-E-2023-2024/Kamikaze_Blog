<?php require APPROOT . '/views/inc/sideBarAdmin.php'; ?>

  <div class="flex flex-col flex-1 min-h-screen overflow-x-hidden overflow-y-auto">
    
  <?php require APPROOT . '/views/inc/adminNavBar.php'; ?>
    <!-- Main content -->
    <div class="flex-1 items-center justify-center flex-1 h-full p-4">
       <!-- Main content -->
      <main>
        <!-- Content header -->
        <div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
          <h1 class="text-2xl font-semibold">Manage permissions - Moderators</h1>
                <?php if($_SESSION['roleId'] ===1 ) { ?>
            <a href="<?= URLROOT . '/admin/edit_permissions/' ?>" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
                <?php } ?>
        </div>
        <!-- End Content header -->

        <!-- Content -->
        <div class="mt-2">
          <!-- State cards -->
          <div class="grid grid-cols-1 gap-8 p-4 lg:grid-cols-2 xl:grid-cols-4">
              <?php if($data['hasPermissionRead']){ ?>
            <?php foreach($data['moderators'] as $moderator) { ?>

          <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow bg-white rounded-md dark:bg-darker dark:border-gray-700">
              <div class="flex justify-end px-4 pt-4">
                  <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                      <span class="sr-only">Open dropdown</span>
                      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                          <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                      </svg>
                  </button>
                  <!-- Dropdown menu -->
                  <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                      <ul class="py-2" aria-labelledby="dropdownButton">
                      <li>
                          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                      </li>
                      <li>
                          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                      </li>
                      <li>
                          <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                      </li>
                      </ul>
                  </div>
              </div>
              <div class="flex flex-col items-center pb-10 bg-white rounded-md dark:bg-darker">
                  <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="<?php echo URLROOT . '/img/users/' . $moderator->profile_img ?>" alt="Bonnie image"/>
                  <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"><?php echo $moderator->fullName ?></h5>
                  <span class="text-sm text-gray-500 dark:text-gray-400"><?php echo $moderator->role_name ?> </span>
                  <?php if($data['hasPermissionUpdate']) { ?>
                  <div class=" justify-between mt-4 md:mt-6">
                      <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 ms-3">Delete profile</a>
                  </div>
                  <?php } ?>
              </div>
          </div>

            <?php } ?>
            <?php }else{ ?>
                  <p class="text-xl font-semibold text-red-500 w-full">You dont have access to this ressource</p>
             <?php } ?>
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
