@extends('layouts.app')

@section('title', 'Over ons')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12">
                    @include('partials/leftsidebar/hulp')
                    <div class="partners">
                        @include('partials/leftsidebar/partners')
                    </div>
                </div>
                <div class="col-lg-7 col-sm-12">
                    <h1>@lang('about.text-header-1')</h1>
                    <p>
                        @lang('about.text-paragraph-1')
                    </p>

                    <p>
                        @lang('about.text-paragraph-2')
                    </p>

                    <p>
                        @lang('about.text-paragraph-3')
                    </p>

                    <p>
                        @lang('about.text-paragraph-4')
                    </p>

                    <p>
                        <b>@lang('about.text-header-2')</b>
                        <ul>
                            <li>
                                @lang('about.list-item-1')
                            </li>

                            <li>
                                @lang('about.list-item-2')
                            </li>
                            <li>
                                @lang('about.list-item-3')
                            </li>
                            <li>
                                @lang('about.list-item-4')
                            </li>
                            <li>
                                @lang('about.list-item-5')
                            </li>
                        </ul>
                    </p>
                </div>

                <div class="col-lg-3 col-md-12">
                    @include('partials/rightsidebar/services')
                    @include('partials/rightsidebar/isl')
                    @include('partials/rightsidebar/live-chat')
                </div>

                <div class="col-lg-2 col-md-12 partners-mobile">
                    @include('partials/leftsidebar/partners')
                </div>
            </div>
        </div>
    </section>
@include('partials/footer')	
@endsection