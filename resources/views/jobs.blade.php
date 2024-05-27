<x-layout>
    <x-slot:heading>
       Jobs Page
    </x-slot:heading>

    <h1 class=" text-xl  font-bold">Jobs</h1>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{$job['id']}}">
                <li class="text-blue-500"><strong>{{$job['title']}}</strong> : {{$job['salary']}} per year.</li>
            </a>
        @endforeach
    </ul>
</x-layout>
