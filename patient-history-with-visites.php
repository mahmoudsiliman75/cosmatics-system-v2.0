<?php include("layouts/header.php") ?>

<!-- START:: BASIC INFO SECTION -->
<div class="intro-y flex justify-between	 items-center pt-5 h-10">
  <h2 class="text-lg font-medium text-gray-600 truncate mr-5">Patient Report</h2>
  <div class="btns-box flex">
    <button type="submit" class="print print-tables button translate-y-3 mt-2 mr-2 flex items-center justify-center bg-theme-1 text-white col-span-4"> 
      <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Print With Visites
    </button>
    <button type="submit" class="print print-tables button translate-y-3 mt-2 mr-2 flex items-center justify-center bg-theme-1 text-white col-span-4"> 
      <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Print Without Visites
    </button>
  </div>

</div>

<div class="intro-y box px-5 pt-5 pb-5 mt-5 mb-5">

  <div class="clearFix"></div>

  <div class="print intro-y box px-5 pt-5 pb-5 mt-5 mb-5">

    <div class="grid grid-cols-12 gap-6">

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> CLinic : </span>  CLinic Name  </p>
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Name : </span>  Patient Name  </p>
      </div>

      <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Number Of Visites : </span> 10 </p>
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Marital Status : </span>  Married  </p>
      </div>

      <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Job Title  : </span>  Patient Job </p>
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3  -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Date Of Birth : </span>  11 - 5 - 1990</p>
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black">  Gender : </span> Male  </p>
      </div>

      <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Country : </span>  test@test.com </p>
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Address : </span>  Patient Address  </p>
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Phone Number : </span>  01000000001 </p>
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Phone Number : </span>  01000000002 </p>
      </div>

      <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Email : </span>  test@test.com </p>
      </div>

      <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Drug Allergy : </span>  No </p>
      </div>

      <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Smoker : </span>  No </p>
      </div>

      <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Blood Transfusion : </span>  Yes </p>
      </div>

      <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Alcoholic : </span>  No </p>
      </div>

      <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Previous Sergeries : </span>  No </p>
      </div>

      <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Family History : </span>  No </p>
      </div>

      <div class="col-span-12 md:col-span-6  lg:flex-row pr-3 pl-3 -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Medications : </span>  Bla Bla Bla Bla Bla Bla Bla </p>
      </div>

      <div class="col-span-12 md:col-span-6  lg:flex-row pr-3 pl-3 -mx-5">
        <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Patient History Comments : </span> Bla Bla Bla Bla Bla Bla Bla </p>
      </div>

      <!-- START:: TABLE -->
      <div class="overflow-x-auto col-span-12">
        <p class="text-gray-600 mb-3 pb-3 text-lg text-blue-600 font-black"> Chronic Diseases : </p> 
        <table class="table home-table"> 
          <thead class="text-center"> 
            <tr class="bg-gray-200 dark:bg-dark-1"> 
              <th class="border-b-2 whitespace-no-wrap"> Chronic Disease </th>
              <th class="border-b-2 whitespace-no-wrap"> Comments </th> 
            </tr> 
          </thead> 

          <tbody class="text-center"> 
            <tr> 
              <td class="border-b dark:border-dark-5">Chronic Disease 1</td> 
              <td class="border-b dark:border-dark-5">Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa</td>
            </tr> 

            <tr> 
              <td class="border-b dark:border-dark-5">Chronic Disease 2</td> 
              <td class="border-b dark:border-dark-5">Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa</td>
            </tr> 
          </tbody> 
        </table> 

      </div>
      <!-- END:: TABLE -->

    </div>

  </div>

  <!-- START:: PRENT MEDIA TABLE -->
  <div class="overflow-x-auto p-5 hidden show-in-print"> 
    <table class="table"> 
      <thead> 
        <tr class="bg-gray-200 dark:bg-dark-1"> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap" style="width: 24%"> #  </th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap border-r" style="width: 15%"> Patient Basic Info  </th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap"> #  </th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap"> Patient Basic Info  </th> 
        </tr> 
      </thead> 

      <tbody> 
        <tr> 
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Name </strong>
          </td>
          <td class="border-b dark:border-dark-5 border-r">
            <p> Patient Name </p>
          </td> 

          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Visites </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <p> 10 </p>
          </td>
        </tr>

        <tr>
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Visites </strong>
          </td>
          <td class="border-b dark:border-dark-5 border-r">
            <p> 10 </p>
          </td>

          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Marital Status </strong>
          </td>
          <td class="border-b dark:border-dark-5 border-r">
            <p> Marid </p>
          </td>
        </tr>

        <tr>
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Job Title </strong>
          </td>
          <td class="border-b dark:border-dark-5 border-r">
            <p> Patient Job </p>
          </td>

          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Date Of Birth </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <p> 11 - 5 - 1990 </p>
          </td>
        </tr>

        <tr>
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Gender </strong>
          </td>
          <td class="border-b dark:border-dark-5 border-r">
            <p> Male </p>
          </td>

          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Country </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <p> Patient Country </p>
          </td>
        </tr>

        <tr>
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Address </strong>
          </td>
          <td class="border-b dark:border-dark-5 border-r">
            <p> Patient Address </p>
          </td>

          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Phone Number </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <p> 01000000001 </p>
          </td>
        </tr>

        <tr>
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Another Phone Number </strong>
          </td>
          <td class="border-b dark:border-dark-5 border-r">
            <p> 01000000002 </p>
          </td>

          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Email </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <p> test@test.com </p>
          </td>
        </tr>

        <tr>
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Drug Allergy </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <p> Yes </p>
          </td>

          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black">Comments</strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <p> Drug Allergy Comments Will Display Here </p>
          </td>
        </tr>

        <tr>
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Smoker </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <p> Yes </p>
          </td>

          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Comments </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <p> Smoking Comments Will Display Here </p>
          </td>
        </tr>

        <tr>
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Blood Transfusion </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <p> Yes </p>
          </td>

          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Comments </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <p> Blood Transfusion Comments Will Display Here </p>
          </td>
        </tr>

        <tr>
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Alcoholic  </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <p> Yes </p>
          </td>

          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Comments </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <p> Alcoholic Comments Will Display Here </p>
          </td>
        </tr>

        <tr>
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Previous Sergeries  </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <p> Yes </p>
          </td>

          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Comments </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <p> Previous Sergeries Comments Will Display Here </p>
          </td>
        </tr>

        <tr>
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Family History  </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <p> Yes </p>
          </td>

          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Comments </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <p> Family History Comments Will Display Here </p>
          </td>
        </tr>

        <tr>
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Chronic Diseases  </strong>
          </td>
          <td class="border-b dark:border-dark-5" colspan="3">
            <ul>
              <li> Chronic Desease 1 </li>
              <li> Chronic Desease 2 </li>
            </ul>
          </td>
        </tr>

        <tr>
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Medications </strong>
          </td>

          <td class="border-b dark:border-dark-5" colspan="3">
            <p> Medications Will Display Here </p>
          </td>
        </tr>

        <tr>
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Patient History Comments </strong>
          </td>

          <td class="border-b dark:border-dark-5" colspan="3">
            <p> Patient History Comments Will Display Here </p>
          </td>
        </tr>

      </tbody> 
    </table> 
  </div> 
  <!-- END:: PRENT MEDIA TABLE -->
