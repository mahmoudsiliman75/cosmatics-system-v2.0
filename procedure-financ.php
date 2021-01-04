<?php include("layouts/header.php") ?>

<form>

  <div class="intro-y flex items-center pt-5 h-10">
    <h2 class="text-lg font-medium text-gray-600 truncate mr-5">Procedure Financilas</h2>
  </div>

  <div id="reservation" class="intro-y box px-5 pt-5 pb-5 mt-5">
    <div class="grid grid-cols-12 gap-6">

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="flex text-gray-600 text-lg">
          Procedure Fees
          <div class="flex items-center text-gray-700 dark:text-gray-500 ml-3"> 
            <input type="checkbox" class="input border mr-2" id="offer"> 
            <label class=" cursor-pointer select-none" for="offer">With Offer</label> 
          </div>
        </label>

        <input type="text" class="procedure-fees input w-full border" placeholder="Procedure Fees"> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Hospital Name</label>
        <select data-search="true" class="tail-select w-full">
          <option>Select Hospital Name</option>
          <option value="0">Hospital 1</option>
          <option value="1">Hospital 2</option>
          <option value="2">Hospital 3</option>
        </select> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Hospital Cost</label>
        <input type="text" class="hospital-fees input w-full border mt-2" placeholder="Hospital Cost" value='0'> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Hospital Other Fees</label>
        <input type="text" class="hospital-other input w-full border mt-2" placeholder="Hospital Other Fees" value='0'> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Payment Status</label>
        <select id="payment-status" data-search="true" class="tail-select w-full">
          <option>Select Payment Status</option>
          <option value="0"> Cash </option>
          <option value="1"> Installments </option>
        </select>  
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Paid Amount</label>
        <input type="text" class="paid-amount input w-full border" placeholder="Paid Amount" value="0"> 
      </div>

      <div id="total-fees" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg"> Total Remaining Fees </label>
        <input type="text" class="remaining-fees input w-full border" placeholder="Total Remaining Fees" value="0" disabled> 
      </div>

      <div id="number-of-monthes" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Number Of Monthes</label>
        <input type="text" class="number-of-monthes input w-full border" placeholder="Number Of Monthes" value="1"> 
      </div>


      <div id="monthly-fees" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Fees For Each Month</label>
        <input type="text" class="monthly-fees input w-full border" placeholder="Fees For Each Month" value="0" disabled> 
      </div>

      <!-- <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Payment Close</label>
        <select data-search="true" class="tail-select w-full">
          <option>Select Payment Close</option>
          <option value="0"> Option 1 </option>
          <option value="1"> Option 2 </option>
          <option value="2"> Option 3 </option>
        </select>  
      </div> -->

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Doctor Profits</label>
        <input type="text" class="total-profets input w-full border" placeholder="Doctor Profits" disabled> 
      </div>

    </div>
  </div>

  <button type="submit" class="button translate-y-3 mt-2 mr-2 flex items-center justify-center bg-theme-1 text-white col-span-4"> 
    <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Save 
  </button>

</form>



<?php include("layouts/footer.php") ?>