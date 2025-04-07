<x-master title="Modofier Un profile">
    @if ($errors->any())
        <x-alert type="danger">
            <h1>Errors: </h1>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </x-alert>
    @endif
    <form method="POST" action="{{route('profiles.update', $profile->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="name" class="form-label">Nom Complete</label>
          <input type="text" class="form-control" name="name" value="{{old("name",$profile->name)}}">
          @error('name')
            {{$message}}
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address:</label>
          <input type="email" name="email" class="form-control" aria-describedby="emailHelp" value="{{old("email",$profile->email)}}">
        </div>
        <div class="mb-3">
            <label for="bio">Bio</label>
          <textarea name="bio" id="" cols="30" rows="10" class="form-control">
            {{$profile->bio}}
          </textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password:</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirmation de Password:</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">image:</label>
          <input type="file" name="image" class="form-control" value="{{old("image",$profile->image)}}" >
        </div>
        <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Modfier</button></div>
        
      </form>
</x-master>
