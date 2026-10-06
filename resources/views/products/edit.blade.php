<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Produk') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">

                    {{-- Pesan Error --}}
                    @if ($errors->any())
                        <div class="mb-6 bg-red-100 border border-red-300 text-red-800 px-4 py-3 rounded-lg">
                            <p class="font-semibold mb-2">
                                Terdapat kesalahan:
                            </p>

                            <ul class="list-disc list-inside text-sm">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Form Edit Produk --}}
                    <form action="{{ route('products.update', $product) }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        {{-- Kategori --}}
                        <div class="mb-5">
                            <label for="category_id"
                                   class="block font-medium text-sm text-gray-700 mb-2">
                                Kategori
                            </label>

                            <select name="category_id"
                                    id="category_id"
                                    class="w-full border-gray-300 rounded-lg shadow-sm"
                                    required>

                                <option value="">
                                    -- Pilih Kategori --
                                </option>

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        {{-- Nama Produk --}}
                        <div class="mb-5">
                            <label for="name"
                                   class="block font-medium text-sm text-gray-700 mb-2">
                                Nama Produk
                            </label>

                            <input type="text"
                                   name="name"
                                   id="name"
                                   value="{{ old('name', $product->name) }}"
                                   class="w-full border-gray-300 rounded-lg shadow-sm"
                                   required>
                        </div>

                        {{-- Deskripsi --}}
                        <div class="mb-5">
                            <label for="description"
                                   class="block font-medium text-sm text-gray-700 mb-2">
                                Deskripsi
                            </label>

                            <textarea name="description"
                                      id="description"
                                      rows="5"
                                      class="w-full border-gray-300 rounded-lg shadow-sm">{{ old('description', $product->description) }}</textarea>
                        </div>

                        {{-- Harga --}}
                        <div class="mb-5">
                            <label for="price"
                                   class="block font-medium text-sm text-gray-700 mb-2">
                                Harga
                            </label>

                            <input type="number"
                                   name="price"
                                   id="price"
                                   value="{{ old('price', $product->price) }}"
                                   min="0"
                                   step="0.01"
                                   class="w-full border-gray-300 rounded-lg shadow-sm"
                                   required>
                        </div>

                        {{-- Stok --}}
                        <div class="mb-5">
                            <label for="stock"
                                   class="block font-medium text-sm text-gray-700 mb-2">
                                Stok
                            </label>

                            <input type="number"
                                   name="stock"
                                   id="stock"
                                   value="{{ old('stock', $product->stock) }}"
                                   min="0"
                                   class="w-full border-gray-300 rounded-lg shadow-sm"
                                   required>
                        </div>

                        {{-- Gambar --}}
                        <div class="mb-5">
                            <label for="image"
                                   class="block font-medium text-sm text-gray-700 mb-2">
                                Gambar Produk
                            </label>

                            @if ($product->image)
                                <div class="mb-3">
                                    <p class="text-sm text-gray-500 mb-2">
                                        Gambar saat ini:
                                    </p>

                                    <img src="{{ asset('storage/' . $product->image) }}"
                                         alt="{{ $product->name }}"
                                         class="w-32 h-32 object-cover rounded-lg border">
                                </div>
                            @endif

                            <input type="file"
                                   name="image"
                                   id="image"
                                   accept="image/*"
                                   class="w-full border border-gray-300 rounded-lg p-2">

                            <p class="mt-1 text-sm text-gray-500">
                                Maksimal ukuran 2 MB.
                            </p>
                        </div>

                        {{-- Status --}}
                        <div class="mb-6">
                            <label class="inline-flex items-center">

                                <input type="checkbox"
                                       name="is_active"
                                       value="1"
                                       {{ old('is_active', $product->is_active) ? 'checked' : '' }}
                                       class="rounded border-gray-300">

                                <span class="ml-2 text-sm text-gray-700">
                                    Produk aktif
                                </span>

                            </label>
                        </div>

                        {{-- Tombol --}}
                        <div style="display: flex; align-items: center; gap: 12px; margin-top: 24px;">

                            <button type="submit"
                                    style="background-color: #2563eb;
                                           color: white;
                                           padding: 10px 20px;
                                           border: 2px solid #1d4ed8;
                                           border-radius: 8px;
                                           font-size: 16px;
                                           font-weight: 600;
                                           cursor: pointer;
                                           display: inline-block;">
                                Update Produk
                            </button>

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
                                Batal
                            </a>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</x-app-layout>