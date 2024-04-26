<?php

// app/Http/Controllers/MaminController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mamin;
use Dompdf\Dompdf;
use Dompdf\Options;

class MaminController extends Controller
{
    public function index(Request $request)
    {
        $jenis = $request->jenis;
        if (!$jenis || !in_array($jenis, ['konsumsi', 'natura'])) {
            $mamins = Mamin::orderBy('name')->get();
        } else {
            $mamins = Mamin::where('jenis', $jenis)->get();
        }

        // $mamins = Mamin::all();
        return view('admin.mamin.index', compact('mamins'));
    }

    public function create()
    {
        return view('admin.mamin.create');
    }

    public function store(Request $request)
    {
        Mamin::create($request->all());
        return redirect()->route('mamins.index');
    }

    public function show($id)
    {
        $mamin = Mamin::findOrFail($id);
        return view('admin.mamin.show', compact('mamin'));
    }

    public function edit($id)
    {
        $mamin = Mamin::findOrFail($id);
        return view('admin.mamin.edit', compact('mamin'));
    }

    public function update(Request $request, $id)
    {
        $mamin = Mamin::findOrFail($id);
        $mamin->update($request->all());
        return redirect()->route('mamins.index');
    }

    public function destroy($id)
    {
        $mamin = Mamin::findOrFail($id);
        $mamin->delete();
        return redirect()->route('mamins.index');
    }
    public function exportPDF(){
        // Retrieve data from the database
        $mamins= Mamin::all();

        // Load view file
        $html = view('admin.mamin.pdf', compact('mamins'))->render();

        // Configure Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Arial');

        // Instantiate Dompdf with options
        $dompdf = new Dompdf($options);

        // Load HTML content
        $dompdf->loadHtml($html);

        // Render PDF
        $dompdf->render();

        // Output PDF to browser
        $dompdf->stream('Laporan Mamin.pdf');
    }
}

