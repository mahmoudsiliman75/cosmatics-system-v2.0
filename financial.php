<?php include("layouts/header.php") ?>

<div class="intro-y box px-5 pt-5 pb-5 mt-5 flex justify-center">
  <div class="sm:grid grid-cols-12 gap-6 md:flex justify-center">

    <div class="px-5 -mx-5 text-center col-span-6 md:col-span-2">
      <label class="text-gray-600 mb-3 text-lg">Total Expense	</label>
      <input type="text" class="input w-full border mt-2 text-center" Value="3 $" name="" disabled> 
    </div>

    <div class="px-5 -mx-5 text-center col-span-6 md:col-span-2">
      <label class="text-gray-600 mb-3 text-lg">Total Import </label>
      <input type="text" class="input w-full border mt-2 text-center" Value="5 $" name="" disabled> 
    </div>

    <div class="px-5 -mx-5 text-center col-span-6 md:col-span-2">
      <label class="text-gray-600 mb-3 text-lg">Total Day Financials </label>
      <input type="text" class="input w-full border mt-2 text-center" Value="32 $" name="" disabled> 
    </div>

    <div class="px-5 -mx-5 text-center col-span-6 md:col-span-2">
      <label class="text-gray-600 mb-3 text-lg">Total Pre-reservations</label>
      <input type="text" class="input w-full border mt-2 text-center" Value="40 $" name="" disabled> 
    </div>

    <div class="px-5 -mx-5 text-center col-span-12 md:col-span-2">
      <label class="text-gray-600 mb-3 text-lg"> General Financials </label>
      <input type="text" class="input w-full border mt-2 text-center" Value="72 $" name="" disabled> 
    </div>

  </div>
</div>

<div class="intro-y box px-5 pt-5 pb-5 mt-5">
  <div class="grid grid-cols-12 gap-6">
    <h2 class="text-gray-600 mb-2 text-xl col-span-6"> Today's Financials </h2>

    <div class="overflow-x-auto px-5 col-span-12"> 
      <table class="table"> 
        <thead> 
          <tr class="bg-gray-200 dark:bg-dark-1"> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap"> Patient Name </th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap"> Type </th>
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap"> Cost </th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Date</th> 
          </tr> 
        </thead> 

        <tbody> 
          <tr> 
            <td class="border-b dark:border-dark-5">1</td> 
            <td class="border-b dark:border-dark-5">Name 1</td> 
            <td class="border-b dark:border-dark-5"> Re-revealed </td>
            <th class="border-b dark:border-dark-5"> 10 $ </th>
            <td class="border-b dark:border-dark-5">  3-10-2020  </td> 
          </tr>

          <tr> 
            <td class="border-b dark:border-dark-5">2</td> 
            <td class="border-b dark:border-dark-5">Name 2</td> 
            <td class="border-b dark:border-dark-5"> Revealed </td>
            <th class="border-b dark:border-dark-5"> 20 $ </th>
            <td class="border-b dark:border-dark-5"> 3-10-2020 </td> 
          </tr> 

        </tbody> 
      </table> 

      <div class="grid grid-cols-12 gap-6">

        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pl-5 pr-5 -mx-5">
          <label class="text-gray-600 mb-3 text-lg">Total</label>
          <input type="text" class="input w-full border mt-2" Value="32 $" name="patient-age" disabled> 
        </div>

          <div class="text-center col-span-6 mt-8 text-right"> 
            <a href="javascript:;" data-toggle="modal" data-target="#button-modal-preview" class="button inline-block bg-theme-1 text-white mt-1"> Expenses & Imports </a> 
          </div>
          <div class="modal" id="button-modal-preview">
            <div class="modal__content relative w-3/6"> 
              <a data-dismiss="modal" href="javascript:;" class="absolute right-0 top-0 mt-3 mr-3"> 
                <i data-feather="x" class="w-8 h-8 text-gray-500"></i> 
              </a>
              <div class="p-5 text-center">
                
                <form class="mt-6">
                  <div class="grid grid-cols-12 gap-6">
                  
                    <div class="col-span-6 pl-5 pr-5 -mx-5">
                      <label class="text-gray-600 mb-3 text-lg"> Expenses </label>
                      <input type="text" class="input w-full border mt-2" value="0" name="expenses"> 
                    </div>

                    <div class="col-span-12 sm:col-span-6 pl-5 pr-5 -mx-5">
                      <label class="text-gray-600 mb-3 text-lg">Imports</label>
                      <input type="text" class="input w-full border mt-2" Value="0" name="imports"> 
                    </div>

                    <div class="col-span-12 sm:col-span-12 lg:col-span-12 lg:flex-row px-5 -mx-5">
                      <label class="text-gray-600 mb-3 text-lg">Details</label>
                      <input type="text" class="input w-full border mt-2" placeholder="Details" name="details"> 
                    </div>

                    <div class="px-5 pb-8 text-center col-span-12 text-right">
                      <button type="submot" class="button w-24 bg-theme-1 text-white">Add</button> 
                    </div>  

                  </div>
                </form>

                <table class="table"> 
                  <thead> 
                    <tr class="bg-gray-200 dark:bg-dark-1"> 
                      <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
                      <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap"> Type </th> 
                      <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap"> Cost </th>
                      <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Details</th> 
                    </tr> 
                  </thead> 

                  <tbody> 
                    <tr> 
                      <td class="border-b dark:border-dark-5">1</td> 
                      <td class="border-b dark:border-dark-5"> Expense </td> 
                      <td class="border-b dark:border-dark-5">  3 $  </td>
                      <th class="border-b dark:border-dark-5"> The Details Will Display Here </th>
                    </tr>

                    <tr> 
                      <td class="border-b dark:border-dark-5">2</td> 
                      <td class="border-b dark:border-dark-5">Import</td> 
                      <td class="border-b dark:border-dark-5">  5 $ </td>
                      <th class="border-b dark:border-dark-5"> The Details Will Display Here </th>
                    </tr> 

                  </tbody> 
                </table> 

              </div>
            </div>
          </div>

      </div>
    </div>



  </div>
