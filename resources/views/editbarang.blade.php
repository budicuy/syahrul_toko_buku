<x-layout>

    <div class="w-full m-3 xl:w-96 ">
        <form action="/barang/{{ $barang->id }}" method="POST">
            @method('put')

            @csrf
            <label for="namaBarang" class="inline-block mb-2 text-lg text-gray-700 form-label">Nama Barang</label>
            <input type="text" name="nama" id="namaBarang" placeholder="harga" value="{{ old('nama', $barang->nama) }}"
                class="px-3 py-3 placeholder-slate-500 text-slate-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full @error('nama') border-2 border-red-500 @enderror" />
            @error('nama')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label for="kategoriBarang" class="inline-block mb-2 text-lg text-gray-700 form-label">Kategori
                Barang</label>
            <select id="kategoriBarang" name="category_id"
                class="form-select appearance-none
  block
  w-full
  px-3
  py-1.5
  text-base
  font-normal
  text-gray-700
  bg-white bg-clip-padding bg-no-repeat
  border border-solid border-gray-300
  rounded
  transition
  ease-in-out
  m-0
  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                @foreach ($categories as $category)
                    @if (old('category_id', $barang->category_id) == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
            <label for="hargaBarang" class="inline-block mb-2 text-lg text-gray-700 form-label">Harga
                Barang</label>
            <input type="text" name="harga" id="hargaBarang" placeholder="harga"
                value="{{ old('harga', $barang->harga) }}"
                class="relative w-full px-3 py-3 text-sm bg-white border-0 rounded shadow outline-none placeholder-slate-300 text-slate-600 focus:outline-none focus:ring" />
            @error('harga')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <label for="stokBarang" class="inline-block mb-2 text-lg text-gray-700 form-label">Stok
                Barang</label>
            <input type="text" name="stok_barang" id="stokBarang" placeholder="stok"
                value="{{ old('stok_barang', $barang->stok_barang) }}"
                class="relative w-full px-3 py-3 text-sm bg-white border-0 rounded shadow outline-none placeholder-slate-300 text-slate-600 focus:outline-none focus:ring" />
            @error('stok_barang')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <button type="submit"
                class="mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button>
        </form>
    </div>

</x-layout>
