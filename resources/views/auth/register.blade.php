<x-layout>

<div class="m-5">
  <div class="card-header">
   <h1>Registrati:</h1>
  </div>
  <div class="card-body">
  <form action="{{route('register')}}" method="POST">
    @csrf

  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Username</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1">
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror  
</div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Conferma password</label>
    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="exampleInputPassword1">
        @error('password_confirmation')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror  
</div>

  <button type="submit" class="btn btn-primary">Registrati</button>

</form>
</div>


</x-layout>