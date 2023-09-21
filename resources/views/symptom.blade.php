<x-app-layout>

    <div class="p-4 h-full flex flex-col gap-4">
        <div class=" flex flex-col gap-2 relative bg-[#fb9333] p-32 rounded-xl">
            <form action="" method="get" class="bg-white rounded-full flex shadow-md ">
                <input type="search" name="q" id="q" class="w-full border-0 rounded-l-full p-4 bg-transparent" placeholder="Otsing...">
                <button type="submit" class="border-2 border-black/50 rounded-full border-red-500 py-2 px-8 flex items-center justify-center">
                <span class="material-symbols-outlined">search</span>
                </button>
            </form>
        </div>
        <div class="symptom-about">
            <h1 class="h1">Peapõrutus</h1>
    
            <ol style="list-style:decimal; padding:1rem">
                <li><b>Pane laps pikali</b></li>
                <li>Asetage põrutuse piirkonda <b>külm mähis</b> (kasutage oma fantaasiat: sobivad nii külm veega niisutatud käterätik, seljast võetud T-särk, külma veega kummikott kui ka jääkuubikutega täidetud sukk või sokk);</li>
                <li>Lapse rahustamiseks andke talle juua magusaid jooke: piparmündi- ja kummeliteed või palderjani. Jootke lonkshaaval, muidu võivad tekkida iiveldus ja oksendamine;</li>
                <li>Kui peas on haavu, puhastage need ja katke puhta (võimalusel steriilse) sidemega.</li>
            </ol>

            <a class="back-btn-position" href="/"><button class="back-btn">Tagasi</button></a>
            <style>
                .symptom-about {
                    display: flex;
                    flex-direction: column;
                }

                .h1 {
                    font-size: 50px;
                    font-weight: 600;
                }

                ol > li::marker {
                    font-weight: bold;
                }

                li {
                    font-size: 20px;
                    width: 90%;
                    opacity: 60%;
                    margin-bottom: 2rem;
                    margin-left: 10px;
                }

                .back-btn-position {
                    align-self: flex-end;
                    padding: 1rem;
                }

                .back-btn {
                    background-color: #FB9333;
                    width: 200px;
                    height: 60px;
                    border-radius: 100px;
                    color: #331B3B;
                    font-size: 26px;
                    font-weight: bold;
                }
            </style>
        </div>
    </div>
</x-app-layout>