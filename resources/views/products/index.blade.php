<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Ürünler') }}
            </h2>

            <a href="{{ route('create') }}" class="ml-4 float-right px-4 py-2 bg-gray-500 hover:bg-gray-700 text-white rounded-md">Urun Ekle</a>
        </div>
    </x-slot>

    @if($products->count() > 0)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-16 py-3">
                                        Fotoğraf
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Ürün Adı
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Açıklama
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Ekleme Tarihi
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Güncelleme Tarihi
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Aktiflik
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Düzenle
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Sil
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 transition-colors dark:hover:bg-gray-600">
                                    <td class="p-4">
                                        <img src="{{ $product->image }}" class="rounded w-16 md:w-32 max-w-full max-h-full" alt="Apple Watch">
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        <p>{{ $product->name }}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p>{{ $product->description }}</p>
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        <p>{{ $product->created_at }}</p>
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        <p>{{ $product->updated_at }}</p>
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        <p>{{ $product->active }}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('products.edit', $product->id) }}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Düzenle</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('products.delete', $product->id) }}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Sil</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</x-app-layout>