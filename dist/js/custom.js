$(document).ready(function () {

  // SELECT PROFILE IMG
  $(".image").on('change', function() {
  if (this.files && this.files[0]) {
    var reader = new FileReader();

    reader.onload = (e) => {
      $('.image-preview').attr('src', e.target.result);
    }

    reader.readAsDataURL(this.files[0]);
  };
});

  // START:: DARK MODE
  // $('.dark-mode').on('click', function() {
  //   $('html').toggleClass('dark');
  //   $('body').css('background', '#232A3B');
  // });
  // START:: DARK MODE

  // START:: SYSTEM THEMES
  $('.color-themes li').on('click', function() {
    localStorage.setItem('--mainBackGround', $(this).data('color'));
    $(':root').css('--mainBackGround', localStorage.getItem('--mainBackGround'));
  });
  
  // END:: SYSTEM THEMES

  // START:: ADD NEW VISIT PAGE
  $('#drug-allergy-comments').css('visibility' , 'hidden');
  $('#smoking-comments').css('visibility' , 'hidden');
  $('#blood-transfusion-comments').css('visibility' , 'hidden');
  $('#alcoholic-comments').css('visibility' , 'hidden');
  $('#prev-sergeries-comments').css('visibility' , 'hidden');
  $('#family-history-comments').css('visibility' , 'hidden');

  $("#drug-allergy").on('change' , () => {
    let DrugAllergyOptionValue = $("#drug-allergy").children('option:checked').val();
    if(DrugAllergyOptionValue == 0) {
      $('#drug-allergy-comments').css('visibility' , "hidden");
    } else if (DrugAllergyOptionValue == 1) {
      $('#drug-allergy-comments').css('visibility' , "visible");
    }
  }); 

  $("#smoking").on('change' , () => {
    let smokingOptionValue = $('#smoking').children('option:checked').val();
    if ( smokingOptionValue == 0 ) {
      $('#smoking-comments').css('visibility' , 'hidden');
    } else if ( smokingOptionValue == 1 ) {
      $('#smoking-comments').css('visibility' , 'visible');
    };
  });

  $("#blood-transfusion").on('change' , () => {
    let bloodTransfusionOptionValue = $('#blood-transfusion').children('option:checked').val();
    if (bloodTransfusionOptionValue == 0) {
      $('#blood-transfusion-comments').css('visibility' , 'hidden');
    } else if ( bloodTransfusionOptionValue == 1 ) {
      $('#blood-transfusion-comments').css('visibility' , 'visible');
    }
  });

  $("#alcoholic").on('change' , () => {
    let alcoholicOptionValue = $("#alcoholic").children('option:checked').val();
    if ( alcoholicOptionValue == 0 ) {
      $('#alcoholic-comments').css('visibility' , 'hidden');
    } else if ( alcoholicOptionValue == 1 ) {
      $('#alcoholic-comments').css('visibility' , 'visible');
    }
  });

  $("#prev-sergeries").on('change' , () => {
    let prevSergOptionValue = $("#prev-sergeries").children('option:checked').val();
    if ( prevSergOptionValue == 0 ) {
      $('#prev-sergeries-comments').css('visibility' , 'hidden');
    } else if ( prevSergOptionValue == 1 ) {
      $('#prev-sergeries-comments').css('visibility' , 'visible');
    }
  });

  $("#family-history").on('change' , () => {
    let familyOptionValue = $("#family-history").children('option:checked').val();
    if ( familyOptionValue == 0 ) {
      $('#family-history-comments').css('visibility' , 'hidden');
    } else if ( familyOptionValue == 1 ) {
      $('#family-history-comments').css('visibility' , 'visible');
    }
  });

  $('.chronic-diseases-selector').on('change', function () {
    let myMarkUp = `
    <div class="target grid grid-cols-12 gap-6 col-span-12 lg:flex-row pr-3 pl-3 -mx-5">

      <div class="col-span-10">
        <label class="text-gray-600 mb-3 text-lg">Comments</label>
        <textarea class="input w-full border mt-2" placeholder="Comments" rows="3"></textarea>
      </div>

      <span class="delete col-span-2 button translate-y-3 my-3 mr-2 flex items-center justify-center bg-theme-6 text-white" style="margin-top: 50px; margin-bottom: 25px;"> Remove </span>

    </div>
    `;
    $('.comments-container').append(myMarkUp);

    $('.delete').on('click' , function() {
      $(this).parent().remove();
    });
  });

  $('#basic-info').css('display', 'none');
  $('.toggle-edit-basic-info').on('click', () => {
    $('#basic-info').css('display', 'block');
  });

  $('.remove-img').on('click', () => {
    $('.remove-img').parent().parent().css('display', 'none');
  });

  $('#doctor-info').css('display' , 'none');
  $('.toggle-edit-doctor-info').on('click', () => {
    $('#doctor-info').css('display' , 'block');
  });

  $('#investigations').css('display', 'none');
  $('.toggle-investigation').on('click', () => {
    $('#investigations').css('display', 'block')
  });

  $('#visites').css('display', 'none');
  $('.toggle-visites').on('click', () => {
    $('#visites').css('display', 'block')
  });

  $('#procedure').css('display', 'none');
  $('#procedure-details').css('display', 'none');
  $('#procedures-title').css('display', 'none');
  $('#procedure-financ').css('display', 'none');
  $('.add-procedure').on('click', () => {
    $('.add-procedure').css('display', 'none');
    $('#procedure').css('display', 'block');
    $('#procedure-details').css('display', 'block');
    $('#procedures-title').css('display', 'block');
    $('#procedure-financ').css('display', 'block');
  });



  // END:: ADD NEW VISIT PAGE

  // START:: DOCTOR INFO PAGE

  $('.complaints-selector').on('change', function () {
    let complaintsMarkUp = `
    <div class="target grid grid-cols-12 gap-6 col-span-12 lg:flex-row pr-3 pl-3 -mx-5">

      <div class="col-span-8 md:col-span-10">
        <label class="text-gray-600 mb-3 text-lg">Comments</label>
        <textarea class="input w-full border mt-2" placeholder="Comments" rows="3"></textarea>
      </div>

      <span class="delete-complaint col-span-4 md:col-span-2 button translate-y-3 my-3 mr-2 flex items-center justify-center bg-theme-6 text-white" style="margin-top: 50px; margin-bottom: 25px;"> Remove </span>

    </div>
    `;
    $('.complaints-comments-container').append(complaintsMarkUp);

    $('.delete-complaint').on('click' , function() {
      $(this).parent().remove();
    });
  });

  $('.examination-selector').on('change', function () {
    let examinationMarkUp = `
    <div class="target grid grid-cols-12 gap-6 col-span-12 lg:flex-row pr-3 pl-3 -mx-5">

      <div class="col-span-8 md:col-span-10">
        <label class="text-gray-600 mb-3 text-lg">Comments</label>
        <textarea class="input w-full border mt-2" placeholder="Comments" rows="3"></textarea>
      </div>

      <span class="delete-examination col-span-4 md:col-span-2 button translate-y-3 my-3 mr-2 flex items-center justify-center bg-theme-6 text-white" style="margin-top: 50px; margin-bottom: 25px;"> Remove </span>

    </div>
    `;
    $('.examination-comments-container').append(examinationMarkUp);

    $('.delete-examination').on('click' , function() {
      $(this).parent().remove();
    });
  });

  $('.diagnosis-selector').on('change', function () {
    let diagnosisMarkUp = `
    <div class="target grid grid-cols-12 gap-6 col-span-12 lg:flex-row pr-3 pl-3 -mx-5">

      <div class="col-span-8 md:col-span-10">
        <label class="text-gray-600 mb-3 text-lg">Comments</label>
        <textarea class="input w-full border mt-2" placeholder="Comments" rows="3"></textarea>
      </div>

      <span class="delete-diagnosis col-span-4 md:col-span-2 button translate-y-3 my-3 mr-2 flex items-center justify-center bg-theme-6 text-white" style="margin-top: 50px; margin-bottom: 25px;"> Remove </span>

    </div>
    `;
    $('.diagnosis-comments-container').append(diagnosisMarkUp);

    $('.delete-diagnosis').on('click' , function() {
      $(this).parent().remove();
    });
  });

  $('.plan-selector').on('change', function () {
    let planMarkUp = `
    <div class="target grid grid-cols-12 gap-6 col-span-12 lg:flex-row pr-3 pl-3 -mx-5">

      <div class="col-span-8 md:col-span-10">
        <label class="text-gray-600 mb-3 text-lg">Comments</label>
        <textarea class="input w-full border mt-2" placeholder="Comments" rows="3"></textarea> 
      </div>

      <span class="delete-plan col-span-4 md:col-span-2 button translate-y-3 my-3 mr-2 flex items-center justify-center bg-theme-6 text-white" style="margin-top: 50px; margin-bottom: 25px;"> Remove </span>

    </div>
    `;
    $('.plan-comments-container').append(planMarkUp);

    $('.delete-plan').on('click' , function() {
      $(this).parent().remove();
    });
  });

  // END:: DOCTOR INFO PAGE

  // START:: INVESTIGATIONS PAGE
  $('.hamboly').on('change', function (event) {
    event.preventDefault();
    let planMarkUp = `
    <div class="target grid grid-cols-12 gap-6 col-span-12 lg:flex-row pr-3 pl-3 -mx-5">

      <div class="col-span-12 md:col-span-8">
        <label class="text-gray-600 mb-3 text-lg">Results</label>
        <textarea class="input w-full border mt-2" placeholder="Results" rows="3"></textarea>
      </div>

      <div class="col-span-8 md:col-span-3 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 text-lg">Results Docs</label>
        <input name="file" type="file" class="input w-full border mt-2" style="padding: 4px;" multiple /> 
      </div>

      <span class="delete-investigation font-black col-span-4 md:col-span-1 button translate-y-3 my-3 mr-2 flex items-center justify-center bg-theme-6 text-white" style="margin-top:35px; margin-bottom: 52px;"> 
        X 
      </span>

    </div>
    `;
    $('.investigation-comments-container').append(planMarkUp);

    $('.delete-investigation').on('click' , function() {
      $(this).parent().remove();
    });
  });
  // END:: INVESTIGATIONS PAGE

  // START:: PROCEDURES PAGE
  $('.surgent-selector').on('change', function () {
    let mainSurgentMarkUp = `
    <div class="target grid grid-cols-12 gap-6 col-span-12 lg:flex-row pr-3 pl-3 -mx-5">

      <div class="col-span-9">
        <label class="text-gray-600 mb-3 text-lg">Comments</label>
        <textarea class="input w-full border mt-2" placeholder="Comments"></textarea> 
      </div>

      <span class="delete-main-surgent col-span-3 button translate-y-3 my-3 mr-2 flex items-center justify-center bg-theme-6 text-white" style="margin-top:45px; margin-bottom:22px"> Remove </span>

    </div>
    `;
    $('.main-surgent-comments-container').append(mainSurgentMarkUp);

    $('.delete-main-surgent').on('click' , function() {
      $(this).parent().remove();
    });
  });

  $('.assistant-selector').on('change', function () {
    let assistantMarkUp = `
    <div class="target grid grid-cols-12 gap-6 col-span-12 lg:flex-row pr-3 pl-3 -mx-5">

      <div class="col-span-9">
        <label class="text-gray-600 mb-3 text-lg">Comments</label>
        <textarea class="input w-full border mt-2" placeholder="Comments"></textarea>
      </div>

      <span class="delete-main-surgent col-span-3 button translate-y-3 my-3 mr-2 flex items-center justify-center bg-theme-6 text-white" style="margin-top:45px; margin-bottom:22px"> Remove </span>

    </div>
    `;
    $('.assistant-comments-container').append(assistantMarkUp);

    $('.delete-assistant').on('click' , function() {
      $(this).parent().remove();
    });
  });

  $('.anesthesia-selector').on('change', function () {
    let anesthesiaMarkUp = `
    <div class="target grid grid-cols-12 gap-6 col-span-12 lg:flex-row pr-3 pl-3 -mx-5">

      <div class="col-span-9">
        <label class="text-gray-600 mb-3 text-lg">Comments</label>
        <textarea class="input w-full border mt-2" placeholder="Comments"></textarea>
      </div>

      <span class="delete-main-surgent col-span-3 button translate-y-3 my-3 mr-2 flex items-center justify-center bg-theme-6 text-white" style="margin-top:45px; margin-bottom:22px"> Remove </span>

    </div>
    `;
    $('.anesthesia-comments-container').append(anesthesiaMarkUp);

    $('.delete-anesthesia').on('click' , function() {
      $(this).parent().remove();
    });
  });

  $('#complications-comments').css('display', 'none');
  $('#complications').on('change', () => {
    let optionValue = $('#complications').children('option:checked').val();
    if ( optionValue == 0 ) {
      $('#complications-comments').css('display', 'none');
    } else if ( optionValue == 1 ) {
      $('#complications-comments').css('display', 'block');
    }
  });
  // END:: PROCEDURES PAGE

  // START:: PROCEDURED FINANCIALS PAGE
  // $('#total-fees').css('visibility' , 'hidden');
  $('#number-of-monthes').css('display', 'none');
  $('#monthly-fees').css('display', 'none');


  $('#payment-status').on('change', () => {
    let statusOptionValue = $('#payment-status').children('option:checked').val();
    if ( statusOptionValue == 0 ) {
      // $('#installments-fees').css('visibility' , 'hidden');
      $('#number-of-monthes').css('display' , 'none');
      $('#monthly-fees').css('display' , 'none');
    } else if ( statusOptionValue == 1 ) {
      // $('#installments-fees').css('visibility' , 'visible');
      $('#number-of-monthes').css('display' , 'block');
      $('#monthly-fees').css('display' , 'block');
    }
  })

  let calculateProfit = () => {
    let procedresFees = parseInt( $('.procedure-fees').val() ) ;
    let hospitalFees = parseInt( $('.hospital-fees').val() );
    let hospitalOthers = parseInt( $('.hospital-other').val() );
    $('.total-profets').val(procedresFees - (hospitalFees + hospitalOthers));
  };
  $('.procedure-fees').on( 'input', calculateProfit );
  $('.hospital-fees').on( 'input', calculateProfit );
  $('.hospital-other').on( 'input', calculateProfit ); 

  let calcRemainingFees = () => {
    let procedresFees = parseInt( $('.procedure-fees').val() ) ;
    let paidAmmount = parseInt( $('.paid-amount').val() ) ;
    $('.remaining-fees').val( procedresFees - paidAmmount );
    let theRemainingFees = $('.remaining-fees').val();
    return parseInt(theRemainingFees);
  };
  $('.procedure-fees').on('input', calcRemainingFees);
  $('.paid-amount').on('input', calcRemainingFees);

  // START:: CALCULATING INSTALLMENT MONTHLY FEES
  let calcMonthlyFees = () => {
    let remainingFees = calcRemainingFees() ;
    let numberOfMonthes = parseInt( $('.number-of-monthes').val() ) ;
    // console.log("div "+remainingFees / numberOfMonthes)
    // console.log("remaining "+remainingFees )
    // console.log( "num of mu "+numberOfMonthes)
    $('.monthly-fees').val(remainingFees / numberOfMonthes);
  };
  $('.procedure-fees').on("input", calcMonthlyFees);
  $('.number-of-monthes').on("input", calcMonthlyFees);
  // END:: CALCULATING INSTALLMENT MONTHLY FEES

  // END:: PROCEDURED FINANCIALS PAGE

  // START:: PRINT BUTTON
  $('.print-tables').on('click', function () {
    window.print();
  });
  // END:: PRINT BUTTON
});
