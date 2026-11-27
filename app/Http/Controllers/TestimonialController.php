<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'comment' => 'required|string|max:2000',
            'rating' => 'required|integer|min:1|max:5',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'name.max' => 'Nama maksimal 100 karakter.',
            'comment.required' => 'Komentar wajib diisi.',
            'comment.max' => 'Komentar maksimal 2000 karakter.',
            'rating.required' => 'Rating wajib dipilih.',
            'rating.min' => 'Rating minimal 1.',
            'rating.max' => 'Rating maksimal 5.',
        ]);

        Testimonial::create([
            'name' => $validated['name'],
            'comment' => $validated['comment'],
            'rating' => $validated['rating'],
            'is_approved' => true,
        ]);

        return redirect()->back()->with(
            'success',
            'Terima kasih! Testimoni kamu berhasil dikirim.'
        );
    }
}