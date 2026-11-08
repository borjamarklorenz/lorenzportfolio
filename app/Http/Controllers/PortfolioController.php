<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * PortfolioController — serves every page of the static portfolio.
 * Content comes from config/portfolio.php (no database needed).
 */
class PortfolioController extends Controller
{
    public function dashboard(): View
    {
        return view('dashboard');
    }

    public function about(): View
    {
        return view('about');
    }

    public function education(): View
    {
        return view('education');
    }

    public function skills(): View
    {
        return view('skills');
    }

    public function certifications(): View
    {
        return view('certifications');
    }

    public function projects(): View
    {
        return view('projects');
    }

    public function contact(): View
    {
        return view('contact');
    }
}
