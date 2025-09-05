@extends('layouts.app')

   @include('layouts.header')
   @section('content')
   <div class="max-w-6xl mx-auto px-4 py-8">
    <h1 class="text-2xl font-semibold mb-6">Semua Produk</h1>

    <form method="GET" class="mb-6">
        <input name="q" value="{{ request('q') }}" placeholder="Cari produk..."
               class="border rounded px-3 py-2 w-full md:w-80">
    </form>

    @if($products->count())
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($products as $p)
                @php
                    $first = $p->images->first();
                    $src = $first ? asset('storage/'.$first->image) : asset('img/placeholder.jpg');
                    // Format rupiah
                    $price = 'Rp '.number_format($p->price, 0, ',', '.');
                @endphp
                <a href="{{ route('shop.show', $p->id) }}" class="block border rounded-lg overflow-hidden hover:shadow">
                    <div class="aspect-square bg-gray-100">
                        <img src="{{ $src }}" alt="{{ $p->name }}" class="w-full h-full object-cover">
                    </div>
                    <div class="p-3">
                        <div class="text-sm text-gray-500">{{ $p->category->name ?? 'Tanpa Kategori' }}</div>
                        <div class="font-medium">{{ $p->name }}</div>
                        <div class="text-emerald-600 font-semibold">{{ $price }}</div>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $products->links() }}
        </div>
    @else
        <p>Tidak ada produk.</p>
    @endif
</div>
@endsection
