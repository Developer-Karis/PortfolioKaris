@extends('adminlte::master')

@php( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') )

@if (config('adminlte.use_route_url', false))
@php( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' )
@else
@php( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' )
@endif

@section('adminlte_css')
@stack('css')
@yield('css')
@stop

@section('classes_body'){{ ($auth_type ?? 'login') . '-page' }}@stop
<link rel="stylesheet" href="{{asset('css/app.css')}}">

@section('body')
<div class="ocean">
    <div class="wave"></div>
    <div class="wave"></div>
</div>
<div class="container shadow p-3 mb-5 bg-white rounded" style="width: max-content; height: max-content; z-index: 99;">
    <div class="row p-0 m-0">
        <div class="col-6 pl-0">
            <img src="{{asset('img/auth.jpg')}}" alt="" width="600" height="415" style="mix-blend-mode: multiply;">
        </div>
        <div class="col-6">
            <div class="{{ $auth_type ?? 'login' }}-box m-auto">
                {{-- Card Box --}}
                <div class="border-0 {{ config('adminlte.classes_auth_card', 'card-outline card-primary') }}">

                    {{-- Card Body --}}
                    <div
                        class="card-body {{ $auth_type ?? 'login' }}-card-body {{ config('adminlte.classes_auth_body', '') }}">
                        @yield('auth_body')
                    </div>
                    {{-- Card Footer --}}
                    @hasSection('auth_footer')
                    <div class="text-center {{ config('adminlte.classes_auth_footer', '') }}">
                        @yield('auth_footer')
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('adminlte_js')
@stack('js')
@yield('js')
@stop