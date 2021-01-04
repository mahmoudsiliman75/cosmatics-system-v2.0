<?php include("layouts/header.php") ?>

<form>

  <div class="intro-y flex items-center pt-5 h-10">
    <h2 class="text-lg font-medium text-gray-600 truncate mr-5">Procedures</h2>
  </div>

  <div id="reservation" class="intro-y box px-5 pt-5 pb-5 mt-5">
    <div class="grid grid-cols-12 gap-6">

      <div class="col-span-12 md:col-span-6 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Surgery Date</label>
        <input type="date" class=" input pl-12 border w-full" data-single-mode="true" placeholder="Reservation Date">
      </div>

      <div class="col-span-12 md:col-span-6 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Procedures</label>
        <select data-placeholder="Select The Chronic Disease" data-search="true" class="chronic-diseases-selector tail-select w-full">
          <option value="0">Procedure 1 </option>
          <option value="1">Procedure 2</option>
          <option value="2">Procedure 3</option>
          <option value="3">Procedure 4</option>
          <option value="4">Procedure 5</option>
          <option value="5">Procedure 6</option>
          <option value="6">Procedure 7</option>
        </select>
      </div>

      <div class="col-span-12">
        <label class="text-gray-600 mb-3 text-lg">Main Surgent</label>
        <select data-placeholder="Select Main Surgent" data-search="true" class="surgent-selector tail-select w-full" multiple>
          <option value="0">Main Surgent 1 </option>
          <option value="1">Main Surgent 2</option>
          <option value="2">Main Surgent 3</option>
          <option value="3">Main Surgent 4</option>
          <option value="4">Main Surgent 5</option>
          <option value="5">Main Surgent 6</option>
          <option value="6">Main Surgent 7</option>
        </select>
      </div>

      <div class="main-surgent-comments-container col-span-12 lg:flex-row px-5 -mx-5 ">
      </div> 

      <div class="col-span-12">
        <label class="text-gray-600 mb-3 text-lg">Assistant</label>
        <select data-placeholder="Select Assistants" data-search="true" class="assistant-selector tail-select w-full" multiple>
          <option value="0">Assistant 1 </option>
          <option value="1">Assistant 2</option>
          <option value="2">Assistant 3</option>
          <option value="3">Assistant 4</option>
          <option value="4">Assistant 5</option>
          <option value="5">Assistant 6</option>
          <option value="6">Assistant 7</option>
        </select>
      </div>

      <div class="assistant-comments-container col-span-12 lg:flex-row px-5 -mx-5 ">
      </div> 

      <div class="col-span-12">
        <label class="text-gray-600 mb-3 text-lg">Type Of Anesthesia</label>
        <select data-placeholder="Select Type Of Anesthesia" data-search="true" class="anesthesia-selector tail-select w-full" multiple>
          <option value="0">Type 1 </option>
          <option value="1">Type 2</option>
          <option value="2">Type 3</option>
          <option value="3">Type 4</option>
          <option value="4">Type 5</option>
          <option value="5">Type 6</option>
          <option value="6">Type 7</option>
        </select>
      </div>

      <div class="anesthesia-comments-container col-span-12 lg:flex-row px-5 -mx-5 ">
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Operative Time</label>
        <input type="time" class="input w-full border mt-2"> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Operative Details</label>
        <input type="text" class="input w-full border mt-2" placeholder="Operative Details">  
      </div> 

      <div class="col-span-12 md:col-span-6 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Discharge Date</label>
        <input type="date" class=" input pl-12 border w-full" data-single-mode="true" placeholder="Discharge Date">
      </div>

      <div class="col-span-12 md:col-span-6 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Complications</label>
        <select id="complications" data-search="true" class="tail-select w-full">
          <option>Complications</option>
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select> 
      </div>

      <div id="complications-comments" class="col-span-12 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Complications Comments</label>
        <input type="text" class="input w-full border mt-2" placeholder="Complications Comments"> 
      </div>

      <div class="col-span-12 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Others</label>
        <input type="text" class="input w-full border mt-2" placeholder="Others"> 
      </div>

    </div>
  </div>

  <button type="submit" class="button translate-y-3 mt-2 mr-2 flex items-center justify-center bg-theme-1 text-white col-span-4"> 
    <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Save 
  </button>

</form>

<?php include("layouts/footer.php") ?>