<?php
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $barang = new Barang();
        $barang->nama = $request->input('nama');
        $barang->stok = $request->input('stok');
        $barang->harga = $request->input('harga');
        $barang->save();

        return redirect()->route('barang.index');
    }

    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->nama = $request->input('nama');
        $barang->stok = $request->input('stok');
        $barang->harga = $request->input('harga');
        $barang->save();

        return redirect()->route('barang.index');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return redirect()->route('barang.index');
    }
}
