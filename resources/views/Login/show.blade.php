<x-master title="Se Connecter">
  <form method="POST" action="{{route('login')}}">
    @csrf
    <div class="mb-3">
      <label  class="form-label">Email address</label>
      <input type="email" class="form-control" name="email" value="{{old('email')}}">
      @error('email')
      <x-alert type="danger">
          {{$message}}
      </x-alert>
      @enderror
    </div>
    <div class="mb-3">
      <label  class="form-label">Password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <div class="d-grid">
      <button  type="submit" class="btn btn-primary btn-block ">Se Conecter</button>
    </div>
  </form>
</x-master>