</div>
<!-- END:: BASIC INFO SECTION -->

<!-- START:: DOCTOR INFO SECTION -->
<div class="intro-y flex justify-between	 items-center pt-5 h-10">
  <h2 class="text-lg font-medium text-gray-600 truncate mr-5"> Doctor Info </h2>
</div>

<div class="print intro-y box px-5 pt-5 pb-5 mt-5 mb-5">

  <div class="clearFix"></div>

  <div class="grid grid-cols-12 gap-6">

    <!-- START:: TABLE -->
    <div class="overflow-x-auto col-span-12">
      <p class="text-gray-600 mb-3 pb-3 text-lg text-blue-600 font-black"> Patient Complaints : </p> 
      <table class="table home-table"> 
        <thead class="text-center"> 
          <tr class="bg-gray-200 dark:bg-dark-1"> 
            <th class="border-b-2 whitespace-no-wrap"> Patient Complaints </th>
            <th class="border-b-2 whitespace-no-wrap"> Comments </th> 
          </tr> 
        </thead> 

        <tbody class="text-center"> 
          <tr> 
            <td class="border-b dark:border-dark-5">Complaint 1</td> 
            <td class="border-b dark:border-dark-5">Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa</td>
          </tr> 

          <tr> 
            <td class="border-b dark:border-dark-5">Complaint 2</td> 
            <td class="border-b dark:border-dark-5">Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa</td>
          </tr> 
        </tbody> 
      </table> 

    </div>
    <!-- END:: TABLE -->

    <!-- START:: TABLE -->
    <div class="overflow-x-auto col-span-12">
      <p class="text-gray-600 mb-3 pb-3 text-lg text-blue-600 font-black"> Examination : </p> 
      <table class="table home-table"> 
        <thead class="text-center"> 
          <tr class="bg-gray-200 dark:bg-dark-1"> 
            <th class="border-b-2 whitespace-no-wrap"> Examination </th>
            <th class="border-b-2 whitespace-no-wrap"> Comments </th> 
          </tr> 
        </thead> 

        <tbody class="text-center"> 
          <tr> 
            <td class="border-b dark:border-dark-5">Examination 1</td> 
            <td class="border-b dark:border-dark-5">Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa</td>
          </tr> 

          <tr> 
            <td class="border-b dark:border-dark-5">Examination 2</td> 
            <td class="border-b dark:border-dark-5">Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa</td>
          </tr> 
        </tbody> 
      </table> 

    </div>
    <!-- END:: TABLE -->

    <div div class="col-span-12 pr-3 pl-3 mt-2 -mx-5">
      <p class="text-blue-600 font-black mb-3 pb-3 text-lg"> Examination Photos: </p>
      <div class="input border grid grid-cols-12 gap-3">

        <div class="examination-img-container col-span-2" style="height:100%">
          <img src="./dist/images/food-beverage-1.jpg" alt="">
          <div class="overlay">
            <i data-feather="x" class="remove-img w-4 h-4 mr-1 text-red-600"></i>
          </div>
        </div>

        <div class="examination-img-container col-span-2" style="height:100%">
          <img src="./dist/images/food-beverage-1.jpg" alt="">
          <div class="overlay">
            <i data-feather="x" class="remove-img w-4 h-4 mr-1 text-red-600"></i>
          </div>
        </div>

        <div class="examination-img-container col-span-2" style="height:100%">
          <img src="./dist/images/food-beverage-1.jpg" alt="">
          <div class="overlay">
            <i data-feather="x" class="remove-img w-4 h-4 mr-1 text-red-600"></i>
          </div>
        </div>

      </div>
    </div>

    <div div class="col-span-12 sm:col-span-12 md:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
      <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Patient Weight (Kg): </span> 78 kg </p>
    </div>

    <div div class="col-span-12 sm:col-span-12 md:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
      <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Patient Height (Cm) : </span> 178 cm </p>
    </div>

    <div div class="col-span-12 sm:col-span-12 md:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
      <p class="text-gray-600 mb-3 pb-3 text-lg"> <span class="text-blue-600 font-black"> Patient BMI : </span>  24.6  </p>
    </div>

    <!-- START:: TABLE -->
    <div class="overflow-x-auto col-span-12">
      <p class="text-gray-600 mb-3 pb-3 text-lg text-blue-600 font-black"> Diagnosis : </p> 
      <table class="table home-table"> 
        <thead class="text-center"> 
          <tr class="bg-gray-200 dark:bg-dark-1"> 
            <th class="border-b-2 whitespace-no-wrap"> Diagnosis </th>
            <th class="border-b-2 whitespace-no-wrap"> Comments </th> 
          </tr> 
        </thead> 

        <tbody class="text-center"> 
          <tr> 
            <td class="border-b dark:border-dark-5">Diagnose 1</td> 
            <td class="border-b dark:border-dark-5">Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa</td>
          </tr> 

          <tr> 
            <td class="border-b dark:border-dark-5">Diagnose 2</td> 
            <td class="border-b dark:border-dark-5">Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa</td>
          </tr> 
        </tbody> 
      </table> 

    </div>
    <!-- END:: TABLE -->

    <!-- START:: TABLE -->
    <div class="overflow-x-auto col-span-12">
      <p class="text-gray-600 mb-3 pb-3 text-lg text-blue-600 font-black"> Plans : </p> 
      <table class="table home-table"> 
        <thead class="text-center"> 
          <tr class="bg-gray-200 dark:bg-dark-1"> 
            <th class="border-b-2 whitespace-no-wrap"> Plans </th>
            <th class="border-b-2 whitespace-no-wrap"> Comments </th> 
          </tr> 
        </thead> 

        <tbody class="text-center"> 
          <tr> 
            <td class="border-b dark:border-dark-5">Plan 1</td> 
            <td class="border-b dark:border-dark-5">Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa</td>
          </tr> 

          <tr> 
            <td class="border-b dark:border-dark-5">Plan 2</td> 
            <td class="border-b dark:border-dark-5">Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa</td>
          </tr> 
        </tbody> 
      </table> 

    </div>
    <!-- END:: TABLE -->

  </div>

</div>

  <!-- START:: PRENT MEDIA TABLE -->
  <div class="overflow-x-auto p-5 hidden  show-in-print"> 
    <table class="table"> 
      <thead> 
        <tr class="bg-gray-200 dark:bg-dark-1"> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap" style="width: 24%"> #  </th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap border-r"> Doctor Info  </th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap"> #  </th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap"> Doctor Info  </th> 
        </tr> 
      </thead> 

      <tbody>
        <tr>
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Patient Weight (Kg) </strong>
          </td>
          <td class="border-b dark:border-dark-5 border-r">
            <p> 78 </p>
          </td>

          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Patient Height (Cm) </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <p> 178 </p>
          </td>
        </tr>

        <tr>
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Patient BMI </strong>
          </td>
          <td class="border-b dark:border-dark-5 border-r" colspan="3">
            <p> 24.6 </p>
          </td>
        </tr>

        <tr> 
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Complaints </strong>
          </td>
          <td class="border-b dark:border-dark-5 border-r">
            <ul>
              <li> Complaint 1 </li>
              <li> Complaint 2 </li>
            </ul>
          </td> 

          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Comments </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <ul>
              <li> Complaint 1 Comments Will Displaied Here </li>
              <li> Complaint 2 Comments Will Displaied Here </li>
            </ul>
          </td>
        </tr>

        <tr> 
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Examination  </strong>
          </td>
          <td class="border-b dark:border-dark-5 border-r">
            <ul>
              <li> Examination  1 </li>
              <li> Examination  2 </li>
            </ul>
          </td> 

          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Comments </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <ul>
              <li> Examination  1 Comments Will Displaied Here </li>
              <li> Examination  2 Comments Will Displaied Here </li>
            </ul>
          </td>
        </tr>

        <tr> 
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Diagnosis  </strong>
          </td>
          <td class="border-b dark:border-dark-5 border-r">
            <ul>
              <li> Diagnosis  1 </li>
              <li> Diagnosis  2 </li>
            </ul>
          </td> 

          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Comments </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <ul>
              <li> Diagnosis  1 Comments Will Displaied Here </li>
              <li> Diagnosis  2 Comments Will Displaied Here </li>
            </ul>
          </td>
        </tr>

        <tr> 
          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Plans   </strong>
          </td>
          <td class="border-b dark:border-dark-5 border-r">
            <ul>
              <li> Plans   1 </li>
              <li> Plans   2 </li>
            </ul>
          </td> 

          <td class="border-b dark:border-dark-5">
            <strong class="text-blue-600 font-black"> Comments </strong>
          </td>
          <td class="border-b dark:border-dark-5">
            <ul>
              <li> Plans   1 Comments Will Displaied Here </li>
              <li> Plans   2 Comments Will Displaied Here </li>
            </ul>
          </td>
        </tr>

      </tbody> 
    </table> 
  </div> 
  <!-- END:: PRENT MEDIA TABLE -->
