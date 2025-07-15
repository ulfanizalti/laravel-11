<x-layouts>
    <main>
        <section class="katalog">
            <img src="img/thumbnails.png" alt="Tumpukan handuk bersih berwarna pink">
        </section>

        <section class="catalog">
            <div class="container">
                <div class="section-title">
                    <h1>Katalog Harga</h1>
                    <p>IQ-LO Laundry</p>
                </div>
                <div class="catalog-grid">
                    <div class="card">
                        <img src="img/baju.png" alt="ikon baju" class="icon">
                        <h3>Baju dan Celana</h3>
                        <ul>
                            <li><strong>Setrika</strong> - Rp. 4.000/kg</li>
                            <li><strong>Cuci Setrika</strong> - Rp. 6.000/kg</li>
                            <li><strong>Member :</strong> (Rp. 50.000/10kg)</li>
                        </ul>
                        @if(Auth::user())
                        <a href="{{ route('kontak_pemesananPage') }}" class="btn-order">Pesan</a>
                        <a href="{{ route('daftar_memberPage') }}" style="float: right;" class="btn-member">Jadi Member</a>
                        @else
                        <a href="{{ route('login') }}" class="btn-order">Pesan</a>
                        @endif
                    </div>
                    <div class="card">
                        <img src="img/sepatu icon.png" alt="ikon sepatu" class="icon">
                        <h3>Sepatu</h3>
                        <ul>
                            <li><strong>Cuci Kering</strong> - Rp. 20.000</li>
                        </ul>
                        @if(Auth::user())
                        <a href="{{ route('kontak_pemesananPage') }}" class="btn-order">Pesan</a>
                        @else
                        <a href="{{ route('login') }}" class="btn-order">Pesan</a>
                        @endif
                    </div>
                    <div class="card">
                        <img src="img/tas icon.png" alt="ikon tas" class="icon">
                        <h3>Tas dan Ransel</h3>
                        <ul>
                            <li><strong>Cuci Kering</strong> - Rp. 15.000</li>
                        </ul>
                        @if(Auth::user())
                        <a href="{{ route('kontak_pemesananPage') }}" class="btn-order">Pesan</a>
                        @else
                        <a href="{{ route('login') }}" class="btn-order">Pesan</a>
                        @endif
                    </div>
                    <div class="card">
                        <img src="img/boneka.png" alt="ikon boneka" class="icon">
                        <h3>Boneka</h3>
                        <ul>
                            <li><strong>Cuci Kering :</strong> (Rp 10.000 - Rp 30.000)</li>
                        </ul>
                        <p class="note"><strong>Ket:</strong> Harga sesuai ukuran dari boneka</p>
                        @if(Auth::user())
                        <a href="{{ route('kontak_pemesananPage') }}" class="btn-order">Pesan</a>
                        @else
                        <a href="{{ route('login') }}" class="btn-order">Pesan</a>
                        @endif
                    </div>
                    <div class="card">
                        <img src="img/jas.png" alt="ikon jas" class="icon">
                        <h3>Jas</h3>
                        <ul>
                            <li><strong>Cuci Setrika :</strong> Rp. 30.000/pcs</li>
                        </ul>
                        @if(Auth::user())
                        <a href="{{ route('kontak_pemesananPage') }}" class="btn-order">Pesan</a>
                        @else
                        <a href="{{ route('login') }}" class="btn-order">Pesan</a>
                        @endif
                    </div>
                    <div class="card">
                        <img src="img/bed.png" alt="ikon bed cover" class="icon">
                        <h3>Bed Cover & Sprei</h3>
                        <ul>
                            <li><strong>Cuci Kering</strong></li>
                            <li>BedCover - Rp. 40.000/ Ukuran</li>
                            <li>Selimut - Rp. 20.000-30.000</li>
                        </ul>
                        <p class="note"><strong>Ket:</strong> Harga sesuai ukuran produk</p>
                        @if(Auth::user())
                        <a href="{{ route('kontak_pemesananPage') }}" class="btn-order">Pesan</a>
                        @else
                        <a href="{{ route('login') }}" class="btn-order">Pesan</a>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section class="steps">
            <div class="container">
                <div class="section-title">
                    <h2>3 Langkah Mudah Order Laundry<br>dan Antar Jemput Gratis</h2>
                </div>
                <div class="steps-grid">
                    <div class="step-item">
                        <img src="img/Order.png" alt="ikon keranjang belanja">
                        <p>Klik Tombol Pesan di Atas atau Hubungi WA Kami</p>
                    </div>
                    <div class="step-item">
                        <img src="img/ungu.png" alt="ikon form pemesanan">
                        <p>Isi Form Pemesanan, Pemilihan Pengantaran dan Payment</p>
                    </div>
                    <div class="step-item">
                        <img src="img/correct.png" alt="ikon centang hijau">
                        <p>Kami Akan Proses Pesanan Anda dan Konfirmasi Secepatnya</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-layouts>