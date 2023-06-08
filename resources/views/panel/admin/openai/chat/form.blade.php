@extends('panel.layout.app')
@section('title', 'Add or Edit Chat Template')
@section('additional_css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <div class="page-header" xmlns="http://www.w3.org/1999/html">
        <div class="container-xl">
            <div class="row g-2 items-center">
                <div class="col">
					<a href="{{ LaravelLocalization::localizeUrl( route('dashboard.index') ) }}" class="page-pretitle flex items-center">
						<svg class="!me-2 rtl:-scale-x-100" width="8" height="10" viewBox="0 0 6 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path d="M4.45536 9.45539C4.52679 9.45539 4.60714 9.41968 4.66071 9.36611L5.10714 8.91968C5.16071 8.86611 5.19643 8.78575 5.19643 8.71432C5.19643 8.64289 5.16071 8.56254 5.10714 8.50896L1.59821 5.00004L5.10714 1.49111C5.16071 1.43753 5.19643 1.35718 5.19643 1.28575C5.19643 1.20539 5.16071 1.13396 5.10714 1.08039L4.66071 0.633963C4.60714 0.580392 4.52679 0.544678 4.45536 0.544678C4.38393 0.544678 4.30357 0.580392 4.25 0.633963L0.0892856 4.79468C0.0357141 4.84825 0 4.92861 0 5.00004C0 5.07146 0.0357141 5.15182 0.0892856 5.20539L4.25 9.36611C4.30357 9.41968 4.38393 9.45539 4.45536 9.45539Z"/>
						</svg>
						{{__('Back to dashboard')}}
					</a>
                    <h2 class="page-title mb-2">
                        {{__('Add or Edit Chat Template')}}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body pt-6">
        <div class="container-xl">
			<div class="row">
				<div class="col-md-5 mx-auto">
					<form id="custom_template_form" onsubmit="return templateChatSave({{$template!=null ? $template->id : null}});" action="">
						<div class="row">
							<div class="col-md-12 col-xl-12">

								<div class="row">
									<div class="col-md-12">
										<div class="mb-[20px]">
											<label class="form-label">{{__('Template Name')}}</label>
											<input type="text" class="form-control" id="name" name="name" value="{{$template!=null ? $template->name : null}}">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-[20px]">
											<label class="form-label">{{__('Template Short Name')}}</label>
                                            <input type="text" class="form-control" id="short_name" name="short_name" value="{{$template!=null ? $template->short_name : null}}">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-[20px]">
											<label class="form-label">{{__('Description')}} </label>
                                            <textarea class="form-control" id="description" name="description">{{$template!=null ? $template->description : null}}</textarea>
										</div>
									</div>
                                    <div class="col-md-12">
                                        <div class="mb-[20px]">
                                            <label class="form-label">{{__('Template Role')}}</label>
                                            <input type="text" class="form-control" id="role" name="role" placeholder="Finance Expert" value="{{$template!=null ? $template->role : null}}">
                                        </div>
                                        <div class="alert alert-info">
                                            {{__('Assign the role to the AI. You are a Finance Expert.')}}
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-[20px]">
                                            <label class="form-label">{{__('Human Name')}} </label>
                                            <input type="text" class="form-control" id="human_name" placeholder="Allison Burgers" name="human_name" value="{{$template!=null ? $template->human_name : null}}">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-[20px]">
                                            <label class="form-label">{{__('Helps With')}} </label>
                                            <textarea class="form-control" id="helps_with" placeholder="I can help you with managing your finance" name="helps_with">{{$template!=null ? $template->helps_with : null}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="flex items-center gap-2 mb-[20px]">
                                            <label class="form-label shrink-0 m-0">{{__('Template Color')}}</label>
											<div class="rounded-md w-12 h-8 overflow-hidden">
												<input type="color" class="w-full h-full p-0 border-none cursor-pointer appearance-none" id="color" name="color" value="{{$template!=null ? $template->color : '#8fd2d0'}}">
											</div>
                                        </div>
                                    </div>
								</div>

								<button form="custom_template_form" id="custom_template_button" class="btn btn-primary w-100">
									{{__('Save')}}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
        </div>
    </div>

@endsection

@section('script')
    <script src="/assets/js/panel/openai.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
