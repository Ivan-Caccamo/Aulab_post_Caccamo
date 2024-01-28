<x-layout>

    <h1>Dashboard Admin</h1>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{session('status')}}
        </div>
    @endif

    <x-request-table :roleRequests="$revisorRequests" role="revisor"/>
    <x-request-table :roleRequests="$writerRequests" role="writer"/>

    <h3>i nostri tags</h3>
    <x-metainfo-table :metainfos="$tags" metaType="tags"/>
    <h3>le nostre categorie</h3>
    <x-metainfo-table :metainfos="$categories" metaType="categories"/>
    <h3>Crea nuova categoria</h3>
    <form action="{{route('admin.createCategory')}}" method="POST" class="d-flex">
        @csrf
        <input type="text" name="name" class="form-control" placeholder="inserisci il nome della nuova categoria">
        <button type="submit" class="btn btn-primary">Crea categoria</button>
    </form>

</x-layout>