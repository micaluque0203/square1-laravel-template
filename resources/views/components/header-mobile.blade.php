<div class="md:hidden flex justify-between items-center my-4 px-4">
    <span class="hidden light:inline-block">
        <x-svg-moovingo-icon-white/>
    </span>
    <span class="inline-block light:hidden">
        <x-svg-moovingo-icon-color/>
    </span>
    <div class="flex items-center space-x-4 ">
        <a class="inline-block light:hidden block bg-primary-500 text-gray-100 py-4 px-5 rounded-md font-semibold leading-4" href="#">Browse Listings</a>
        <a class="hidden light:inline-block block border border-gray-200 text-gray-100 py-4 px-5 rounded-md font-semibold leading-4" href="#">Browse Listings</a>
        <button aria-label="Menu open" class="hidden light:inline-block" x-data x-on:click="$dispatch('menu-toggle')">
            <x-svg-menu-white/>
        </button>
        <button aria-label="Menu open" class="inline-block light:hidden" x-data x-on:click="$dispatch('menu-toggle')">
            <x-svg-menu-black/>
        </button>
    </div>
</div>

<div class="bg-gray-200 h-screen w-screen absolute top-0" x-on:menu-toggle.window="open = !open" x-data="{open: false}" x-show="open === true">
    <div class="w-full flex justify-end">
        <button aria-label="Menu close" class="text-gray-800 p-3" x-on:click="open = !open">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
    </div>
    <ul class="px-4 space-y-4 text-center mt-2">
        <li>
            <a class="block bg-primary-500 text-gray-100 py-3 px-7 rounded-md font-semibold leading-4" href="#">Book Free Valuation
            </a>
        </li>
        <li>
            <a class=" text-gray-900 " href="#">Browse Listings</a>
        </li>
        <li>
            <a class="text-gray-900" href="#">Our Fees</a>
        </li>
        <li>
            <a class="text-gray-900" href="#">
                Selling
            </a>
        </li>
        <li>
            <a class="text-gray-900" href="#">
                More
            </a>
        </li>
        <li>
            <a class="text-gray-900" href="tel:01-5169999">01 5169999</a>
        </li>
        <li>
            <a class="block bg-primary-500 text-gray-100 py-3 px-11 rounded-md font-semibold leading-4" href="#">Login</a>
        </li>
    </ul>
</div>