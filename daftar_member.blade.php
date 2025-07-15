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
            <h2>DAFTAR<br>MEMBER</h2>
            <form action="{{ route('member.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama-lengkap">Nama Lengkap</label>
                    <input type="text" id="nama-lengkap" placeholder="Masukkan Nama Anda" name="nama">
                </div>
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" id="email" placeholder="Email@example.com" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" id="password" placeholder="Masukkan Kata Sandi Anda" name="password">
                </div>
                <div class="form-group">
                    <label for="confirm-password">Konfirmasi Kata Sandi</label>
                    <input type="password" id="confirm-password" placeholder="Ulangi Kata Sandi" name="password_confirmation">
                </div>
                <div class="form-group">
                    <label>Pilih Paket Member</label>
                    <div class="radio-option">
                        <input type="radio" id="paket1" name="member" value="30" checked>
                        <label for="paket1">30 kg / Rp 150.000</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="paket2" name="member" value="50">
                        <label for="paket2">50 kg / Rp 250.000</label>
                    </div>
                </div>
                <div class="form-action">
                    <button type="submit" class="btn-finish">Selesai</button>
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
        </script>
    </x-slot:javascript>

</x-layouts>