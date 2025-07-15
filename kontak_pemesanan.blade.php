<x-layouts>
    @if ($errors->any())
    <div id="error-popup" class="popup-error">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <main class="contact-main">
        <div class="order-form-container">
            <h2>ORDER<br>DISINI</h2>

            {{-- Ini adalah kode untuk menampilkan pesan error dari session --}}
            @if (session('error'))
            <div class="popup-error" id="error-popup" >
                {{ session('error') }}
            </div>
            @endif

            <form action="{{ route('order.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" placeholder="Masukkan Nama Anda" name="nama">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Masukkan No. Telp Anda" name="telp">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Masukkan Email Anda" name="email">
                </div>

                {{-- tambahan form dari page selanjutnya --}}
                <div class="form-group">
                    <input type="text" placeholder="Masukkan Alamat Penjemputan" name="alamat_penjemputan">
                </div>

                <div class="form-group">
                    <select name="jenis_layanan" id="jenis_layanan" required>
                        <option disabled selected>Jenis Layanan</option>
                        <option value="Biasa">Biasa</option>
                        <option value="Express">Express</option>
                        <option value="Member">Member</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="jenis_pemesanan" id="jenis_pemesanan" required disabled>
                        <option value="" disabled selected>Pilih Jenis Pesanan</option>
                        <option value="Cuci Setrika">Cuci Setrika</option>
                        <option value="Cuci Kering">Cuci Kering</option>
                        <option value="Setrika Saja">Setrika Saja</option>
                        <option value="Layanan Sepatu">Layanan Sepatu</option>
                        <option value="Layanan Tas">Layanan Tas</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="text" name="tanggal_penjemputan" placeholder="Tanggal Penjemputan" onfocus="(this.type='date')">
                </div>
                <div class="form-group">
                    <input type="text" name="jam_penjemputan" placeholder="Jam Penjemputan" onfocus="(this.type='time')">
                </div>
                <div class="form-group">
                    <label>Jenis Pengiriman</label>
                    <div class="inline-radio-group">
                        <div class="radio-option">
                            <input type="radio" id="antar" name="pengiriman" value="antar" checked>
                            <label for="antar">Antar</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="ambil" name="pengiriman" value="ambil">
                            <label for="ambil">Ambil di Laundry</label>
                        </div>
                    </div>
                </div>

                <div class="form-action">
                    <button type="submit" class="btn-finish">Pesan</button>
                </div>
            </form>
        </div>
    </main>
    <x-slot:javascript>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const popup = document.getElementById('error-popup');
                if (popup) {
                    setTimeout(() => {
                        popup.style.transition = 'opacity 0.5s, transform 0.5s';
                        popup.style.opacity = 0;
                        popup.style.transform = 'translate(-50%, -20px)';
                        setTimeout(() => popup.remove(), 500);
                    }, 6000); // visible for 4 seconds
                }
            });

            // script menyesuaikan jenis layanan dan pemesanan
            document.addEventListener('DOMContentLoaded', function() {
                const layananSelect = document.getElementById('jenis_layanan');
                const pemesananSelect = document.getElementById('jenis_pemesanan');
                const allPemesananOptions = Array.from(pemesananSelect.options).map(option => option.cloneNode(true));

                function updatePemesananOptions(selectedValue) {

                    pemesananSelect.innerHTML = '';

                    let filteredOptions;


                    switch (selectedValue) {
                        case 'Express':
                            filteredOptions = allPemesananOptions;
                            break;

                        case 'Member':
                            filteredOptions = allPemesananOptions.filter(option =>
                                option.disabled || ['Cuci Setrika', 'Cuci Kering', 'Setrika Saja'].includes(option.value)
                            );
                            break;

                        case 'Biasa':
                        default:
                            filteredOptions = allPemesananOptions;
                            break;
                    }

                    filteredOptions.forEach(option => {
                        pemesananSelect.appendChild(option);
                    });

                    pemesananSelect.selectedIndex = 0;
                }



                layananSelect.addEventListener('change', function() {

                    // aktivasi pemesanan select setelah pilih jenis layanan
                    pemesananSelect.disabled = false;

                    updatePemesananOptions(this.value);
                });

            });
        </script>
    </x-slot:javascript>
</x-layouts>