<?php include("layouts/login-header.php") ?>

<div class="container sm:px-10">
		<div class="block xl:grid grid-cols-2 gap-4">

			<!-- BEGIN: Change Pass Info -->
			<div class="hidden xl:flex flex-col min-h-screen">
				<a href="" class="-intro-x flex items-center pt-5">
					<img alt="Midone Tailwind HTML Admin Template" class="w-14" src="dist/images/icon.png">
					<span class="text-white text-lg"> U<span class="font-medium">Care DashBoard</span> </span>
				</a>
				<div class="my-auto">
					<img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="dist/images/forgot-password.svg">
					<div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
						A few More Clicks To 
						<br>
						Reset Your Password.
					</div>
				</div>
			</div>
			<!-- END: Change Pass Info -->

			<form class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
				<!-- BEGIN: Change Pass Form -->
				<div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
					<div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
						<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
							Change Password
						</h2>

						<div class="intro-x mt-8">
							<input type="text" class="intro-x login__input input input--lg border border-gray-300 block mb-4" placeholder="Email">
							<input type="password" class="intro-x login__input input input--lg border border-gray-300 block mb-4" placeholder="Password">
							<input type="password" class="intro-x login__input input input--lg border border-gray-300 block mb-4" placeholder="Confirm Password">
						</div>

						<div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
							<button class="button button--lg w-full text-white bg-theme-1 xl:mr-3">Set New Password</button>
						</div>

					</div>
				</div>
				<!-- END: Change Pass Form -->
			</form>
		</div>
	</div>

<?php include("layouts/login-footer.php") ?>