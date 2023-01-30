@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Info Pengguna</h1>
@stop

@section('content')
<!-- ============================================-->
<!-- <section> begin ============================-->
        <!-- <form method="POST" action="{{ route('userStore') }}">
                @csrf -->


        <form action="{{route('userUpdate', $user->id)}}" method="post">
            @csrf

            
            <!-- ID  -->
            <div class="mt-4">
                <x-input-label for="id" :value="__('ID')" />

                <x-text-input id="id" class="block mt-1 w-full" type="text" name="id" :value="($user->id)" readonly />

                <x-input-error :messages="$errors->get('id')" class="mt-2" />
            </div>

            <!-- name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="($user->name)" />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="($user->email)" />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Role -->
             <div class="mt-4">
                <x-input-label for="is_admin" :value="__('Is_Admin')" />

                <x-text-input id="is_admin" class="block mt-1 w-full" type="text" name="is_admin" :value="($user->is_admin)" />

                <x-input-error :messages="$errors->get('is_admin')" class="mt-2" />
            </div>

     <!-- Password -->
     <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

           <!-- Submit -->
            <button class="button">
                        {{ __('Submit') }}
            </button>
                <!-- Reset -->
            </form>
            <form action="{{route('userDelete', $user->id)}}" method="post">
                @csrf
                <button class="button">
                        {{ __('Delete') }}
                </button>
            </form>
        </div>
    </div>
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