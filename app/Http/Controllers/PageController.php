<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        return view('themes.' . session('theme', 'classic') . '.home');
    }

    public function contacts(Request $request)
    {
        $theme = session('theme', 'classic');
        $contactText = $theme === 'classic' ? 'Текст для классической темы' : 'Текст для кубинской темы';
        return view('themes.' . $theme . '.contacts', compact('contactText'));
    }

    public function setTheme(Request $request)
    {
        $request->validate([
            'theme' => 'required|in:classic,cuba',
        ]);

        session(['theme' => $request->theme]);
        return redirect()->route('home');
    }

}
