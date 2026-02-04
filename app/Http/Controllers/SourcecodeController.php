<?php

namespace App\Http\Controllers;

use App\Models\Sourcecode;

class SourcecodeController extends Controller
{
    public function index()
    {
        $sourcecodes = Sourcecode::where('is_published', true)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('sourcecode.index', compact('sourcecodes'));
    }

    public function show(Sourcecode $sourcecode)
    {
        if (! $sourcecode->is_published) {
            abort(404);
        }

        $sourcecode->load('images');

        $latestSourcecodes = Sourcecode::where('is_published', true)
            ->where('id', '!=', $sourcecode->id)
            ->orderBy('id', 'desc')
            ->limit(3)
            ->get();

        return view('sourcecode.show', compact('sourcecode', 'latestSourcecodes'));
    }
}
