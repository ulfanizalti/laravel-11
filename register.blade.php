<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="css/loginStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    @if ($errors->any())
    <div id="error-popup" class="popup-error">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <div class="background-overlay"></div>
    <div class="register-container">
        <div class="register-card">
            <h2>Form Registrasi</h2>

            <form action="{{ route('register.create') }}" method="POST" class="register-form">
                @csrf
                <div class="input-group">
                    <input type="text" id="name" name="name" placeholder="Masukkan Nama" required>
                </div>
                <div class="input-group">
                    <input type="email" id="email" name="email" placeholder="Masukkan Email" required>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                </div>
                <div class="input-group">
                    <input type="password" id="confirm-password" name="password_confirmation" placeholder="Konfirmasi Password" required>
                </div>

                <button type="submit" class="btn-register">Daftar</button>
            </form>

            <p class="login-link">Sudah punya akun? <a href="{{ route('login') }}">Login sekarang</a></p>
        </div>
    </div>

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
</body>

</html>