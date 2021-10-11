<x-app-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <x-layouts.navbar/>

    {{-- Page One --}}

    <div id="page-one" class="w-full px-5 sm:px-12 h-screen bg-darken-blue">

        <div class="w-full h-full">
            <div class="grid grid-cols-1 sm:grid-cols-2 items-center">
                <div class="title text-white flex items-center justify-center sm:justify-start w-100 h-screen text-center sm:text-left">
                    <div class="title opacity-0 transform -translate-x-8" id="page-one__title">
                        <p class="font-extrabold tracking-wider pb-3 text-2xl sm:text-4xl whitespace-normal sm:whitespace-nowrap">
                            WELCOME TO <br>
                            <span class="text-light">MY PORTOFOLIO</span>
                            <span class="text-dark-blue">WEBSITE</span>
                        </p>
                        <p class="text-gray-400 text-lg tracking-wider sm:tracking-widest pb-5">In every problem always have a solution</p>
                        <x-layouts.button>
                            EXPLORE NOW
                        </x-layouts.button>
                    </div>
                </div>
                <div class="image hidden lg:grid flex justify-center items-center w-full h-screen opacity-0 tranform translate-x-8" id="page-one__image">
                    <img src="{{ asset('img/laptop_isometric.png') }}" alt="" class="object-cover w-full h-80">
                </div>
            </div>
        </div>

    </div>

    {{-- End Page One --}}




    {{-- Page Two --}}

    <div id="page-two" class="w-full px-7 sm:px-14 pb-16 sm:pb-0 pt-14 h-auto sm:h-screen bg-secondary">
        <div class="title w-full flex justify-center text-3xl font-extrabold text-lightest pb-10 opacity-0" id="page-two__title">
            ABOUT ME
        </div>
        <div class="w-full bg-primary h-auto py-10 px-5 sm:px-10 rounded-lg shadow-lg opacity-0" id="page-two__content">
            <div class="grid grid-cols-12">
                <div class="col-span-12 sm:col-span-3 pb-5 sm:pb-0 transform -translate-x-10 opacity-0" id="page-two__contentLeft">
                    <div class="grid grid-cols-1">
                        <div class="row flex justify-center">
                            <img src="{{ asset('img/my_photov2.jpg') }}" alt="" class="w-52 rounded-3xl">
                        </div>
                        <div class="row h-auto pt-7">
                            <div class="name text-center text-white tracking-wider font-medium text-lg">
                                Muhammad Ikhsan Bintang
                            </div>
                            <div class="title text-center text-gray-300">
                                Web Development
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-9 pl-0 sm:pl-10 opacity-0 transform translate-x-8" id="page-two__contentRight">
                    <div class="text-lg text-white text-justify h-full relative">
                        Hai, my name is Muhammad Ikhsan Bintang and i'm is a Web Development engineer, I’m 17 years old and i'm very like programming, especially backend programming.
                        I am someone who always wants to learn new things related to programming.
                        <div class="static sm:absolute flex justify-center bottom-0 right-0 pt-10 sm:pt-0">
                            <x-layouts.button>
                                VIEW MORE
                            </x-layouts.button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
