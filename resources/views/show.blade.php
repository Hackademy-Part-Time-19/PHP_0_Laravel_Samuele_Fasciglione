<x-layout>

    <div class="card" style="width: 18rem;">
        <img src="{{$response['images']['jpg']['image_url']}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{{$response['title']}}}</h5>
          <p class="card-text">{{$response['synopsis']}}</p>
         
        </div>
      </div>



</x-layout>