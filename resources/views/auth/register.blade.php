@extends('layouts.app')

@section('content')
    <div class="mx-auto h-full flex justify-center items-center bg-gray-300">
        <div class="w-96 bg-blue-900 rounded-lg shadow-all p-6">
            <svg class="fill-current text-white w-16  " viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"
                 preserveAspectRatio="xMinYMin meet">
                <g fill="#F35045">
                    <path
                        d="M160.445 208c2 2.889 3.222 2.667 4.777 2 1.555-.667 81.556-27.667 84-28.555 2.444-.889 1.667-1.667.89-2.89-.778-1.222-27.445-37.444-28.779-39.555-1.333-2.111-2-1.667-4.111-1l-84.805 22.067S158.445 205.11 160.445 208zM256 171.115v-42.398c-9.541 2.542-21.609 5.756-26.373 7.023 7.187 9.616 18.423 24.665 26.373 35.375zM229.545 83.521c-1.307.297-30.247 5.527-32.03 5.764-1.782.238-1.188 1.248-.475 2.258l25.467 34.943s31.139-7.725 33.041-8.141c.154-.034.305-.07.452-.107v-4.627c-5.66-7.177-21.08-26.718-22.413-28.544-1.604-2.199-2.734-1.842-4.042-1.546z"/>
                    <path
                        d="M47.456 28.634c6.267-.285 6.839 1.141 9.592 5.224l69.17 115.642 86.974-20.835c-4.819-6.831-26.695-37.846-28.81-40.806-2.376-3.328.06-4.873 3.923-5.526 3.862-.654 37.14-6.24 39.992-6.656 2.853-.416 5.112-1.426 9.746 4.16 2.372 2.858 10.412 12.87 17.957 22.255V48c0-13.222-4.695-24.528-14.083-33.917C232.528 4.695 221.222 0 208 0H48C34.778 0 23.472 4.695 14.083 14.083 8.698 19.47 4.865 25.487 2.57 32.134c15.678-1.288 40.501-3.3 44.887-3.5z"/>
                    <path
                        d="M168.289 223.564c-7.334 2.222-10.623 3.325-15.4-3.342-3.578-4.993-22.927-39.843-32.414-57.023-17.955 4.702-50.814 13.278-60.29 15.555-9.248 2.222-13.198-3.323-14.717-6.74C44.403 169.616 17.289 111.158 0 73.65V208c0 13.223 4.695 24.527 14.083 33.917C23.472 251.305 34.778 256 48 256h160c13.222 0 24.528-4.695 33.917-14.083C251.305 232.527 256 221.223 256 208v-15.781c-19.64 7.184-82.77 29.848-87.711 31.345z"/>
                    <path
                        d="M60.412 165.288c2.6-.595 51.313-12.253 52.353-12.476 1.04-.223 1.708-.817.594-2.747-1.114-1.93-64.934-112.09-64.934-112.09-.589-1.011-.421-1.348-2.022-1.264-1.427.076-37.538 3.298-45.898 3.996a51.038 51.038 0 0 0-.461 5.331c8.487 17.375 57.199 117.837 57.472 118.655.297.892.297 1.189 2.896.595z"/>
                </g>
            </svg>

            <h1 class="text-white text-3xl pt-8">{{__('Join Us') }}</h1>
            <h2 class="text-blue-300">{{__('Enter your information below ') }}</h2>

            <form class="pt-8" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="relative">
                    <label for="name"
                           class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">{{ __('Name') }}</label>


                    <input id="name" type="text" class="pt-8 w-full rounded p-3 bg-blue-800  text-gray-100 outline-none focus:bg-blue-700
                             @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{__('Enter you name') }}"
                           autocomplete="name" autofocus>

                    @error('name')
                    <span class="text-red-600 text-sm pt-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                </div>

                <div class="relative  pt-3">
                    <label for="email" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">{{ __('E-Mail Address') }}</label>

                    <div>
                        <input id="email" type="email" class="pt-8 w-full rounded p-3 bg-blue-800  text-gray-100 outline-none focus:bg-blue-700 @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" placeholder="your@email.com"  autocomplete="email">
                        @error('email')
                        <span class="text-red-600 text-sm pt-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="relative  pt-3">
                    <label for="password" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">{{ __('Password') }}</label>

                    <div>
                        <input id="password" type="password"
                               class="pt-8 w-full rounded p-3 bg-blue-800  text-gray-100 outline-none focus:bg-blue-700 @error('password') is-invalid @enderror" name="password"
                               autocomplete="new-password" placeholder="Password">

                        @error('password')
                        <span class="text-red-600 text-sm pt-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="relative  pt-3">
                    <label for="password-confirm"
                           class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">{{ __('Confirm Password') }}</label>
                    <div>
                        <input id="password-confirm" type="password" class="pt-8 w-full rounded p-3 bg-blue-800  text-gray-100 outline-none focus:bg-blue-700" name="password_confirmation"
                                autocomplete="new-password" placeholder="{{__('Confirm') }}">
                    </div>
                </div>

                <div class="pt-8">
                        <button type="submit" class="w-full py-2 px-3 text-left  bg-gray-400 uppercase rounded text-blue-800 font-bold">
                            {{ __('Register') }}
                        </button>
                </div>
                <div class="flex  pt-8 text-white justify-between text-sm font-bold">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    <a class="btn btn-link" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
