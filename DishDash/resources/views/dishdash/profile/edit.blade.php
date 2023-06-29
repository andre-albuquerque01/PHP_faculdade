@extends('layouts.main')
@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen">
        @include('layouts.nav')
        <div class="h-screen w-screen flex flex-col justify-center items-center bg-white border p-3 sm:h-auto sm:w-screen">
            <div class="text-center py-5">
                <h2 class="font-bold font-karantina text-6xl text-blue-700">Meus dados</h2>
            </div>
            <div class="relative flex justify-center bg-red-400 w-screen">
                @if (session('success'))
                    <ul class='absolute -bottom-1 pl-3 text-sm font-bold text-green-500 dark:text-green-400 space-y-1'>
                        <li class="text-ms sm:text-2xl">{{ session('success') }}</li>
                    </ul>
                @endif
            </div>
            <form method="POST" action="{{ route('profile.update') }}" class="flex flex-col gap-y-5">
                @method('PUT')
                @csrf
                <div id="field-details-person" class="flex flex-col md:flex-row gap-y-4">
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
                            <input type="text" id="first_name" name="first_name" value="{{ $person->first_name }}"
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
                            <input type="text" id="last_name" name="last_name" value="{{ $person->last_name }}"
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
                    <div id="field-cpf" class="relative">
                        <label for="cpf" class="pl-3">CPF</label>
                        <div class="flex px-3 items-center gap-3">
                            <div class="field-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                                </svg>

                            </div>
                            <input type="tel" id="cpf" name="cpf" value="{{ $person->cpf }}"
                                class="outline-black focus-within:border-black border border-black rounded-lg w-64 p-2 md:w-4/5" />
                        </div>
                        @if ($errors_cpf = $errors->get('cpf'))
                            <ul class='absolute pl-3 text-sm text-red-600 dark:text-red-400 space-y-1'>
                                @foreach ((array) $errors_cpf as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                <div id="field-datails-person-plus" class="flex flex-col md:flex-row gap-y-4">
                    <div id="field-email" class="relative">
                        <label for="email" class="pl-3">Email</label>
                        <div class="flex px-3 items-center gap-3">
                            <div class="field-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>

                            </div>
                            <input type="text" id="email" name="email" value="{{ $person->user->email }}"
                                class="outline-black focus-within:border-black border border-black rounded-lg w-64 p-2 md:w-80" />
                        </div>
                        @if ($errors_email = $errors->get('email'))
                            <ul class='absolute pl-3 text-sm text-red-600 dark:text-red-400 space-y-1'>
                                @foreach ((array) $errors_email as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div id="field-phone" class="relative">
                        <label for="phone" class="pl-3">Telefone</label>
                        <div class="flex px-3 items-center gap-3">
                            <div class="field-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                </svg>


                            </div>
                            <input type="tel" id="phone" name="phone" value="{{ $person->phone }}"
                                class="outline-black focus-within:border-black border border-black rounded-lg w-64 p-2 md:w-44" />
                        </div>
                        @if ($errors_phone = $errors->get('phone'))
                            <ul class='absolute pl-3 text-sm text-red-600 dark:text-red-400 space-y-1'>
                                @foreach ((array) $errors_phone as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                </div>
                <div id="field-gender" class="relative">
                    <label for="gender" class="pl-3">Gênero</label>
                    <div class="flex px-3 items-center gap-3">
                        <div class="field-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>

                        </div>
                        <select id="gender" name="gender"
                            class="outline-black focus-within:border-black border border-black bg-white rounded-lg w-64 p-2 md:w-64">
                            <option disabled selected>Escolha seu gênero</option>

                            @foreach ($genres as $gender)
                                @if ($gender->name === $person->gender)
                                    <option value="{{ $gender->name }}" selected>{{ $gender->name }}</option>
                                @else
                                    <option value="{{ $gender->name }}">{{ $gender->name }}</option>
                                @endif
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button type="submit" id="form"
                        class="text-white bg-blue-700 w-60 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2">
                        Salvar
                    </button>
                </div>

            </form>
        </div>
    </div>
    <script src="/js/masks.js"></script>
@endsection
