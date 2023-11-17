<?php
namespace App\Http\Controllers;

use App\Models\Goat;
use Illuminate\Http\Request;

class GoatController extends Controller
{
    public function index()
    {
        $goats = Goat::all();
        return view("goats.index", compact("goats"));
    }

    public function show(Goat $goat)
    {
        return view('goats.show', compact('goat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required',
            'name' => 'required',
            'color' => 'required',
            'birthday' => 'required',
        ]);

        $goat = new Goat();
        $goat->sex = $request->input('sex') == 'on' ? true : false;
        $goat->name = $request->input('name');
        $goat->price = $request->input('price');
        $goat->color = $request->input('color');
        $goat->birthday = $request->input('birthday');
        $goat->save();

        return redirect('/goats/' . $goat->id);
    }

    public function create()
    {
        return view('goats.create');
    }

    public function edit($id)
    {
        $goat = Goat::find($id);
        return view('goats.edit', compact('goat'));
    }

    public function update(Request $request, $id)
    {
        $goat = Goat::find($id);

        $goat->sex = $request->input('sex') == 'on' ? true : false;
        $goat->name = $request->input('name');
        $goat->price = $request->input('price');
        $goat->color = $request->input('color');
        $goat->birthday = $request->input('birthday');
        $goat->save();

        return redirect('/goats/' . $goat->id);
    }

    public function destroy($id)
    {
        $goat = Goat::find($id);
        $goat->delete();
        return redirect('/goats');
    }
}
