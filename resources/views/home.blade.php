<x-app-layout>

    <div class="p-4 h-fit flex flex-col gap-4">
        <div class=" h-fit flex flex-col relative px-8 lg:px-16 xl:px-32 rounded-xl gap-8">
            <!-- Search -->
            <form id="otsing" action="" method="get" class="bg-gray-200 rounded-full flex shadow-md ">
                <input type="search" name="q" id="q" class="w-full border-0 rounded-l-full p-4 bg-gray-200" autocomplete="off" placeholder="Otsing...">
                <button type="submit" class="flex items-center justify-center p-2">
                    <div class=" border-black/50 rounded-full  bg-[#fb9333] hover:bg-[#fb8000] transition-colors ease-in py-2 px-2 flex items-center justify-center">
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
            <div class="-mt-24 " id="esmaabi"></div>
            <div  class="flex flex-col gap-4 mt-24">
                <section  class=" w-full h-fit flex flex-col gap-8">
                    <h1 class="text-5xl font-bold text-[#331B3B]">Esmaabi</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach ($esmaabi as $abi)
                            <div class="w-full group h-full bg-white border-2 border-[#ffdfb0] md:border-[#FFF0DA] p-8 flex flex-col rounded-2xl md:hover:-translate-y-2 transition-all ease-in-out shadow-xl md:shadow-none md:hover:shadow-xl  md:hover:border-[#ffdfb0]">
                                <img src="{{ asset('images/' . $abi->image) }}" alt="" class="w-24">
                                <h1 class="font-bold text-2xl mt-8 mb-4">{{ $abi->name }}</h1>
                                <p>
                                    Langsung dari Kebun Sendiri yang 
                                    tersebar di setiap provinsi
                                    memiliki cabang toko Jez Salad.
                                    Langsung dari Kebun Sendiri yang 
                                    tersebar di setiap provinsi
                                </p>
                                <a href="#" class="flex mt-10 w-fit py-2 px-4 rounded-full bg-[#FB9333] md:bg-transparent md:group-hover:bg-[#FB9333] transition-all ease-in-out items-center">Loe edasi <x-heroicon-o-arrow-right class="w-5 h-5 text-black ml-1"/></a>
                            </div>
                        @endforeach
                    </div>
                    <div class="w-full h-fit flex justify-end">
                    <a href="{{ route('home') }}" class="bg-[#FFD79F] rounded-[100px] py-4 px-8 text-[#331B3B] text-lg font-semibold flex w-fit border-2 border-[#FB9333] md:border-[#FFD79F] md:hover:border-[#FB9333] transition-colors ease-in-out">Vaata veel</a>
                    </div>
                </section>
                <div class="-mt-24 " id="vaimse-tervise-esmaabi"></div>
                <section id="vaimse-tervise-esmaabi" class=" w-full h-fit flex flex-col gap-8 scroll-ms-44 mt-24">
                    <h1 class="text-5xl font-bold text-[#331B3B]">Vaimese tervise esmaabi</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="w-full group h-full bg-white border-2 border-[#ffdfb0] md:border-[#FFF0DA] p-8 flex flex-col rounded-2xl md:hover:-translate-y-2 transition-all ease-in-out shadow-xl md:shadow-none md:hover:shadow-xl  md:hover:border-[#ffdfb0]">
                            <h1 class="font-bold text-2xl mt-8 mb-4">Ärevus</h1>
                            <p>
                                On meie keha reaktsioon 
                                eeldatavale ohule:
                                hirm või kartus selle ees,
                                mis võib juhtuda. Me kõik 
                                kogeme oma elus ärevust.
                            </p>
                            <a href="{{ route('anxiety') }}" class="flex mt-10 w-fit py-2 px-4 rounded-full bg-[#FB9333] md:bg-transparent md:group-hover:bg-[#FB9333] transition-all ease-in-out items-center">Loe edasi <x-heroicon-o-arrow-right class="w-5 h-5 text-black ml-1"/></a>
                        </div>
                        <div class="w-full group h-full bg-white border-2 border-[#ffdfb0] md:border-[#FFF0DA] p-8 flex flex-col rounded-2xl md:hover:-translate-y-2 transition-all ease-in-out shadow-xl md:shadow-none md:hover:shadow-xl  md:hover:border-[#ffdfb0]">


                            <h1 class="font-bold text-2xl mt-8 mb-4">Ebakindlus</h1>
                            <p>
                                Enesekindlus on aktsepteeriv, 
                                usalduslik ja realistlik suhtumine
                                enda oskustesse, võimetesse ja 
                                väärtustesse. Eneses kahtlemine 
                                võib aga tabada meid kõiki, eriti
                                kui julgeme mugavustsoonist väljuda.
                            </p>
                            <a href="{{ route('uncertainty') }}" class="flex mt-10 w-fit py-2 px-4 rounded-full bg-[#FB9333] md:bg-transparent md:group-hover:bg-[#FB9333] transition-all ease-in-out items-center">Loe edasi <x-heroicon-o-arrow-right class="w-5 h-5 text-black ml-1"/></a>
                        </div>
                        <div class="w-full group h-full bg-white border-2 border-[#ffdfb0] md:border-[#FFF0DA] p-8 flex flex-col rounded-2xl md:hover:-translate-y-2 transition-all ease-in-out shadow-xl md:shadow-none md:hover:shadow-xl  md:hover:border-[#ffdfb0]">


                            <h1 class="font-bold text-2xl mt-8 mb-4">Stress</h1>
                            <p>
                                On pingeseisund, mis on reaktsioon 
                                meie keha koormusele ja nõudlusele.
                                Lühiajaline stress võib olla positiivne,
                                aidates meid ohuolukorras, kuid
                                pikaajaline stress võib olla kahjustada
                                tervist.
                            </p>
                            <a href="{{ route('stress') }}" class="flex mt-10 w-fit py-2 px-4 rounded-full bg-[#FB9333] md:bg-transparent md:group-hover:bg-[#FB9333] transition-all ease-in-out items-center">Loe edasi <x-heroicon-o-arrow-right class="w-5 h-5 text-black ml-1"/></a>
                        </div>
                    </div>
                    <div class="w-full h-fit flex justify-end">
                    <a href="{{ route('home') }}" class="bg-[#FFD79F] rounded-[100px] py-4 px-8 text-[#331B3B] text-lg font-semibold flex w-fit border-2 border-[#FB9333] md:border-[#FFD79F] md:hover:border-[#FB9333] transition-colors ease-in-out">Vaata veel</a>
                    </div>
                </section>
                <section id="ennetavad-tegevused" class=" w-full h-fit flex flex-col gap-8">
                    <h1 class="text-5xl font-bold text-[#331B3B]">Ennetavad tegevused</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="w-full group h-full bg-white border-2 border-[#ffdfb0] md:border-[#FFF0DA] p-8 flex flex-col rounded-2xl md:hover:-translate-y-2 transition-all ease-in-out shadow-xl md:shadow-none md:hover:shadow-xl  md:hover:border-[#ffdfb0]">
                            <img src="{{ asset('images/Icon_1.png') }}" alt="" class="w-24">
                            <h1 class="font-bold text-2xl mt-8 mb-4">Ennetus viis 1</h1>
                            <p>
                                Langsung dari Kebun Sendiri yang 
                                tersebar di setiap provinsi
                                memiliki cabang toko Jez Salad.
                                Langsung dari Kebun Sendiri yang 
                                tersebar di setiap provinsi
                            </p>
                            <a href="#" class="flex mt-10 w-fit py-2 px-4 rounded-full bg-[#FB9333] md:bg-transparent md:group-hover:bg-[#FB9333] transition-all ease-in-out items-center">Loe edasi <x-heroicon-o-arrow-right class="w-5 h-5 text-black ml-1"/></a>
                        </div>
                        <div class="w-full group h-full bg-white border-2 border-[#ffdfb0] md:border-[#FFF0DA] p-8 flex flex-col rounded-2xl md:hover:-translate-y-2 transition-all ease-in-out shadow-xl md:shadow-none md:hover:shadow-xl  md:hover:border-[#ffdfb0]">
                            <img src="{{ asset('images/Icon_2.png') }}" alt="" class="w-24">
                            <h1 class="font-bold text-2xl mt-8 mb-4">Ennetus viis 2</h1>
                            <p>
                                Langsung dari Kebun Sendiri yang 
                                tersebar di setiap provinsi
                                memiliki cabang toko Jez Salad.
                                Langsung dari Kebun Sendiri yang 
                                tersebar di setiap provinsi
                            </p>
                            <a href="#" class="flex mt-10 w-fit py-2 px-4 rounded-full bg-[#FB9333] md:bg-transparent md:group-hover:bg-[#FB9333] transition-all ease-in-out items-center">Loe edasi <x-heroicon-o-arrow-right class="w-5 h-5 text-black ml-1"/></a>
                        </div>
                        <div class="w-full group h-full bg-white border-2 border-[#ffdfb0] md:border-[#FFF0DA] p-8 flex flex-col rounded-2xl md:hover:-translate-y-2 transition-all ease-in-out shadow-xl md:shadow-none md:hover:shadow-xl  md:hover:border-[#ffdfb0]">
                            <img src="{{ asset('images/Icon_3.png') }}" alt="" class="w-24">
                            <h1 class="font-bold text-2xl mt-8 mb-4">Ennetus viis 3</h1>
                            <p>
                                Langsung dari Kebun Sendiri yang 
                                tersebar di setiap provinsi
                                memiliki cabang toko Jez Salad.
                                Langsung dari Kebun Sendiri yang 
                                tersebar di setiap provinsi
                            </p>
                            <a href="#" class="flex mt-10 w-fit py-2 px-4 rounded-full bg-[#FB9333] md:bg-transparent md:group-hover:bg-[#FB9333] transition-all ease-in-out items-center">Loe edasi <x-heroicon-o-arrow-right class="w-5 h-5 text-black ml-1"/></a>
                        </div>
                    </div>
                    <div class="w-full h-fit flex justify-end">
                    <a href="{{ route('home') }}" class="bg-[#FFD79F] rounded-[100px] py-4 px-8 text-[#331B3B] text-lg font-semibold flex w-fit border-2 border-[#FB9333] md:border-[#FFD79F] md:hover:border-[#FB9333] transition-colors ease-in-out">Vaata veel</a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
