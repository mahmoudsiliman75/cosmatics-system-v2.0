<?php include("layouts/header.php") ?>

<div class="intro-y flex items-center pt-5 h-10">
  <h2 class="text-lg font-medium text-gray-600 truncate mr-5">Visites</h2>
</div>

<div class="print intro-y box px-5 pt-5 pb-5 mt-5 mb-5">

  <form class="grid grid-cols-12 gap-6">

    <div class="col-span-12 md:col-span-6 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
      <label class="text-gray-600 mb-3 text-lg">Patient Name</label>
      <input type="text" class=" input pl-12 border w-full"placeholder="Visite Details">
    </div>

    <div class="col-span-12 md:col-span-6 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
      <label class="text-gray-600 mb-3 text-lg">Visite Date</label>
      <input type="date" class=" input pl-12 border w-full" data-single-mode="true">
    </div>

    <div class="col-span-12 md:col-span-6 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
      <label class="text-gray-600 mb-3 text-lg">Visite Details</label>
      <input type="text" class=" input pl-12 border w-full"placeholder="Visite Details">
    </div>

    <div class="col-span-12 md:col-span-6 lg:flex-row pr-3 pl-3 -mx-5">
      <label class="text-gray-600 mb-3 text-lg">Patient Photo</label>
      <input type="file" class="input w-full border mt-2 p-1"> 
    </div>

    <button type="submit" class="col-span-2 button translate-y-3 mt-2 mr-2 flex items-center justify-center bg-theme-1 text-white"> 
      <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Save 
    </button>

  </form>

</div>

<div class="intro-y box px-5 pt-5 pb-5 mt-5 mb-5">
  <div class="overflow-x-auto p-5"> 
    <button type="submit" class="print print-tables button translate-y-3 my-3 mr-2 flex items-center justify-center bg-theme-1 text-white col-span-4"> 
      <i data-feather="printer" class="w-4 h-4 mr-2  ml-2"></i> Print 
    </button>
    <table class="table"> 
      <thead> 
        <tr class="bg-gray-200 dark:bg-dark-1"> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Patient Name</th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Visites Dates</th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Visites Docs</th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Visites Details</th> 
        </tr> 
      </thead> 

      <tbody> 
        <tr> 
          <td class="border-b dark:border-dark-5">1</td> 
          <td class="border-b dark:border-dark-5">Name 1</td> 
          <td class="border-b dark:border-dark-5">24 - 12 - 2020</td> 
          <td class="border-b dark:border-dark-5">Docs Names</td> 
          <td class="border-b dark:border-dark-5">Bla Bla Bla Bla Bla Bla</td> 
        </tr>

      </tbody> 
    </table> 

    <!-- START:: PAGINATION -->
    <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
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

<?php include("layouts/footer.php") ?>