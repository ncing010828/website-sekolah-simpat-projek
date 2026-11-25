
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Siswa | SIMPATI</title>

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
            background: #f2f5fa;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 15px;
        }

        .container {
            width: 100%;
            max-width: 1050px;
            min-height: 650px;
            display: grid;
            grid-template-columns: 40% 60%;
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(20,38,68,.10);
        }

        .side {
            background: #142747;
            color: white;
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }

        .brand {
            font-size: 23px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .brand span {
            display: inline-grid;
            place-items: center;
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: #f5c842;
            color: #142747;
            margin-right: 9px;
        }

        .side-content {
            position: relative;
            z-index: 2;
        }

        .tagline {
            color: #f5d56f;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.5px;
            margin-bottom: 22px;
        }

        .side h1 {
            font-size: 34px;
            line-height: 1.4;
            margin-bottom: 18px;
        }

        .side h1 span {
            color: #f5c842;
        }

        .side p {
            color: #c5cfdf;
            font-size: 13px;
            line-height: 2;
        }

        .footer {
            color: #9eacc2;
            font-size: 10px;
            position: relative;
            z-index: 2;
        }

        .circle {
            position: absolute;
            border: 1px solid rgba(255,255,255,.09);
            border-radius: 50%;
        }

        .circle.one {
            width: 300px;
            height: 300px;
            right: -130px;
            top: 100px;
        }

        .circle.two {
            width: 200px;
            height: 200px;
            right: -80px;
            top: 150px;
        }

        .form-panel {
            padding: 45px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .heading {
            margin-bottom: 25px;
        }

        .heading small {
            color: #c49a24;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.5px;
        }

        .heading h2 {
            color: #172b4d;
            font-size: 28px;
            margin: 10px 0;
            font-weight: 800;
        }

        .heading p {
            color: #8993a3;
            font-size: 12px;
            line-height: 1.7;
        }

        .form-group {
            margin-bottom: 17px;
        }

        label {
            display: block;
            color: #34435b;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            height: 47px;
            border: 1px solid #e3e8ef;
            border-radius: 10px;
            padding: 0 14px;
            font-size: 12px;
            outline: none;
            background: #fafbfd;
            transition: .2s;
        }

        input:focus {
            border-color: #d6ae36;
            background: white;
            box-shadow: 0 0 0 4px rgba(245,200,66,.13);
        }

        input::placeholder {
            color: #aab2bf;
        }

        .student-info {
            display: none;
            background: #f3f7fc;
            border: 1px solid #dfe8f4;
            border-radius: 11px;
            padding: 14px;
            margin-bottom: 17px;
        }

        .student-info h4 {
            color: #172b4d;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            font-size: 11px;
            margin-top: 7px;
        }

        .info-row span:first-child {
            color: #8993a3;
        }

        .info-row span:last-child {
            color: #172b4d;
            font-weight: 700;
            text-align: right;
        }

        .btn-check {
            width: 100%;
            height: 45px;
            background: #172b4d;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            margin-bottom: 18px;
            transition: .2s;
        }

        .btn-check:hover {
            background: #243d65;
        }

        .btn-check:disabled {
            opacity: .7;
            cursor: not-allowed;
        }

        .btn-register {
            width: 100%;
            height: 49px;
            border: none;
            border-radius: 10px;
            background: #f1c541;
            color: #172b4d;
            font-size: 13px;
            font-weight: 800;
            cursor: pointer;
            transition: .2s;
        }

        .btn-register:hover {
            background: #e5b52c;
            transform: translateY(-2px);
        }

        .message {
            padding: 11px 13px;
            border-radius: 9px;
            font-size: 11px;
            margin-bottom: 15px;
        }

        .message.error {
            background: #fff0f0;
            color: #c43d3d;
        }

        .message.success {
            background: #eefaf2;
            color: #25834b;
        }

        .back-login {
            text-align: center;
            margin-top: 22px;
            font-size: 12px;
            color: #8993a3;
        }

        .back-login a {
            color: #172b4d;
            font-weight: 800;
            text-decoration: none;
        }

        .form-register {
            display: none;
        }

        /* PASSWORD */
        .password-wrapper {
            position: relative;
        }

        .password-wrapper input {
            padding-right: 48px;
        }

        .toggle-password {
            position: absolute;
            right: 13px;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background: transparent;
            cursor: pointer;
            color: #8993a3;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .toggle-password svg {
            width: 19px;
            height: 19px;
        }

        .alert-js {
            display: none;
        }

        @media(max-width: 800px) {
            .container {
                grid-template-columns: 1fr;
                max-width: 520px;
            }

            .side {
                min-height: 260px;
                padding: 30px;
            }

            .side h1 {
                font-size: 27px;
            }

            .side-content {
                margin: 35px 0;
            }

            .form-panel {
                padding: 35px 25px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <section class="side">
        <div class="circle one"></div>
        <div class="circle two"></div>

        <div class="brand">
            <span>S</span> SIMPATI
        </div>

        <div class="side-content">
            <div class="tagline">STUDENT REGISTRATION</div>

            <h1>Mulai Perjalanan <span>PKL-mu</span> Bersama Kami.</h1>

            <p>
                Daftarkan akun SIMPATI untuk mengakses informasi,
                kegiatan, dan pengelolaan Praktik Kerja Lapangan.
            </p>
        </div>

        <div class="footer">
            © 2026 SIMPATI — Sistem Informasi Manajemen PKL
        </div>
    </section>

    <section class="form-panel">

        <div class="heading">
            <small>CREATE ACCOUNT</small>
            <h2>Registrasi Siswa</h2>
            <p>Masukkan NISN untuk mencocokkan data siswa terlebih dahulu.</p>
        </div>

        @if ($errors->any())
            <div class="message error">
                {{ $errors->first() }}
            </div>
        @endif

        @if (session('success'))
            <div class="message success">
                {{ session('success') }}
            </div>
        @endif

        <div id="pesanNisn" class="message error alert-js"></div>

        <form id="formCekNisn">
            @csrf

            <div class="form-group">
                <label>NISN</label>
                <input
                    type="text"
                    id="nisn"
                    name="nisn"
                    maxlength="10"
                    minlength="10"
                    inputmode="numeric"
                    placeholder="Masukkan 10 digit NISN"
                    required
                >
            </div>

            <button type="submit" class="btn-check" id="btnCek">
                Periksa NISN
            </button>
        </form>

        <div class="student-info" id="studentInfo">
            <h4>Data Siswa Ditemukan ✓</h4>

            <div class="info-row">
                <span>Nama</span>
                <span id="namaSiswa">-</span>
            </div>

            <div class="info-row">
                <span>Kelas</span>
                <span id="kelasSiswa">-</span>
            </div>

            <div class="info-row">
                <span>Jurusan</span>
                <span id="jurusanSiswa">-</span>
            </div>
        </div>

        <form
            action="{{ route('registrasi.siswa.store') }}"
            method="POST"
            class="form-register"
            id="formRegister"
        >
            @csrf

            <input type="hidden" name="nisn" id="nisnRegister">

            <div class="form-group">
                <label>Email</label>
                <input
                    type="email"
                    name="email"
                    placeholder="Masukkan email aktif"
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
                        placeholder="Minimal 8 karakter"
                        minlength="8"
                        required
                    >

                    <button
                        type="button"
                        class="toggle-password"
                        onclick="togglePassword('password', this)"
                        aria-label="Tampilkan password"
                    >
                        <svg viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7S2 12 2 12z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="form-group">
                <label>Konfirmasi Password</label>

                <div class="password-wrapper">
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        placeholder="Ulangi password"
                        minlength="8"
                        required
                    >

                    <button
                        type="button"
                        class="toggle-password"
                        onclick="togglePassword('password_confirmation', this)"
                        aria-label="Tampilkan konfirmasi password"
                    >
                        <svg viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7S2 12 2 12z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                    </button>
                </div>
            </div>

            <button type="submit" class="btn-register">
                Buat Akun SIMPATI →
            </button>
        </form>

        <div class="back-login">
            Sudah memiliki akun?
            <a href="{{ route('login') }}">Login di sini</a>
        </div>

    </section>

</div>

<script>
    const formCek = document.getElementById('formCekNisn');
    const btnCek = document.getElementById('btnCek');
    const studentInfo = document.getElementById('studentInfo');
    const formRegister = document.getElementById('formRegister');
    const pesanNisn = document.getElementById('pesanNisn');

    // MEMERIKSA NISN
    formCek.addEventListener('submit', async function(e) {
        e.preventDefault();

        const nisn = document.getElementById('nisn').value.trim();

        studentInfo.style.display = 'none';
        formRegister.style.display = 'none';
        pesanNisn.style.display = 'none';

        if (!/^\d{10}$/.test(nisn)) {
            tampilkanPesan('NISN harus terdiri dari 10 angka.');
            return;
        }

        btnCek.disabled = true;
        btnCek.textContent = 'Memeriksa...';

        try {
            const response = await fetch(
                "{{ route('registrasi.siswa.cek') }}",
                {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': formCek.querySelector(
                            'input[name="_token"]'
                        ).value
                    },
                    body: JSON.stringify({
                        nisn: nisn
                    })
                }
            );

            const data = await response.json();

            if (!response.ok) {
                throw new Error(
                    data.message || 'NISN tidak ditemukan atau sudah terdaftar.'
                );
            }

            // Mendukung beberapa bentuk respons JSON
            const siswa = data.siswa
                ?? data.data?.siswa
                ?? data.data
                ?? data;

            const nama = siswa.nama ?? siswa.name ?? siswa.nama_siswa;
            const kelas = siswa.kelas ?? siswa.class;
            const jurusan = siswa.jurusan ?? siswa.major;

            if (!nama || !kelas) {
                throw new Error(
                    'Data NISN ditemukan, tetapi nama atau kelas tidak diterima dari server. Periksa respons controller.'
                );
            }

            document.getElementById('namaSiswa').textContent = nama;
            document.getElementById('kelasSiswa').textContent = kelas;
            document.getElementById('jurusanSiswa').textContent =
                jurusan || '-';

            document.getElementById('nisnRegister').value = nisn;

            studentInfo.style.display = 'block';
            formRegister.style.display = 'block';

            btnCek.textContent = 'NISN Berhasil Diperiksa ✓';

        } catch (error) {
            tampilkanPesan(error.message);
            btnCek.textContent = 'Periksa NISN';
        } finally {
            btnCek.disabled = false;
        }
    });

    // PESAN ERROR
    function tampilkanPesan(pesan) {
        pesanNisn.textContent = pesan;
        pesanNisn.style.display = 'block';
    }

    // LIHAT / SEMBUNYIKAN PASSWORD
    function togglePassword(id, button) {
        const input = document.getElementById(id);

        if (input.type === 'password') {
            input.type = 'text';
            button.setAttribute('aria-label', 'Sembunyikan password');
        } else {
            input.type = 'password';
            button.setAttribute('aria-label', 'Tampilkan password');
        }
    }
</script>

</body>
</html>
