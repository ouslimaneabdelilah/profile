@props(['profile'])
<div class="card" style="width: 18rem;">
   <img src="{{asset('storage/'.$profile->image)}}" class="card-img-top" alt="...">
   <div class="card-body">
      <h5 class="card-title">{{$profile->name}}</h5>
      <p class="card-text">{{Str::limit($profile->bio,20) }}</p>
      <a class="stretched-link" href="{{route('profile.show',$profile->id)}}"></a>
   </div>
   <div class="card-foot " style="z-index: 9">
      <form action="{{route('profile.destroy',$profile->id)}}" method="post">
         @csrf
         @method("DELETE")
         <button type="submit" class="btn btn-danger z-9">Supprimer</button>
         <a href="{{route('profiles.edit',$profile->id)}}" class="btn btn-primary z-9">Modifier</a>
      </form>
   </div>

</div>