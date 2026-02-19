@extends('layouts.auth')

@section('content')

 <body class="antialiased flex h-full text-base text-foreground bg-background">
  <!-- Theme Mode -->
  <script>
   const defaultThemeMode = 'light'; // light|dark|system
			let themeMode;

			if (document.documentElement) {
				if (localStorage.getItem('kt-theme')) {
					themeMode = localStorage.getItem('kt-theme');
				} else if (
					document.documentElement.hasAttribute('data-kt-theme-mode')
				) {
					themeMode =
						document.documentElement.getAttribute('data-kt-theme-mode');
				} else {
					themeMode = defaultThemeMode;
				}

				if (themeMode === 'system') {
					themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches
						? 'dark'
						: 'light';
				}

				document.documentElement.classList.add(themeMode);
			}
  </script>
  <!-- End of Theme Mode -->
  <!-- Page -->
  <style>
   .page-bg {
			background-image: url('{{ URL::asset('assets/media/images/2600x1200/bg-10.png') }}');
		}
		.dark .page-bg {
			background-image: url('{{ URL::asset('assets/media/images/2600x1200/bg-10-dark.png') }}');
		}
  </style>
  <div class="flex items-center justify-center grow bg-center bg-no-repeat page-bg">
   <div class="kt-card max-w-[440px] w-full">
    <div class="kt-card-content p-10">
     <div class="flex justify-center py-10">
      <img alt="image" class="dark:hidden max-h-[130px]" src="assets/media/illustrations/30.svg"/>
      <img alt="image" class="light:hidden max-h-[130px]" src="assets/media/illustrations/30-dark.svg"/>
     </div>
     <h3 class="text-lg font-medium text-mono text-center mb-3">
      Check your email
     </h3>
     <div class="text-sm text-center text-secondary-foreground mb-7.5">
      Please click the link sent to your email
      <a class="text-sm text-foreground font-medium hover:text-primary" href="#">
       bob@reui.io
      </a>
      <br/>
      to reset your password. Thank you
     </div>
     <div class="flex justify-center mb-5">
      <a class="kt-btn kt-btn-primary flex justify-center" href="http://localhost:8000/changepwd">
       Skip for now
      </a>
     </div>
     <div class="flex items-center justify-center gap-1">
      <span class="text-xs text-secondary-foreground">
       Didn’t receive an email?
      </span>
      <a class="text-xs font-medium link" href="#">
       Resend
      </a>
     </div>
    </div>
   </div>
  </div>
  <!-- End of Page -->
  <!-- Scripts -->
  <script src="{{ URL::asset('assets/js/core.bundle.js') }}">
  </script>
  <script src="{{ URL::asset('assets/vendors/ktui/ktui.min.js') }}">
  </script>
  <script src="{{ URL::asset('assets/vendors/apexcharts/apexcharts.min.js') }}s">
  </script>
  <!-- End of Scripts -->
 </body>
</html>
@endsection