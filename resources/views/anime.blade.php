<x-layout>

    <ul class="list-group">
         @foreach ($response as $anime)

         <li class="list-group-item"><a href="{{route('anime.show',['id'=>$anime['mal_id']])}}">{{$anime['name']}}</a></li>

         @endforeach
        
    
      </ul>



</x-layout>