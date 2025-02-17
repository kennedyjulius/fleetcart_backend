@extends('storefront::public.layout')

@section('title', trans('storefront::brands.brands'))

@section('content')
    <section class="all-brands-wrap">
        <div class="container">
            <div class="all-brands">
                @if ($brands->isNotEmpty())
                    <div class="all-brands-inner">
                        @foreach ($brands as $brand)
                            <div class="col-lg-3 col-md-6 col-9">
                                <a href="{{ $brand->url() }}" class="brand-image">
                                    @if ($brand->logo->exists)
                                        <img src="{{ $brand->logo->path }}" alt="Brand image">
                                    @else
                                        <img src="{{ asset('build/assets/image-placeholder.png') }}" class="image-placeholder" alt="Brand image">
                                    @endif
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="empty-message">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 500 500"
                            preserveAspectRatio="xMidYMid meet">
                            <path d="M195.94,408.49A12.49,12.49,0,0,0,204,384.84a142.43,142.43,0,0,1-96.51-134.9c0-78.55,63.9-142.46,142.46-142.46a142.48,142.48,0,0,1,45.94,277.35,12.5,12.5,0,0,0,8.05,23.66,167.49,167.49,0,0,0-54-326c-92.33,0-167.44,75.11-167.44,167.44A167.4,167.4,0,0,0,195.94,408.49Zm0,0"/>
                            <path d="M258.77,396.06a12.51,12.51,0,1,0,3.65,8.83,12.59,12.59,0,0,0-3.65-8.83Zm0,0"/>
                            <path d="M197.39,473.91a72.68,72.68,0,0,0,101.47.84,47.73,47.73,0,0,1,40.19-12.69,72.67,72.67,0,0,0,82.59-58.95,47.69,47.69,0,0,1,25.06-33.89A72.68,72.68,0,0,0,478.86,273a47.7,47.7,0,0,1,.35-42.15,72.63,72.63,0,0,0-20.77-90.42L437.9,126.15a47.73,47.73,0,0,1-13.73-26.38A72.87,72.87,0,0,0,405,61.32l0-.07c-7-7.87-20.13-14.79-20.13-14.79a72.94,72.94,0,0,0-42.37-7,47.69,47.69,0,0,1-29.25-5.39L293.68,18.6a72.62,72.62,0,0,0-92.54,6.64A47.69,47.69,0,0,1,161,37.92a72.68,72.68,0,0,0-82.59,59A47.69,47.69,0,0,1,53.3,130.77,72.67,72.67,0,0,0,21.14,227a47.7,47.7,0,0,1-.35,42.15,72.68,72.68,0,0,0,30.55,96.76,47.71,47.71,0,0,1,24.49,34.3A72.84,72.84,0,0,0,94.32,438l21.55,15.93a72.86,72.86,0,0,0,41.55,6.61A47.67,47.67,0,0,1,197.39,473.91Zm-43.26-38.13a47.8,47.8,0,0,1-53.66-39.67,72.52,72.52,0,0,0-37.24-52.17,47.78,47.78,0,0,1-20.08-63.62,72.53,72.53,0,0,0,.53-64.1,47.78,47.78,0,0,1,21.15-63.28,72.5,72.5,0,0,0,38.1-51.54,47.8,47.8,0,0,1,54.32-38.76,72.51,72.51,0,0,0,61.11-19.3,47.79,47.79,0,0,1,66.72.55,72.47,72.47,0,0,0,60.79,20.32,47.8,47.8,0,0,1,53.66,39.67A72.41,72.41,0,0,0,428,150.46a73.61,73.61,0,0,0,8.8,5.58,47.79,47.79,0,0,1,20.08,63.63,72.56,72.56,0,0,0-.54,64.1,47.78,47.78,0,0,1-21.14,63.28,72.54,72.54,0,0,0-38.11,51.54,47.77,47.77,0,0,1-54.3,38.76,72.52,72.52,0,0,0-61.13,19.3,47.77,47.77,0,0,1-66.71-.56,72.5,72.5,0,0,0-60.79-20.31"/>
                            <path d="M249.84,351.5a12,12,0,0,1-4.83-.8c-6.68-2.6-7.57-10.73-8-17l0-.21L225.45,176.16c-.28-3.75-.52-7.7,1.1-11.1,1.49-3.14,4.36-5.37,7.16-7.44,4.79-3.55,10.08-7.15,16-7.17,5.79,0,11,3.36,15.69,6.74,3.4,2.44,6.93,5.19,8.32,9.13,1,2.77.78,5.8.56,8.72L262.66,335.11c-.26,3.57-.56,7.28-2.32,10.4A12.51,12.51,0,0,1,249.84,351.5Z"/>
                        </svg>

                        <h2>{{ trans('storefront::brands.no_brand_found') }}</h2>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection

@push('globals')
    @vite([
        'modules/Storefront/Resources/assets/public/sass/pages/brands/main.scss',
    ])
@endpush
