<x-layout>

    <h1>Dashboard Admin</h1>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{session('status')}}
        </div>
    @endif

    <x-request-table :roleRequests="$revisorRequests" role="revisor"/>
    <x-request-table :roleRequests="$writerRequests" role="writer"/>

</x-layout>