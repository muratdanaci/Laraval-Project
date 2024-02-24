<x-app-layout>
	<x-slot name="header">
	<div class="flex justify-between">
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Ürünü Düzenle') }}
			</h2>

			<a href="{{ route('index') }}" class="ml-4 float-right px-4 py-2 bg-gray-500 hover:bg-gray-700 text-white rounded-md">Urunler</a>
		</div>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900">
					<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
						<section class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-800 mb-10 justify-center align-middle">
							<h1 class="text-xl font-bold text-white capitalize dark:text-white">Ürünü Düzenle</h1>
							<form action="{{ route('products.update', $product->id) }}" method="POST">
								@csrf
								<div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
									<div>
										<label class="text-white dark:text-gray-200" for="name">Ürün Adı</label>
										<input id="name" name="name" type="string" value="{{ $product->name }}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
									</div>

									<div>
										<label class="text-white dark:text-gray-200" for="password">Kategori</label>
										<input type="text" name="category_name" value="{{ $product->category_name }}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
									</div>

									<div>
										<label class="text-white dark:text-gray-200">Ekleme Tarihi</label>
										<input id="date" name="created_at" type="date" value="{{ $product->created_at }}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
									</div>

									<div>
										<label class="text-white dark:text-gray-200">Güncelleme Tarihi</label>
										<input id="date" name="updated_at" type="date" value="{{ $product->updated_at }}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
									</div>

									<div>
										<label class="text-white dark:text-gray-200">Açıklama</label>
										<textarea id="textarea" name="description" type="textarea" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">{{ $product->description }}</textarea>
									</div>

									<div>
										<label class="text-white dark:text-gray-200">Aktiflik</label>
										<select name="active" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
											<option value="1">Aktif</option>
											<option value="0">Pasif</option>
										</select>
									</div>

									<div>
										<label class="text-white dark:text-gray-200" for="image">Fotograf URL</label>
										<input id="name" name="image" type="string" value="{{ $product->image }}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
									</div>

								</div>

								<div class="flex justify-end mt-6">
									<button type="submit" onclick="alert('Urun Düzenlendi!')" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-500 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-600">Güncelle</button>
								</div>

							</form>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>