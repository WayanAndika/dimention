@extends('template.layout')
@section('content')
<div class="overflow-x-auto">
    <table class="table">
      <!-- head -->
      <thead>
        <tr>
          <th>
            <label>
              <input type="checkbox" class="checkbox" />
            </label>
          </th>
          <th>Name</th>
          <th>Judul</th>
          <th>Tahun</th>
          <th>Penerbit</th>
          <th>Kategori</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <!-- row 1 -->
        @foreach ($pinjam as $p)
        <tr>
          <th>
            <label>
              <input type="checkbox" class="checkbox" />
            </label>
          </th>
          <td>
            <div class="flex items-center space-x-3">
              <div class="avatar">
                <div class="mask mask-squircle w-12 h-12">
                  <img src="/tailwind-css-component-profile-2@56w.png" alt="Avatar Tailwind CSS Component" />
                </div>
              </div>
              <div>
                <div class="font-bold">{!! $p["nama_peminjam"] !!}</div>
                <div class="text-sm opacity-50">United States</div>
              </div>
            </div>
          </td>
          <td>
            {{ $p["judul"] }}
          </td>
          <td>{{ $p["tahun"] }}</td>
          <td>{{ $p["penerbit"] }}</td>
          <td>{{ $p["category"] }}</td>
          <td>

          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
@endsection