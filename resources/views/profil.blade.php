<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Adatok:
                </div>
             </div>
        </div>
        <br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table>
                        <tr>
                            <td>Név:</td>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>

                        <tr>
                            <td>E-mail cím:</td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>

                        <!--tr>
                            <td>Megye:</td>
                            <td>-</td>
                        </tr>

                        <tr>
                            <td>Oktatási intézmény:</td>
                            <td>-</td>
                        </tr>

                        <tr>
                            <td>Szak(ok):</td>
                            <td>-</td>
                        </tr-->

                    </table>
                   
                    <form method="Post" enctype="multipart/form-data">     
                        @csrf
                        <div class="mt-4">
                        <label for="name">Név </label>
                        <input type="name" value="{{Auth::user()->name}}" name="name" id="name" maxlength="255" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" >
                        @error('name')
                            {{$message}}
                        @enderror
                        <br>         
                        <label for="school">Intézmény neve</label>
                        <input type="school" value="{{Auth::user()->school}}" name="school" id="school" maxlength="255" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" >
                        @error('school')
                            {{$message}}
                        @enderror
                        <br>
                       </div>          
                       <label for="class_from">Tanítás Osztálytól:</label>
                       <div class="flex items-center justify-start mt-4 gap-x-2">
                        
                        <select name="class_from" id="class_from"  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                        <option value="0">Mindegy</option>
                        <option value="1">1. osztály</option>
                        <option value="2">2. osztály</option>
                        <option value="3">3. osztály</option>
                        <option value="4">4. osztály</option>
                        <option value="5">5. osztály</option>
                        <option value="6">6. osztály</option>
                        <option value="7">7. osztály</option>
                        <option value="8">8. osztály</option>
                        <option value="9">9. osztály</option>
                        <option value="10">10. osztály</option>
                        <option value="11">11. osztály</option>
                        <option value="12">12. osztály</option>
                        <option value="13">13. osztály</option>
                        </select>
                        <br>
                        @error('class_from')
                        {{$message}}
                        @enderror
                        </div>
                        <label for="class_to">Tanítás Osztályig:</label>
                        <div class="flex items-center justify-start mt-4 gap-x-2">
                            
                            <select name="class_to" id="class_to"  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                                <option value="0">Mindegy</option>
                                <option value="1">1. osztály</option>
                                <option value="2">2. osztály</option>
                                <option value="3">3. osztály</option>
                                <option value="4">4. osztály</option>
                                <option value="5">5. osztály</option>
                                <option value="6">6. osztály</option>
                                <option value="7">7. osztály</option>
                                <option value="8">8. osztály</option>
                                <option value="9">9. osztály</option>
                                <option value="10">10. osztály</option>
                                <option value="11">11. osztály</option>
                                <option value="12">12. osztály</option>
                                <option value="13">13. osztály</option>
                            </select>
                            <br>
                            @error('class_to')
                            {{$message}}
                            @enderror
                            </div>
                            <label for="subject">Tantárgy kiválasztása:</label>
                            <div class="flex items-center justify-start mt-4 gap-x-2">
                                
                                <select name="subject" id="subject" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                                    <option value="1">Mindegy</option>
                                    <option value="2">Kémia</option>
                                    <option value="3">Matematika</option>
                                    <option value="4">Idegen nyelv</option>
                                    <option value="5">Biológia</option>
                                    <option value="6">Földrajz</option>
                                    <option value="7">Történelem</option>
                                    <option value="8">Irodalom</option>
                                    <option value="9">Nyelvtan</option>
                                    <option value="10">Erkölcstan</option>
                                    <option value="11">Hittan</option>
                                    <option value="12">Környezetismeret</option>
                                    <option value="13">Ének-zene</option>
                                    <option value="14">Vizuális kultúra
                                    <option value="15">Technika</option>
                                    <option value="16">Dráma és tánc</option>
                                    <option value="17">Informatika</option>
                                    <option value="18">Társadalmi és állampolgári imeretek</option>
                                    <option value="19">Hon- és népismeret</option>
                                    <option value="20">Természetismeret</option>
                                    <option value="21">Fizika</option>
                                    <option value="22">Kémia</option>
                                    <option value="23">Etika</option>
                                    <option value="24">Mozgóképkultúra és médiaismeret</option>
                                    <option value="25">Művészetek</option>
                                    <option value="26">Filozófia</option>
                                </select>
                                <br>
                            </div>
                            <label for="county">Megye:</label>
                            <div class="flex items-center justify-start mt-4 gap-x-2">
                                
                                <select name="county" id="county"   class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                                <option value="1">Bács-Kiskun</option>
                                <option value="2">Baranya</option>
                                <option value="3">Békés</option>
                                <option value="4">Borsod-Abaúj-Zemplén</option>
                                <option value="5">Csongrád-Csanád</option>
                                <option value="6">Fejér</option>
                                <option value="7">Győr-Moson-Sopron</option>
                                <option value="8">Hajdú-Bihar</option>
                                <option value="9">Heves</option>
                                <option value="10">Jász-Nagykun-Szolnok</option>
                                <option value="11">Komárom-Esztergom</option>
                                <option value="12">Nógrád</option>
                                <option value="13">Pest</option>
                                <option value="14">Somogy</option>
                                <option value="15">Szabolcs-Szatmár-Bereg</option>
                                <option value="16">Tolna</option>
                                <option value="17">Vas</option>
                                <option value="18">Veszprém</option>
                                <option value="19">Zala</option>
                                <option value="20">Budapest</option>
                                </select>
                                <br>
                                @error('county')
                                {{$message}}
                                @enderror
                            </div>
                      <div class="flex items-center justify-between mt-4 gap-x-2">
                        <label for="inputfile">Profilkép:</label>
                        <input name="inputfile" id="inputfile" type="file" class="file:border file:border-solid"/>
                        <br>
                        
                      </div>
                        <x-button class="ml-3" type="submit">Küldés</x-button>
                    </form>
                    <br>
                </div>
                <br>
            </div>
        </div>
    </div>
</x-app-layout>
