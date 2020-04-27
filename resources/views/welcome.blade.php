{{--  @extends('layouts.app')
@section('content')

<my-header></my-header>
<div class="translogistic-wrapper" id="general-wrapper" style="transform: none;margin-top: 175px;">

    <transition name="fade">
        <router-view></router-view>
    </transition>
</div>
<my-footer></my-footer>
@endsection  --}}

@extends('layouts.app')
@section('content') @auth
<my-header :user="{{ json_encode($auth_user) }}"></my-header>
<transition name="fade">
    <router-view :user="{{ json_encode($auth_user) }}"></router-view>
</transition>
@endauth @guest
<my-header></my-header>
<transition name="fade">
    <router-view></router-view>
</transition>

@endguest
<my-footer></my-footer>
@endsection
