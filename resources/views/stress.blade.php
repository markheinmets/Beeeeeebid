<x-app-layout>

    <div class="p-4 h-fit flex flex-col gap-4">
        <div class=" h-fit flex flex-col relative px-8 lg:px-16 xl:px-32 rounded-xl gap-8">
            <form id="otsing" action="" method="get" class="bg-gray-200 rounded-full flex shadow-md ">
                <input type="search" name="q" id="q" class="w-full border-0 rounded-l-full p-4 bg-gray-200" autocomplete="off" placeholder="Otsing...">
                <button type="submit" class="flex items-center justify-center p-2">
                    <div class="border-2 border-black/50 rounded-full border-[#fb9333] bg-[#fb9333] hover:bg-[#fb8000] transition-colors ease-in py-2 px-2 flex items-center justify-center">
                        <span class="material-symbols-outlined text-white">search</span>
                    </div>
                </button>
            </form>
            <div class="flex flex-wrap w-full h-fit px-8 lg:px-16 xl:px-32 gap-2 justify-center ">
                @foreach ($tags as $tag)
                    <a href="#{{ $tag->code_name }}" class="flex justify-center items-center px-6 py-2 rounded-full bg-[#FFD79F] transition-colors ease-in md:hover:bg-[#fb9111]/80">{{ $tag->name }}</a>
                @endforeach
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/stress.jpg') }}" alt="arevus" class="w-1/2">
            </div>
            <div class="w-full h-fit flex justify-end">
            <a href="{{ route('home') }}" class="bg-[#FFD79F] rounded-[100px] py-4 px-8 text-[#331B3B] text-lg font-semibold flex w-fit border-2 border-[#FB9333] md:border-[#FFD79F] md:hover:border-[#FB9333] transition-colors ease-in-out">Tagasi avalehele</a>
            </div>
        </div>
    </div>
</x-app-layout>


