<?php include("layouts/header.php") ?>

	<div class="grid grid-cols-12 gap-6">


		<!-- BEGIN: ALL RESERVATIONS -->
		<div class="today-visits col-span-12 xxl:col-span-3 xxl:border-l border-theme-5 -mb-10">
			<div class="xxl:pl-6 grid grid-cols-12 gap-6">
				<div class="col-span-12 xl:col-start-1 xl:row-start-2 xxl:col-start-auto xxl:row-start-auto mt-3">

					<div class="mt-5">

						<div class="intro-y box px-5 pt-5 pb-5 mt-5">

							<div class="grid grid-cols-12 gap-6">
								<h2 class="text-gray-600 mb-4 text-lg col-span-6"> All Reservations </h2>

                <div class="col-span-6 flex justify-end">
                  <a href="reservation.php" class="printprint-tables button translate-y-3 mt-2 mr-2 flex items-center justify-center bg-theme-1 text-white"> 
                    <i data-feather="plus" class="w-4 h-4 mr-1"></i> Add New Reservation 
                  </a>

                  <button type="submit" class="print print-tables button translate-y-3 mt-2 mr-2 flex items-center justify-center bg-theme-1 text-white"> 
                    <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Print 
                  </button>
                </div>

              </div>
              

              <div class="grid grid-cols-12 gap-6">

                <div class="col-span-6 lg:flex-row pr-3 pl-3 -mx-5">
                  <label class="text-gray-600 mb-3 text-lg">From</label>
                  <input type="date" class="input w-full border mt-2" placeholder="Patient BMI"> 
                </div>

                <div class="col-span-6 lg:flex-row pr-3 pl-3 -mx-5">
                  <label class="text-gray-600 mb-3 text-lg">To</label>
                  <input type="date" class="input w-full border mt-2" placeholder="Patient BMI"> 
                </div>

              </div>

              <!-- START:: LARGE SCREENS TABLE -->
							<div class="overflow-x-auto p-5 hidden lg:block"> 
								<table class="table home-table"> 
									<thead> 
										<tr class="bg-gray-200 dark:bg-dark-1"> 
											<th class="border-b-2 whitespace-no-wrap">#</th> 
											<th class="border-b-2 whitespace-no-wrap"> Patient Name</th>
											<th class="border-b-2 whitespace-no-wrap"> Phone Number</th> 
											<th class="border-b-2 whitespace-no-wrap">Reservation Date</th> 
											<th class="border-b-2 whitespace-no-wrap">Reservation Time</th> 
											<th class="print border-b-2 whitespace-no-wrap">Actions</th> 
										</tr> 
									</thead> 

									<tbody> 
                    <?php
                      for ($i=0; $i <6 ; $i++) { 
                    ?>

										<tr> 
											<td class="border-b dark:border-dark-5"><?php echo ($i+1) ?></td> 
											<td class="border-b dark:border-dark-5">Name <?php echo ($i+1) ?></td>
											<td class="border-b dark:border-dark-5">0100000000<?php echo ($i+1) ?></td> 
											<td class="border-b dark:border-dark-5"> <?php echo ($i+1) ?> - 12 - 2020 </td> 
											<td class="border-b dark:border-dark-5"> 12 : 00 PM </td> 
											<td class="print border-b dark:border-dark-5 whitespace-no-wrap">

                        <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white tooltip" title="Edit"> 
                          <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit w-4 h-4"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> 
                          </a> 
                        </button>

												<button class="button px-2 mr-1 mb-2 bg-theme-6 text-white"> 
													<a href="#" class="w-5 h-5 flex items-center justify-center tooltip" title="Delete"> 
														<i data-feather="trash" class="w-4 h-4"></i> 
													</a> 
												</button>

											</td> 
										</tr> 
                    <?php } ?>
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
              <!-- END:: LARGE SCREENS TABLE -->

              <!-- START:: SMALL SCREENS TABLE -->
              <div class="overflow-x-auto p-5 lg:hidden"> 
                <table class="table home-table"> 
                  <thead> 
                    <tr class="bg-gray-200 dark:bg-dark-1"> 
                      <th class="border-b-2 whitespace-no-wrap text-center">Reservation Data</th> 
                    </tr> 
                  </thead> 

                  <tbody>
                    <?php
                      for ($i=0; $i <6 ; $i++) { 
                    ?>
                    <tr> 
                      <td class="border-b dark:border-dark-5">
                        <ul class="text-center">
                          <li class="mb-2"><strong>#<?php echo ($i+1) ?></strong> Patient Name <?php echo ($i+1) ?></li>
                          <li class="mb-2">0100000000<?php echo ($i+1) ?></li>
                          <li class="mb-2"><?php echo ($i+1) ?> - 12 - 2020</li>
                          <li class="mb-2"><?php echo ($i+1) ?> : 00</li>
                          <li>

                            <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white tooltip" title="Edit"> 
                              <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                                <i data-feather="edit" class="w-4 h-4"></i> 
                              </a> 
                            </button>

                            <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white tooltip" title="Delete"> 
                              <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                                <i data-feather="trash" class="w-4 h-4"></i> 
                              </a> 
                            </button>
                          </li>
                        </ul>
                      </td> 
                    </tr> 
                    <?php } ?>
                  </tbody> 
                </table> 
                <!-- START:: PAGINATION -->
                <div class="print intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
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
              <!-- END:: SMALL SCREENS TABLE -->

						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- END: ALL RESERVATIONS -->

		<div class="clear-both"></div>

	</div>

<?php include("layouts/footer.php") ?>