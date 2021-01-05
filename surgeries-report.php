<?php include("layouts/header.php") ?>

<div class="intro-y flex items-center pt-5 h-10">
  <h2 class="text-lg font-medium text-gray-600 truncate mr-5">Surgeries Report</h2>
</div>

<div class="mt-5">
  <!-- BEGIN: Table Data -->
  <div class="intro-y box pb-3" style="z-index:1">
    <div class="flex sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
    
      <div class="grid grid-cols-12 gap-6">
        <form class="print flex mr-auto col-span-12 md:col-span-6" id="tabulator-html-filter-form">

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

        <div class="flex col-span-12 md:col-span-6">
          <button type="submit" class="print print-tables button translate-y-3 mt-2 md:mt-8 ml-2 flex items-center justify-center bg-theme-1 text-white"> 
            <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Print 
          </button>
        </div>
      </div>

    </div>

    <!-- START:: LARGE SCREEN TABLE -->
    <div class="overflow-x-auto p-5 hidden lg:block"> 
      <table class="table"> 
        <thead> 
          <tr class="bg-gray-200 dark:bg-dark-1"> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Surgery Type</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Total Number</th>
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Total Patients</th>
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Total Number Of Males</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Total Number Of Females</th> 
          </tr> 
        </thead> 

        <tbody> 
          <tr> 
            <td class="border-b dark:border-dark-5">1</td> 
            <td class="border-b dark:border-dark-5">Type 1</td> 
            <td class="border-b dark:border-dark-5"> 30 </td> 
            <td class="border-b dark:border-dark-5"> 30 </td> 
            <td class="border-b dark:border-dark-5"> 5 </td>
            <td class="border-b dark:border-dark-5"> 25 </td> 
          </tr>

          <tr> 
            <td class="border-b dark:border-dark-5">2</td> 
            <td class="border-b dark:border-dark-5">Type 2</td> 
            <td class="border-b dark:border-dark-5"> 60 </td> 
            <td class="border-b dark:border-dark-5"> 60 </td> 
            <td class="border-b dark:border-dark-5"> 50 </td>
            <td class="border-b dark:border-dark-5"> 10 </td> 
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

    </div>
    <!-- END:: LARGE SCREEN TABLE -->

    <!-- START:: SMALL SCREENS TABLE -->
    <div class="overflow-x-auto p-5 lg:hidden"> 
      <table class="table home-table"> 
        <thead> 
          <tr class="bg-gray-200 dark:bg-dark-1"> 
            <th class="border-b-2 whitespace-no-wrap text-center">Surgery Data</th> 
          </tr> 
        </thead> 

        <tbody>
          <?php
            for ($i=0; $i <6 ; $i++) { 
          ?>
          <tr> 
            <td class="border-b dark:border-dark-5">
              <ul class="text-center">
                <li class="mb-2"><strong>#<?php echo ($i+1) ?></strong> Surgery Type <?php echo ($i+1) ?></li>
                <li class="mb-2"><strong>Total Number: </strong> <?php echo ($i+1) ?>0 </li>
                <li class="mb-2"><strong>Total Patient: </strong> <?php echo ($i+1) ?>0 </li>
                <li class="mb-2"><strong>Total Males: </strong> <?php echo ($i+1) ?>0 </li>
                <li class="mb-2"><strong>Total Females: </strong> 0</li>
              </ul>
            </td> 
          </tr> 
          <?php } ?>
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
    </div>
    <!-- END:: SMALL SCREENS TABLE -->

  </div>
  <!-- END: Table Data -->
</div>


<?php include("layouts/footer.php") ?>