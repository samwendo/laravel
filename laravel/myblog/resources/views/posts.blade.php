
    {{-- @extends('layout')

    @section('content') --}}

    <x-layout>

        <x-slot name="content">


    <article>

    @foreach ($posts as $post)
         <h1>
             <a href="/posts/{{$post->id}}">
            {{{$post->title}}}
            </a>
         </h1>
         <div>
             <p class="post-excerpt">
                 {{$post->excerpt}}
             </p>

             <p class="post-date">
               Published on:  {{ date('l jS \of F Y h:i:s A',
                    $post->published_date) }}
             </p>
         </div>
    @endforeach

    </article>
</x-slot>
</x-layout>

{{-- @endsection


@section('header') --}}


