<x-layout>
<div class="container mt-5">
        <div class="row">
            <div class="col-12">
            <div class="card text-center">
  <div class="card-header">
    Redatto da : {{$article->user->name}}
    <a class="small text-muted"href="{{route('article.byCategory',['category'=>$article->category->id])}}" style="text-decoration:none">{{$article->category->name}}</a>

  </div>
  <div class="card-body">
    <h4 class="card-title">{{$article->title}}</h5>
    <h5 class="card-title">{{$article->subtitle}}</h5>
    <img src="{{Storage::url($article->image)}}" alt="...">
    <p class="card-text">{{$article->body}}</p>
    <a href="{{route('article.index')}}" class="btn btn-primary">Torna indietro</a>
  </div>
  <div class="card-footer text-muted">
    {{$article->created_at->format('d/m/y')}}
  </div>
</div>
            </div>
        </div>
</div>

</x-layout>