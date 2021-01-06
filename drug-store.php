<?php include("layouts/header.php") ?>

<div class="intro-y flex items-center pt-5 mb-3 h-10">
  <h2 class="text-lg font-medium text-gray-600 truncate mr-5"> Drugs Store</h2>
</div>

<!-- START:: ADD DRUG CATEGORY SECTION -->

<div class="intro-y box flex items-center mb-5">
  <!-- START:: ADD CATEGORY FORM -->
  <form class="print w-full p-5 grid grid-cols-12 gap-6">

    <div class="sm:flex-row items-center col-span-12 md:col-span-6 mt-2">
      <label class="text-gray-600 mb-3 text-lg">Drug Category</label>
      <input type="text" class="input w-full border" placeholder="Drug Category">
    </div>

    <div class="sm:flex-row items-center col-span-12 sm:col-span-12 md:col-span-2 mt-1">
      <button type="button" class="flex justify-center button text-center w-11 h-11 bg-theme-1 text-white mt-0 lg:mt-8 w-full">
        <i data-feather="plus" class="w-5 h-5 text-center"></i> 
        <span>Add Category</span>
      </button>
    </div>

  </form>
  <!-- END:: ADD CATEGORY FORM -->
</div>

<!-- START:: LARGE SCREENS TABLE -->
<div class="intro-y box flex items-center">
  <div class="overflow-x-auto w-full p-5 hidden lg:block"> 
    <table class="table"> 
      <thead> 
        <tr class="bg-gray-200 dark:bg-dark-1"> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Category Type</th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Drugs Amount</th> 
          <th class="print border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
        </tr> 
      </thead> 

      <tbody> 
        <tr> 
          <td class="border-b dark:border-dark-5">1</td> 
          <td class="border-b dark:border-dark-5">Category 1</td> 
          <td class="border-b dark:border-dark-5"> 2000 </td>  

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
</div>
<!-- END:: LARGE SCREENS TABL  -->

<!-- START:: SMALL SCREENS TABLE -->
<div class="intro-y box flex items-center">
  <div class="overflow-x-auto w-full p-5 lg:hidden"> 
    <table class="table home-table"> 
      <thead> 
        <tr class="bg-gray-200 dark:bg-dark-1"> 
          <th class="border-b-2 whitespace-no-wrap text-center">Category Data</th> 
        </tr> 
      </thead> 

      <tbody>
        <?php
          for ($i=0; $i <6 ; $i++) { 
        ?>
        <tr> 
          <td class="border-b dark:border-dark-5">
            <ul class="text-center">
              <li class="mb-2"><strong>#<?php echo ($i+1) ?></strong> Category <?php echo ($i+1) ?></li>
              <li class="mb-2"><strong>Drug Amount:</strong><?php echo ($i+1) ?>00</li>
              
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
</div>
<!-- END:: SMALL SCREENS TABLE -->


<!-- END:: ADD DRUG CATEGORY SECTION -->

<div class="mt-5">
  <!-- BEGIN: Table Data -->
  <div class="intro-y box pb-3" style="z-index:1">

    <form class="print p-5 grid grid-cols-12 gap-6">

      <div class="sm:flex-row items-center col-span-12 md:col-span-6 mt-2">
        <label class="text-gray-600 mb-3 text-lg">Drug Category</label>
        <select data-search="true" class="tail-select w-full">
          <option>Select An Category </option>
          <option value="0">Category 1</option>
          <option value="1">Category 2</option>
          <option value="2">Category 3</option>
        </select> 
      </div>

      <div class="sm:flex-row items-center col-span-12 md:col-span-6 mt-2">
        <label class="text-gray-600 mb-3 text-lg">Drug Name</label>
        <input type="text" class="input w-full border" placeholder="Drug Name">
      </div>

      <div class="sm:flex-row items-center col-span-12 md:col-span-6 mt-2">
        <label class="text-gray-600 mb-3 text-lg">Drug Cost</label>
        <input type="text" class="input w-full border" placeholder="Drug Cost">
      </div>

      <div class="sm:flex-row items-center col-span-12 md:col-span-6 mt-2">
        <label class="text-gray-600 mb-3 text-lg">Drug Amount</label>
        <input type="text" class="input w-full border" placeholder="Drug Amount">
      </div>

      <div class="sm:flex-row items-center col-span-12 md:col-span-6 mt-2">
        <label class="text-gray-600 mb-3 text-lg">Expiration Date</label>
        <input type="date" class="input w-full border" placeholder="Expiration Date">
      </div>

      <div class="sm:flex-row items-center col-span-12 md:col-span-6 mt-2 hidden md:block">
      </div>

      <div class="sm:flex-row items-center col-span-12 sm:col-span-12 md:col-span-2 mt-1">
        <button type="button" class="flex justify-center button text-center w-11 h-11 bg-theme-1 text-white w-full">
          <i data-feather="plus" class="w-5 h-5 text-center"></i> 
          <span>Add Drug</span>
        </button>
      </div>

    </form>

    <!-- START:: LARGE SCREENS TABLE -->
    <div class="overflow-x-auto p-5 hidden lg:block"> 
      <table class="table"> 
        <thead> 
          <tr class="bg-gray-200 dark:bg-dark-1"> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Drug Category</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Drug Name</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Drug Cost</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Drug Amount</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Ex Date</th> 
            <th class="print border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
          </tr> 
        </thead> 

        <tbody> 
          <tr> 
            <td class="border-b dark:border-dark-5">1</td> 
            <td class="border-b dark:border-dark-5">Category 1</td> 
            <td class="border-b dark:border-dark-5"> Drug 1 </td> 
            <td class="border-b dark:border-dark-5"> 300 </td> 
            <td class="border-b dark:border-dark-5"> 50 </td> 
            <td class="border-b dark:border-dark-5"> 5 - 2022 </td> 

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
                <li class="mb-2"> <strong>Drug Category: </strong> Category <?php echo ($i+1) ?></li>
                <li class="mb-2"><strong>Drug Name: </strong> Drug <?php echo ($i+1) ?></li>
                <li class="mb-2"><strong>Drug Cost:</strong><?php echo ($i+1) ?>00</li>
                <li class="mb-2"><strong>Drug Amount:</strong><?php echo ($i+1) ?>0</li>
                <li class="mb-2"><strong>Ex Date:</strong><?php echo ($i+1) ?> - 2022</li>
                
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