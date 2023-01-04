{{-- Card component design/ The job post --}}

<div {{$attributes->merge(['class'=>'bg-gray-50 border border-gray-200 rounded p-6'])}}>
    {{$slot}}
    {{-- Here an appropriate data will be passed --}}
</div>