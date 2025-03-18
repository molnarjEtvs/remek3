<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Felhasználói adatlap') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        Név: {{ $user->user_name }}
                        <br>
                        Email: {{ $user->email }}
                        <br>
                        Tanít ettől az osztálytól: {{ $user->class_from }}
                        <br>
                        Tanít eddig az osztályig: {{ $user->class_to }}
                        <br>
                        Iskola: {{ $user->school_name }}
                        <br>
                        Megye: {{ $user->county_name }}
                        <br>
                        Profilkép:
                        <br>
                        @if($user->PATH != "")
                            <img class="object-scale-down h-20" src="../storage/{{ $user->PATH }}">
                        @else
                            <svg class="object-scale-down h-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>    

                        
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        Posztok listája:
                        @foreach ($user->posts as $onePost)
                            <div class="onePost">
                                <div><b>{{$onePost->title}}</b></div>
                                <div><x-button class="ml-3"><a href="../postview/{{$onePost->ID}}">Poszt megnyitása</a></x-button></div>
                            </div>
                        @endforeach
                    </div>
               {{ $user->posts->onEachSide(5)->links() }}
            </div>
        </div>
    </div>
                        


    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        Kommentek listája:
                        @foreach ($user->comments as $oneComment)
                            <div class="onePost">
                                <div><b>{{$oneComment->text}}</b></div>
                                <div><x-button class="ml-3"><a href="../postview/{{$oneComment->post_ID}}">Komment megnyitása</a></x-button></div>
                            </div>
                        @endforeach
                    </div>
                        {{ $user->comments->onEachSide(5)->links() }}
                </div>
            </div>
        </div>
    </div>
                        
		           

</x-app-layout>
