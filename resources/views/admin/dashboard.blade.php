<x-layout>

    <h1>Dashboard Admin</h1>

    <x-requests-table :roleRequests="$revisorRequests" role="revisore"/>
    <x-requests-table :roleRequests="$writerRequests" role="writer"/>

</x-layout>