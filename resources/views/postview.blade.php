<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $postData->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p><b>Poszt:</b></p>
                    <br>
                    <b>{{ $postData->title }}</b><br>
                    {{ $postData->text }}<br>
                    <br>
                    @if($postData->PATH != "")
                        <a href="../storage/{{ $postData->PATH }}">File</a>
                    @endif

                    <div class="flex space-x-8">
                        <div><b id="postLikes"></b></div>
                        <div>
                           <button id="likePost">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                </svg>
                            </button>
                          </div>
                    </div>
                    <div>
                        @if($postData->user_ID == auth()->user()->id)
                            <x-button>
                                <a href="../postedit/{{ $postData->post_ID }}">Szerkesztés</a>
                            </x-button>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200"><b>Kommentek:</b></div>
                </div>
            </div>
        </div>

        <div>
            @foreach ($postData->comments as $oneComment)
                <div class="py-1">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                <div class="commentList flex space-x-8">
                                    <a href="../user/{{ $oneComment->user_ID }}">
                                        <div>
                                            @if($oneComment->PATH != "")
                                                <img class="object-scale-down h-20" src="../storage/{{ $oneComment->PATH }}">
                                            @else
                                                <svg class="object-scale-down h-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>
                                            @endif
                                            <b> {{$oneComment->name}}</b>
                                        </div>
                                    </a>
                                    <div>{{$oneComment->created_at}}</div>
                                </div>

                                <div class="py-6">{{$oneComment->text}}</div>

                                <div class="flex space-x-8">
                                <div><b class="commentLikes" id="{{$oneComment->comment_ID}}"></b></div>
                                    <div>
                                        <button class="likeComment" id="_{{$oneComment->comment_ID}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    @if($oneComment->user_ID == auth()->user()->id)
                                        <x-button>
                                            <a href="../commentedit/{{ $oneComment->comment_ID }}">Szerkesztés</a>
                                        </x-button>
                                    @endif
                                </div>
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

                        {{ $postData->comments->onEachSide(3)->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST">
                        @csrf
                        <div class="mt-4">
                            <label for="comment"><b>Új komment</b></label>
                            <textarea name="comment" id="comment" maxlength="400" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="4" placeholder="400">{{old('comment')}}</textarea>
                            @error('comment')
                                {{$message}}
                            @enderror
                            <br>
                            <div>
                                <x-button class="ml-3" type="submit">Komment</x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $( document ).ready(function() {
            function updatePostLikes() {
                $.get( "../api/postLikes/{{$postData->post_ID}}", function( data ) {
                    $("#postLikes").text(data.Likes);
                });
            }
            updatePostLikes()

            function updateCommentLikes(comment_ID) {
                $.get( "../api/commentLikes/" + comment_ID, function( data ) {
                    $("#" + data.Id).text(data.Likes);
                });
            }

            var comments = document.getElementsByClassName("commentLikes");
            for (var i = 0; i < comments.length; i++) {
                updateCommentLikes(comments.item(i).getAttribute('id'))
            }

            $(".likeComment").click(function(){
                $.get( "../api/likeComment/" + $(this).attr('id').substring(1) + "?api_token={{Auth::user()->api_token}}", function( data ) {
                    updateCommentLikes(data.Id)
                });
            });

            $("#likePost").click(function(){
                $.get( "../api/likePost/{{$postData->post_ID}}?api_token={{Auth::user()->api_token}}", function( data ) {
                    updatePostLikes()
                });
            });
        });
    </script>

</x-app-layout>
