<x-app-layout>

    <x-slot name="header">
        <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Produk') }}
            </h2>

            @if (auth()->user()->role === 'admin' || auth()->user()->role === 'editor')
                <a href="{{ route('products.create') }}"
                   style="background-color: #2563eb;
                          color: white;
                          padding: 10px 18px;
                          border: 2px solid #1d4ed8;
                          border-radius: 8px;
                          font-size: 16px;
                          font-weight: 600;
                          text-decoration: none;
                          display: inline-block;">
                    + Tambah Produk
                </a>
            @endif

        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Pesan berhasil --}}
            @if (session('success'))
                <div class="mb-6 bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Pesan error --}}
            @if (session('error'))
                <div class="mb-6 bg-red-100 border border-red-300 text-red-800 px-4 py-3 rounded-lg">
                    {{ session('error') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6">

                    {{-- Tabel Produk --}}
                    <div class="overflow-x-auto">

                        <table class="w-full border-collapse">

                            <thead>
                                <tr class="bg-gray-100 text-left">

                                    <th class="px-4 py-3 border">
                                        No
                                    </th>

                                    <th class="px-4 py-3 border">
                                        Produk
                                    </th>

                                    <th class="px-4 py-3 border">
                                        Kategori
                                    </th>

                                    <th class="px-4 py-3 border">
                                        Harga
                                    </th>

                                    <th class="px-4 py-3 border">
                                        Stok
                                    </th>

                                    <th class="px-4 py-3 border">
                                        Status
                                    </th>

                                    <th class="px-4 py-3 border">
                                        Aksi
                                    </th>

                                </tr>
                            </thead>

                            <tbody>

                                @forelse ($products as $product)

                                    <tr class="hover:bg-gray-50">

                                        {{-- Nomor --}}
                                        <td class="px-4 py-3 border">
                                            {{ $products->firstItem() + $loop->index }}
                                        </td>

                                        {{-- Produk --}}
                                        <td class="px-4 py-3 border">

                                            <div class="font-semibold text-gray-800">
                                                {{ $product->name }}
                                            </div>

                                            @if ($product->description)
                                                <div class="text-sm text-gray-500">
                                                    {{ Str::limit($product->description, 60) }}
                                                </div>
                                            @endif

                                        </td>

                                        {{-- Kategori --}}
                                        <td class="px-4 py-3 border">
                                            {{ $product->category->name ?? '-' }}
                                        </td>

                                        {{-- Harga --}}
                                        <td class="px-4 py-3 border">
                                            Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </td>

                                        {{-- Stok --}}
                                        <td class="px-4 py-3 border">
                                            {{ $product->stock }}
                                        </td>

                                        {{-- Status --}}
                                        <td class="px-4 py-3 border">

                                            @if ($product->is_active)

                                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-700">
                                                    Aktif
                                                </span>

                                            @else

                                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-700">
                                                    Tidak Aktif
                                                </span>

                                            @endif

                                        </td>

                                        {{-- Aksi --}}
                                        <td class="px-4 py-3 border">

                                            <div class="flex flex-wrap gap-2">

                                                {{-- Detail --}}
                                                <a href="{{ route('products.show', $product) }}"
                                                   class="text-blue-600 hover:text-blue-800 font-medium">
                                                    Detail
                                                </a>

                                                {{-- Edit --}}
                                                @if (auth()->user()->role === 'admin' || auth()->user()->role === 'editor')

                                                    <a href="{{ route('products.edit', $product) }}"
                                                       class="text-yellow-600 hover:text-yellow-800 font-medium">
                                                        Edit
                                                    </a>

                                                @endif

                                                {{-- Hapus hanya Admin --}}
                                                @if (auth()->user()->role === 'admin')

                                                    <form action="{{ route('products.destroy', $product) }}"
                                                          method="POST"
                                                          onsubmit="return confirm('Yakin ingin menghapus produk ini?')">

                                                        @csrf

                                                        @method('DELETE')

                                                        <button type="submit"
                                                                class="text-red-600 hover:text-red-800 font-medium">
                                                            Hapus
                                                        </button>

                                                    </form>

                                                @endif

                                            </div>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td colspan="7"
                                            class="px-4 py-8 text-center text-gray-500">

                                            Belum ada produk.

                                        </td>

                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                    {{-- Pagination --}}
                    <div class="mt-6">
                        {{ $products->links() }}
                    </div>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>