<x-layout>
    <x-slot:heading>
       Jobs Page
    </x-slot:heading>

    <h1 class=" text-xl  font-bold">Jobs</h1>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{$job['id']}}" class=" block my-4 px-2 py-4 border border-gray-300">
                <h1 class="text-xl text-blue-500 "><b>{{ $job->employer->name }}</b></h1>
                <li class=""><strong>{{$job['title']}}</strong> : {{$job['salary']}} per year.</li>
            </a>
        @endforeach
    </ul>
</x-layout>
