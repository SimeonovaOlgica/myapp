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
    <p class="text-red-500 text-center font-bold">Sorry! No such jobs found!</p>
    <i class="fa-solid fa-face-worried"></i>
@endunless

</x-layout>