@extends('layouts.main')
@section('content')
    <div class="min-h-screen">
        @include('layouts.nav')
        <nav class="hidden sm:flex mt-40 justify-around">
            <ul class="flex gap-4 flex-wrap justify-center w-screen">
                <li class="rounded-2xl p-2 hover:bg-red-200 cursor-pointer">
                    <a>
                        <div class="flex flex-col items-center w-44">
                            <img class="w-12" src="{{ asset('img/category/promocao.png') }}" alt="">
                        </div>
                        <div class="text-center">
                            <span class="text-[#F0141E]">PROMOÇÕES</span>
                        </div>
                    </a>
                </li>
                <li class="rounded-2xl p-2 hover:bg-red-100 cursor-pointer">
                    <a>
                        <div class="flex flex-col items-center w-44">
                            <img class="w-12" src="{{ asset('img/category/pizza.png') }}" alt="">
                        </div>
                        <div class="text-center">
                            <span class="text-[#640028]">PIZZA</span>
                        </div>
                    </a>
                </li>
                <li class="rounded-2xl p-2 hover:bg-orange-100 cursor-pointer">
                    <a>
                        <div class="flex flex-col items-center w-44">
                            <img class="w-12" src="{{ asset('img/category/sobremesa.png') }}" alt="">
                        </div>
                        <div class="text-center">
                            <span class="text-[#FF5A1E]">SOBREMESA</span>
                        </div>
                    </a>
                </li>
                <li class="rounded-2xl p-2 hover:bg-violet-100 cursor-pointer">
                    <a>
                        <div class="flex flex-col items-center w-44">
                            <img class="w-12" src="{{ asset('img/category/bebida.png') }}" alt="">
                        </div>
                        <div class="text-center">
                            <span class="text-[#460078]">BEBIDA</span>
                        </div>
                    </a>
                </li>
                <li class="rounded-2xl p-2 hover:bg-yellow-100 cursor-pointer">
                    <a>
                        <div class="flex flex-col items-center w-44 ">
                            <img class="w-12" src="{{ asset('img/category/burguer.png') }}" alt="">
                        </div>
                        <div class="text-center">
                            <span class="text-[#FFDC32]">LANCHE</span>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="flex flex-col items-center mt-6 h-auto overflow-scroll sm:hidden">
            <div class="px-3 py-2 w-screen">
                <div class="text-xl my-3">Categorias</div>
                <ul class="flex gap-6 justify-around flex-wrap">
                    <li>
                        <a href="#" class="flex flex-col items-center">
                            <div>
                                <img class="w-12 rounded-xl" src="{{ asset('img/category/promocao.png') }}" alt="">
                            </div>
                            <div>
                                <span class="text-[0.5em] font-bold">PROMOÇÕES</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex flex-col items-center">
                            <div>
                                <img class="w-12 rounded-xl" src="{{ asset('img/category/pizza.png') }}" alt="">
                            </div>
                            <div>
                                <span class="text-[0.5em] font-bold">PIZZAS</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex flex-col items-center">
                            <div>
                                <img class="w-12 rounded-xl" src="{{ asset('img/category/sobremesa.png') }}" alt="">
                            </div>
                            <div>
                                <span class="text-[0.5em] font-bold">SOBREMESAS</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex flex-col items-center">
                            <div>
                                <img class="w-12 rounded-xl" src="{{ asset('img/category/bebida.png') }}" alt="">
                            </div>
                            <div>
                                <span class="text-[0.5em] font-bold">BEBIDAS</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex flex-col items-center">
                            <div>
                                <img class="w-12 rounded-xl" src="{{ asset('img/category/burguer.png') }}" alt="">
                            </div>
                            <div>
                                <span class="text-[0.5em] font-bold">LANCHES</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="px-3 py-2 w-screen">
                <div class="text-xl my-3">Promoções</div>
                <ul class="flex gap-4 overflow-x-scroll scrollbar-hide">
                    <li>
                        <div>
                            <div>
                                <img class="min-w-[5rem]" src="{{ asset('img/products/Rectangle 4.svg') }}" alt="">
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="text-sm">Refrigerante</span>
                                <span class="text-sm">400ml</span>
                                <span class="text-sm">R$ 5,00</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <img class="min-w-[5rem]" src="{{ asset('img/products/Rectangle 5.svg') }}" alt="">
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="text-sm">Refrigerante</span>
                                <span class="text-sm">400ml</span>
                                <span class="text-sm">R$ 5,00</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <img class="min-w-[5rem]" src="{{ asset('img/products/Rectangle 8.svg') }}" alt="">
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="text-sm">Refrigerante</span>
                                <span class="text-sm">400ml</span>
                                <span class="text-sm">R$ 5,00</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <img class="min-w-[5rem]" src="{{ asset('img/products/Rectangle 4.svg') }}" alt="">
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="text-sm">Refrigerante</span>
                                <span class="text-sm">400ml</span>
                                <span class="text-sm">R$ 5,00</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <img class="min-w-[5rem]" src="{{ asset('img/products/Rectangle 5.svg') }}"
                                    alt="">
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="text-sm">Refrigerante</span>
                                <span class="text-sm">400ml</span>
                                <span class="text-sm">R$ 5,00</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <img class="min-w-[5rem]" src="{{ asset('img/products/Rectangle 8.svg') }}"
                                    alt="">
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="text-sm">Refrigerante</span>
                                <span class="text-sm">400ml</span>
                                <span class="text-sm">R$ 5,00</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <img class="min-w-[5rem]" src="{{ asset('img/products/Rectangle 4.svg') }}"
                                    alt="">
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="text-sm">Refrigerante</span>
                                <span class="text-sm">400ml</span>
                                <span class="text-sm">R$ 5,00</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <img class="min-w-[5rem]" src="{{ asset('img/products/Rectangle 5.svg') }}"
                                    alt="">
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="text-sm">Refrigerante</span>
                                <span class="text-sm">400ml</span>
                                <span class="text-sm">R$ 5,00</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="px-3 py-2 w-screen">
                <div class="text-xl my-3">Promoções</div>
                <ul class="flex gap-4 overflow-x-scroll scrollbar-hide">
                    <li>
                        <div>
                            <div>
                                <img class="min-w-[5rem]" src="{{ asset('img/products/Rectangle 4.svg') }}"
                                    alt="">
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="text-sm">Refrigerante</span>
                                <span class="text-sm">400ml</span>
                                <span class="text-sm">R$ 5,00</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <img class="min-w-[5rem]" src="{{ asset('img/products/Rectangle 5.svg') }}"
                                    alt="">
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="text-sm">Refrigerante</span>
                                <span class="text-sm">400ml</span>
                                <span class="text-sm">R$ 5,00</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <img class="min-w-[5rem]" src="{{ asset('img/products/Rectangle 8.svg') }}"
                                    alt="">
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="text-sm">Refrigerante</span>
                                <span class="text-sm">400ml</span>
                                <span class="text-sm">R$ 5,00</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <img class="min-w-[5rem]" src="{{ asset('img/products/Rectangle 4.svg') }}"
                                    alt="">
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="text-sm">Refrigerante</span>
                                <span class="text-sm">400ml</span>
                                <span class="text-sm">R$ 5,00</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <img class="min-w-[5rem]" src="{{ asset('img/products/Rectangle 5.svg') }}"
                                    alt="">
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="text-sm">Refrigerante</span>
                                <span class="text-sm">400ml</span>
                                <span class="text-sm">R$ 5,00</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <img class="min-w-[5rem]" src="{{ asset('img/products/Rectangle 8.svg') }}"
                                    alt="">
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="text-sm">Refrigerante</span>
                                <span class="text-sm">400ml</span>
                                <span class="text-sm">R$ 5,00</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <img class="min-w-[5rem]" src="{{ asset('img/products/Rectangle 4.svg') }}"
                                    alt="">
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="text-sm">Refrigerante</span>
                                <span class="text-sm">400ml</span>
                                <span class="text-sm">R$ 5,00</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <img class="min-w-[5rem]" src="{{ asset('img/products/Rectangle 5.svg') }}"
                                    alt="">
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="text-sm">Refrigerante</span>
                                <span class="text-sm">400ml</span>
                                <span class="text-sm">R$ 5,00</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="fixed w-screen bottom-0 left-0 pb-3 flex flex-col gap-y-5 bg-white sm:hidden">
            <div class="flex items-center justify-center">
                <div class="w-1.5 h-1.5 bg-black transform rotate-45"></div>
                <div class="bg-black w-11/12 h-0.5 after:"></div>
                <div class="w-1.5 h-1.5 bg-black transform rotate-45"></div>
            </div>

            <div class="flex justify-around items-center">
                <a href="#" class="flex flex-col items-center">
                    <svg class="w-8 h-8 text-gray-800 dark:text-white fill-black" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                        <path
                            d="M13.383.076a1 1 0 0 0-1.09.217L11 1.586 9.707.293a1 1 0 0 0-1.414 0L7 1.586 5.707.293a1 1 0 0 0-1.414 0L3 1.586 1.707.293A1 1 0 0 0 0 1v18a1 1 0 0 0 1.707.707L3 18.414l1.293 1.293a1 1 0 0 0 1.414 0L7 18.414l1.293 1.293a1 1 0 0 0 1.414 0L11 18.414l1.293 1.293A1 1 0 0 0 14 19V1a1 1 0 0 0-.617-.924ZM10 15H4a1 1 0 1 1 0-2h6a1 1 0 0 1 0 2Zm0-4H4a1 1 0 1 1 0-2h6a1 1 0 1 1 0 2Zm0-4H4a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                    </svg>
                    <span>Pedidos</span>
                </a>
                <a href="#" class="flex flex-col items-center">
                    <svg class="w-8 h-8 text-gray-800 dark:text-white fill-black" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M8 15.5a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15Zm11.707 2.793-4-4a1 1 0 0 0-1.414 1.414l4 4a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    <span>Pesquisar</span>
                </a>
                <a href="#" class="flex flex-col items-center">
                    <svg class="w-8 h-8 text-gray-800 dark:text-white fill-black" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                        <path
                            d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                    </svg>
                    <span>Carrinho</span>
                </a>
            </div>

        </div>

    </div>
@endsection
