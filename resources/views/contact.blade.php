@extends('layout')

@section('head')
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="wrapper">
        <div id="page" class="container">
            <div class="bg-grey-100 flex item-center justify-center h-full">
                <form action="/contact" method="POST"
                      class="bg-white p-6 rounded shadow-md" style="width: 300px">
                    @csrf
                    <div class="mb-5">
                        <label for="email" class="block text-xs uppercase font-semibold mb-1">E-Mail Address</label>
                        <input
                            id="email"
                            name="email"
                            class="border px-2 py-1 text-sm w-full">
                        @error('email')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="bg-blue-500 py-2 text-white rounded-full text-sm w-full">
                        Email Me
                    </button>
                    @if(session('message'))
                        <div>
                            <p class="text-green-500 text-xs mt-2">
                                {{ session('message') }}
                            </p>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection

