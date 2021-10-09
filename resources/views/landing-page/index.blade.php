<x-app-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    {{-- Page One --}}

    <div id="page-one" class="w-full px-5 sm:px-12 h-screen bg-darken-blue">

        <div class="w-full h-full">
            <div class="grid grid-cols-1 sm:grid-cols-2 items-center">
                <div class="title text-white flex items-center justify-center sm:justify-start w-100 h-screen text-center sm:text-left">
                    <div class="title">
                        <p class="font-extrabold tracking-wider pb-3 text-2xl sm:text-4xl whitespace-normal sm:whitespace-nowrap">
                            WELCOME TO <br>
                            <span class="text-light">MY PORTOFOLIO</span>
                            <span class="text-dark-blue">WEBSITE</span>
                        </p>
                        <p class="text-gray-400 text-lg tracking-wider sm:tracking-widest pb-5">In every problem always have a solution</p>
                        <button type="button" class="bg-dark-blue text-white px-7 py-2 font-bold rounded-md">
                            EXPLORE NOW
                        </button>
                    </div>
                </div>
                <div class="image hidden lg:grid flex justify-center items-center w-full h-screen">
                    <img src="{{ asset('img/laptop_isometric.png') }}" alt="" class="object-cover w-full h-80">
                </div>
            </div>
        </div>

    </div>

    {{-- End Page One --}}




    {{-- Page Two --}}

    <div id="page-two" class="w-full px-14 h-screen bg-secondary">

    </div>

    {{-- End Page Two --}}




    {{-- Page Three --}}

    <div id="page-three" class="w-full px-14 h-screen bg-primary">

    </div>

    {{-- End Page Three --}}




    {{-- Page Four --}}

    <div id="page-four" class="w-full px-14 h-screen bg-secondary">

    </div>

    {{-- End Page Four --}}




    {{-- Footer --}}

    <div id="footer" class="w-full px-14 h-52 bg-darken-blue">

    </div>

    {{-- End Footer --}}

</x-app-layout>
