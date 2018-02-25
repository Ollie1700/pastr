<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Paste;

class PasteController extends Controller
{

    public function showIndex()
    {
        return view('pastr');
    }

    public function showPaste(Paste $paste)
    {
        return view('paste')->with([
            'paste' => $paste,
        ]);
    }

    public function showRawPaste(Paste $paste)
    {
        return view('rawpaste')->with([
            'paste' => $paste,
        ]);
    }

    public function createPaste(Request $request)
    {
        $this->validate($request, [
            'paste' => 'required',
        ]);

        // A small algorithm that makes sure no slug is ever repeated.
        // Essentially we try and keep the slug short (4 chars) but if that
        // slug already exists we increment the amount of chars and try again.
        $i = 4;
        $slug = str_random($i);
        while(Paste::where('slug', $slug)->count() > 0) {
            $i++;
            $slug = str_random($i);
        }

        $paste = new Paste;
        $paste->slug = $slug;
        $paste->paste = $request->input('paste');
        $paste->img_data = '';
        $paste->save();

        return redirect('/' . $paste->slug);
    }

}
