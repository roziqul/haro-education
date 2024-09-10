<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use App\Models\Program;
use App\Models\User;
use App\Models\Testimoni;
use App\Models\Tutor;
use App\Models\Mentor;
use App\Models\Berita;

class AdminController extends Controller
{
    //SHOW FUNCTION
    public function Customer()
    {
        $allCS = Customer::all();
        return view('AdminPage.Customer', compact('allCS'));
    }
    public function Program()
    {
        $allPrg = Program::all();
        return view('AdminPage.Program', compact('allPrg'));
    }
    public function User()
    {
        $allUsr = User::all();
        return view('AdminPage.User', compact('allUsr'));
    }
    public function Testimoni()
    {
        $allTst = Testimoni::all();
        return view('AdminPage.Testimoni', compact('allTst'));
    }
    public function Tutor()
    {
        $allTtr = Tutor::all();
        return view('AdminPage.Tutor', compact('allTtr'));
    }
    public function Mentor()
    {
        $allMnt = Mentor::all();
        return view('AdminPage.Mentor', compact('allMnt'));
    }
    public function Berita()
    {
        $allBrt = Berita::all();
        return view('AdminPage.Berita', compact('allBrt'));
    }

    //CREATE FUNCTION
    public function createCustomer()
    {
        return view('AdminPage.create.Customer');
    }
    public function createProgram()
    {
        return view('AdminPage.create.Program');
    }
    public function createUser()
    {
        return view('AdminPage.create.User');
    }
    public function createTestimoni()
    {
        return view('AdminPage.create.Testimoni');
    }
    public function createTutor()
    {
        return view('AdminPage.create.Tutor');
    }
    public function createMentor()
    {
        $allTtr = Tutor::all();
        return view('AdminPage.create.Mentor', compact('allTtr'));
    }
    public function createBerita()
    {
        return view('AdminPage.create.Berita');
    }

    //SAVE FUNCTION
    public function saveCustomer(Request $request)
    {   
        $createCustomer = Customer::create([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'nowa'      => $request->nowa,
            'password'  => $request->password,
        ]);
        return redirect('/Adm/Customer')->with('success', 'Data berhasil ditambahkan !');
    }
    public function saveProgram(Request $request)
    {
        $createProgram = Program::create([
            'nama'      => $request->nama,
            'harga'     => $request->harga,
        ]);
        return redirect('/Adm/Program')->with('success', 'Data berhasil ditambahkan !');
    }
    public function saveUser(Request $request)
    {
        $createUser = User::create([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'password'  => $request->password,
        ]);
        return redirect('/Adm/User')->with('success', 'Data berhasil ditambahkan !');
    }
    public function saveTestimoni(Request $request)
    {
        $createTestimoni= new Testimoni();

        if($request->file('img')){
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/DBImages/Testi'), $filename);
            $createTestimoni['img']= $filename;
        }
        $createTestimoni->save();
        return redirect('/Adm/Testimoni')->with('success', 'Data berhasil ditambahkan !');
    }
    public function saveTutor(Request $request)
    {
        $createTutor = Tutor::create([
            'name'      => $request->name,
        ]);
        return redirect('/Adm/Tutor')->with('success', 'Data berhasil ditambahkan !');
    }
    public function saveMentor(Request $request)
    {
        $createMentor= new Mentor();

        if($request->file('foto')){
            $file= $request->file('foto');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/DBImages/Mentor'), $filename);

            $createMentor['foto']= $filename;
            $createMentor['nama']= $request->nama;
            $createMentor['asal']= $request->asal;
            $createMentor['tutor_id']= $request->tutor_id;
        }
        $createMentor->save();

        return redirect('/Adm/Mentor')->with('success', 'Data berhasil ditambahkan !');
    }
    public function saveBerita(Request $request)
    {
        $createBerita= new Berita();

        if($request->file('gbr')){
            $file= $request->file('gbr');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/DBImages/Berita'), $filename);

            $createBerita['gbr']= $filename;
            $createBerita['judul']= $request->judul;
            $createBerita['deskripsi']= $request->deskripsi;
        }
        $createBerita->save();
        return redirect('/Adm/Berita')->with('success', 'Data berhasil ditambahkan !');
    }

