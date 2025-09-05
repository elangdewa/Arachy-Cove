@extends('layouts.app')

   @include('layouts.header')
   @section('content')
   <div class="max-w-5xl mx-auto px-4 py-8">
    <a href="{{ route('shop.index') }}" class="text-sm text-blue-600">&larr; Kembali</a>

    <div class="grid md:grid-cols-2 gap-8 mt-4">
        {{-- Gallery sederhana: pakai gambar pertama sebagai utama --}}
        <div>
            @php
                $first = $product->images->first();
                $main = $first ? asset('storage/'.$first->image) : asset('img/placeholder.jpg');
            @endphp
            <div class="aspect-square bg-gray-100 border rounded-lg overflow-hidden">
                <img src="{{ $main }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
            </div>

            @if($product->images->count() > 1)
                <div class="grid grid-cols-4 gap-3 mt-3">
                    @foreach($product->images->skip(1) as $img)
                        <div class="aspect-square border rounded overflow-hidden">
                            <img src="{{ asset('storage/'.$img->image) }}"
                                 alt="{{ $product->name }}"
                                 class="w-full h-full object-cover">
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="space-y-4">
            <h1 class="text-2xl font-semibold">{{ $product->name }}</h1>
            <div class="text-gray-600">{{ $product->category->name ?? '-' }}</div>
            <div class="text-emerald-600 text-xl font-bold">
                Rp {{ number_format($product->price, 0, ',', '.') }}
            </div>
            <div class="prose max-w-none">
                {!! nl2br(e($product->description)) !!}
            </div>

            {{-- contoh stok 1/2/3 --}}
            <div class="text-sm text-gray-600">
                Stok: {{ $product->stock_1 + $product->stock_2 + $product->stock_3 }}
            </div>

            <form method="POST" action="#">
                @csrf
                <button type="button" class="bg-emerald-600 text-white px-4 py-2 rounded">
                    Tambah ke Keranjang
                </button>
            </form>
        </div>
    </div>
</div>
   @endsection
