<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;

class LandingController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('is_approved', true)
            ->latest()
            ->get();

        return view('landing.index', compact('testimonials'));
    }
}