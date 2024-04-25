@include('components.header');
<x-jobslist>
    @foreach ($Jobs as $item)
        <div>{{ $item->title }}</div>
    @endforeach
</x-jobslist>
