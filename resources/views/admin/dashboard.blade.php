@extends('admin.layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="dashboard-overview">
        <div class="card overview-card">
            <div class="card-icon"><i class="fas fa-car"></i></div>
            <div class="card-content">
                <h3>Total Mobil Terdaftar</h3>
                {{-- Menampilkan jumlah mobil dari database --}}
                <p class="card-value">{{ \App\Models\Car::count() }} Unit</p>
            </div>
        </div>
        <div class="card overview-card">
            <div class="card-icon"><i class="fas fa-dollar-sign"></i></div>
            <div class="card-content">
                <h3>Total Potensi Penjualan</h3>
                {{-- Menampilkan total harga mobil dari database --}}
                <p class="card-value">Rp{{ number_format(\App\Models\Car::sum('price'), 0, ',', '.') }}</p>
            </div>
        </div>
        <div class="card overview-card">
            <div class="card-icon"><i class="fas fa-chart-line"></i></div>
            <div class="card-content">
                <h3>Inquiries Baru (Hari Ini)</h3>
                {{-- Ini adalah placeholder. Nanti bisa diintegrasikan dengan sistem kontak/pesan --}}
                <p class="card-value">5 Pesan</p>
            </div>
        </div>
    </div>

    <section class="dashboard-section">
        <h2>Selamat Datang Kembali, Administrator!</h2>
        <p>Dashboard ini adalah pusat kendali utama Anda untuk Toko Mobil Online. Dari sini, Anda memiliki kekuatan penuh untuk mengelola inventaris mobil, memantau performa, dan berinteraksi dengan pelanggan.</p>
        <p>Mari bersama wujudkan pengalaman penjualan mobil yang tak tertandingi. Setiap keputusan Anda di sini akan membawa dampak besar pada kesuksesan toko kami!</p>
        <div class="dashboard-actions">
            <a href="{{ route('admin.cars.create') }}" class="button primary large">Tambah Mobil Baru Sekarang! <i class="fas fa-plus-circle"></i></a>
            <a href="{{ route('admin.cars.index') }}" class="button secondary large">Lihat & Kelola Inventaris <i class="fas fa-list-alt"></i></a>
        </div>
    </section>

    <section class="dashboard-section">
        <h3>Tips Optimalisasi Dashboard Anda</h3>
        <ul class="tips-list">
            <li>**Perbarui Deskripsi Mobil:** Buat deskripsi yang detail, menarik, dan informatif untuk setiap mobil.</li>
            <li>**Unggah Foto Berkualitas Tinggi:** Gambar adalah impresi pertama. Pastikan foto mobil jelas dan profesional.</li>
            <li>**Pantau Ketersediaan:** Selalu pastikan daftar mobil Anda akurat untuk menghindari kekecewaan pelanggan.</li>
            <li>**Respons Cepat:** Jawab setiap inquiry dari pelanggan secepat mungkin untuk membangun kepercayaan.</li>
        </ul>
    </section>
@endsection
