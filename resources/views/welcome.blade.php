<x-guest-layout>
     <div class="Regbar">
              <ul class="flexContainer2">

                <li>
                  <x-button class="ml-3">
                    <a href="{{ route('login') }}">Bejelentkezés</a>
                </x-button>
               </li>

                <li>

                    <x-button class="ml-3">
                      <a href="{{ route('register') }}">Regisztráció</a>
                      </x-button>

                   </li>

                 </ul>
        </div>
 
<div class ="box0">
  <h1> TeaChat: </h1>
  <h2>„Teachers chat with each other during a tea break, and then they can better teach at school.”</h2>
  <h4>Üdvözöljük weboldalunkon! Ön a BGéSZC Eötvös Loránd Technikum Szoftverfejlesztő szak 2020/2022-es kurzusának "TeaChat" vizsgamunkáját látja.</h4>
   <h5>Késztették: Bodnár Dávid, Jokán Gergő, Fekete Máté.</h5>
</div>

<nav id="footer" class="bg-white shadow">
            
  <div class="flex gap-2 p-4 bg-gray-400 justify-evenly">
              <div class="p-2 text-black"><a href="{{ route('dashboard') }}"><img src="img/favicon.svg"></a></div>
              <div class="p-2 text-black"><b> TeaChat: </b></div>
              <div class="p-2 text-black">„Teachers chat with each other during a tea break, and then they can better teach at school.”</div>
  </div>
</nav>
</x-guest-layout>