<!-- END:: DOCTOR INFO SECTION -->

<!-- START:: NON SURGERY PROCCEDURES -->
<div class="intro-y flex justify-between items-center pt-5 h-10">
  <h2 class="text-lg font-medium text-gray-600 truncate mr-5">Non Surgery Procedure</h2>
</div>

<div class="print intro-y box px-5 pt-5 pb-5 mt-5 mb-5">

  <div class="clearFix"></div>

  <div class="grid grid-cols-12 gap-6">

    <div class="col-span-12 rounded-md flex items-center justify-between px-3 py-3 mb-2 border border-purple-300 text-theme-1 bg-red-100 dark:text-purple-600"> 
      <div class="flex text-base text-purple-600">
        <i data-feather="star" class="w-6 h-6 mr-2"></i> 
        Procedure 1
      </div>

      <div class="flex">
        <span class="text-base flex mx-1 py-2 px-2 rounded-full text-xs bg-purple-400 text-white cursor-pointer font-medium">
          <i data-feather="hash" class="w-6 h-6"></i> : 2
        </span> 

        <span class="text-base flex mx-1 py-2 px-2 rounded-full text-xs bg-purple-400 text-white cursor-pointer font-medium">
          <i data-feather="dollar-sign" class="w-6 h-6"></i> : 3000
        </span> 
      </div>
    </div>

    <div class="col-span-12 rounded-md flex items-center justify-between px-3 py-3 mb-2 border border-purple-300 text-theme-1 bg-red-100 dark:text-purple-600"> 
      <div class="flex text-base text-purple-600">
        <i data-feather="star" class="w-6 h-6 mr-2"></i> 
        Procedure 5
      </div>

      <div class="flex">
        <span class="text-base flex mx-1 py-2 px-2 rounded-full text-xs bg-purple-400 text-white cursor-pointer font-medium">
          <i data-feather="hash" class="w-6 h-6"></i> : 4
        </span> 

        <span class="text-base flex mx-1 py-2 px-2 rounded-full text-xs bg-purple-400 text-white cursor-pointer font-medium">
          <i data-feather="dollar-sign" class="w-6 h-6"></i> : 6000
        </span> 
      </div>
    </div>

  </div>

