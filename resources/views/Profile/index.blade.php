<x-master title="Profile">
    <div class="d-flex justify-between row gap-3">
        @foreach ($profiles as $profile)
            <x-profile-card :profile="$profile"/>
        @endforeach
        
        {{$profiles->links()}}
    </div>
</x-master>
