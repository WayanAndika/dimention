@extends('template.layout')
@section('content')
@include('partials.navbar')
    
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-20 my-10">
    @if(session()->has('success'))
        <div id="alert-border-3" class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <div class="ml-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-500 text-white rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 "  data-dismiss-target="#alert-border-3" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        @endif
    <div class="flex items-center justify-between pb-4">
        <div>
            <a href="/provinsi/admin/create" class="btn bg-white text-first-100 hover:text-second-100">Tambah Data</a>
        </div>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" id="table-search" class="block p-2 pl-10 text-sm border border-gray-300 rounded-lg w-80 focus:border-black" placeholder="Search for items">
        </div>
    </div>
    <table class="w-full text-left">
        <thead class="text-xs text-white bg-third-100 uppercase">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3 max-w-sm">
                    Provinsi
                </th>
                <th scope="col" class="px-6 py-3">
                    Deskripsi
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contents as $content)
            <tr class="bg-white">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $loop->iteration }}
                </th>
                <td class="px-6 py-4 max-w-sm">
                    {{ $content->nama }}
                </td>
                <td class="px-6 py-4 max-w-3xl text-justify">
                    {{ $content->deskripsi }}
                </td>
                <td class="px-6 py-4 flex">
                    <a href="/provinsi/admin/edit/{{ $content->id }}" class="font-medium mr-2">
                        <span class="bg-yellow-300 py-2 px-4 rounded-lg">
                            Edit
                        </span>
                    </a>
                    <form action="/provinsi/admin/delete/{{ $content->id }}" method="POST">
                        {{-- @method('delete') --}}
                        @csrf
                        <button type="submit" class="font-medium bg-red-500 py-1.5 px-3 rounded-lg -mt-2" onclick="return confirm('Apakah Anda Yakin ?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <nav class="flex items-center justify-between pt-4" aria-label="Table navigation">
        <span class="text-sm font-normal">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
        <ul class="inline-flex -space-x-px text-sm h-8 bg-white">
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight bg-white border border-gray-300 ">Previous</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight bg-white border border-gray-300 ">1</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight bg-white border border-gray-300 ">2</a>
            </li>
            <li>
                <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 leading-tight bg-white border border-gray-300 ">3</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight bg-white border border-gray-300 ">4</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight bg-white border border-gray-300 ">5</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight bg-white border border-gray-300 ">Next</a>
            </li>
        </ul>
    </nav>
</div>
@endsection