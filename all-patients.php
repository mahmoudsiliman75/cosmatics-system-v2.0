<?php include("layouts/header.php") ?>

<div class="intro-y flex items-center pt-5 h-10">
	<h2 class="text-lg font-medium text-gray-600 truncate mr-5">All Users</h2>
</div>

<div class="mt-5">
  <!-- BEGIN: Table Data -->
  <div class="intro-y box pb-3" style="z-index:1">
    <div class="flex sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
    
      <form class="print flex mr-auto grid grid-cols-12 gap-6" id="tabulator-html-filter-form">

        <div class="sm:flex-row items-center col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 mt-2">
          <label class="text-gray-600 mb-3 text-lg">Sarch For</label>
          <input type="text" class="input w-full border" placeholder="Search">
        </div>

        <div class="sm:flex-row items-center col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-2 mt-1">
          <button type="button" class="button text-center w-11 h-11 bg-theme-1 text-white mx-2 mt-8" id="">
            <i data-feather="search" class="w-5 h-5 text-center"></i> 
          </button>
        </div>

      </form>
      <button type="submit" class="print print-tables button translate-y-3 mt-2 ml-2 flex items-center justify-center bg-theme-1 text-white"> 
        <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Print 
      </button>

      <a href="reservation.php" class="print button translate-y-3 mt-2 ml-2 flex items-center justify-center bg-theme-1 text-white" style="width: 190px;"> 
        <i data-feather="plus" class="w-4 h-4 mr-2  ml-2"></i> Add New Patient 
      </a>
    </div>

    <div class="overflow-x-auto p-5"> 
      <table class="table"> 
        <thead> 
          <tr class="bg-gray-200 dark:bg-dark-1"> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Patient Name</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Phone Number</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Visites</th> 
            <th class="print border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
          </tr> 
        </thead> 

        <tbody> 
          <tr> 
            <td class="border-b dark:border-dark-5">1</td> 
            <td class="border-b dark:border-dark-5">Angelina</td> 
            <td class="border-b dark:border-dark-5">01000000001</td> 
            <td class="border-b dark:border-dark-5">4</td> 

            <td class="print border-b dark:border-dark-5 whitespace-no-wrap">

              <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white tooltip" title="Financial Report"> 
                <a href="patient-financial-report-cash.php" class="w-5 h-5 flex items-center justify-center"> 
                  <i data-feather="dollar-sign" class="w-4 h-4"></i> 
                </a> 
              </button>

              <button class="button px-2 mr-1 mb-2 bg-theme-12 text-white tooltip" title="Patient History ">            
                <a href="patient-history-with-visites.php" class="w-5 h-5 flex items-center justify-center"> 
                  <i data-feather="hard-drive" class="w-4 h-4"></i> 
                </a> 
              </button>

              <button class="button px-2 mr-1 mb-2 bg-theme-1 text-white tooltip" title="Add New Reservation">            
                <a href="javascript:;" data-toggle="modal" data-target="#add-reservation" class="w-5 h-5 flex items-center justify-center"> 
                  <i data-feather="plus" class="w-4 h-4"></i> 
                </a> 
              </button>

              <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white tooltip" title="Edit"> 
                <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                  <i data-feather="edit" class="w-4 h-4"></i> 
                </a> 
              </button>

              <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white tooltip" title="Delete"> 
                <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                  <i data-feather="trash" class="w-4 h-4"></i> 
                </a> 
              </button>

            </td> 

          </tr>

          <tr> 
            <td class="border-b dark:border-dark-5">2</td> 
            <td class="border-b dark:border-dark-5">Name 2</td> 
            <td class="border-b dark:border-dark-5">01000000002</td> 
            <td class="border-b dark:border-dark-5">3</td> 

            <td class="print border-b dark:border-dark-5 whitespace-no-wrap">

              <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white tooltip" title="Financial Report"> 
                <a href="patient-financial-report-cash.php" class="w-5 h-5 flex items-center justify-center"> 
                  <i data-feather="dollar-sign" class="w-4 h-4"></i> 
                </a> 
              </button>

              <button class="button px-2 mr-1 mb-2 bg-theme-12 text-white tooltip" title="Patient History ">            
                <a href="patient-history-with-visites.php" class="w-5 h-5 flex items-center justify-center"> 
                  <i data-feather="hard-drive" class="w-4 h-4"></i> 
                </a> 
              </button>

              <button class="button px-2 mr-1 mb-2 bg-theme-1 text-white tooltip" title="Add New Reservation">            
                <a href="javascript:;" data-toggle="modal" data-target="#add-reservation" class="w-5 h-5 flex items-center justify-center"> 
                  <i data-feather="plus" class="w-4 h-4"></i> 
                </a> 
              </button>

              <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white tooltip" title="Edit"> 
                <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                  <i data-feather="edit" class="w-4 h-4"></i> 
                </a> 
              </button>

              <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white tooltip" title="Delete"> 
                <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                  <i data-feather="trash" class="w-4 h-4"></i> 
                </a> 
              </button>

            </td> 

          </tr>

        </tbody> 
      </table>

      <!-- START:: PAGINATION -->
      <div class="print intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
        <ul class="pagination">
          <li>
            <a class="pagination__link" href=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left w-4 h-4"><polyline points="15 18 9 12 15 6"></polyline></svg> </a>
          </li>

          <li> <a class="pagination__link" href="">1</a> </li>
          <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
          <li> <a class="pagination__link" href="">3</a> </li>

          <li>
            <a class="pagination__link" href=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right w-4 h-4"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
          </li>
        </ul>
      </div>
      <!-- START:: PAGINATION -->

      <!-- START:: ADD RESERVATION MODAL -->
      <div class="modal" id="add-reservation">
        <div class="modal__content modal__content--xl px-10 py-5"> 
          <div class="intro-y flex items-center pt-2 mb-5 h-10">
            <h2 class="text-lg font-medium text-gray-600 truncate mr-5">Patients Report</h2>
          </div>

          <form class="grid grid-cols-12 gap-12">
            <div class="col-span-12 lg:flex-row pr-3 pl-3 -mx-5">
              <label class="text-gray-600 mb-3 text-lg">Clinic</label>
              <select data-search="true" class="tail-select w-full">
                <option value="0">Clinic 1</option>
                <option value="1">Clinic 2</option>
                <option value="2">Clinic 3</option>
              </select>  
            </div>

            <div class="col-span-12 lg:flex-row pr-3 pl-3 -mx-5">
              <label class="text-gray-600 mb-3 text-lg">Date</label>
              <input type="text" class="input w-full border mt-2" placeholder="Patient Name"> 
            </div>

            <div class="col-span-12 lg:flex-row pr-3 pl-3 -mx-5">
              <label class="text-gray-600 mb-3 text-lg">Time</label>
              <input type="time" class="input w-full border mt-2"> 
            </div>

            <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
              <button type="submit" class="button w-40 mr-5 ml-5 flex items-center justify-center bg-theme-1 text-white"> 
                <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i>
                Save
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- END:: ADD RESERVATION MODAL -->

    </div> 

  </div>
  <!-- END: Table Data -->
</div>

<?php include("layouts/footer.php") ?>