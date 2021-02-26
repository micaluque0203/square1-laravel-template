<x-layaout>
    <div class="block border boder-b border-gray-300">
    </div>
    <div class="container mx-auto md:max-w-screen-lg bg-white">
        <h1 class="text-center text-4xl pt-16 pb-10 font-semibold">
            Property 
            <br class="md:hidden"/>
            Search
        </h1>
        <form class="flex flex-col md:flex-row py-5 items-center space-y-5 md:space-y-0 md:space-x-8 w-9/12 mx-auto md:w-10/12">
            <div class="flex-1 grid grid-cols-1 md:grid-cols-3 gap-8 w-full">
                <select aria-label="Countries" class="border-b-2 border-primary-500 pb-2">   
                    <option>All countries</option>
                </select>
                <select aria-label="Country first" class="border-b-2 border-primary-500 pb-2">   
                    <option>Select a country first</option>
                </select>
                <select aria-label="Price" class="border-b-2 border-primary-500 pb-2">   
                    <option> No max price</option>
                </select>
            </div>
            <div class="w-full md:w-auto">
                <button class="leading-4 bg-primary-500 font-semibold text-gray-100 py-3.5 px-9 rounded-md md:text-sm w-full md:w-auto">
                    Search
                </button>
            </div>
        </form>
        <div class="pt-32 grid grid-cols-1 md:grid-cols-2 gap-8 pb-10 px-4 md:px-0">
            @foreach(range(0, 3) as $i)
            <a href="#">
                <div class="border border-gray-300">
                    <img src="https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="">
                    <div class="flex justify-between items-center pt-10 pb-5 px-4">
                        <span class="text-gray-900 font-semibold text-2xl">
                            &euro; 2,450,000 
                        </span>
                        <span class="text-gray-500 text-lg">
                            4 BD, 4 BA, 10000sq ft
                        </span>
                    </div>
                    <p class="text-lg font-semibold text-gray-900 px-4">The Gables, 25 St Columba's Terrace Street</p>
                    <p class="block text-lg pb-10 text-gray-500 px-4">Newtownmountkennedy, Co. Wicklow</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</x-layaout>
