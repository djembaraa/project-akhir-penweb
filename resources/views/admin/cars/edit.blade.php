@extends('admin.layouts.app')

@section('title', 'Edit Mobil')

@section('content')
    <form action="{{ route('admin.cars.update', $car->id) }}" method="POST" enctype="multipart/form-data" class="form-container">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="brand">Brand:</label>
            <input type="text" id="brand" name="brand" value="{{ old('brand', $car->brand) }}" required>
        </div>
        <div class="form-group">
            <label for="model">Model:</label>
            <input type="text" id="model" name="model" value="{{ old('model', $car->model) }}" required>
        </div>
        <div class="form-group">
            <label for="year">Tahun:</label>
            <input type="number" id="year" name="year" value="{{ old('year', $car->year) }}" required min="1900" max="{{ date('Y') }}">
        </div>
        <div class="form-group">
            <label for="price">Harga (Rp):</label>
            <input type="number" id="price" name="price" value="{{ old('price', $car->price) }}" required step="any" min="0">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi:</label>
            <textarea id="description" name="description" required>{{ old('description', $car->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Gambar Mobil:</label>
            <input type="file" id="image" name="image" accept="image/*">
            @if ($car->image)
                <p>Gambar saat ini:</p>
                <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->brand }} {{ $car->model }}" style="width: 150px; height: auto; margin-top: 10px;">
            @endif
        </div>
        <div class="form-group">
            <button type="submit" class="button primary">Update Mobil</button>
            <a href="{{ route('admin.cars.index') }}" class="button secondary">Batal</a>
        </div>
    </form>
@endsection