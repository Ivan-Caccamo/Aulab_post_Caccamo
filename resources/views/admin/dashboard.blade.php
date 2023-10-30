<x-layout>

    <h1>Dashboard Admin</h1>

    <requests-table :roleRequests="$revisorRequests" role="revisore"/>
    <requests-table :roleRequests="$writerRequests" role="writer"/>

</x-layout>