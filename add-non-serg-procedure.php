<?php include("layouts/header.php") ?>

<div class="intro-y flex items-center pt-5 h-10">
  <h2 class="text-lg font-medium text-gray-600 truncate mr-5">Non Surgery Procedure</h2>
</div>

<div class="mt-5">
  <!-- BEGIN: Table Data -->
  <div class="intro-y box pb-3" style="z-index:1">

    <form class="print p-5 grid grid-cols-12 gap-6">

      <div class="sm:flex-row items-center col-span-12 md:col-span-3 mt-2">
        <label class="text-gray-600 mb-3 text-lg">Procedure</label>
        <input type="text" class="input w-full border" placeholder="Procedure">
      </div>

      <div class="sm:flex-row items-center col-span-12 md:col-span-3 mt-2">
        <label class="text-gray-600 mb-3 text-lg">Procedure Cost</label>
        <input type="text" class="input w-full border" placeholder="Procedure Cost">
      </div>

      <div class="sm:flex-row items-center col-span-12 md:col-span-3 mt-2">
        <label class="text-gray-600 mb-3 text-lg">Drug Cost</label>
        <input type="text" class="input w-full border" placeholder="Drug Cost">
      </div>

      <div class="sm:flex-row items-center col-span-12 md:col-span-3 mt-2">
        <label class="text-gray-600 mb-3 text-lg">Total Cost</label>
        <input type="text" class="input w-full border" placeholder="Total Cost">
      </div>


      <div class="sm:flex-row items-center col-span-12 sm:col-span-12 md:col-span-2 mt-1">
        <button type="button" class="flex justify-center button text-center w-11 h-11 bg-theme-1 text-white mx-2 w-full">
          <i data-feather="plus" class="w-5 h-5 text-center"></i> 
          <span>Add Procedure</span>
        </button>
      </div>

    </form>

    <!-- START:: LARGE SCREENS TABLE -->
    <div class="overflow-x-auto p-5 hidden lg:block"> 
      <table class="table"> 
        <thead> 
          <tr class="bg-gray-200 dark:bg-dark-1"> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Procedure Type</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Procedure Cost</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Drug Cost</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Total Cost</th> 
            <th class="print border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
          </tr> 
        </thead> 

        <tbody> 
          <tr> 
            <td class="border-b dark:border-dark-5">1</td> 
            <td class="border-b dark:border-dark-5">Procedure 1</td> 
            <td class="border-b dark:border-dark-5"> 60000 </td> 
            <td class="border-b dark:border-dark-5"> 10000 </td> 
            <td class="border-b dark:border-dark-5"> 50000 </td> 

            <td class="print border-b dark:border-dark-5 whitespace-no-wrap">

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

    </div>
    <!-- END:: LARGE SCREENS TABL  -->

    <!-- START:: SMALL SCREENS TABLE -->
    <div class="overflow-x-auto p-5 lg:hidden"> 
      <table class="table home-table"> 
        <thead> 
          <tr class="bg-gray-200 dark:bg-dark-1"> 
            <th class="border-b-2 whitespace-no-wrap text-center">Procedure Data</th> 
          </tr> 
        </thead> 

        <tbody>
          <?php
            for ($i=0; $i <6 ; $i++) { 
          ?>
          <tr> 
            <td class="border-b dark:border-dark-5">
              <ul class="text-center">
                <li class="mb-2"><strong>#<?php echo ($i+1) ?></strong> Procedure <?php echo ($i+1) ?></li>
                <li class="mb-2"><strong>Procedure Cost:</strong><?php echo ($i+1) ?>000</li>
                <li class="mb-2"><strong>Drug Cost:</strong><?php echo ($i+1) ?>00</li>
                <li class="mb-2"><strong>Total Cost:</strong><?php echo ($i+1) ?>00</li>
                
                <li>
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
                </li>
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