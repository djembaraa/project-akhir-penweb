@extends('user.layouts.app')

@section('title', 'Selamat Datang di Toko Mobil Online')

@section('content')
    <section class="hero-section">
        <div class="container">
            <h1>Temukan Mobil Impian Anda Sekarang</h1>
            <p>Pilihan terbaik mobil baru dan bekas dengan harga kompetitif.</p>
            {{-- Mengganti "Lihat Penawaran" menjadi "Jelajahi Penawaran Kami" atau "Lihat Daftar Mobil" --}}
            <a href="#featured-cars" class="button primary large">Jelajahi Penawaran Kami</a>
        </div>
    </section>

    <section id="featured-cars" class="cars-section">
        <div class="container">
            <h2>Mobil Terbaru Kami</h2>
            <div class="car-grid">
                @forelse ($cars as $car)
                    <div class="car-card">
                        @if ($car->image)
                            {{-- Jika ada gambar yang diupload admin, gunakan itu --}}
                             <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->brand }} {{ $car->model }}">
                        @else
                            {{-- Jika tidak ada gambar, gunakan placeholder --}}
                            <img src="{{ asset($car->image) }}" alt="No Image Available">
                        @endif
                        <h3>{{ $car->brand }} {{ $car->model }}</h3>
                        <p class="car-year">{{ $car->year }}</p>
                        <p class="car-price">Rp{{ number_format($car->price, 0, ',', '.') }}</p>
                        <p class="car-description">{{ Str::limit($car->description, 100) }}</p> {{-- Batasi deskripsi agar tidak terlalu panjang --}}
                        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20mobil%20{{ $car->brand }}%20{{ $car->model }}%20(Tahun:%20{{ $car->year }}).%20Harga:%20Rp{{ number_format($car->price, 0, ',', '.') }}.%20Apakah%20masih%20tersedia?" target="_blank" class="button secondary">Tanyakan via WhatsApp</a>
                    </div>
                @empty
                    <p class="no-cars-found">Belum ada mobil yang tersedia saat ini.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
