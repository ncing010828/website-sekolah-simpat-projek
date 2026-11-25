<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegistrasiSiswaController extends Controller
{
    // Mengecek NISN dan mengambil data siswa
    public function cekNisn(Request $request)
    {
        $request->validate([
            'nisn' => ['required', 'digits:10'],
        ]);

        $siswa = Siswa::where('nisn', $request->nisn)->first();

        if (!$siswa) {
            return response()->json([
                'success' => false,
                'message' => 'NISN tidak ditemukan.',
            ], 404);
        }

        if ($siswa->user_id !== null) {
            return response()->json([
                'success' => false,
                'message' => 'NISN sudah memiliki akun.',
            ], 409);
        }

        return response()->json([
            'success' => true,
            'nama' => $siswa->nama,
            'kelas' => $siswa->kelas,
            'jurusan' => $siswa->jurusan,
        ]);
    }

    // Menyimpan registrasi siswa
    public function store(Request $request)
    {
        $request->validate([
            'nisn' => ['required', 'digits:10', 'exists:siswas,nisn'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'nisn.required' => 'NISN wajib diisi.',
            'nisn.digits' => 'NISN harus terdiri dari 10 angka.',
            'nisn.exists' => 'NISN tidak ditemukan dalam data siswa.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
        ]);

        DB::transaction(function () use ($request) {

            $siswa = Siswa::where('nisn', $request->nisn)
                ->lockForUpdate()
                ->firstOrFail();

            if ($siswa->user_id !== null) {
                throw new \RuntimeException(
                    'NISN ini sudah memiliki akun.'
                );
            }

            $user = User::create([
                'name' => $siswa->nama,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'siswa',
                'status' => 'approved',
            ]);

            $siswa->user_id = $user->id;
            $siswa->save();
        });

        return redirect()
            ->route('login')
            ->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
