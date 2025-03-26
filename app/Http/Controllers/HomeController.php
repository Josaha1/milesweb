<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $latestNews    = News::latest()->take(3)->get(); // หรือ mock array ก็ได้
        $pressReleases = PressRelease::latest()->take(3)->get();

        return view('welcome', compact('latestNews', 'pressReleases'));
    }

}
