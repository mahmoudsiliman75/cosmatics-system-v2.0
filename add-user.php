<?php include("layouts/header.php") ?>

	<form id="profile" class="grid grid-cols-12 gap-6 mt-5">



      <div class="grid grid-cols-12 gap-6 intro-y box px-5 mt-5 m-0 col-span-12 sm:col-span-12 lg:col-span-12 lg:flex-row py-2 px-5">
        

        <div class="intro-y box px-5 pt-5 mt-5 col-span-12">
          <div class="flex flex-col lg:flex-row pb-5 -mx-5">

            <div class="flex flex-1 flex-wrap justify-center px-5 items-center justify-center">

              <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                <img alt="User Img" class="rounded-full image-preview" src="dist/images/profile-7.jpg">
              </div>

              <div class="w-full ml-5">
                <div class="w-full flex justify-center truncate sm:whitespace-normal font-medium text-lg mt-3">Employee Name</div>
                <div class="text-gray-600 flex justify-center">Receptionist</div>
              </div>

              <input class="mt-8 mr-3 ml-3 image" type="file" > 
            </div>

          </div>
        </div>

          <div class="col-span-12 sm:col-span-12 lg:col-span-4 lg:flex-row py-2 px-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Name</label>
            <input type="text" class="input w-full border mt-2" placeholder="Name"> 
          </div>

          <div class="col-span-12 sm:col-span-12 lg:col-span-4 lg:flex-row py-2 px-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Phone Number</label>
            <input type="text" class="input w-full border mt-2" placeholder="Phone Number"> 
          </div>

          <div class="col-span-12 sm:col-span-12 lg:col-span-4 lg:flex-row py-2 px-5 mt-2 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Role</label>
            <select data-search="true" class="tail-select w-full">
              <option>Select Role</option>
              <option value="0">Doctor</option>
              <option value="1">Receptionest</option>
            </select> 
          </div>

          <div class="col-span-12 sm:col-span-12 lg:col-span-4 lg:flex-row py-2 px-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Address</label>
            <input type="text" class="input w-full border mt-2" placeholder="Address"> 
          </div>

          <div class="col-span-12 sm:col-span-12 lg:col-span-4 lg:flex-row py-2 px-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Email</label>
            <input type="email" class="input w-full border mt-2" placeholder="Email"> 
          </div>

          <div class="col-span-12 sm:col-span-12 lg:col-span-4 lg:flex-row py-2 px-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Salary</label>
            <input type="text" class="input w-full border mt-2" placeholder="Salary"> 
          </div>

          <div class="col-span-12 sm:col-span-12 lg:col-span-4 lg:flex-row py-2 px-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Password</label>
            <input type="password" class="input w-full border mt-2" placeholder="Password"> 
          </div>

          <div class="col-span-12 sm:col-span-12 lg:col-span-4 lg:flex-row py-2 px-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Confirm Password</label>
            <input type="password" class="input w-full border mt-2" placeholder="Confirm Password"> 
          </div>

      </div>

      <button type="submit" class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-1 text-white"> 
        <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Save 
      </button>

		</div>

	</form>

<?php include("layouts/footer.php") ?>