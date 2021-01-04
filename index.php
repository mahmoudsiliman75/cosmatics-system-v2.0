<?php include("layouts/header.php") ?>

	<div class="grid grid-cols-12 gap-6">

		<!-- BEGIN: General Report -->
		<div class="print col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
			<div class="col-span-12 mt-8">

				<div class="intro-y flex items-center justify-between h-10">
					<h2 class="text-lg font-medium text-gray-600 truncate mr-5">General Monthly Report</h2>

          <a href="reservations-requests.php" class="print button translate-y-3 mt-2 ml-2 flex items-center justify-center bg-theme-1 text-white"> 
            <i data-feather="inbox" class="w-4 h-4 mr-1"></i> Reservations Requests 
          </a>
				</div>

				<div class="grid grid-cols-12 gap-6 mt-5">

					<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y text-center">
						<div class="report-box zoom-in">
							<div class="box p-5">
								<div class="flex justify-center">
									<i data-feather="users" class="report-box__icon text-purple-700"></i> 
								</div>
								<div class="text-3xl font-bold leading-8 mt-6">40</div>
								<div class="text-base text-gray-600 mt-1"> Reservations </div>
							</div>
						</div>
					</div>

					<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y text-center">
						<div class="report-box zoom-in">
							<div class="box p-5">
								<div class="flex justify-center">
									<i data-feather="log-in" class="report-box__icon text-purple-700"></i> 
								</div>
								<div class="text-3xl font-bold leading-8 mt-6">21</div>
								<div class="text-base text-gray-600 mt-1"> Visits </div>
							</div>
						</div>
					</div>

					<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y text-center">
						<div class="report-box zoom-in">
							<div class="box p-5">
								<div class="flex justify-center">
									<i data-feather="activity" class="report-box__icon text-purple-700"></i> 
								</div>
								<div class="text-3xl font-bold leading-8 mt-6">5</div>
								<div class="text-base text-gray-600 mt-1"> Surgeries </div>
							</div>
						</div>
					</div>

					<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y text-center">
						<div class="report-box zoom-in">
							<div class="box p-5">
								<div class="flex justify-center">
									<i data-feather="dollar-sign" class="report-box__icon text-green-600"></i> 
								</div>
								<div class="text-3xl font-bold leading-8 mt-6"> 72 </div>
								<div class="text-base text-gray-600 mt-1">Day Financials</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
		<!-- END: General Report -->

		<div class="clear-both"></div>

		<!-- BEGIN: TODAY VISITS -->
		<div class="today-visits col-span-12 xxl:col-span-3 xxl:border-l border-theme-5 -mb-10">
			<div class="xxl:pl-6 grid grid-cols-12 gap-6">

				<div class="col-span-12 xl:col-start-1 xl:row-start-2 xxl:col-start-auto xxl:row-start-auto mt-3">
					<div class="mt-5">

						<div class="intro-y box px-5 pt-5 pb-5 mt-5">

							<div class="grid grid-cols-12 gap-6">
								<h2 class="text-gray-600 mb-4 text-lg col-span-12 md:col-span-6"> Today Reservations </h2>

                <div class="col-span-12 md:col-span-6 flex justify-end">
                  <a href="reservation.php" class="print print-tables button translate-y-3 mt-2 ml-2 flex items-center justify-center bg-theme-1 text-white"> 
                    <i data-feather="plus" class="w-4 h-4 mr-1"></i> Add New Reservation 
                  </a>
                  
                  <button type="submit" class="print print-tables button translate-y-3 mt-2 ml-2 flex items-center justify-center bg-theme-1 text-white"> 
                    <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Print 
                  </button>
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
											<td class="border-b dark:border-dark-5">Patient Name <?php echo ($i+1) ?></td>
											<td class="border-b dark:border-dark-5">0100000000<?php echo ($i+1) ?></td> 
											<td class="border-b dark:border-dark-5"> 12 : 00 PM </td> 
											<td class="print border-b dark:border-dark-5 whitespace-no-wrap">
												<button class="button px-2 mr-1 mb-2 bg-theme-1 text-white tooltip" title="Check In Clinic"> 
													<a href="#" class="w-5 h-5 flex items-center justify-center"> 
														<i data-feather="flag" class="w-4 h-4"></i> 
													</a> 
												</button>

												<button class="button px-2 mr-1 mb-2 bg-theme-1 text-white tooltip" title="Start"> 
													<a href="add-new-visite.php" class="w-5 h-5 flex items-center justify-center"> 
														<i data-feather="play" class="w-4 h-4"></i> 
													</a> 
                        </button>

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
                          <li class="mb-2">12 : 00 PM</li>
                          <li>
                            <button class="button px-2 mr-1 mb-2 bg-theme-1 text-white tooltip" title="Check In Clinic"> 
                            <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                              <i data-feather="flag" class="w-4 h-4"></i> 
                            </a> 
                            </button>

                            <button class="button px-2 mr-1 mb-2 bg-theme-1 text-white tooltip" title="Start"> 
                              <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                                <i data-feather="play" class="w-4 h-4"></i> 
                              </a> 
                            </button>

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
                          </li>
                        </ul>
                      </td> 
										</tr> 
                    <?php } ?>
									</tbody> 
                </table> 
                <button type="submit" class="print print-tables button translate-y-3 mt-2 mr-2 flex items-center justify-center bg-theme-1 text-white col-span-4"> 
                  <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Print 
                </button>
							</div>
              <!-- END:: SMALL SCREENS TABLE -->

						</div>

					</div>
				</div>

			</div>
		</div>
		<!-- END: TODAY VISITS -->

		<div class="clear-both"></div>

	</div>

<?php include("layouts/footer.php") ?>