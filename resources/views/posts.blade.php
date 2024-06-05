<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $p)

    <article class="py-8 max-w-screen-md border-b border-green-300">
        <a href="/posts/{{$p['slug']}}" class="hover:underline">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{$p['title']}}</h2>
        </a>
        <div>
            By
            <a class="hover:underline text-gray-600" href="/authors/{{$p->author->username}}">{{$p->author->name}}</a> in <a class="hover:underline text-gray-600" href="#">Web Programming</a> | {{$p->created_at->diffForHumans()}}
        </div>
        <p class="my-4 font-light">{{Str::limit($p['body'], 150)}}</p>
        <a href="/posts/{{$p['slug']}}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
    </article>

    @endforeach

</x-layout>
