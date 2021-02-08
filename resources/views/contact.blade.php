@extends('layouts.default')

@section('content')

@include('partials.banner')

@include('partials.navbar')


<div class="container mx-auto my-10">
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Contact</h3>
                <p class="mt-1 text-sm text-gray-600">
                Envoie-moi du love.. 😘❤️👩‍❤️‍👩👩‍❤️‍👨👨‍❤️‍👨👨‍❤️‍💋‍👨💏💑👩‍❤️‍💋‍👨👩‍❤️‍💋‍👩💚💚💞💘💗😻
                </p>
                <img src="https://i.pinimg.com/originals/0d/cc/64/0dcc645a93980d652d8cf616735b7fa9.gif" alt="">
            </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
            @if ($errors->any())
                <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-pink-500">
                    <span class="inline-block align-middle">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>♥️ {{ $error }} ♥️</li>
                            @endforeach
                        </ul>
                    </span>
                </div>
            @endif
            <form action="{{ route('contact.send') }}" method="POST">
            @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="first_name" class="block text-sm font-medium text-gray-700">Prénom</label>
                        <input value="{{ old('first_name')}}" type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="last_name" class="block text-sm font-medium text-gray-700">Nom de famille</label>
                        <input value="{{ old('last_name')}}" type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Adresse email</label>
                        <input value="{{ old('email')}}" type="text" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>


                    <div class="col-span-6 sm:col-span-3 lg:col-span-6">
                        <label for="message" class="block text-sm font-medium text-gray-700">Drague-moi 😏</label>
                        <textarea rows="6" name="message" id="message" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ old('message') }}</textarea>
                    </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Envoie mon chou
                    </button>
                </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

@include('partials.cta')


@endSection