<?php include("layouts/header.php") ?>

<form>

  <div class="intro-y flex items-center pt-5 h-10">
    <h2 class="text-lg font-medium text-gray-600 truncate mr-5">New Reservation ( Patient Basic Info )</h2>
  </div>

  <div id="reservation" class="intro-y box px-5 pt-5 pb-5 mt-5">
    <div class="grid grid-cols-12 gap-6">

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Where Did You Hear About Us</label>
        <select data-search="true" class="tail-select w-full">
          <option>Select An Option </option>
          <option value="0">Option 1</option>
          <option value="1">Option 2</option>
          <option value="2">Option 3</option>
        </select> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Clinic</label>
        <select data-search="true" class="tail-select w-full">
          <option value="0">Clinic 1</option>
          <option value="1">Clinic 2</option>
          <option value="2">Clinic 3</option>
        </select>  
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Reservation Date</label>
        <input type="date" class=" input pl-12 border w-full" data-single-mode="true" placeholder="Reservation Date">
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Reservation Time</label>
        <input type="time" class="input w-full border mt-2"> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Patient Photo</label>
        <input type="file" class="input w-full border mt-2 p-1"> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Patient Name</label>
        <input type="text" class="input w-full border mt-2" placeholder="Patient Name"> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Date Of Birth</label>
        <input type="date" class=" input pl-12 border w-full" data-single-mode="true" placeholder="Reservation Date">
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Gender</label>
        <select data-search="true" class="tail-select w-full">
          <option>Select Gender</option>
          <option value="2">Male</option>
          <option value="3">Female</option>
        </select> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Job Title</label>
        <input type="text" class="input w-full border mt-2" placeholder="Patient Name"> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Marital Status</label>
        <select id="marital-status" data-search="true" class="tail-select w-full">
          <option>Select Marital Status</option>
          <option value="0">Married</option>
          <option value="1">Not Married</option>
        </select> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Phone Number</label>
        <input type="tel" class="input w-full border mt-2" placeholder="Phone Number"> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Another Phone Number</label>
        <input type="tel" class="input w-full border mt-2" placeholder="Another Phone Number"> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Email</label>
        <input type="email" class="input w-full border mt-2" placeholder="Address"> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Country</label>
        <select data-search="true" class="tail-select w-full">
          <option>Select Country</option>
          <option value="0">Country 1</option>
          <option value="1">Country 2</option>
          <option value="2">Country 3</option>
        </select> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Address</label>
        <input type="text" class="input w-full border mt-2" placeholder="Address"> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Drug Allergy</label>
        <select id="drug-allergy" data-search="true" class="tail-select w-full">
          <option>Drug Allergy</option>
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select> 
      </div>

      <div id="drug-allergy-comments" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-8 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Drug Allergy Comments</label>
        <textarea class="input w-full border mt-2" placeholder="Drug Allergy Comments" rows="4"></textarea> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Smoking</label>
        <select id="smoking" data-search="true" class="tail-select w-full">
          <option>Smoking</option>
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select> 
      </div>

      <div id="smoking-comments" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-8 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Smoking Comments</label>
        <textarea class="input w-full border mt-2" placeholder="Smoking Comments" rows="4"></textarea> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Blood Transfusion</label>
        <select id="blood-transfusion" data-search="true" class="tail-select w-full">
          <option>Blood Transfusion</option>
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select> 
      </div>

      <div id="blood-transfusion-comments" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-8 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Blood Transfusion Comments</label>
        <textarea class="input w-full border mt-2" placeholder="Blood Transfusion Comments" rows="4"></textarea> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Alcoholic</label>
        <select id="alcoholic" data-search="true" class="tail-select w-full">
          <option>Alcoholic</option>
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select> 
      </div>

      <div id="alcoholic-comments" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-8 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Alcoholic Comments</label>
        <textarea class="input w-full border mt-2" placeholder="Alcoholic Comments" rows="4"></textarea> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Previous Sergeries</label>
        <select id="prev-sergeries" data-search="true" class="tail-select w-full">
          <option>Previous Sergeries</option>
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select> 
      </div>

      <div id="prev-sergeries-comments" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-8 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Previous Sergeries Comments</label>
        <textarea class="input w-full border mt-2" placeholder="Previous Sergeries Comments" rows="4"></textarea> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Family History</label>
        <select id="family-history" data-search="true" class="tail-select w-full">
          <option>Family History</option>
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select> 
      </div>

      <div id="family-history-comments" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-8 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Family History Comments</label>
        <textarea class="input w-full border mt-2" placeholder="Family History Comments" rows="4"></textarea> 
      </div>

      <div class="col-span-12 md:col-span-6 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Medications</label>
        <input type="text" class="input w-full border mt-2" placeholder="Medications"> 
      </div>

      <div class="col-span-12 md:col-span-6 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Patient History Comments</label>
        <input type="text" class="input w-full border mt-2" placeholder="Patient History Comments"> 
      </div>

      <div class="col-span-12">
        <label class="text-gray-600 mb-3 text-lg">Chronic Diseases</label>
        <select data-placeholder="Select The Chronic Disease" data-search="true" class="chronic-diseases-selector tail-select w-full" multiple>
          <option value="0"> Chronic Disease 1 </option>
          <option value="1">Chronic Disease 2</option>
          <option value="2">Chronic Disease 3</option>
          <option value="3">Chronic Disease 4</option>
          <option value="4">Chronic Disease 5</option>
          <option value="5">Chronic Disease 6</option>
          <option value="6">Chronic Disease 7</option>
        </select>
      </div>

      <div class="comments-container col-span-12 lg:flex-row px-5 -mx-5 ">
      </div> 

    </div>
  </div>

  <button type="submit" class="button translate-y-3 mt-2 mr-2 flex items-center justify-center bg-theme-1 text-white col-span-4"> 
    <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Save 
  </button>

</form>



<?php include("layouts/footer.php") ?>