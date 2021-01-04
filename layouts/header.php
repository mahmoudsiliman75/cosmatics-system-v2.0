<!DOCTYPE html>
<html lang="en" class="">
<!-- BEGIN: Head -->
<head>
	<meta charset="utf-8">
	<link href="dist/images/icon.png" rel="shortcut icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
	<meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
	<meta name="author" content="LEFT4CODE">
	<title>Cosmatics DashBoard</title>
	<!-- BEGIN: Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap">
	<!-- BEGIN: Google Fonts -->


	<!-- BEGIN: CSS Assets-->
	<link rel="stylesheet" href="dist/css/app.css" />
	<link rel="stylesheet" href="dist/css/custom-style.css" />
	<link rel="stylesheet" href="dist/css/print.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  <!-- END: CSS Assets-->
  
  <style>
    /* START:: ROOT SELECTOE */
    :root {
      --mainBackGround: linear-gradient(to bottom, #0d697e, #a056c5, #961f60); 
    }
    /* START:: ROOT SELECTOE */
  </style>
</head>
<!-- END: Head -->
<body class="app">

	<!-- BEGIN: Mobile Menu -->
	<div class="mobile-menu md:hidden py-6">
		<div class="mobile-menu-bar flex justify-between">
			<a href="" class="flex">
				<img alt="" class="w-14" src="dist/images/icon.png">
			</a>
			<a href="javascript:;" id="mobile-menu-toggler"> 
				<i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> 
			</a>
		</div>

		<ul class="py-5 hidden">

			<li>
				<a href="index.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="home"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Home </span> </div>
				</a>
      </li>
      
      <li>
				<a href="system-settings.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="settings"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> System Settings </span> </div>
				</a>
			</li>

			<li>
				<a href="edit-profile.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="settings"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Edit Profile </span> </div>
				</a>
      </li>

      <li>
				<a href="all-users.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="users"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> All Users </span> </div>
				</a>
			</li>

      <li>
				<a href="all-patients.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="users"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> All Patients </span> </div>
				</a>
      </li>

      <li>
				<a href="reservation.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="plus"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Reservation </span> </div>
				</a>
			</li>

      <li>
				<a href="all-rservation.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="inbox"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> All Reservation </span> </div>
				</a>
			</li>

			<li>
				<a href="clinics.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="hash"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Clinics </span> </div>
				</a>
      </li>

      <li>
				<a href="surgires.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="hash"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Surgeries </span> </div>
				</a>
      </li>

			<li>
				<a href="javascript:;" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="pie-chart"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Reports </span> <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
				</a>
				<ul class="">

					<li>
						<a href="surgeries-report.php" class="menu">
							<div class="menu__icon"> <i class="ml-3" data-feather="file-minus"></i> </div>
							<div class="menu__title"> Surgeries Report  </div>
						</a>
          </li>

          <li>
						<a href="surgery-financial-report.php" class="menu">
							<div class="menu__icon"> <i class="ml-3" data-feather="file-minus"></i> </div>
							<div class="menu__title"> Surgeries Financial Report </div>
						</a>
          </li>

          <li>
						<a href="hospitals-financials-reports.php" class="menu">
							<div class="menu__icon"> <i class="ml-3" data-feather="file-minus"></i> </div>
							<div class="menu__title"> Hospitals Financial Report </div>
						</a>
					</li>

					<li>
						<a href="patients-reports.php" class="menu">
							<div class="menu__icon"> <i class="ml-3" data-feather="file-minus"></i> </div>
							<div class="menu__title"> Patients Reports </div>
						</a>
					</li>
				</ul>
			</li>

		</ul>
	</div>
	<!-- END: Mobile Menu -->

	<div class="flex">
	<!-- BEGIN: Side Menu -->
	<nav class="side-nav pt-2">
		<a href="index.php" class="nav-brand intro-x flex items-center">
			<img alt="" class="w-44" src="dist/images/logo.png">
		</a>

		<ul>
			<li>
				<a href="index.php" class="side-menu side-menu--active">
          <div class="side-menu__icon"> <i class="ml-3" data-feather="home"></i> </div>
          <div class="side-menu__title"> Home </div>
				</a>
			</li>

			<li>
				<a href="system-settings.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="settings"></i> </div>
					<div class="side-menu__title"> System Settings </div>
				</a>
      </li>

      <li>
				<a href="edit-profile.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="settings"></i> </div>
					<div class="side-menu__title"> Edit Profile </div>
				</a>
			</li>

      <li>
				<a href="all-users.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="users"></i> </div>
					<div class="side-menu__title"> All Users </div>
				</a>
      </li>

      <li>
        <a href="all-patients.php" class="side-menu">
          <div class="side-menu__icon"> <i class="ml-3" data-feather="users"></i> </div>
          <div class="side-menu__title"> All Patients </div>
        </a>
      </li>

      <li>
        <a href="reservation.php" class="side-menu">
          <div class="side-menu__icon"> <i class="ml-3" data-feather="plus-square"></i> </div>
          <div class="side-menu__title"> Rservation </div>
        </a>
      </li>

      <li>
        <a href="all-rservation.php" class="side-menu">
          <div class="side-menu__icon"> <i class="ml-3" data-feather="inbox"></i> </div>
          <div class="side-menu__title"> All Rservation </div>
        </a>
      </li>

      <li>
				<a href="clinics.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="hash"></i> </div>
					<div class="side-menu__title"> Clinics </div>
				</a>
			</li>

      <li>
				<a href="surgires.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="hash"></i> </div>
					<div class="side-menu__title"> Surgeries </div>
				</a>
			</li>

			<li>
				<a href="javascript:;" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="pie-chart"></i> </div>
					<div class="side-menu__title"> Reports <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
				</a>
				<ul class="">

					<li>
						<a href="surgeries-report.php" class="side-menu">
							<div class="side-menu__icon"> <i class="ml-3" data-feather="file-minus"></i> </div>
							<div class="side-menu__title"> Surgeries Report </div>
						</a>
					</li>

					<li>
						<a href="surgery-financial-report.php" class="side-menu">
							<div class="side-menu__icon"> <i class="ml-3" data-feather="file-minus"></i> </div>
							<div class="side-menu__title"> Surgeries Financial Report </div>
						</a>
					</li>

					<li>
						<a href="hospitals-financials-reports.php" class="side-menu">
							<div class="side-menu__icon"> <i class="ml-3" data-feather="file-minus"></i> </div>
							<div class="side-menu__title"> Hospitals Financial Report </div>
						</a>
					</li>

					<li>
						<a href="patients-reports.php" class="side-menu">
							<div class="side-menu__icon"> <i class="ml-3" data-feather="file-minus"></i> </div>
							<div class="side-menu__title"> Patients Reports </div>
						</a>
					</li>

				</ul>
			</li>

			<!-- <li>
				<a href="financial.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="dollar-sign"></i> </div>
					<div class="side-menu__title"> Financilas </div>
				</a>
			</li> -->

		</ul>
	</nav>
	<!-- END: Side Menu -->

	<!-- BEGIN: Content -->
	<div class="content">
	<!-- BEGIN: Top Bar -->
	<div class="top-bar">

		<!-- BEGIN: Breadcrumb -->
		<div class="-intro-x breadcrumb mr-auto hidden sm:flex">  <i data-feather="home" class="breadcrumb__icon"></i> <a href="#" class=""> Home</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="text-purple-700">Current Page</a> </div>
		<!-- END: Breadcrumb -->

		<!-- BEGIN: Search -->
		<div class="intro-x relative mr-3 sm:mr-6">
			<div class="search sm:block">
				<input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
				<i data-feather="search" class="search__icon dark:text-gray-300"></i> 
			</div>
		</div>
    <!-- END: Search -->
    
    <!-- START:: DARK MODE -->
    <!-- <button class="dark-mode notification mr-3"> 
      <i class="ml-3" data-feather="moon"></i> 
    </button> -->
    <!-- START:: DARK MODE -->

    <!-- BEGIN: SYSTEM THEMES -->
		<div class="intro-x dropdown relative mr-auto  ml-2 sm:mr-6">
				<div class="dropdown-toggle notification cursor-pointer"> 
          <i data-feather="droplet" class="notification__icon dark:text-gray-300"></i> 
        </div>
				<div class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
          <div class="notification-content__box dropdown-box__content box dark:bg-dark-6">
            <ul class="color-themes">
              <li class="mb-3" data-color="linear-gradient(to bottom, #0d697e, #a056c5, #961f60)"> Default </li>
              <li class="mb-3" data-color="linear-gradient(to bottom, #e67a88,#ee9ca7, #ffdde1)">Piggy Pink</li>
              <li class="mb-3" data-color="linear-gradient(to bottom, #2c3e50,#4b6075,#bdc3c7)">Grady Grey</li>
              <li class="mb-3" data-color="linear-gradient(to bottom, #5d26c1, #a17fe0, #59c173)">Magic</li>
              <li class="mb-3" data-color="linear-gradient(to bottom, #f3904f, #6239af, #3b4371)">Dawn</li>
              <li class="mb-3" data-color="linear-gradient(to bottom, #feac5e, #c779d0, #4bc0c8)">Atlas</li>
            </ul>
          </div>
				</div>
		</div>
		<!-- END: SYSTEM THEMES -->

		<!-- BEGIN: Notifications -->
		<div class="intro-x dropdown relative mr-auto  ml-2 sm:mr-6">
				<div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell" class="notification__icon dark:text-gray-300"></i> </div>
				<div class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
						<div class="notification-content__box dropdown-box__content box dark:bg-dark-6">
								<div class="notification-content__title">Notifications</div>
								<div class="cursor-pointer relative flex items-center ">
										<div class="w-12 h-12 flex-none image-fit mr-1">
												<img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
												<div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
										</div>
										<div class="ml-2 overflow-hidden">
												<div class="flex items-center">
														<a href="javascript:;" class="font-medium truncate mr-5">Angelina Jolie</a> 
														<div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">06:05 AM</div>
												</div>
												<div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
										</div>
								</div>
								<div class="cursor-pointer relative flex items-center mt-5">
										<div class="w-12 h-12 flex-none image-fit mr-1">
												<img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
												<div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
										</div>
										<div class="ml-2 overflow-hidden">
												<div class="flex items-center">
														<a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a> 
														<div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
												</div>
												<div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
										</div>
								</div>
								<div class="cursor-pointer relative flex items-center mt-5">
										<div class="w-12 h-12 flex-none image-fit mr-1">
												<img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
												<div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
										</div>
										<div class="ml-2 overflow-hidden">
												<div class="flex items-center">
														<a href="javascript:;" class="font-medium truncate mr-5">Leonardo DiCaprio</a> 
														<div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
												</div>
												<div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
										</div>
								</div>
								<div class="cursor-pointer relative flex items-center mt-5">
										<div class="w-12 h-12 flex-none image-fit mr-1">
												<img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-10.jpg">
												<div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
										</div>
										<div class="ml-2 overflow-hidden">
												<div class="flex items-center">
														<a href="javascript:;" class="font-medium truncate mr-5">Edward Norton</a> 
														<div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
												</div>
												<div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
										</div>
								</div>
								<div class="cursor-pointer relative flex items-center mt-5">
										<div class="w-12 h-12 flex-none image-fit mr-1">
												<img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-8.jpg">
												<div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
										</div>
										<div class="ml-2 overflow-hidden">
												<div class="flex items-center">
														<a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a> 
														<div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
												</div>
												<div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
										</div>
								</div>
						</div>
				</div>
		</div>
		<!-- END: Notifications -->

		<!-- BEGIN: Account Menu -->
		<div class="intro-x dropdown w-8 h-8 relative">

			<div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
				<img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-9.jpg">
			</div>

			<div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">

				<div class="dropdown-box__content box bg-theme-38 dark:bg-dark-6 text-white">

					<div class="p-4 border-b border-theme-40 dark:border-dark-3">
						<div class="font-medium">Angelina Jolie</div>
						<div class="text-xs text-theme-41 dark:text-gray-600">Software Engineer</div>
					</div>

					<div class="p-2">
						<a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> 
							<i data-feather="lock" class="w-4 h-4 mr-2 ml-2"></i> Reset Password 
						</a>

						<a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> 
							<i data-feather="help-circle" class="w-4 h-4 mr-2 ml-2"></i> Help 
						</a>
					</div>

					<div class="p-2 border-t border-theme-40 dark:border-dark-3">
						<a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> 
							<i data-feather="power" class="w-4 h-4 mr-2 ml-2"></i> Logout 
						</a>
					</div>
				</div>

			</div>

		</div>
		
		</div>
		<!-- END: Top Bar -->