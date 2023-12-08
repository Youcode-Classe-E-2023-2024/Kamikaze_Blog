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
        
        <!--End  Content -->
        <div class="w-full my-12 ">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Users
                </p>
                <div class="overflow-auto bg-white rounded-md dark:bg-darker">
                    <table id="users" class="min-w-full leading-normal m-b-8">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b border-gray-200  text-left text-xs font-semibold text-white-600 uppercase tracking-wider">
                                    Id
                                </th>
                                <th
                                    class="px-5 py-3 border-b border-gray-200  text-left text-xs font-semibold text-white-600 uppercase tracking-wider">
                                    Full name
                                </th>
                                <th
                                    class="px-5 py-3 border-b border-gray-200  text-left text-xs font-semibold text-white-600 uppercase tracking-wider">
                                    email
                                </th>
                                <th
                                    class="px-5 py-3 border-b border-gray-200  text-left text-xs font-semibold text-white-600 uppercase tracking-wider">
                                    Role
                                </th>
                                
                            </tr>
                        </thead>
                        
                    </table>
                </div>
                
        </div>
      </main>
          
          </div>
        </div>
      </div>
    </div>
    <!-- All javascript code in this project for now is just for demo DON'T RELY ON IT  -->
<script>
    
$(document).ready(function() {
  var endpoint = 'http://localhost/Kamikaze_Blog/admin/allUsers';
  fetch(endpoint)
      .then(response => response.json())
      .then(data => {
          console.log(data);
          $('#users').DataTable({
              paging: false, 
              searching: true,
              ordering: true,
              info:false,
              data: data, // Pass the fetched data to DataTable
              columns: [
                  { data: 'id' , className: ' py-5 border-b border-gray-200 text-sm bg-white dark:bg-darker'},
                  { data: 'fullName' , className: ' py-5 border-b border-gray-200 text-sm  bg-white dark:bg-darker' },
                  { data: 'email' , className: ' py-5 border-b border-gray-200 text-sm  bg-white dark:bg-darker' },
                  { data: 'role_name' , className: ' py-5 border-b border-gray-200 text-sm  bg-white dark:bg-darker' },
              ],
              autoWidth: false 

          });
          
          $('#users_filter input')
                .addClass('py-2 px-4 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500')
                .attr('placeholder', 'by name / email ...');
          $('label')
                .addClass('text-sm bg-white dark:bg-darker');
        
      })

      .catch(error => console.log('Error fetching data:', error));
});
</script>
<?php require APPROOT . '/views/inc/footerAdmin.php'; ?>
