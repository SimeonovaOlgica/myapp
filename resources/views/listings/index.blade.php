<x-layout>
@include('partials._hero')
@include('partials._search')

@unless (count($listings)==0)

@foreach($listings as $listing) 
  <x-listing-card :listing="$listing"/>
   <x-card>
    
   </x-card>

@endforeach

@else
    <p>No listings found</p>
@endunless

</x-layout>