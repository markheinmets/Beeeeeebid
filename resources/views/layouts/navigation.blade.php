<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 hidden lg:flex flex-col lg:w-44 xl:w-96 fixed left-0 top-0 bottom-0">
    <div class=" h-24 flex justify-center items-center ">

        <img src="{{ asset('Logo_Rectangle.png') }}" alt="Logo" class="xl:h-48 lg:h-32 ">/
    </div>
    <div clss ="flex w-full h-screen rounded-r-xl text-black">
        <ul class="flex flex-col gap-5 pt-5 h-screen bg-[#fb9333] rounded-r-xl">
            <a href="{{ route('home') }}#esmaabi"><li class="pl-8 text-[24px] transition-all hover:text-white hover:translate-x-2">Esmaabi</li></a>
            <a href="{{ route('home') }}#vaimse-tervise-esmaabi"><li class="pl-8 text-[24px] transition-all hover:text-white hover:translate-x-2">Vaimse tervise esmaabi</li></a>
            <a href="{{ route('home') }}#ennetavad-tegevused"><li class="pl-8 text-[24px] transition-all hover:text-white hover:translate-x-2">Ennetus</li></a>
            <a href="{{ route('home') }}#test"><li class="pl-8 text-[24px] transition-all hover:text-white hover:translate-x-2 group">Juhendid</li></a>
        </ul>

        <img src="{{ asset('Logo_Rectangle.png') }}" alt="Logo" class=" h-48">
    </div>
    <div class="flex flex-col w-full h-full  rounded-r-xl">
        

    </div>

</nav>
