@extends('layouts.app')
@section('content')

<myadmin-header :user="{{ json_encode($auth_user) }}"></myadmin-header>
<router-view :user="{{ json_encode($auth_user) }}"></router-view>
@endsection