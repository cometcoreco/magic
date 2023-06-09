@extends('panel.layout.app')
@section('title', __('Generators List'))

@section('content')
    <div class="page-header">
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
                        {{__('Generators List')}}
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
                    <form id="item_form" onsubmit="return generatorlistCreateOrUpdate({{$item!=null ? $item->id : null}});" action="">
                        <div class="row">
                            <div class="col-md-12 col-xl-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">{{__('Menu Title')}}</label>
                                            <input type="text" class="form-control" id="menu_title" name="menu_title" value="{{$item!=null ? $item->menu_title : null}}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">{{__('Subtitle One')}}</label>
                                            <input type="text" class="form-control" id="subtitle_one" name="subtitle_one" value="{{$item!=null ? $item->subtitle_one : null}}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">{{__('Subtitle Two')}}</label>
                                            <input type="text" class="form-control" id="subtitle_two" name="subtitle_two" value="{{$item!=null ? $item->subtitle_two : null}}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">{{__('Title')}}</label>
                                            <input type="text" class="form-control" id="title" name="title" value="{{$item!=null ? $item->title : null}}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">{{__('Text')}}</label>
                                            <textarea name="text" id="text" class="form-control" rows="10" required>{{$item!=null ? $item->text : null}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">{{__('Image')}}</label>
                                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">{{__('Image Title')}}</label>
                                            <input type="text" class="form-control" id="image_title" name="image_title" value="{{$item!=null ? $item->image_title : null}}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">{{__('Image Subtitle')}}</label>
                                            <input type="text" class="form-control" id="image_subtitle" name="image_subtitle" value="{{$item!=null ? $item->image_subtitle : null}}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">{{__('Color Code (Please enter like code. For example: #FFFFFF)')}}</label>
                                            <input type="text" class="form-control" id="color" name="color" value="{{$item!=null ? $item->color : null}}" required>
                                        </div>
                                    </div>

                                </div>

                                <button form="item_form" id="item_button" class="btn btn-primary w-100">
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
    <script src="/assets/js/panel/settings.js"></script>
@endsection
