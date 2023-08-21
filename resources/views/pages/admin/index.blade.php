@extends('template.layout')
@section('content')
@include('partials.navbarAdmin')
    
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-20 my-10">
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
    <table class="w-full text-left ">
        <thead class="text-xs text-white bg-third-100 uppercase">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Color
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" colspan="2" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white hover:bg-third-100">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Apple iMac
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    PC
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    <a href="" class="font-medium">
                        <span class="bg bg-yellow-300 py-2 px-4 rounded-lg mr-5">
                            Edit
                        </span>
                    </a>
                    <a href="" class="font-medium">
                        <span class="bg bg-red-500 py-2 px-4 rounded-lg">
                            Delete
                        </span>
                    </a>
                </td>
            </tr>
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