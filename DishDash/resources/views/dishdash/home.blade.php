@extends('layouts.main')
@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen">
        <div
            class="h-screen w-screen flex flex-col justify-center items-center bg-white border rounded-lg p-3 sm:h-auto sm:w-96">
            <div class="text-center py-5">
                <h2 class="font-bold font-karantina text-6xl text-blue-700">DishDash</h2>
            </div>
            <div class="flex flex-col gap-y-3">
                <div id="field-name">
                    <label for="name" class="pl-3">Nome</label>
                    <div class="flex px-3 items-center gap-3">
                        <div class="field-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </div>
                        <input type="text" id="name" class="border border-black rounded-lg w-64 p-2 md:w-72" />
                    </div>

                </div>
                <div id="field-email">
                    <label for="email" class="pl-3">Email</label>
                    <div class="flex px-3 items-center gap-3">
                        <div class="field-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>

                        </div>
                        <input type="text" id="email" class="border border-black rounded-lg w-64 p-2 md:w-72" />
                    </div>
                </div>
                <div id="field-password">
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
                            class="relative focus-within:outline outline-1 outline-black focus-within:border-black flex border border-black rounded-lg items-center w-64 md:w-72 container-operation-input">
                            <input type="password" id="password"
                                class="outline-none rounded-lg w-64 p-2 pr-11 md:w-64 input-password" />
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 absolute right-2 cursor-pointer eye" id="icon-eye">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 absolute right-2 cursor-pointer eye-slash hidden"
                                id="icon-eye-slash">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div id="field-password-confirmation">
                    <label for="password-confirmation" class="pl-3">Confirmação da senha</label>
                    <div class="flex px-3 items-center gap-3">
                        <div class="field-icon">
                            <svg xmlns=" http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </div>
                        <div
                            class="relative focus-within:outline outline-1 outline-black focus-within:border-black flex border border-black rounded-lg items-center w-64 md:w-72 container-operation-input">
                            <input type="password" id="password-confirmation"
                                class="outline-none rounded-lg w-64 p-2 pr-11 md:w-64 input-password" />
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 absolute right-2 cursor-pointer eye"
                                id="icon-eye-confirmation">
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
                </div>
                <div class="text-right">
                    <input type="checkbox" name="term" id="term"> Li os termos de condição de uso e concordo
                </div>
                <div class="flex justify-center">
                    <button type="submit" id="form"
                        class="bg-blue-700 hover:bg-blue-400 px-6 py-1 text-white border rounded-full mx-20">
                        Criar conta
                    </button>
                </div>
                <div class="sm:min-w-full min-w-[80%] border-t-2 border-black border m-3"></div>
                <h4 class="text-center">
                    Já possui cadastro? <a href="{{ route('login') }}"
                        class="font-bold text-blue-700 hover:text-blue-400">Logue-se</a>
                </h4>
            </div>
        </div>
    @endsection