</div>

  <!-- START:: PRENT MEDIA TABLE -->
<div class="overflow-x-auto p-5 hidden  show-in-print"> 
  <table class="table"> 
    <thead> 
      <tr class="bg-gray-200 dark:bg-dark-1"> 
        <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
        <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Procedure</th> 
        <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Count</th> 
        <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Price</th> 
      </tr> 
    </thead> 

    <tbody> 
      <tr> 
        <td class="border-b dark:border-dark-5">1</td> 
        <td class="border-b dark:border-dark-5">Procedure 1</td> 
        <td class="border-b dark:border-dark-5">2</td> 
        <td class="border-b dark:border-dark-5">300</td> 
      </tr>

    </tbody> 
  </table> 
</div> 
  <!-- END:: PRENT MEDIA TABLE -->
<!-- END:: NON SURGERY PROCCEDURES -->

<!-- STRART:: INVESTIGATION SECTION -->
<div class="intro-y flex justify-between	 items-center pt-5 h-10">
  <h2 class="text-lg font-medium text-gray-600 truncate mr-5">Investigations</h2>
</div>

<div class="intro-y box px-5 pt-5 pb-5 mt-5 mb-5">

  <div class="grid grid-cols-12 gap-6">

    <!-- START:: TABLE -->
    <div class="overflow-x-auto col-span-12">
      <table class="table home-table"> 
        <thead class="text-center"> 
          <tr class="bg-gray-200 dark:bg-dark-1"> 
            <th class="border-b-2 whitespace-no-wrap"> Investigations </th>
            <th class="border-b-2 whitespace-no-wrap"> Comments </th> 
            <th class="border-b-2 whitespace-no-wrap"> Files </th> 
          </tr> 
        </thead> 

        <tbody class="text-center"> 
          <tr> 
            <td class="border-b dark:border-dark-5">Plan 1</td> 
            <td class="border-b dark:border-dark-5">Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa</td>
            <td class="border-b dark:border-dark-5">
              <ul>
                <li> <a href="#"> File Name </a> </li>
                <li> <a href="#"> File Name </a> </li>
              </ul>
            </td>
          </tr> 

          <tr> 
            <td class="border-b dark:border-dark-5">Plan 2</td> 
            <td class="border-b dark:border-dark-5">Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa Blaaaa</td>
            <td class="border-b dark:border-dark-5">
              <ul>
                <li> <a href="#"> File Name </a> </li>
                <li> <a href="#"> File Name </a> </li>
              </ul>
            </td>
          </tr> 
        </tbody> 
      </table> 

    </div>
    <!-- END:: TABLE -->

  </div>

</div>
<!-- END:: INVESTIGATION SECTION -->

<!-- START:: VISITES SECTION -->
<div class="intro-y flex justify-between	 items-center pt-5 h-10">
  <h2 class="text-lg font-medium text-gray-600 truncate mr-5">Patient Visites</h2>
</div>

<div class="intro-y box px-5 pt-5 pb-5 mt-5 mb-5">
  <div class="overflow-x-auto p-5"> 
    <table class="table"> 
      <thead> 
        <tr class="bg-gray-200 dark:bg-dark-1"> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Visites Dates</th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Visites Details</th> 
        </tr> 
      </thead> 

      <tbody> 
        <tr> 
          <td class="border-b dark:border-dark-5">1</td> 
          <td class="border-b dark:border-dark-5">24 - 12 - 2020</td> 
          <td class="border-b dark:border-dark-5">Bla Bla Bla Bla Bla Bla</td> 
        </tr>

      </tbody> 
    </table> 
  </div> 
</div>
<!-- END:: VISITES SECTION -->

<?php include("layouts/footer.php") ?>