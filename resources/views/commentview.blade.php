<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Komment Szerkesztés
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST">
                        @csrf
                        <div class="mt-4">
                            <label for="comment"><b>Komment</b></label>
                            <textarea name="comment" id="comment" maxlength="400" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="4">{{$commentData->text}}</textarea>
                            @error('comment')
                                {{$message}}
                            @enderror
                            <br>
                            <div>
                                <x-button class="ml-3" type="submit">Mentés</x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
