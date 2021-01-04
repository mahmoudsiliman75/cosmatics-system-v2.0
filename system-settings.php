<?php include("layouts/header.php") ?>

	<!-- BEGIN: Profile Info -->

	<form id="profile" class="grid grid-cols-12 gap-6 mt-5">

      <div class="intro-y box px-5 pt-5 mt-5 col-span-12">

        <div class="px-5 pt-5 mt-5 col-span-12">
          <div class="flex flex-col lg:flex-row pb-5 -mx-5">

            <div class="flex flex-1 flex-wrap justify-center px-5 items-center justify-center">

              <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                <img alt="User Img" class="rounded-full image-preview" src="dist/images/profile-7.jpg">
              </div>

              <div class="w-full ml-5">
                <div class="w-full flex justify-center truncate sm:whitespace-normal font-medium text-lg mt-3">System Logo</div>
              </div>

              <input class="mt-8 mr-3 ml-3 image truncate" type="file" > 
              <button type="submit" class="col-span-2 button mr-2 mt-5 flex items-center justify-center bg-theme-1 text-white"> 
                <i data-feather="save" class="w-4 h-4"></i> 
              </button> 
            </div>

          </div>
        </div>

      </div>

      <div class="col-span-12 grid grid-cols-12 gap-6">

        <!-- START:: SETTING CARD -->
        <div class="intro-y box px-5 pt-5 mt-5 col-span-12 lg:col-span-6">
          <div class="col-span-12 grid grid-cols-12 gap-6">

            <!-- START:: SETTING INPUT FIELD -->
            <div div class="col-span-12 lg:flex-row p-5 -mx-5">
              <label class="text-gray-600 mb-3 text-lg">Where Did You Hear About Us</label>
              <div class="grid grid-cols-12 gap-6">
                <input type="text" class="col-span-10 input w-full border mt-2" placeholder="Where Did You Hear About Us">
                <button type="submit" class="col-span-2 button mr-2 mt-2 flex items-center justify-center bg-theme-1 text-white"> 
                  <i data-feather="save" class="w-4 h-4"></i> 
                </button> 
              </div>
            </div>
            <!-- END:: SETTING INPUT FIELD -->

            <!-- START:: SETTING TABLE -->
            <table class="table col-span-12"> 
              <thead> 
                <tr class="bg-gray-200 dark:bg-dark-1"> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">The Way</th> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">The count</th>  
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
                </tr> 
              </thead> 

              <tbody> 
                <tr> 
                  <td class="border-b dark:border-dark-5">Social Media</td> 
                  <td class="border-b dark:border-dark-5">100</td> 
                  <td class="border-b dark:border-dark-5">
                    <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white tooltip" title="Delete"> 
                      <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                        <i data-feather="trash" class="w-4 h-4"></i> 
                      </a> 
                    </button>
                  </td> 
                </tr>

              </tbody> 
            </table>
            <!-- END:: SETTING TABLE -->
          </div>
        </div>
        <!-- END:: SETTING CARD -->

        <!-- START:: SETTING CARD -->
        <div class="intro-y box px-5 pt-5 mt-5 col-span-12 lg:col-span-6">
          <div class="col-span-12 grid grid-cols-12 gap-6">

            <!-- START:: SETTING INPUT FIELD -->
            <div div class="col-span-12 lg:flex-row p-5 -mx-5">
              <label class="text-gray-600 mb-3 text-lg">Sergury Types</label>
              <div class="grid grid-cols-12 gap-6">
                <input type="text" class="col-span-10 input w-full border mt-2" placeholder="Sergury Types">
                <button type="submit" class="col-span-2 button mr-2 mt-2 flex items-center justify-center bg-theme-1 text-white"> 
                  <i data-feather="save" class="w-4 h-4"></i> 
                </button> 
              </div>
            </div>
            <!-- END:: SETTING INPUT FIELD -->

            <!-- START:: SETTING TABLE -->
            <table class="table col-span-12"> 
              <thead> 
                <tr class="bg-gray-200 dark:bg-dark-1"> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Sergury</th> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">The count</th>  
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
                </tr> 
              </thead> 

              <tbody> 
                <tr> 
                  <td class="border-b dark:border-dark-5">Type 1</td> 
                  <td class="border-b dark:border-dark-5">500</td> 
                  <td class="border-b dark:border-dark-5">
                    <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white tooltip" title="Delete"> 
                      <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                        <i data-feather="trash" class="w-4 h-4"></i> 
                      </a> 
                    </button>
                  </td> 
                </tr>

              </tbody> 
            </table>
            <!-- END:: SETTING TABLE -->
          </div>
        </div>
        <!-- END:: SETTING CARD -->

        <!-- START:: SETTING CARD -->
        <div class="intro-y box px-5 pt-5 mt-5 col-span-12 lg:col-span-6">
          <div class="col-span-12 grid grid-cols-12 gap-6">

            <!-- START:: SETTING INPUT FIELD -->
            <div div class="col-span-12 lg:flex-row p-5 -mx-5">
              <label class="text-gray-600 mb-3 text-lg">Chronic Disease</label>
              <div class="grid grid-cols-12 gap-6">
                <input type="text" class="col-span-10 input w-full border mt-2" placeholder="Chronic Disease">
                <button type="submit" class="col-span-2 button mr-2 mt-2 flex items-center justify-center bg-theme-1 text-white"> 
                  <i data-feather="save" class="w-4 h-4"></i> 
                </button> 
              </div>
            </div>
            <!-- END:: SETTING INPUT FIELD -->

            <!-- START:: SETTING TABLE -->
            <table class="table col-span-12"> 
              <thead> 
                <tr class="bg-gray-200 dark:bg-dark-1"> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Disease</th> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">The count</th>  
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
                </tr> 
              </thead> 

              <tbody> 
                <tr> 
                  <td class="border-b dark:border-dark-5">Chronic Disease 1</td> 
                  <td class="border-b dark:border-dark-5">4</td> 
                  <td class="border-b dark:border-dark-5">
                    <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white tooltip" title="Delete"> 
                      <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                        <i data-feather="trash" class="w-4 h-4"></i> 
                      </a> 
                    </button>
                  </td> 
                </tr>

              </tbody> 
            </table>
            <!-- END:: SETTING TABLE -->
          </div>
        </div>
        <!-- END:: SETTING CARD -->

        <!-- START:: SETTING CARD -->
        <div class="intro-y box px-5 pt-5 mt-5 col-span-12 lg:col-span-6">
          <div class="col-span-12 grid grid-cols-12 gap-6">

            <!-- START:: SETTING INPUT FIELD -->
            <div div class="col-span-12 lg:flex-row p-5 -mx-5">
              <label class="text-gray-600 mb-3 text-lg">Patient Complaints</label>
              <div class="grid grid-cols-12 gap-6">
                <input type="text" class="col-span-10 input w-full border mt-2" placeholder="Patient Complaints">
                <button type="submit" class="col-span-2 button mr-2 mt-2 flex items-center justify-center bg-theme-1 text-white"> 
                  <i data-feather="save" class="w-4 h-4"></i> 
                </button> 
              </div>
            </div>
            <!-- END:: SETTING INPUT FIELD -->

            <!-- START:: SETTING TABLE -->
            <table class="table col-span-12"> 
              <thead> 
                <tr class="bg-gray-200 dark:bg-dark-1"> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Complaints</th> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">The count</th>  
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
                </tr> 
              </thead> 

              <tbody> 
                <tr> 
                  <td class="border-b dark:border-dark-5">Complaints 1</td> 
                  <td class="border-b dark:border-dark-5">0</td> 
                  <td class="border-b dark:border-dark-5">
                    <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white tooltip" title="Delete"> 
                      <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                        <i data-feather="trash" class="w-4 h-4"></i> 
                      </a> 
                    </button>
                  </td> 
                </tr>

              </tbody> 
            </table>
            <!-- END:: SETTING TABLE -->
          </div>
        </div>
        <!-- END:: SETTING CARD -->

        <!-- START:: SETTING CARD -->
        <div class="intro-y box px-5 pt-5 mt-5 col-span-12 lg:col-span-6">
          <div class="col-span-12 grid grid-cols-12 gap-6">

            <!-- START:: SETTING INPUT FIELD -->
            <div div class="col-span-12 lg:flex-row p-5 -mx-5">
              <label class="text-gray-600 mb-3 text-lg">Examinations</label>
              <div class="grid grid-cols-12 gap-6">
                <input type="text" class="col-span-10 input w-full border mt-2" placeholder="Examinations">
                <button type="submit" class="col-span-2 button mr-2 mt-2 flex items-center justify-center bg-theme-1 text-white"> 
                  <i data-feather="save" class="w-4 h-4"></i> 
                </button> 
              </div>
            </div>
            <!-- END:: SETTING INPUT FIELD -->

            <!-- START:: SETTING TABLE -->
            <table class="table col-span-12"> 
              <thead> 
                <tr class="bg-gray-200 dark:bg-dark-1"> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Examinations</th> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">The count</th>  
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
                </tr> 
              </thead> 

              <tbody> 
                <tr> 
                  <td class="border-b dark:border-dark-5">Examinations 1</td> 
                  <td class="border-b dark:border-dark-5">60</td> 
                  <td class="border-b dark:border-dark-5">
                    <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white tooltip" title="Delete"> 
                      <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                        <i data-feather="trash" class="w-4 h-4"></i> 
                      </a> 
                    </button>
                  </td> 
                </tr>

              </tbody> 
            </table>
            <!-- END:: SETTING TABLE -->
          </div>
        </div>
        <!-- END:: SETTING CARD -->

        <!-- START:: SETTING CARD -->
        <div class="intro-y box px-5 pt-5 mt-5 col-span-12 lg:col-span-6">
          <div class="col-span-12 grid grid-cols-12 gap-6">

            <!-- START:: SETTING INPUT FIELD -->
            <div div class="col-span-12 lg:flex-row p-5 -mx-5">
              <label class="text-gray-600 mb-3 text-lg">Diagnosis </label>
              <div class="grid grid-cols-12 gap-6">
                <input type="text" class="col-span-10 input w-full border mt-2" placeholder="Diagnosis ">
                <button type="submit" class="col-span-2 button mr-2 mt-2 flex items-center justify-center bg-theme-1 text-white"> 
                  <i data-feather="save" class="w-4 h-4"></i> 
                </button> 
              </div>
            </div>
            <!-- END:: SETTING INPUT FIELD -->

            <!-- START:: SETTING TABLE -->
            <table class="table col-span-12"> 
              <thead> 
                <tr class="bg-gray-200 dark:bg-dark-1"> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Diagnosis </th> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">The count</th>  
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
                </tr> 
              </thead> 

              <tbody> 
                <tr> 
                  <td class="border-b dark:border-dark-5">Diagnosis 1</td> 
                  <td class="border-b dark:border-dark-5">8</td> 
                  <td class="border-b dark:border-dark-5">
                    <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white tooltip" title="Delete"> 
                      <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                        <i data-feather="trash" class="w-4 h-4"></i> 
                      </a> 
                    </button>
                  </td> 
                </tr>

              </tbody> 
            </table>
            <!-- END:: SETTING TABLE -->
          </div>
        </div>
        <!-- END:: SETTING CARD -->

        <!-- START:: SETTING CARD -->
        <div class="intro-y box px-5 pt-5 mt-5 col-span-12 lg:col-span-6">
          <div class="col-span-12 grid grid-cols-12 gap-6">

            <!-- START:: SETTING INPUT FIELD -->
            <div div class="col-span-12 lg:flex-row p-5 -mx-5">
              <label class="text-gray-600 mb-3 text-lg">Plan Items </label>
              <div class="grid grid-cols-12 gap-6">
                <input type="text" class="col-span-10 input w-full border mt-2" placeholder="Plan Items ">
                <button type="submit" class="col-span-2 button mr-2 mt-2 flex items-center justify-center bg-theme-1 text-white"> 
                  <i data-feather="save" class="w-4 h-4"></i> 
                </button> 
              </div>
            </div>
            <!-- END:: SETTING INPUT FIELD -->

            <!-- START:: SETTING TABLE -->
            <table class="table col-span-12"> 
              <thead> 
                <tr class="bg-gray-200 dark:bg-dark-1"> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Plan Items </th> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">The count</th>  
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
                </tr> 
              </thead> 

              <tbody> 
                <tr> 
                  <td class="border-b dark:border-dark-5">Item 1</td> 
                  <td class="border-b dark:border-dark-5">56</td> 
                  <td class="border-b dark:border-dark-5">
                    <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white tooltip" title="Delete"> 
                      <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                        <i data-feather="trash" class="w-4 h-4"></i> 
                      </a> 
                    </button>
                  </td> 
                </tr>

              </tbody> 
            </table>
            <!-- END:: SETTING TABLE -->
          </div>
        </div>
        <!-- END:: SETTING CARD -->

        <!-- START:: SETTING CARD -->
        <div class="intro-y box px-5 pt-5 mt-5 col-span-12 lg:col-span-6">
          <div class="col-span-12 grid grid-cols-12 gap-6">

            <!-- START:: SETTING INPUT FIELD -->
            <div div class="col-span-12 lg:flex-row p-5 -mx-5">
              <label class="text-gray-600 mb-3 text-lg">Requests </label>
              <div class="grid grid-cols-12 gap-6">
                <input type="text" class="col-span-10 input w-full border mt-2" placeholder="Requests ">
                <button type="submit" class="col-span-2 button mr-2 mt-2 flex items-center justify-center bg-theme-1 text-white"> 
                  <i data-feather="save" class="w-4 h-4"></i> 
                </button> 
              </div>
            </div>
            <!-- END:: SETTING INPUT FIELD -->

            <!-- START:: SETTING TABLE -->
            <table class="table col-span-12"> 
              <thead> 
                <tr class="bg-gray-200 dark:bg-dark-1"> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Requests </th> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">The count</th>  
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
                </tr> 
              </thead> 

              <tbody> 
                <tr> 
                  <td class="border-b dark:border-dark-5">Request 1</td> 
                  <td class="border-b dark:border-dark-5">56</td> 
                  <td class="border-b dark:border-dark-5">
                    <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white tooltip" title="Delete"> 
                      <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                        <i data-feather="trash" class="w-4 h-4"></i> 
                      </a> 
                    </button>
                  </td> 
                </tr>

              </tbody> 
            </table>
            <!-- END:: SETTING TABLE -->
          </div>
        </div>
        <!-- END:: SETTING CARD -->

        <!-- START:: SETTING CARD -->
        <div class="intro-y box px-5 pt-5 mt-5 col-span-12 lg:col-span-6">
          <div class="col-span-12 grid grid-cols-12 gap-6">

            <!-- START:: SETTING INPUT FIELD -->
            <div div class="col-span-12 lg:flex-row p-5 -mx-5">
              <label class="text-gray-600 mb-3 text-lg">Procedures  </label>
              <div class="grid grid-cols-12 gap-6">
                <input type="text" class="col-span-10 input w-full border mt-2" placeholder="Procedures  ">
                <button type="submit" class="col-span-2 button mr-2 mt-2 flex items-center justify-center bg-theme-1 text-white"> 
                  <i data-feather="save" class="w-4 h-4"></i> 
                </button> 
              </div>
            </div>
            <!-- END:: SETTING INPUT FIELD -->

            <!-- START:: SETTING TABLE -->
            <table class="table col-span-12"> 
              <thead> 
                <tr class="bg-gray-200 dark:bg-dark-1"> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Procedures  </th> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">The count</th>  
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
                </tr> 
              </thead> 

              <tbody> 
                <tr> 
                  <td class="border-b dark:border-dark-5">Procedur 1</td> 
                  <td class="border-b dark:border-dark-5">56</td> 
                  <td class="border-b dark:border-dark-5">
                    <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white tooltip" title="Delete"> 
                      <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                        <i data-feather="trash" class="w-4 h-4"></i> 
                      </a> 
                    </button>
                  </td> 
                </tr>

              </tbody> 
            </table>
            <!-- END:: SETTING TABLE -->
          </div>
        </div>
        <!-- END:: SETTING CARD -->

        <!-- START:: SETTING CARD -->
        <div class="intro-y box px-5 pt-5 mt-5 col-span-12 lg:col-span-6">
          <div class="col-span-12 grid grid-cols-12 gap-6">

            <!-- START:: SETTING INPUT FIELD -->
            <div div class="col-span-12 lg:flex-row p-5 -mx-5">
              <label class="text-gray-600 mb-3 text-lg">Assistants </label>
              <div class="grid grid-cols-12 gap-6">
                <input type="text" class="col-span-10 input w-full border mt-2" placeholder="Assistants ">
                <button type="submit" class="col-span-2 button mr-2 mt-2 flex items-center justify-center bg-theme-1 text-white"> 
                  <i data-feather="save" class="w-4 h-4"></i> 
                </button> 
              </div>
            </div>
            <!-- END:: SETTING INPUT FIELD -->

            <!-- START:: SETTING TABLE -->
            <table class="table col-span-12"> 
              <thead> 
                <tr class="bg-gray-200 dark:bg-dark-1"> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Assistants </th> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">The count</th>  
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
                </tr> 
              </thead> 

              <tbody> 
                <tr> 
                  <td class="border-b dark:border-dark-5">Assistant 1</td> 
                  <td class="border-b dark:border-dark-5">43</td> 
                  <td class="border-b dark:border-dark-5">
                    <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white tooltip" title="Delete"> 
                      <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                        <i data-feather="trash" class="w-4 h-4"></i> 
                      </a> 
                    </button>
                  </td> 
                </tr>

              </tbody> 
            </table>
            <!-- END:: SETTING TABLE -->
          </div>
        </div>
        <!-- END:: SETTING CARD -->

        <!-- START:: SETTING CARD -->
        <div class="intro-y box px-5 pt-5 mt-5 col-span-12 lg:col-span-6">
          <div class="col-span-12 grid grid-cols-12 gap-6">

            <!-- START:: SETTING INPUT FIELD -->
            <div div class="col-span-12 lg:flex-row p-5 -mx-5">
              <label class="text-gray-600 mb-3 text-lg">Types Of Anesthesia</label>
              <div class="grid grid-cols-12 gap-6">
                <input type="text" class="col-span-10 input w-full border mt-2" placeholder="Types Of Anesthesia">
                <button type="submit" class="col-span-2 button mr-2 mt-2 flex items-center justify-center bg-theme-1 text-white"> 
                  <i data-feather="save" class="w-4 h-4"></i> 
                </button> 
              </div>
            </div>
            <!-- END:: SETTING INPUT FIELD -->

            <!-- START:: SETTING TABLE -->
            <table class="table col-span-12"> 
              <thead> 
                <tr class="bg-gray-200 dark:bg-dark-1"> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Types Of Anesthesia</th> 
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">The count</th>  
                  <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
                </tr> 
              </thead> 

              <tbody> 
                <tr> 
                  <td class="border-b dark:border-dark-5">Type 1</td> 
                  <td class="border-b dark:border-dark-5">20</td> 
                  <td class="border-b dark:border-dark-5">
                    <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white tooltip" title="Delete"> 
                      <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                        <i data-feather="trash" class="w-4 h-4"></i> 
                      </a> 
                    </button>
                  </td> 
                </tr>

              </tbody> 
            </table>
            <!-- END:: SETTING TABLE -->
          </div>
        </div>
        <!-- END:: SETTING CARD -->

      </div>

	</form>

<?php include("layouts/footer.php") ?>