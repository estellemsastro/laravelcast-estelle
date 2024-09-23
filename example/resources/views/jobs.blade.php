<x-layout>
        <x-slot:heading>    
        Jobs listings
    </x-slot:heading>
    
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href>="/jobs/{{ $jobs['id']}}" class="text-blue-500 hover:underline">
                    <strong> {{$job['title'] }}:</strong> Pays {{ $job['salary'] }} per year
                </a>
            </li>
        @endforeach
    </ul>
</x-layout> 