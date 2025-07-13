@extends('admin.layouts.app')

@section('title', 'Tambah Mobil Baru')

@section('content')
    <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data" class="form-container">
        @csrf
        <div class="form-group">
            <label for="brand">Brand:</label>
            <input type="text" id="brand" name="brand" value="{{ old('brand') }}" required>
        </div>
        <div class="form-group">
            <label for="model">Model:</label>
            <input type="text" id="model" name="model" value="{{ old('model') }}" required>
        </div>
        <div class="form-group">
            <label for="year">Tahun:</label>
            <input type="number" id="year" name="year" value="{{ old('year') }}" required min="1900" max="{{ date('Y') }}">
        </div>
        <div class="form-group">
            <label for="price">Harga (Rp):</label>
            <input type="number" id="price" name="price" value="{{ old('price') }}" required step="any" min="0">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi:</label>
            <textarea id="description" name="description" required>{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Gambar Mobil:</label>
            <input type="file" id="image" name="image" accept="image/*">
        </div>
        <div class="form-group">
            <button type="submit" class="button primary">Simpan Mobil</button>
            <a href="{{ route('admin.cars.index') }}" class="button secondary">Batal</a>
        </div>
    </form>
@endsection