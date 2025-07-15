<x-adminLayouts>
    @if ($errors->any())
    <div id="error-popup" class="popup-error">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <main class="container">
        <div class="form-container">
            <h1 class="page-title">Laundry Packages</h1>
            <form action="{{ isset($pesanan) ? route('store',$pesanan->id) : '#' }}" method="{{ isset($pesanan) ? 'post' : 'get' }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama-pelanggan">Nama Pelanggan</label>
                    <input type="text" id="nama-pelanggan" name="nama" value="{{ isset($pesanan) ?  $pesanan->nama : '' }}">
                </div>
                <div class="form-group">
                    <label for="jenis-pesanan">Jenis Pesanan</label>
                    <input type="text" id="jenis-pesanan" name="jenis_pemesanan" value="{{ isset($pesanan) ?  $pesanan->jenis_pemesanan : '' }}">
                </div>
                <div class="form-group">
                    <label for="no-hp">No. Hp</label>
                    <input type="tel" id="no-hp" name="telp" value="{{ isset($pesanan) ?  $pesanan->telp : '' }}">
                </div>
                <div class="form-group">
                    <label for="layanan">Layanan</label>
                    <input type="text" id="layanan" name="jenis_layanan" value="{{ isset($pesanan) ?  $pesanan->jenis_layanan : '' }}">
                </div>
                <div class="form-group">
                    <label for="berat">Berat /Kg</label>
                    <input type="number" id="berat" name="berat" placeholder="Isi" step="0.01">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" id="harga" name="harga" placeholder="Isi">
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn-submit">
                        Konfirmasi<br>Pesanan
                    </button>
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
                    }, 4000); // visible for 4 seconds
                }
            });
        </script>
    </x-slot:javascript>

</x-adminLayouts>