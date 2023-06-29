@extends('layouts.main')
@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen">
        <div class="h-screen w-screen flex flex-col justify-center items-center bg-white border p-3 sm:h-auto sm:w-screen">
            <div class="text-center py-5">
                <h2 class="font-bold font-karantina text-6xl text-blue-700">DishDash</h2>
            </div>
            <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-y-5">
                @csrf
                <div id="field-name" class="flex flex-col md:flex-row gap-y-4">
                    <div id="field-first_name" class="relative">
                        <label for="first_name" class="pl-3">Nome</label>
                        <div class="flex px-3 items-center gap-3">
                            <div class="field-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                            </div>
                            <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"
                                class="outline-black focus-within:border-black border border-black rounded-lg w-64 p-2 md:w-52" />
                        </div>
                        @if ($errors_first_name = $errors->get('first_name'))
                            <ul class='absolute pl-3 text-sm text-red-600 dark:text-red-400 space-y-1'>
                                @foreach ((array) $errors_first_name as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div id="field-last_name" class="relative">
                        <label for="last_name" class="pl-3">Sobrenome</label>
                        <div class="flex px-3 items-center gap-3">
                            <div class="field-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                            </div>
                            <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                                class="outline-black focus-within:border-black border border-black rounded-lg w-64 p-2 md:w-52" />
                        </div>
                        @if ($errors_last_name = $errors->get('last_name'))
                            <ul class='absolute pl-3 text-sm text-red-600 dark:text-red-400 space-y-1'>
                                @foreach ((array) $errors_last_name as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                <div id="field-email" class="relative">
                    <label for="email" class="pl-3">Email</label>
                    <div class="flex px-3 items-center gap-3">
                        <div class="field-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>

                        </div>
                        <input type="text" id="email" name="email" value="{{ old('email') }}"
                            class="outline-black focus-within:border-black border border-black rounded-lg w-64 p-2 md:w-11/12" />
                    </div>
                    @if ($errors_email = $errors->get('email'))
                        <ul class='absolute pl-3 text-sm text-red-600 dark:text-red-400 space-y-1'>
                            @foreach ((array) $errors_email as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div id="field-password" class="relative">
                    <label for="password" class="pl-3">Senha</label>
                    <div class="flex px-3 items-center gap-3">
                        <div class="field-icon">
                            <svg xmlns=" http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </div>
                        <div
                            class="relative focus-within:outline outline-1 outline-black focus-within:border-black flex border border-black rounded-lg items-center w-64 md:w-11/12">
                            <input type="password" id="password" name="password"
                                class="outline-none rounded-lg w-64 p-2 pr-11 md:w-11/12" />
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 absolute right-2 cursor-pointer eye" id="icon-eye">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6 absolute right-2 cursor-pointer eye-slash hidden" id="icon-eye-slash">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                            </svg>
                        </div>
                    </div>
                    @if ($errors_password = $errors->get('password'))
                        <ul class='absolute pl-3 text-sm text-red-600 dark:text-red-400 space-y-1'>
                            @foreach ((array) $errors_password as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div id="field-password-confirmation" class="relative">
                    <label for="password-confirmation" class="pl-3">Confirmação da senha</label>
                    <div class="flex px-3 items-center gap-3">
                        <div class="field-icon">
                            <svg xmlns=" http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </div>
                        <div
                            class="relative focus-within:outline outline-1 outline-black focus-within:border-black flex border border-black rounded-lg items-center w-64 md:w-11/12">
                            <input type="password" id="password-confirmation" name="password-confirmation"
                                class="outline-none rounded-lg w-64 p-2 pr-11 md:w-11/12" />
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6 absolute right-2 cursor-pointer eye" id="icon-eye-confirmation">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6 absolute right-2 cursor-pointer eye-slash hidden" id="icon-eye-slash">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                            </svg>

                        </div>
                    </div>
                    @if ($errors_password_confirmation = $errors->get('password-confirmation'))
                        <ul class='absolute pl-3 text-sm text-red-600 dark:text-red-400 space-y-1'>
                            @foreach ((array) $errors_password_confirmation as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="relative text-right sm:w-11/12 sm:text-left sm:pl-3">
                    <input type="checkbox" name="term" id="term"> <label for="term">Li os termos de
                        condição de uso e concordo</label>
                    @if ($errors_term = $errors->get('term'))
                        <ul class='absolute pl-3 sm:pl-0 text-sm text-red-600 dark:text-red-400 space-y-1'>
                            @foreach ((array) $errors_term as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="flex justify-center">
                    <button type="submit" id="form"
                        class="text-white bg-blue-700 w-60 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2">
                        Registrar
                    </button>
                </div>
                <div class="sm:min-w-full min-w-[80%] border-t-2 border-black border m-3"></div>
                <h4 class="text-center">
                    Já possui cadastro? <a href="{{ route('login') }}"
                        class="font-bold text-blue-700 hover:text-blue-400">Logue-se</a>
                </h4>
            </form>
        </div>
    </div>
    <script src="/js/handle-visibility-password.js"></script>
@endsection