    //EDIT FUNCTION
    public function editCustomer($id)
    {
        $editCustomer = Customer::where('id', $id)->get();
        return view('AdminPage.Edit.Customer', compact('editCustomer'));
    }
    public function editProgram($id)
    {
        $editProgram = Program::where('id', $id)->get();
        return view('AdminPage.Edit.Program', compact('editProgram'));
    }
    public function editUser($id)
    {
        $editUser = User::where('id', $id)->get();
        return view('AdminPage.Edit.User', compact('editUser'));
    }
    public function editTestimoni($id)
    {
        $editTestimoni = Testimoni::where('id', $id)->get();
        return view('AdminPage.Edit.Testimoni', compact('editTestimoni'));
    }
    public function editTutor($id)
    {
        $editTutor = Tutor::where('id', $id)->get();
        return view('AdminPage.Edit.Tutor', compact('editTutor'));
    }
    public function editMentor($id)
    {
        $allTtr = Tutor::all();
        $editMentor = Mentor::where('id', $id)->get();
        return view('AdminPage.Edit.Mentor', compact('editMentor', 'allTtr'));
    }
    public function editBerita($id)
    {
        $editBerita = Berita::where('id', $id)->get();
        return view('AdminPage.Edit.Berita', compact('editBerita'));
    }

    //UPDATE FUNCTION
    public function updateCustomer(Request $request)
    {
        $editCustomer = Customer::where('id', $request->id)->update([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'nowa'      => $request->nowa,
        ]);
        return redirect('/Adm/Customer')->with('success', 'Data berhasil diupdate !');
    }
    public function updateProgram(Request $request)
    {
        $editProgram = Program::where('id', $request->id)->update([
            'nama'      => $request->nama,
            'harga'     => $request->harga,
        ]);
        return redirect('/Adm/Program')->with('success', 'Data berhasil diupdate !');
    }
    public function updateUser(Request $request)
    {
        $editUser = User::where('id', $request->id)->update([
            'nama'      => $request->nama,
            'harga'     => $request->harga,
        ]);
        return redirect('/Adm/Program')->with('success', 'Data berhasil diupdate !');
    }
    public function updateTestimoni(Request $request)
    {
        $file= $request->file('img');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/DBImages/Testi'), $filename);

        $editTestimoni = Testimoni::where('id', $request->id)->update([
            'img'      => $filename,
        ]);
        return redirect('/Adm/Testimoni')->with('success', 'Data berhasil diupdate !');
    }
    public function updateTutor(Request $request)
    {
        $editTutor = Tutor::where('id', $request->id)->update([
            'name'      => $request->name,
        ]);
        return redirect('/Adm/Tutor')->with('success', 'Data berhasil diupdate !');
    }
    public function updateMentor(Request $request)
    {
        $file= $request->file('foto');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/DBImages/Mentor'), $filename);

        $editMentor = Mentor::where('id', $request->id)->update([
            'foto'     => $filename,
            'nama'     => $request->nama,
            'asal'     => $request->asal,
            'tutor_id'     => $request->tutor_id,
        ]);
        return redirect('/Adm/Mentor')->with('success', 'Data berhasil diupdate !');
    }
    public function updateBerita(Request $request)
    {
        $file= $request->file('gbr');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/DBImages/Berita'), $filename);

        $editBerita = Berita::where('id', $request->id)->update([
            'gbr'       => $filename,
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('/Adm/Berita')->with('success', 'Data berhasil diupdate !');
    }

    //DELETE FUNCTION
    public function deleteCustomer($id)
    {
        Customer::where('id',$id)->delete();
        return redirect('/Adm/Customer')->with('success', 'Data berhasil dihapus!');
    }
    public function deleteProgram($id)
    {
        Program::where('id',$id)->delete();
        return redirect('/Adm/Program')->with('success', 'Data berhasil dihapus!');
    }
    public function deleteUser($id)
    {
        User::where('id',$id)->delete();
        return redirect('/Adm/User')->with('success', 'Data berhasil dihapus!');
    }
    public function deleteTestimoni($id)
    {
        Testimoni::where('id',$id)->delete();
        return redirect('/Adm/Testimoni')->with('success', 'Data berhasil dihapus!');
    }
    public function deleteTutor($id)
    {
        Tutor::where('id',$id)->delete();
        return redirect('/Adm/Tutor')->with('success', 'Data berhasil dihapus!');
    }
    public function deleteMentor($id)
    {
        Mentor::where('id',$id)->delete();
        return redirect('/Adm/Mentor')->with('success', 'Data berhasil dihapus!');
    }
    public function deleteBerita($id)
    {
        Berita::where('id',$id)->delete();
        return redirect('/Adm/Berita')->with('success', 'Data berhasil dihapus!');
    }

}
