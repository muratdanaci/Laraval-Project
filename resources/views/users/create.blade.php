<x-app-layout>
	<x-slot name="header">
		<div class="flex justify-between">
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Kullanıcı Ekle') }}
			</h2>

			<a href="{{ route('users.list') }}" class="ml-4 float-right px-4 py-2 bg-gray-500 hover:bg-gray-700 text-white rounded-md">Kullanıcılar</a>
		</div>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900">
					<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
						<section class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-800 mb-10 justify-center align-middle">
							<h1 class="text-xl font-bold text-white capitalize dark:text-white">Kullanıcı Ekle</h1>
							<form action="{{ route('users.store') }}" method="POST">
								@csrf
								<div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
									<div>
										<label class="text-white dark:text-gray-200" for="name">Kullanıcı Adı</label>
										<input id="name" name="name" type="string" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
									</div>
									<div>
										<label class="text-white dark:text-gray-200" for="email">E-Posta</label>
										<input id="email" name="email" type="string" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
									</div>
									<div>
										<label class="text-white dark:text-gray-200" for="password">Şifre</label>
										<input id="password" name="password" type="string" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
									</div>
									<div>
										<label class="text-white dark:text-gray-200">Ekleme Tarihi</label>
										<input id="date" name="created_at" type="date" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
									</div>
								</div>
								<div class="flex justify-end mt-6">
									<button type="submit" onclick="alert('Kullanıcı kaydedildi!')" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-500 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-600">Kaydet</button>
								</div>
					</div>
					
					</form>
					</section>
				</div>
			</div>
		</div>
	</div>
	</div>
</x-app-layout>