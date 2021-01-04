<?php include("layouts/header.php") ?>

<div class="intro-y flex items-center pt-5 h-10">
  <h2 class="text-lg font-medium text-gray-600 truncate mr-5">Investigations</h2>
</div>

<div class="intro-y box px-5 pt-5 pb-5 mt-5">
  <form id="add-patient">
    <div class="grid grid-cols-12 gap-6">

        <div class="col-span-12">
          <label class="text-gray-600 mb-3 text-lg">Investigations</label>
          <select data-placeholder="Select Investigation" data-search="true" class="tail-select w-full hamboly" multiple>
            <option value="0">Investigation 1 </option>
            <option value="1">Investigation 2</option>
            <option value="2">Investigation 3</option>
            <option value="3">Investigation 4</option>
            <option value="4">Investigation 5</option>
            <option value="5">Investigation 6</option>
            <option value="6">Investigation 7</option>
          </select>
        </div>

      <div class="investigation-comments-container col-span-12 lg:flex-row px-5 -mx-5 ">
      </div>

    </div>

    <button type="submit" class="button translate-y-3 mt-5 mr-2 flex items-center justify-center bg-theme-1 text-white col-span-4"> 
      <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Save 
    </button>
  </form>



</div>

<?php include("layouts/footer.php") ?>