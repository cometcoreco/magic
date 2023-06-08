<!DOCTYPE html>
<html lang="en" class="max-sm:overflow-x-hidden overflow-hidden">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="/{{$setting->favicon_path}}">
    <title>{{$setting->site_name}} | {{__('Home')}}</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="/assets/css/frontend/fonts.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/frontend/flickity.min.css">

	@vite('resources/css/frontend.scss')

    @if($setting->frontend_custom_css != null)
        <link rel="stylesheet" href="{{$setting->frontend_custom_css}}" />
    @endif

	<script>
		window.liquid = {
			isLandingPage: true
		};
	</script>
</head>
<body class="font-golos bg-body-bg text-body group/body max-sm:overflow-x-hidden">
	<script src="/assets/js/tabler-theme.min.js"></script>
	<script src="/assets/js/navbar-shrink.js"></script>

	<div class="site-preloader inline-grid place-items-center w-16 h-16 rounded-xl bg-black bg-opacity-40 fixed top-1/2 left-1/2 z-50 -translate-x-1/2 -translate-y-1/2 transition-opacity group-[.page-loaded]/body:opacity-0 group-[.page-loaded]/body:invisible">
		<span class="w-4 h-4 col-start-1 row-start-1 border-[2px] rounded-full animate-pulse-intense"></span>
		<span class="w-7 h-7 col-start-1 row-start-1 border-[2px] rounded-full animate-pulse-intense [animation-delay:0.2s!important;]"></span>
		<span class="w-10 h-10 col-start-1 row-start-1 border-[2px] rounded-full animate-pulse-intense [animation-delay:0.4s!important;]"></span>
	</div>

	<div id="app-loading-indicator" class="fixed top-0 left-0 right-0 z-[99] opacity-0 transition-opacity">
		<div class="progress [--tblr-progress-height:3px]">
			<div class="progress-bar progress-bar-indeterminate bg-[--tblr-primary] before:[animation-timing-function:ease-in-out] group-[.theme-dark]/body:bg-white"></div>
		</div>
	</div>

	@include('layout.header')

	@yield('content')

	@include('layout.footer')

	@if($setting->frontend_custom_js != null)
		<script src="{{$setting->frontend_custom_js}}"></script>
	@endif

	<script src="/assets/libs/vanillajs-scrollspy.min.js"></script>
	<script src="/assets/libs/flickity.pkgd.min.js"></script>
	<script src="/assets/js/frontend.js"></script>
	<script src="/assets/js/frontend/frontend-animations.js"></script>

</body>
</html>
