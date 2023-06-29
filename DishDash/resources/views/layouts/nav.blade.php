<div class="flex items-center justify-between w-screen py-2 sm:px-6 sm:bg-blue-700 sm:fixed sm:top-0 sm:left-0">
    <a href="#" class="p-2">
        <h2 class="font-bold text-4xl text-blue-750 sm:text-white font-karantina sm:text-6xl">DishDash</h2>
    </a>

    <div class="flex justify-center">
        <div x-data="{
            open: false,
            toggle() {
                if (this.open) {
                    return this.close()
                }
        
                this.$refs.button.focus()
        
                this.open = true
            },
            close(focusAfter) {
                if (!this.open) return
        
                this.open = false
        
                focusAfter && focusAfter.focus()
            }
        }" x-on:keydown.escape.prevent.stop="close($refs.button)"
            x-on:focusin.window="! $refs.panel.contains($event.target) && close()" x-id="['dropdown-button']"
            class="relative">
            <button x-ref="button" x-on:click="toggle()" :aria-expanded="open" :aria-controls="$id('dropdown-button')"
                type="button" class="flex items-center gap-2 bg-white px-5 py-2.5 sm:hidden rounded-md shadow-sm">
                <svg class="w-7 h-7 bg-bl fill-black sm:fill-white dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 18">
                    <path
                        d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                </svg>
            </button>

            <div x-ref="panel" x-show="open" x-transition.origin.top.left x-on:click.outside="close($refs.button)"
                :id="$id('dropdown-button')" style="display: none;"
                class="absolute right-0 mt-2 w-screen h-screen rounded-md bg-white shadow-md z-10">
                <span href="#"
                    class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                    {{ $person::where('id_user', '=', Auth::user()->id_user)->first()->first_name }}
                </span>

                <a href="{{ route('cardapio') }}"
                    class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm text-blue-700 hover:bg-gray-50 disabled:text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>

                    <span>Cardápio</span>
                </a>

                <a href="{{ route('profile.edit') }}"
                    class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm text-blue-700 hover:bg-gray-50 disabled:text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                    </svg>
                    <span>Meus dados</span>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                this.closest('form').submit();"
                        class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm text-red-600 hover:bg-gray-50 disabled:text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>
                        <span class="text-red-600">Sair</span>
                    </a>
                </form>
            </div>
        </div>
    </div>

    <div class="hidden sm:flex items-center gap-10 px-20">

        <a href="#" title="Pedidos">
            <svg class="w-8 h-8 text-gray-800 dark:text-white fill-black sm:fill-white" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                <path
                    d="M13.383.076a1 1 0 0 0-1.09.217L11 1.586 9.707.293a1 1 0 0 0-1.414 0L7 1.586 5.707.293a1 1 0 0 0-1.414 0L3 1.586 1.707.293A1 1 0 0 0 0 1v18a1 1 0 0 0 1.707.707L3 18.414l1.293 1.293a1 1 0 0 0 1.414 0L7 18.414l1.293 1.293a1 1 0 0 0 1.414 0L11 18.414l1.293 1.293A1 1 0 0 0 14 19V1a1 1 0 0 0-.617-.924ZM10 15H4a1 1 0 1 1 0-2h6a1 1 0 0 1 0 2Zm0-4H4a1 1 0 1 1 0-2h6a1 1 0 1 1 0 2Zm0-4H4a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
            </svg>
        </a>
        <div class="flex justify-center">
            <div x-data="{
                open: false,
                toggle() {
                    if (this.open) {
                        return this.close()
                    }
            
                    this.$refs.button.focus()
            
                    this.open = true
                },
                close(focusAfter) {
                    if (!this.open) return
            
                    this.open = false
            
                    focusAfter && focusAfter.focus()
                }
            }" x-on:keydown.escape.prevent.stop="close($refs.button)"
                x-on:focusin.window="! $refs.panel.contains($event.target) && close()" x-id="['dropdown-button']"
                class="relative">
                <button x-ref="button" x-on:click="toggle()" :aria-expanded="open"
                    :aria-controls="$id('dropdown-button')" type="button"
                    class="flex items-center gap-2 px-5 py-2.5  rounded-md shadow-sm">
                    <svg class="w-7 h-7 bg-bl fill-black sm:fill-white dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 18">
                        <path
                            d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                </button>

                <div x-ref="panel" x-show="open" x-transition.origin.top.left x-on:click.outside="close($refs.button)"
                    :id="$id('dropdown-button')" style="display: none;"
                    class="absolute right-0 mt-2 w-48 h-auto rounded-md bg-white shadow-md z-10">
                    <span href="#"
                        class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                        Olá, {{ $person::where('id_user', '=', Auth::user()->id_user)->first()->first_name }}
                    </span>
                    <a href="{{ route('cardapio') }}"
                        class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm text-blue-700 hover:bg-gray-50 disabled:text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>

                        <span>Cardápio</span>
                    </a>
                    <a href="{{ route('profile.edit') }}"
                        class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm text-blue-700 hover:bg-gray-50 disabled:text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                        </svg>
                        <span>Meus dados</span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                this.closest('form').submit();"
                            class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm text-red-600 hover:bg-gray-50 disabled:text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                            </svg>
                            <span class="text-red-600">Sair</span>
                        </a>
                    </form>
                </div>
            </div>
        </div>

        <a href="#" title="Carrinho">
            <svg class="w-8 h-8 text-gray-800 dark:text-white fill-black sm:fill-white" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                <path
                    d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
            </svg>
        </a>
    </div>
</div>

<div class="flex justify-center items-center w-[100%] sm:hidden">
    <div class="w-1.5 h-1.5 bg-black transform rotate-45"></div>
    <div class="bg-black w-8/12 h-0.5 after:"></div>
    <div class="w-1.5 h-1.5 bg-black transform rotate-45"></div>
</div>
