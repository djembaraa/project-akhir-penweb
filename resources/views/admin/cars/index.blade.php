@extends('admin.layouts.app')

@section('title', 'Manajemen Mobil')

@section('content')
    <div class="action-bar">
        <a href="{{ route('admin.cars.create') }}" class="button primary">Tambah Mobil Baru</a>
    </div>

    <table class="data-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Gambar</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Tahun</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>
                        @if ($car->image)
                            <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->brand }} {{ $car->model }}" style="width: 100px; height: auto;">
                        @else
                            <img src="{{ asset('images/placeholder.png') }}" alt="No Image" style="width: 100px; height: auto;">
                        @endif
                    </td>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->year }}</td>
                    <td>Rp{{ number_format($car->price, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('admin.cars.edit', $car->id) }}" class="button secondary small">Edit</a>
                        <form action="{{ route('admin.cars.destroy', $car->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button danger small" onclick="return confirm('Apakah Anda yakin ingin menghapus mobil ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection