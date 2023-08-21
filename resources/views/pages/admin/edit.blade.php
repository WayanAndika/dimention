@extends('template.layout')
@section('content')
@include('partials.navbar')
<section class="">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-3/4 rounded-lg shadow md:mt-0  xl:p-0 bg-white text-first-100">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold text-center">
                    EDIT KONTEN
                </h1>
                <form class="space-y-4 md:space-y-6" action="/provinsi/admin/edit/{{ $content->id }}" method="POST">
                    @csrf
                    <div>
                        <label for="nama" class="block mb-2 text-sm font-medium @error('nama')text-red-500 @enderror">Masukan Nama Provinsi</label>
                        <input type="text" name="nama" id="nama" class="bg-second-100 text-black sm:text-sm rounded-lg block w-full p-2.5 @error('nama') border border-red-500 text-red-500 @enderror" placeholder="Ex: Bali" required="" value="{{ old('nama',$content->nama) }}" autocomplete="off">
                        @error('nama')
                        <p class="mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span></p>
                        @enderror
                    </div>
                    <div> 
                        <label for="deskripsi" class="block mb-2 text-sm font-medium">Masukan Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" rows="4" class="block p-2.5 w-full text-sm rounded-lg border border-gray-300 text-third-100" placeholder="Ex: Lorem ipsum...">{{ $content->deskripsi }}</textarea>
                    </div>
                    <div class="flex justify-center ">
                        <button type="submit" class=" btn bg-[#E2C47B] hover:border-first-100 hover:text-first-100 text-white">EDIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection