<x-layout>

    <h1>Dashboard Admin</h1>

    <x-request-table :roleRequests="$adminRequests" role="admin"/>
    <x-request-table :roleRequests="$revisorRequests" role="revisor"/>
    <x-request-table :roleRequests="$writerRequests" role="writer"/>

</x-layout>