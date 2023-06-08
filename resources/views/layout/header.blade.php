<header class="absolute inset-x-0 top-0 z-50 text-white site-header">
	<div class="py-4 bg-[#343C57] text-center text-white text-sm bg-cover bg-blend-luminosity opacity-0 transition-all duration-500 group-[.page-loaded]/body:opacity-100" style="background-image: url(/assets/img/site/conffetti.png);">
		<p>
			<span class="mr-3 text-xs font-semibold tracking-wide uppercase">{{$fSetting->header_title}}</span>
			<span class="opacity-70">{{$fSetting->header_text}}</span>
		</p>
	</div>
	<nav class="flex items-center justify-between py-4 border-b border-white px-7 border-opacity-10 relative text-[14px] opacity-0 max-sm:px-2 transition-all duration-500 group-[.page-loaded]/body:opacity-100">
		<a href="{{route('index')}}" class="site-logo basis-1/3 max-lg:basis-1/3">
			<img src="/{{$setting->logo_path}}" @if ( isset($setting->logo_2x_path) ) srcset="/{{$setting->logo_2x_path}} 2x" @endif alt="{{$setting->site_name}} logo">
		</a>
		<div class="site-nav-container basis-1/3 transition-all duration-500 max-lg:w-1/3 max-lg:rounded-bl-xl max-lg:backdrop-blur-md max-lg:absolute max-lg:top-full max-lg:right-0 max-lg:bg-[#343C57] max-lg:text-white max-lg:overflow-hidden max-lg:max-h-0 max-sm:w-2/3 [&.lqd-is-active]:max-lg:max-h-screen">
			<ul class="flex items-center justify-center text-center gap-14 whitespace-nowrap max-xl:gap-10 max-lg:flex-col max-lg:items-end max-lg:gap-5 max-lg:p-10">
				<li>
					<a href="#banner" class="relative before:absolute before:-inset-x-4 before:-inset-y-2 before:rounded-lg before:bg-white before:bg-opacity-10 before:transition-all before:opacity-0 before:scale-75 hover:before:opacity-100 hover:before:scale-100 [&.active]:before:opacity-100 [&.active]:before:scale-100 active">
						{{__('Home')}}
					</a>
				</li>
                @if($fSectSettings->features_active == 1)
				<li>
					<a href="#features" class="relative before:absolute before:-inset-x-4 before:-inset-y-2 before:rounded-lg before:bg-white before:bg-opacity-10 before:transition-all before:opacity-0 before:scale-75 hover:before:opacity-100 hover:before:scale-100 [&.active]:before:opacity-100 [&.active]:before:scale-100">
						{{__('Features')}}
					</a>
				</li>
                @endif
                @if($fSectSettings->how_it_works_active == 1)
				<li>
					<a href="#how-it-works" class="relative before:absolute before:-inset-x-4 before:-inset-y-2 before:rounded-lg before:bg-white before:bg-opacity-10 before:transition-all before:opacity-0 before:scale-75 hover:before:opacity-100 hover:before:scale-100 [&.active]:before:opacity-100 [&.active]:before:scale-100">
						{{__('How it Works')}}
					</a>
				</li>
                @endif
                @if($fSectSettings->testimonials_active == 1)
				<li>
					<a href="#testimonials" class="relative before:absolute before:-inset-x-4 before:-inset-y-2 before:rounded-lg before:bg-white before:bg-opacity-10 before:transition-all before:opacity-0 before:scale-75 hover:before:opacity-100 hover:before:scale-100 [&.active]:before:opacity-100 [&.active]:before:scale-100">
						{{__('Testimonials')}}
					</a>
				</li>
                @endif
                @if($fSectSettings->pricing_active == 1)
				<li>
					<a href="#pricing" class="relative before:absolute before:-inset-x-4 before:-inset-y-2 before:rounded-lg before:bg-white before:bg-opacity-10 before:transition-all before:opacity-0 before:scale-75 hover:before:opacity-100 hover:before:scale-100 [&.active]:before:opacity-100 [&.active]:before:scale-100">
						{{__('Pricing')}}
					</a>
				</li>
                @endif
                @if($fSectSettings->faq_active == 1)
				<li>
					<a href="#faq" class="relative before:absolute before:-inset-x-4 before:-inset-y-2 before:rounded-lg before:bg-white before:bg-opacity-10 before:transition-all before:opacity-0 before:scale-75 hover:before:opacity-100 hover:before:scale-100 [&.active]:before:opacity-100 [&.active]:before:scale-100">
						{{__('FAQ')}}
					</a>
				</li>
                @endif
			</ul>
		</div>
		<div class="flex justify-end gap-2 basis-1/3 max-lg:basis-2/3">
			<x-button link="{{ LaravelLocalization::localizeUrl( route('login') ) }}" label="{{__('Sign in')}}" type="outline" border="border-[2px] border-white border-opacity-10" text="text-white" />
			<x-button link="{{ LaravelLocalization::localizeUrl( route('register') ) }}" label="{{__('Join hub')}}" border="border-[2px] border-white border-opacity-0" bg="bg-white bg-opacity-10" text="text-white" />
			<button class="flex items-center justify-center w-10 h-10 bg-white rounded-full mobile-nav-trigger shrink-0 bg-opacity-10 group lg:hidden">
				<span class="flex flex-col w-4 gap-1">
					@for ($i = 0; $i <= 1; $i++)
					<span class="inline-flex w-full h-[2px] bg-white transition-transform first:origin-left last:origin-right group-[&.lqd-is-active]:first:rotate-45 group-[&.lqd-is-active]:first:translate-x-[3px] group-[&.lqd-is-active]:first:-translate-y-[2px] group-[&.lqd-is-active]:last:-rotate-45 group-[&.lqd-is-active]:last:-translate-x-[2px] group-[&.lqd-is-active]:last:-translate-y-[8px]"></span>
					@endfor
				</span>
			</button>
		</div>
	</nav>
</header>
@if(env('APP_STATUS') == 'Demo')
<div class="fixed bottom-8 start-8 z-50">
	<a class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-[#262626] transition-all duration-300 hover:shadow-md hover:scale-110 hover:-translate-y-1" href="https://codecanyon.net/item/magicai-openai-content-text-image-chat-code-generator-as-saas/45408109" target="_blank" title="{{__('Buy on Envato')}}">
		<svg fill="#0ac994" xmlns="http://www.w3.org/2000/svg" width="19.824" height="22.629" viewBox="0 0 19.824 22.629">
			<path d="M17.217,9.263c-.663-.368-2.564-.14-4.848.566-4,2.731-7.369,6.756-7.6,13.218-.043.155-.437-.021-.515-.069a9.2,9.2,0,0,1-.606-7.388c.168-.28-.381-.624-.48-.525A11.283,11.283,0,0,0,1.6,17.091a9.84,9.84,0,0,0,17.2,9.571c3.058-5.481.219-16.4-1.574-17.4Z" transform="translate(-0.32 -9.089)"/>
		</svg>
	</a>
</div>
@endif
