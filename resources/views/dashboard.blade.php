<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kezdőképernyő') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                Üdvözöljük <b>{{ Auth::user()->name }}</b>,
                 sikeresen bejelentkezett!

                <x-button class="ml-3">
                    <a href="{{ route('newpost') }}">Új poszt</a>
                </x-button>
            </div>
            </div>
        </div>
    </div>

  
    @foreach ($ptp as $onePost)
    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">        
            <div class="flex flex-col md:flex-row gap-4p-6 bg-white border-b border-gray-200 shadow-md rounded-md w-8/12 mx-auto bg-white p-6">
                <div class="flex-none col-span-2 md:col-span-1 rounded-full h-32 w-32 flex space-x-8">
                    <a href="./user/{{ $onePost->user_ID }}">                          
                        @if($onePost->users_file_ID != 1)
                            <img class="object-scale-down h-20" src="./storageID/{{ $onePost->users_file_ID }}">
                            @else
                            <svg class="object-scale-down h-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        @endif
                    <b> {{$onePost->name}}</b>
                    </a>
                    <div><b><p class="text-xl">{{$onePost->title}}</p></b></div>
                </div>

                <div class="flex-1 flex flex-col gap-4 py-1">
                    <div class="tet-xs flex gap-4 space-x-8">
                        <div>
                            <b>{{$onePost->commentNumber}}</b>
                        </div>
                        
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </div>
                            
                        <div>
                            <b class="postLikes" id="{{$onePost->ID}}"></b>
                        </div>

                        <div>
                            <button class="likePost" id="_{{$onePost->ID}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                            </svg>
                            </button>
                        </div>

                        <div>{{$onePost->created_at}}</div>
                    
                        <div><x-button class="ml-3"><a href="./postview/{{$onePost->ID}}">Poszt megnyitása</a></x-button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
        

        <div class="py-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{ $ptp->onEachSide(5)->links() }}
                    </div>
                </div>
            </div>
        </div>
    

    <script>
        $( document ).ready(function() {
            function updatePostLikes(post_ID) {
                $.get( "./api/postLikes/" + post_ID, function( data ) {
                    $("#" + data.Id).text(data.Likes);
                });
            }

            var posts = document.getElementsByClassName("postLikes");
            for (var i = 0; i < posts.length; i++) {
                updatePostLikes(posts.item(i).getAttribute('id'))
            }

            $(".likePost").click(function(){
                $.get( "./api/likePost/" + $(this).attr('id').substring(1) + "?api_token={{Auth::user()->api_token}}", function( data ) {
                    updatePostLikes(data.Id)
                });
            });
        });
    </script>


</x-app-layout>
