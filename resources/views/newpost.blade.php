<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Új poszt') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                     <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-4">
                        <label for="title">Cím: </label>
                        <input type="text" value="{{old('title')}}" name="title" id="title" maxlength="150" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="150">
                        @error('title')
                            {{$message}}
                        @enderror
                        <br>
                        </div>

                        <label for="post">Szöveg</label>
                        <textarea name="post" id="post" maxlength="400" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        rows="4" placeholder="400">{{old('post')}}</textarea>
                        @error('post')
                            {{$message}}
                        @enderror
                        <br>

                        <div class="flex items-center justify-start mt-4 gap-x-2">
                        <label for="class">Évfolyam kiválasztása:</label>
                        <select name="class" id="class" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
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
                        </div>

                        <div class="flex items-center justify-start mt-4 gap-x-2">
                        <label for="subject">Tantárgy kiválasztása:</label>
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

                    <div class="flex items-center justify-between mt-4 gap-x-2">
                        <input name="inputfile" id="inputfile" type="file" class="file:border file:border-solid"/>
                        <br>
                        <x-button class="ml-3" type="submit">Küldés</x-button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
