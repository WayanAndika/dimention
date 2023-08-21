
@extends('template.layout')
@section('content')
@include('partials.navbar')
<div class="grid grid-cols-3 justify-items-center mt-10">
	@foreach ($provinsi as $p)	
	<?php
		$excerpt= substr($p["deskripsi"],0,100);
	?>
	<div class="max-w-sm bg-first-100 rounded-lg shadow text-first-100 border border-white-100 mb-10">
		<img class="rounded-t-lg cursor-pointer" src="{{ asset('images/main-img.png') }}" alt="" data-modal-target="staticModal{{ $p["id"] }}" data-modal-toggle="staticModal{{ $p["id"] }}"/>
		<div class="p-5 bg-second-100">
				<a href="#">
					<h5 class="mb-2 text-2xl font-bold tracking-tight">Provinsi {{ $p["nama"] }}</h5>
				</a>
				<p class="mb-3 font-normal">{{ $excerpt }} <span class="text-red-500 cursor-pointer font-bold" data-modal-target="staticModal{{ $p["id"] }}" data-modal-toggle="staticModal{{ $p["id"] }}">lihat lebih banyak......</span>	</p>
				<button type="button" class="btn bg-[#E2C47B] text-white hover:text-first-100" data-modal-target="staticModal{{ $p["id"] }}" data-modal-toggle="staticModal{{ $p["id"] }}">
						Selengkapnya
						<svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
						</svg>
				</button>
		</div>
	</div>
	@endforeach
</div>

@foreach ($provinsi as $p)	
<!-- Main modal -->
<div id="staticModal{{ $p["id"] }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-third-100 rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Provinsi {{ $p["nama"] }}
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal{{ $p["id"] }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
						<div class="relative flex w-full max-w-[48rem] flex-row rounded-xl bg-white bg-clip-border shadow-md">
							<div class="relative m-0 w-2/5 shrink-0 overflow-hidden rounded-xl rounded-r-none bg-white bg-clip-border">
									<img src="{{ asset("images/main-img.png") }}" alt="image" class="h-full w-full object-cover"
									/>
							</div>
							<div class="p-6 text-third-100 overflow-auto max-h-[70vh]">
								<h4 class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
									Provinsi {{ $p["nama"] }}
								</h4>
								<p class="mb-8 block font-sans text-base font-normal leading-relaxed antialiased border-b"> 
									{{ $p["deskripsi"] }}
								</p>
							</div>
						</div>		
					</div>
					
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="staticModal{{ $p["id"] }}" type="button" class="text-black bg-white hover:bg-gray-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-gray-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach


@endsection