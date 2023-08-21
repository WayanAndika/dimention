@extends('template.layout')
@section('content')
@include('partials.navbar')
<div class="wrapper text-center text-white my-10">
    <h1 class="text-3xl uppercase font-bold">Galeri Nusantara Blog Post</h1>
    <p class="px-20">Tempat di mana Anda dapat menemukan informasi menarik tentang kekayaan budaya, seni, dan warisan Indonesia. Jelajahi cerita-cerita yang memukau, wawasan budaya yang mendalam, dan pandangan yang menginspirasi tentang Nusantara</p>
</div>

<form class="w-3/4 m-auto ">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-black rounded-lg focus:border-none" placeholder="Search Mockups, Logos..." required>
        <button type="submit" class="text-black absolute right-2.5 bottom-2.5 bg-[#E2C47B] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2">Search</button>
    </div>
</form>

<div class="grid grid-cols-3 gap-10 mx-10 my-10">
    <div class="relative flex max-w-[24rem] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
        <div class="relative m-0 overflow-hidden rounded-none bg-transparent bg-clip-border text-gray-700 shadow-none">
            <img class="cursor-pointer"
            src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80"
            alt="ui/ux review check" data-modal-target="staticModal" data-modal-toggle="staticModal"/>
        </div>
        <div class="p-6">
            <h4 class="block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
            UI/UX Review Check
            </h4>
            <p class="mt-3 block font-sans text-xl font-normal leading-relaxed text-gray-700 antialiased">
            Because it's about motivating the doers. Because I'm here to follow my
            dreams and inspire others.
            </p>
        </div>
        <div class="flex items-center justify-between p-6">
            <div class="flex items-center -space-x-3">
            <img
                alt="tania andrew"
                src="{{ asset("images/kecak.png") }}"
                class="relative inline-block h-9 w-9 rounded-full border-2 border-white object-cover object-center hover:z-10"
                data-tooltip-target="author-2"
            />
            <div
                data-tooltip="author-2"
                class="rounded-lg bg-first-100 py-1.5 px-3 font-sans text-sm text-third-100 focus:outline-none cursor-pointer pl-5 font-bold"
            >
                Tania Andrew
            </div>
            </div>
            <p class="block font-sans text-base font-normaltext-inherit bg-[#A63E3B] py-1 text-white px-2 rounded-lg">
            11 Maret 2023
            </p>
        </div>
    </div>
</div>

<!-- Main modal -->
<div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full">
        <!-- Modal content -->
        <div class="relative bg-third-100 rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Provinsi Bali
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <div class="relative flex w-full flex-row rounded-xl bg-white bg-clip-border shadow-md">
                    <div class="relative m-0 w-2/5 shrink-0 overflow-hidden rounded-xl rounded-r-none bg-white bg-clip-border">
                            <img
                                    src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80"
                                    alt="image"
                                    class="h-full w-full object-cover"
                            />
                    </div>
                    <div class="p-6 text-third-100 overflow-auto max-h-[70vh]">
                        <h4 class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                            Provinsi Bali
                        </h4>
                        <p class="mb-8 block font-sans text-base font-normal leading-relaxed antialiased border-b">
                                Like so many organizations these days, Autodesk is a company in
                                transition. It was until recently a traditional boxed software company
                                selling licenses. Yet its own business model disruption is only part of
                                the story
                        </p>
                        <p class="mb-8 block font-sans text-base font-normal leading-relaxed antialiased border-b">
                                Like so many organizations these days, Autodesk is a company in
                                transition. It was until recently a traditional boxed software company
                                selling licenses. Yet its own business model disruption is only part of
                                the story
                        </p>
                        <p class="mb-8 block font-sans text-base font-normal leading-relaxed antialiased border-b">
                                Like so many organizations these days, Autodesk is a company in
                                transition. It was until recently a traditional boxed software company
                                selling licenses. Yet its own business model disruption is only part of
                                the story
                        </p>
                        <p class="mb-8 block font-sans text-base font-normal leading-relaxed antialiased border-b">
                                Like so many organizations these days, Autodesk is a company in
                                transition. It was until recently a traditional boxed software company
                                selling licenses. Yet its own business model disruption is only part of
                                the story
                        </p>
                        <p class="mb-8 block font-sans text-base font-normal leading-relaxed antialiased border-b">
                                Like so many organizations these days, Autodesk is a company in
                                transition. It was until recently a traditional boxed software company
                                selling licenses. Yet its own business model disruption is only part of
                                the story
                        </p>
                    </div>
                </div>		
            </div>
					
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="staticModal" type="button" class="text-black bg-white hover:bg-gray-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-gray-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection