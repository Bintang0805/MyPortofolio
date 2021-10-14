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
                <div class="image hidden lg:grid flex justify-center items-center w-full h-screen opacity-0 tranform translate-x-8 animate-pulse" id="page-one__image">
                    <img src="{{ asset('img/laptop_isometric.png') }}" alt="" class="h-auto sm:heigh-80" width="100%">
                </div>
            </div>
        </div>

    </div>

    {{-- End Page One --}}




    {{-- Page Two --}}

    <div id="page-two" class="w-full px-7 sm:px-14 pb-16 sm:pb-0 pt-16 h-auto sm:h-screen bg-secondary">
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

    <div id="page-three" class="w-full px-7 sm:px-14 pt-16 h-auto sm:h-screen pb-14 sm:pb-0 bg-primary">
        <div class="title w-full flex justify-center text-3xl font-extrabold text-lightest pb-14" id="page-two__title">
            MY PROJECTS
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-7">
            <div class="card w-full h-80 bg-secondary">
                <img src="{{ asset('img/portofolio.jpg') }}" alt="" class="h-full rounded-lg transform hover:scale-105 transition duration-500 cursor-pointer">
            </div>
            <div class="card w-full h-80 bg-secondary">
                <img src="{{ asset('img/portofolio.jpg') }}" alt="" class="h-full rounded-lg transform hover:scale-105 transition duration-500 cursor-pointer">
            </div>
            <div class="card w-full h-80 bg-secondary">
                <img src="{{ asset('img/portofolio.jpg') }}" alt="" class="h-full rounded-lg transform hover:scale-105 transition duration-500 cursor-pointer">
            </div>
        </div>
        <div class="flex justify-center pt-10">
            <x-layouts.button>
                VIEW MORE
            </x-layouts.button>
        </div>
    </div>

    {{-- End Page Three --}}




    {{-- Page Four --}}

    <div id="page-four" class="w-full px-7 sm:px-14 pt-16 h-auto sm:h-screen pb-14 sm:pb-0 bg-secondary">
        <div class="title w-full flex justify-center text-3xl font-extrabold text-lightest pb-14" id="page-two__title">
            CONTACT ME
        </div>
        <div class="container w-full bg-primary rounded-lg shadow-lg px-5 sm:px-10 py-5">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 pb-20 relative">
                <div>
                    <div class="div">
                        <label class="md:text-sm text-xs text-white font-semibold">Full Name</label>
                        <input class="w-full py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Kazukito Kanziro" />
                    </div>
                    <div class="div pt-7">
                        <label class="md:text-sm text-xs text-white font-semibold">Email Address</label>
                        <input class="w-full py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="email" placeholder="kazukitokanziro12@gmail.com" />
                    </div>
                    <div class="div pt-7">
                        <label class="md:text-sm text-xs text-white font-semibold">What do you need ?</label>
                        <input class="w-full py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="email" placeholder="I Need lorem ipsum dolor min" />
                    </div>

                </div>
                <div class="">
                    <label class="md:text-sm text-xs text-white font-semibold">Message</label>
                    <textarea class="w-full h-20 sm:h-36 max-h-60 px-3 py-2 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Please add lorem ipsum dolor min ojo riko"></textarea>
                    <div class="flex sm:absolute pt-5 lg:pt-0 right-0 bottom-2 justify-center">
                        <x-layouts.button>
                            Send Message
                        </x-layouts.button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- End Page Four --}}




    {{-- Footer --}}

    <div id="footer" class="w-full px-7 sm:px-14 pt-7 h-auto bg-darken-blue">
        <div class="text-white">
            <div class="grid grid-cols-3">
                <div class="col-span-3 sm:col-span-2">
                    <div class="grid grid-rows-3 sm:grid-rows-2 grid-flow-col w-7/12 gap-5">
                        <div class="div"><i class="fas fa-map-marker-alt pr-4"></i>Jln Markisa V, Depok</div>
                        <div class="div whitespace-nowrap"><i class="fas fa-envelope pr-3"></i>ikhsanbintang3292@gmail.com</div>
                        <div class="div"><i class="fas fa-phone-alt pr-3"></i>085155011637</div>
                    </div>
                </div>
                <div class="col-span-3 sm:col-span-1 text-4xl pt-10 sm:pt-0">
                    <div class="grid grid-cols-1 gap-5">
                        <div class="sosmed text-center">
                            <i class="fab fa-instagram-square"></i>
                            <i class="fab fa-facebook-square"></i>
                            <i class="fab fa-whatsapp-square"></i>
                        </div>
                        <div class="subscribe flex justify-center">
                            <x-layouts.button>
                                Subscribe
                            </x-layouts.button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="flex flex-col pt-10 pb-10 text-center text-xs">
                <div class="copyright">
                    @ Copyright by Muhammad Ikhsan Bintang
                </div>
                <div class="design">
                    Designed by fullvector / Freepik
                </div>
            </div>
        </div>
    </div>

    {{-- End Footer --}}

</x-app-layout>
