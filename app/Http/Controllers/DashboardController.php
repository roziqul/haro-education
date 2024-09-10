<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Program;
use App\Models\Berita;
use App\Models\Mentor;
use App\Models\Testimoni;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $allMnt = Mentor::find(6);
        $allTst = Testimoni::find(3);
        $allBrt = Berita::orderBy('created_at', 'desc')->take(3)->get();
        return view('FrontPage.Dashboard', compact('allMnt','allTst','allBrt'));
    }

    public function showProgram()
    {
        $allPrg = Program::all();
        return view('FrontPage.Program', compact('allPrg'));
    }
    public function showMentor()
    {
        $allMnt = Mentor::all();
        return view('FrontPage.Mentor', compact('allMnt'));
    }
    public function showTestimoni()
    {
        $allTst = Testimoni::all();
        return view('FrontPage.Testimoni', compact('allTst'));
    }
    public function showBerita()
    {
        $allBrt = Berita::all();
        return view('FrontPage.Berita', compact('allBrt'));
    }
    public function showAbout()
    {
        $allMnt = Mentor::all();
        $allTst = Testimoni::find(3);
        return view('FrontPage.Tentang', compact('allMnt','allTst'));
    }
    public function detailBerita($id)
    {   
        $ltpst = Berita::orderBy('created_at', 'desc')->take(3)->get();
        $detailBerita = Berita::where('id', $id)->get();
        return view('FrontPage.BeritaSingle', compact('detailBerita','ltpst'));
    }
}
