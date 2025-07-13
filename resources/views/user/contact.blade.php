@extends('user.layouts.app')

@section('title', 'Kontak Kami')

@section('content')
    <section class="page-section">
        <div class="container">
            <h1>Hubungi Kami</h1>
            <p>Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan, saran, atau ingin mengetahui lebih lanjut tentang mobil kami. Tim kami siap membantu Anda.</p>

            <div class="contact-info">
                <p><strong>Alamat:</strong> Jl. Contoh Raya No. 123, Kota Contoh, Indonesia</p>
                <p><strong>Telepon:</strong> (021) 1234567</p>
                <p><strong>Email:</strong> info@tokomobil.com</p>
                <p><strong>WhatsApp:</strong> <a href="https://wa.me/6285150701934" target="_blank" class="whatsapp-link">0812-3456-7890</a></p>
            </div>

            <div class="contact-form-section">
                <h2>Kirim Pesan kepada Kami</h2>
                <form action="#" method="POST" class="form-container">
                    <div class="form-group">
                        <label for="name">Nama Lengkap:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subjek:</label>
                        <input type="text" id="subject" name="subject">
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan Anda:</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="button primary">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection