<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Produk') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <h1 class="text-2xl font-bold text-gray-800 mb-6">
                        {{ $product->name }}
                    </h1>

                    @if ($product->image)
                        <div class="mb-6">
                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->name }}"
                                style="width: 250px; height: 250px; object-fit: cover; border-radius: 10px; border: 1px solid #ddd;">
                        </div>
                    @endif

                    <div class="space-y-4">

                        <div>
                            <p class="font-semibold text-gray-700">
                                Kategori
                            </p>

                            <p class="text-gray-600">
                                {{ $product->category->name }}
                            </p>
                        </div>

                        <div>
                            <p class="font-semibold text-gray-700">
                                Deskripsi
                            </p>

                            <p class="text-gray-600">
                                {{ $product->description ?? 'Tidak ada deskripsi.' }}
                            </p>
                        </div>

                        <div>
                            <p class="font-semibold text-gray-700">
                                Harga
                            </p>

                            <p class="text-gray-600">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </p>
                        </div>

                        <div>
                            <p class="font-semibold text-gray-700">
                                Stok
                            </p>

                            <p class="text-gray-600">
                                {{ $product->stock }}
                            </p>
                        </div>

                        <div>
                            <p class="font-semibold text-gray-700">
                                Status
                            </p>

                            @if ($product->is_active)
                                <span style="color: green; font-weight: 600;">
                                    Aktif
                                </span>
                            @else
                                <span style="color: red; font-weight: 600;">
                                    Tidak Aktif
                                </span>
                            @endif
                        </div>

                    </div>

                    <div style="display: flex; align-items: center; gap: 12px; margin-top: 30px;">

                        @can('update', $product)
                            <a href="{{ route('products.edit', $product) }}"
                               style="background-color: #2563eb;
                                      color: white;
                                      padding: 10px 20px;
                                      border: 2px solid #1d4ed8;
                                      border-radius: 8px;
                                      font-size: 16px;
                                      font-weight: 600;
                                      text-decoration: none;
                                      display: inline-block;">
                                Edit Produk
                            </a>
                        @endcan

                        <a href="{{ route('products.index') }}"
                           style="background-color: #e5e7eb;
                                  color: #1f2937;
                                  padding: 10px 20px;
                                  border: 2px solid #d1d5db;
                                  border-radius: 8px;
                                  font-size: 16px;
                                  font-weight: 600;
                                  text-decoration: none;
                                  display: inline-block;">
                            Kembali
                        </a>

                    </div>

                </div>
            </div>

        </div>
    </div>

</x-app-layout>