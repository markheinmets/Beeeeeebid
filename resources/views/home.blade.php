<x-app-layout>

    <div class="p-4 h-fit flex flex-col gap-4">
        <div class=" h-fit flex flex-col relative px-8 lg:px-16 xl:px-32 rounded-xl gap-8">
            <!-- Search -->
            <form id="otsing" action="" method="get" class="bg-gray-200 rounded-full flex shadow-md ">
                <input type="search" name="q" id="q" class="w-full border-0 rounded-l-full p-4 bg-gray-200" autocomplete="off" placeholder="Otsing...">
                <button type="submit" class="flex items-center justify-center p-2">
                    <div class="border-2 border-black/50 rounded-full border-[#fb9333] bg-[#fb9333] hover:bg-[#fb8000] transition-colors ease-in py-2 px-2 flex items-center justify-center">
                        <span class="material-symbols-outlined text-white">search</span>
                    </div>
                </button>
            </form>
            <!-- Chips -->
            <div class="flex flex-wrap w-full h-fit px-8 lg:px-16 xl:px-32 gap-2 justify-center ">
                @foreach ($tags as $tag)
                    <a href="#{{ $tag->code_name }}" class="flex justify-center items-center px-6 py-2 rounded-full bg-[#FFD79F] transition-colors ease-in hover:bg-[#fb9111]/80">{{ $tag->name }}</a>
                @endforeach
            </div>
            <!-- Cards -->
            <div id="kaardid" class="h-fill flex justify-center flex-wrap gap-5 text-center">
                <button class=" flex justify-end items-center flex-col w-40 h-40 bg-[#FFEED4] rounded-3xl md:hover:scale-105 transition-all ease-in border-2 border-[#fb9333] md:border-[#FFEED4] md:hover:border-[#fb9333]">
                    <img class="h-[100px]" src="{{ asset('images/hand-holding-heart-solid.svg') }}">
                    <p class="p-2 text-lg">Vaimne tervis</p>
                </button>
                <button class=" flex justify-end items-center flex-col w-40 h-40 bg-[#FFEED4] rounded-3xl md:hover:scale-105 transition-all ease-in border-2 border-[#fb9333] md:border-[#FFEED4] md:hover:border-[#fb9333]">
                    <img class="h-[100px]" src="{{ asset('images/child-solid.svg') }}">
                    <p class="p-2 text-lg">Füüsiline tervis</p>
                </button>
                <button class=" flex justify-end items-center flex-col w-40 h-40 bg-[#FFEED4] rounded-3xl md:hover:scale-105 transition-all ease-in border-2 border-[#fb9333] md:border-[#FFEED4] md:hover:border-[#fb9333]">
                    <img class="h-[100px]" src="{{ asset('images/masks-theater-solid.svg') }}">
                    <p class="p-2 text-lg">Pseudo haigused</p>
                </button>
                <button class=" flex justify-end items-center flex-col w-40 h-40 bg-[#FFEED4] rounded-3xl md:hover:scale-105 transition-all ease-in border-2 border-[#fb9333] md:border-[#FFEED4] md:hover:border-[#fb9333]">
                    <img class="h-[100px]" src="{{ asset('images/heart-pulse-solid.svg') }}">
                    <p class="p-2 text-lg">Kiire abi</p>
                </button>
            </div>
            <!-- Sections -->
            <div class="flex flex-col gap-4">
                <section id="esmaabi" class=" w-full h-fit flex flex-col gap-8">
                    <h1 class="text-5xl font-bold text-[#331B3B]">Esmaabi</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach ($esmaabi as $abi)
                            <div class="w-full group h-full bg-white border-2 border-[#ffdfb0] md:border-[#FFF0DA] p-8 flex flex-col rounded-2xl md:hover:-translate-y-2 transition-all ease-in-out shadow-xl md:shadow-none md:hover:shadow-xl  md:hover:border-[#ffdfb0]">
                                <img src="{{ asset('icons/Icon_1.png') }}" alt="" class="w-24">
                                <h1 class="font-bold text-2xl mt-8 mb-4">{{ $abi->name }}</h1>
                                <p>
                                    Langsung dari Kebun Sendiri yang 
                                    tersebar di setiap provinsi
                                    memiliki cabang toko Jez Salad.
                                    Langsung dari Kebun Sendiri yang 
                                    tersebar di setiap provinsi
                                </p>
                                <a href="{{ route('esmaabi', ['slug' => $abi->id]) }}" class="flex mt-10 w-fit py-2 px-4 rounded-full bg-[#FB9333] md:bg-transparent md:group-hover:bg-[#FB9333] transition-all ease-in-out">Loe edasi <img src="{{ asset('icons/R_arrow.png') }}" alt="" class="w-6 aspect-square"></a>
                            </div>
                        @endforeach
                    </div>
                    <div class="w-full h-fit flex justify-end">
                    <a href="{{ route('home') }}" class="bg-[#FFD79F] rounded-[100px] py-4 px-8 text-[#331B3B] text-lg font-semibold flex w-fit border-2 border-[#FB9333] md:border-[#FFD79F] md:hover:border-[#FB9333] transition-colors ease-in-out">Tagasi avalehele</a>
                    </div>
                </section>
                <section id="ennetavad-tegevused" class=" w-full h-fit flex flex-col gap-8">
                    <h1 class="text-5xl font-bold text-[#331B3B]">Ennetavad tegevused</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="w-full group h-full bg-white border-2 border-[#ffdfb0] md:border-[#FFF0DA] p-8 flex flex-col rounded-2xl md:hover:-translate-y-2 transition-all ease-in-out shadow-xl md:shadow-none md:hover:shadow-xl  md:hover:border-[#ffdfb0]">
                            <img src="{{ asset('icons/Icon_1.png') }}" alt="" class="w-24">
                            <h1 class="font-bold text-2xl mt-8 mb-4">Ennetav tegevus 1</h1>
                            <p>
                                Langsung dari Kebun Sendiri yang 
                                tersebar di setiap provinsi
                                memiliki cabang toko Jez Salad.
                                Langsung dari Kebun Sendiri yang 
                                tersebar di setiap provinsi
                            </p>
                            <a href="#" class="flex mt-10 w-fit py-2 px-4 rounded-full bg-[#FB9333] md:bg-transparent md:group-hover:bg-[#FB9333] transition-all ease-in-out">Loe edasi <img src="{{ asset('icons/R_arrow.png') }}" alt="" class="w-6 aspect-square"></a>
                        </div>
                        <div class="w-full group h-full bg-white border-2 border-[#ffdfb0] md:border-[#FFF0DA] p-8 flex flex-col rounded-2xl md:hover:-translate-y-2 transition-all ease-in-out shadow-xl md:shadow-none md:hover:shadow-xl  md:hover:border-[#ffdfb0]">
                            <img src="{{ asset('icons/Icon_2.png') }}" alt="" class="w-24">
                            <h1 class="font-bold text-2xl mt-8 mb-4">Ennetav tegevus 2</h1>
                            <p>
                                Langsung dari Kebun Sendiri yang 
                                tersebar di setiap provinsi
                                memiliki cabang toko Jez Salad.
                                Langsung dari Kebun Sendiri yang 
                                tersebar di setiap provinsi
                            </p>
                            <a href="#" class="flex mt-10 w-fit py-2 px-4 rounded-full bg-[#FB9333] md:bg-transparent md:group-hover:bg-[#FB9333] transition-all ease-in-out">Loe edasi <img src="{{ asset('icons/R_arrow.png') }}" alt="" class="w-6 aspect-square"></a>
                        </div>
                        <div class="w-full group h-full bg-white border-2 border-[#ffdfb0] md:border-[#FFF0DA] p-8 flex flex-col rounded-2xl md:hover:-translate-y-2 transition-all ease-in-out shadow-xl md:shadow-none md:hover:shadow-xl  md:hover:border-[#ffdfb0]">
                            <img src="{{ asset('icons/Icon_3.png') }}" alt="" class="w-24">
                            <h1 class="font-bold text-2xl mt-8 mb-4">Ennetav tegevus 3</h1>
                            <p>
                                Langsung dari Kebun Sendiri yang 
                                tersebar di setiap provinsi
                                memiliki cabang toko Jez Salad.
                                Langsung dari Kebun Sendiri yang 
                                tersebar di setiap provinsi
                            </p>
                            <a href="#" class="flex mt-10 w-fit py-2 px-4 rounded-full bg-[#FB9333] md:bg-transparent md:group-hover:bg-[#FB9333] transition-all ease-in-out">Loe edasi <img src="{{ asset('icons/R_arrow.png') }}" alt="" class="w-6 aspect-square"></a>
                        </div>
                    </div>
                    <div class="w-full h-fit flex justify-end">
                    <a href="{{ route('home') }}" class="bg-[#FFD79F] rounded-[100px] py-4 px-8 text-[#331B3B] text-lg font-semibold flex w-fit border-2 border-[#FB9333] md:border-[#FFD79F] md:hover:border-[#FB9333] transition-colors ease-in-out">Tagasi avalehele</a>
                    </div>
                </section>
                <section id="vaimse-tervise-esmaabi" class=" w-full h-fit flex flex-col gap-8">
                    <h1 class="text-5xl font-bold text-[#331B3B]">Vaimese tervise esmaabi</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="w-full group h-full bg-white border-2 border-[#ffdfb0] md:border-[#FFF0DA] p-8 flex flex-col rounded-2xl md:hover:-translate-y-2 transition-all ease-in-out shadow-xl md:shadow-none md:hover:shadow-xl  md:hover:border-[#ffdfb0]">
                            <img src="{{ asset('icons/Icon_1.png') }}" alt="" class="w-24">
                            <h1 class="font-bold text-2xl mt-8 mb-4">Vaimne tervis 1</h1>
                            <p>
                                Langsung dari Kebun Sendiri yang 
                                tersebar di setiap provinsi
                                memiliki cabang toko Jez Salad.
                                Langsung dari Kebun Sendiri yang 
                                tersebar di setiap provinsi
                            </p>
                            <a href="#" class="flex mt-10 w-fit py-2 px-4 rounded-full bg-[#FB9333] md:bg-transparent md:group-hover:bg-[#FB9333] transition-all ease-in-out">Loe edasi <img src="{{ asset('icons/R_arrow.png') }}" alt="" class="w-6 aspect-square"></a>
                        </div>
                        <div class="w-full group h-full bg-white border-2 border-[#ffdfb0] md:border-[#FFF0DA] p-8 flex flex-col rounded-2xl md:hover:-translate-y-2 transition-all ease-in-out shadow-xl md:shadow-none md:hover:shadow-xl  md:hover:border-[#ffdfb0]">
                            <img src="{{ asset('icons/Icon_2.png') }}" alt="" class="w-24">
                            <h1 class="font-bold text-2xl mt-8 mb-4">Vaimne tervis 2</h1>
                            <p>
                                Langsung dari Kebun Sendiri yang 
                                tersebar di setiap provinsi
                                memiliki cabang toko Jez Salad.
                                Langsung dari Kebun Sendiri yang 
                                tersebar di setiap provinsi
                            </p>
                            <a href="#" class="flex mt-10 w-fit py-2 px-4 rounded-full bg-[#FB9333] md:bg-transparent md:group-hover:bg-[#FB9333] transition-all ease-in-out">Loe edasi <img src="{{ asset('icons/R_arrow.png') }}" alt="" class="w-6 aspect-square"></a>
                        </div>
                        <div class="w-full group h-full bg-white border-2 border-[#ffdfb0] md:border-[#FFF0DA] p-8 flex flex-col rounded-2xl md:hover:-translate-y-2 transition-all ease-in-out shadow-xl md:shadow-none md:hover:shadow-xl  md:hover:border-[#ffdfb0]">
                            <img src="{{ asset('icons/Icon_3.png') }}" alt="" class="w-24">
                            <h1 class="font-bold text-2xl mt-8 mb-4">Vaimne tervis 3</h1>
                            <p>
                                Langsung dari Kebun Sendiri yang 
                                tersebar di setiap provinsi
                                memiliki cabang toko Jez Salad.
                                Langsung dari Kebun Sendiri yang 
                                tersebar di setiap provinsi
                            </p>
                            <a href="#" class="flex mt-10 w-fit py-2 px-4 rounded-full bg-[#FB9333] md:bg-transparent md:group-hover:bg-[#FB9333] transition-all ease-in-out">Loe edasi <img src="{{ asset('icons/R_arrow.png') }}" alt="" class="w-6 aspect-square"></a>
                        </div>
                    </div>
                    <div class="w-full h-fit flex justify-end">
                    <a href="{{ route('home') }}" class="bg-[#FFD79F] rounded-[100px] py-4 px-8 text-[#331B3B] text-lg font-semibold flex w-fit border-2 border-[#FB9333] md:border-[#FFD79F] md:hover:border-[#FB9333] transition-colors ease-in-out">Tagasi avalehele</a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