</div>

<div class="intro-y box px-5 pt-5 pb-5 mt-5">
  <div class="grid grid-cols-12 gap-6">
    <h2 class="text-gray-600 mb-2 text-xl col-span-6"> Pre-reservations Financials </h2>

    <div class="overflow-x-auto px-5 col-span-12"> 
      <table class="table"> 
        <thead> 
          <tr class="bg-gray-200 dark:bg-dark-1"> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap"> Patient Name </th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap"> Type </th>
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap"> Cost </th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Date</th> 
          </tr> 
        </thead> 

        <tbody> 
          <tr> 
            <td class="border-b dark:border-dark-5">1</td> 
            <td class="border-b dark:border-dark-5">Name 1</td> 
            <td class="border-b dark:border-dark-5"> Revealed </td>
            <th class="border-b dark:border-dark-5"> 20 $ </th>
            <td class="border-b dark:border-dark-5">  4-12-2020  </td> 
          </tr>

          <tr> 
            <td class="border-b dark:border-dark-5">2</td> 
            <td class="border-b dark:border-dark-5">Name 2</td> 
            <td class="border-b dark:border-dark-5"> Revealed </td>
            <th class="border-b dark:border-dark-5"> 20 $ </th>
            <td class="border-b dark:border-dark-5"> 15-12-2020 </td> 
          </tr> 

        </tbody> 
      </table> 

      <div class="grid grid-cols-12 gap-6">

        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pl-5 pr-5 -mx-5">
          <label class="text-gray-600 mb-3 text-lg">Total Pre-reservations</label>
          <input type="text" class="input w-full border mt-2" Value="40 $" name="total-pre-reservations" disabled> 
        </div>

      </div>
    </div>

  </div>
</div>

<?php include("layouts/footer.php") ?>