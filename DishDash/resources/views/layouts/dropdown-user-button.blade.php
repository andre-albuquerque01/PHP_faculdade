<button x-ref="button" x-on:click="toggle()" :aria-expanded="open" :aria-controls="$id('dropdown-button')" type="button"
    class="flex items-center gap-2 bg-white px-5 py-2.5 rounded-md shadow-sm">
    <svg class="w-7 h-7 bg-bl fill-black sm:fill-white dark:text-white" aria-hidden="true"
        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 18">
        <path
            d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
    </svg>
</button>
