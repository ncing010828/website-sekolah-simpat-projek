
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SIMPATI</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
            background: #f2f5fa;
        }

        .wrapper {
            width: 100%;
            max-width: 1100px;
            min-height: 650px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: #fff;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(20, 38, 68, .10);
        }

        /* PANEL KIRI */
        .visual {
            position: relative;
            overflow: hidden;
            padding: 55px;
            background: #142747;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 23px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .brand-icon {
            width: 43px;
            height: 43px;
            border-radius: 13px;
            background: #f5c842;
            color: #142747;
            display: grid;
            place-items: center;
            font-size: 23px;
        }

        .visual-content {
            position: relative;
            z-index: 2;
            margin-top: 50px;
        }

        .tagline {
            display: inline-block;
            padding: 8px 15px;
            border: 1px solid rgba(255,255,255,.2);
            border-radius: 30px;
            color: #f5d56f;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 25px;
        }

        .visual h1 {
            font-size: clamp(32px, 4vw, 43px);
            line-height: 1.3;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .visual h1 span {
            color: #f5c842;
        }

        .visual-content p {
            color: #c5cfdf;
            font-size: 13px;
            line-height: 2;
            max-width: 370px;
        }

        .visual-footer {
            position: relative;
            z-index: 2;
            color: #9eacc2;
            font-size: 11px;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            border: 1px solid rgba(255,255,255,.09);
        }

        .circle.one {
            width: 350px;
            height: 350px;
            right: -140px;
            top: 90px;
        }

        .circle.two {
            width: 240px;
            height: 240px;
            right: -85px;
            top: 145px;
        }

        .circle.three {
            width: 130px;
            height: 130px;
            right: -30px;
            top: 200px;
            background: rgba(245,200,66,.08);
        }

        /* PANEL KANAN */
        .form-panel {
            padding: 65px 65px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .welcome {
            margin-bottom: 35px;
        }

        .welcome small {
            color: #c49a24;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .welcome h2 {
            color: #172b4d;
            font-size: 30px;
            font-weight: 800;
            margin: 12px 0 9px;
        }

        .welcome p {
            color: #8993a3;
            font-size: 13px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;
            color: #34435b;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        input, select {
            width: 100%;
            height: 51px;
            border: 1px solid #e3e8ef;
            border-radius: 11px;
            padding: 0 16px;
            font-size: 13px;
            color: #263750;
            background: #fafbfd;
            outline: none;
            transition: .25s;
        }

        input:focus, select:focus {
            border-color: #d6ae36;
            background: #fff;
            box-shadow: 0 0 0 4px rgba(245,200,66,.13);
        }

        input::placeholder {
            color: #aab2bf;
        }

        /* PASSWORD DAN IKON MATA */
        .password-wrapper {
            position: relative;
        }

        .password-wrapper input {
            padding-right: 48px;
        }

        .toggle-password {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background: transparent;
            cursor: pointer;
            color: #8993a3;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
        }

        .toggle-password:hover {
            color: #172b4d;
        }

        .toggle-password svg {
            width: 20px;
            height: 20px;
        }

        .btn-login {
            width: 100%;
            height: 52px;
            border: none;
            border-radius: 11px;
            background: #f1c541;
            color: #172b4d;
            font-size: 13px;
            font-weight: 800;
            cursor: pointer;
            transition: .25s;
            margin-top: 5px;
        }

        .btn-login:hover {
            background: #e5b52c;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(229,181,44,.22);
        }

        .error-message {
            padding: 12px 15px;
            background: #fff0f0;
            border: 1px solid #ffd5d5;
            border-radius: 10px;
            color: #c43d3d;
            font-size: 12px;
            margin-bottom: 20px;
        }

        .success-message {
            padding: 12px 15px;
            background: #eefaf2;
            border: 1px solid #ccebd5;
            border-radius: 10px;
            color: #25834b;
            font-size: 12px;
            margin-bottom: 20px;
        }

        .register {
            margin-top: 28px;
            text-align: center;
            color: #8993a3;
            font-size: 12px;
        }

        .register a {
            color: #172b4d;
            font-weight: 800;
            text-decoration: none;
        }

        .register a:hover {
            color: #c49a24;
        }

        /* RESPONSIVE */
        @media(max-width: 800px) {
            body {
                padding: 18px;
            }

            .wrapper {
                grid-template-columns: 1fr;
                max-width: 500px;
            }

            .visual {
                min-height: 300px;
                padding: 35px;
            }

            .visual-content {
                margin-top: 45px;
            }

            .visual h1 {
                font-size: 30px;
            }

            .visual-footer {
                margin-top: 35px;
            }

            .form-panel {
                padding: 40px 30px;
            }
        }

        @media(max-width: 400px) {
            .form-panel {
                padding: 35px 22px;
            }
        }
    </style>
</head>

<body>

<div class="wrapper">

    <!-- PANEL KIRI -->
    <section class="visual">

        <div class="circle one"></div>
        <div class="circle two"></div>
        <div class="circle three"></div>

        <div class="brand">
            <div class="brand-icon">S</div>
            SIMPATI
        </div>

        <div class="visual-content">
            <div class="tagline">SMART SCHOOL SYSTEM</div>

            <h1>
                Kelola PKL Lebih<br>
                Mudah dan <span>Terarah.</span>
            </h1>

            <p>
                Satu platform untuk menghubungkan siswa, guru,
                dan sekolah dalam pengelolaan Praktik Kerja
                Lapangan serta Kunjungan Industri.
            </p>
        </div>

        <div class="visual-footer">
            © 2026 SIMPATI — Sistem Informasi Manajemen PKL
        </div>

    </section>

    <!-- PANEL KANAN -->
    <section class="form-panel">

        <div class="welcome">
            <small>Welcome Back</small>
            <h2>Masuk ke Akun</h2>
            <p>Silakan masukkan informasi akun untuk melanjutkan.</p>
        </div>

        @if ($errors->any())
            <div class="error-message">
                {{ $errors->first() }}
            </div>
        @endif

        @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('login.proses') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Masuk Sebagai</label>

                <select name="role" required>
                    <option value="">Pilih peran Anda</option>
                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="guru" {{ old('role') == 'guru' ? 'selected' : '' }}>Guru</option>
                    <option value="siswa" {{ old('role') == 'siswa' ? 'selected' : '' }}>Siswa</option>
                </select>
            </div>

            <div class="form-group">
                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    placeholder="Masukkan email Anda"
                    value="{{ old('email') }}"
                    required
                >
            </div>

            <div class="form-group">
                <label>Password</label>

                <div class="password-wrapper">
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Masukkan password"
                        required
                    >

                    <button
                        type="button"
                        class="toggle-password"
                        onclick="togglePassword()"
                        aria-label="Tampilkan password"
                    >
                        <svg
                            id="eyeIcon"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7S2 12 2 12z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                    </button>
                </div>
            </div>

            <button type="submit" class="btn-login">
                Masuk ke SIMPATI →
            </button>

        </form>

        <div class="register">
            Belum memiliki akun Siswa?
            <a href="{{ route('registrasi.siswa') }}">Daftar Sekarang</a>
        </div>

    </section>

</div>

<!-- JAVASCRIPT IKON MATA -->
<script>
    function togglePassword() {
        const password = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        if (password.type === 'password') {

            password.type = 'text';

            eyeIcon.innerHTML = `
                <path d="M3 3l18 18"/>
                <path d="M10.6 10.6a2 2 0 002.8 2.8"/>
                <path d="M9.9 5.2A11 11 0 0112 5c6.4 0 10 7 10 7a15 15 0 01-3.1 3.8"/>
                <path d="M6.2 6.2A15 15 0 002 12s3.6 7 10 7a10 10 0 004.1-.9"/>
            `;

        } else {

            password.type = 'password';

            eyeIcon.innerHTML = `
                <path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7S2 12 2 12z"/>
                <circle cx="12" cy="12" r="3"/>
            `;
        }
    }
</script>

</body>
</html>
