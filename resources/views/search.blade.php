<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Keresés') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="GET">
                        @csrf
                        <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <div>
                                <p><b>Keresés a felhasználók között</b></p>
                                <label for="userName">Név alapján</label>
                                <button class="px-4 border-r" type="submit">
                                    <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z">
                                        </path>
                                    </svg>
                                </button>
                                <input type="text" hidden value="name" name="type" id="type">
                                <input type="text" value="{{old('userName')}}" name="userName" id="userName" maxlength="150" class="px-4 py-2 w-80" placeholder="Felhasználónév">
                                @error('userName')
                                    {{$message}}
                                 @enderror
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="GET">
                        @csrf
                        <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <div>
                                <label for="userEmail">E-mail cím alapján</label>
                                <button class="px-4 border-r" type="submit">
                                    <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z">
                                        </path>
                                    </svg>
                                </button>
                                <input type="text" hidden value="email" name="type" id="type">
                                <input type="text" value="{{old('userEmail')}}" name="userEmail" id="userEmail" maxlength="150" class="px-4 py-2 w-80" placeholder="E-mail cím">
                                @error('userEmail')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="GET">
                        @csrf
                        <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <div>
                                    <label for="userCounty">Megye adatok alapján</label>
                                        <button class="px-4 border-r" type="submit">
                                        <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z">
                                            </path>
                                        </svg>
                                        </button>
                                </div>
                                    <div>
                                        <input type="text" hidden value="county" name="type" id="type">
                                        <select name="userCounty" id="userCounty" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                                        <option value="0">Kérem válasszon</option>
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
                                    @error('userCounty')
                                        {{$message}}
                                    @enderror
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="GET">
                        @csrf
                        <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <div>
                                <p><b>Keresés a posztok között</b></p>
                                <label for="postTitle">Cím alapján</label>
                                <button class="px-4 border-r" type="submit">
                                    <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z">
                                        </path>
                                    </svg>
                                </button>
                                <input type="text" hidden value="title" name="type" id="type">
                                <input type="text" value="{{old('postTitle')}}" name="postTitle" id="postTitle" maxlength="150" class="px-4 py-2 w-80" placeholder="Poszt címe">
                                @error('postTitle')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="GET">
                     @csrf
                        <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <div>
                                <label for="searchPostDate">Létrehozás dátuma alapján</label>
                                <button class="px-4 border-r" type="submit">
                                    <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z">
                                        </path>
                                    </svg>
                                </button>
                                <script>
                                   $(function() {
                                        $('#dateFrom').datepicker({
                                        dateFormat: 'yy-mm-dd',
                                        changeMonth: true,
                                        changeYear: true,
                                        onSelect: function(datetext){

                                        datetext=datetext+" 00:00:00";
                                        $('#dateFrom').val(datetext);
                                         },
                                        });

                                        $('#dateTo').datepicker({
                                        dateFormat: 'yy-mm-dd',
                                        changeMonth: true,
                                        changeYear: true,
                                        onSelect: function(datetext){

                                        datetext=datetext+" 00:00:00";
                                        $('#dateTo').val(datetext);
                                         },
                                        });
                                    });
                                </script>
                                <input type="text" hidden value="date" name="type" id="type">
                                <input type="text" id="dateFrom" name="dateFrom" placeholder="Kezdő dátum">
                                <label for="dateFrom">-tól</label>
                                <input type="text" id="dateTo" name="dateTo" placeholder="Végdátum">
                                <label for="dateTo">-ig</label>
                                    @error('dateFrom')
                                        {{$message}}
                                    @enderror
                                    @error('dateTo')
                                        {{$message}}
                                    @enderror
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="GET">
                        @csrf
                        <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <div>
                                <label for="postSubject">Tantárgy alapján</label>
                                <button class="px-4 border-r" type="submit">
                                    <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z">
                                        </path>
                                    </svg>
                                </button>
                                <input type="text" hidden value="subject" name="type" id="type">
                                <input type="text" value="{{old('postSubject')}}" name="postSubject" id="postSubject" maxlength="150" class="px-4 py-2 w-80" placeholder="Tantárgy">
                                @error('postSubject')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    @isset($searchUser)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p><b>Keresés eredménye:</b></p>
                </div>
            </div>
        </div>
        @foreach ($searchUser as $user)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <a href="./user/{{ $user->id }}">
                            <div>
                                @if($user->file_ID != 1)
                                    <img class="object-scale-down h-20" src="./storageID/{{ $user->file_ID }}">
                                @else
                                    <svg class="object-scale-down h-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                @endif
                                <b> {{$user->name}}</b>
                            </div>
                        </a>
                        <p>{{ $user->email }}</p>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="py-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{ $searchUser->onEachSide(5)->links() }}
                    </div>
                </div>
            </div>
        </div>
    @endisset
    
    @isset($searchPost)
        <div>
            @foreach ($searchPost as $post)
                <div class="py-1">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                <div class="onePost flex space-x-8">
                                    <a href="./user/{{ $post->user_ID }}">
                                        <div>
                                            @if($post->users_file_ID != 1)
                                                <img src="./storageID/{{ $post->users_file_ID }}">
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>
                                                </svg>
                                            @endif
                                            <b> {{$post->name}}</b>
                                        </div>
                                    </a>
                                    <div><b>{{$post->title}}</b></div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                        </svg>
                                    </div>
                                    <div>{{$post->created_at}}</div>
                                    <x-button class="ml-3"><a href="./postview/{{$post->ID}}">Poszt megnyitása</a></x-button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>



            <div class="py-1">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            {{ $searchPost->onEachSide(5)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endisset
</x-app-layout>
