<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kullanıcılar') }}
            </h2>


            <a href="{{ route('users.create') }}" class="ml-4 float-right px-4 py-2 bg-gray-500 hover:bg-gray-700 text-white rounded-md">Kullanıcı Ekle</a>
        </div>
    </x-slot>

    @if($users->count() > 0)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Kullanıcı Adı
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        E-Posta
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Şifre
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Ekleme Tarihi
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Güncelleme Tarihi
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
                                @foreach ($users as $user)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 transition-colors dark:hover:bg-gray-600">
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        <p>{{ $user->name }}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p>{{ $user->email }}</p>
                                    </td>
                                    <td class="px-6 py-4 w-1">
                                        <p>***</p>
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        <p>{{ $user->created_at }}</p>
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        <p>{{ $user->updated_at }}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('users.update', $user->id) }}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Düzenle</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('users.delete', $user->id) }}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Sil</a>
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