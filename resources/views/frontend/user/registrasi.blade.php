@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Registrasi Pengguna</h1>
@stop

@section('content')

<form method="POST" action="{{ url('userStore') }}">
                @csrf
                <input type="hidden" name="is_admin" value="0">
                <!-- Name -->
                <div class="mt-4">
                    <x-input-label for="name" :value="__('Name')" />

                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>


                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />

                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Submit -->
                <button type="submit" class="mt-4">
                        {{ __('Submit') }}
                </button>
                <!-- Reset -->
                <button type="reset" class="mt-4">
                        {{ __('Reset') }}
                </button>
            </form>
        </div>
    <!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="{{ asset('vendors/@popperjs/popper.min.js')}}"></script>
<script src="{{ asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{ asset('vendors/is/is.min.js')}}"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="{{ asset('vendors/fontawesome/all.min.js')}}"></script>
<script src="{{ asset('assets/js/theme.js')}}"></script>
@stop