@extends('layouts.app')

@section('content')

    <div class="flex text-center mt-16">
        <div class="container mx-auto w-3/12 space-x-8">
            <router-link to="/">Home</router-link>
            <router-link to="/login">Login</router-link>
            <router-link to="/register">Register</router-link>
        </div>
    </div>

    <div class="flex flex-wrap w-full justify-center items-center pb-24">
        <div class="flex flex-wrap w-3/12 bg-gray-200 rounded-xl transition-all duration-500">
            <router-view></router-view>
        </div>
    </div>

@endsection