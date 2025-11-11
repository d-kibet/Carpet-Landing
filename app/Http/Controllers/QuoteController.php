<?php

namespace App\Http\Controllers;

use App\Models\QuoteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuoteController extends Controller
{
    public function create()
    {
        return view('quote');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'location' => ['nullable', 'string', 'max:255'],
            'service_id' => ['required', 'exists:services,id'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        $validated['status'] = 'pending';

        QuoteRequest::create($validated);

        return redirect()->route('quote.create')
            ->with('success', 'Thank you! Your quote request has been submitted. We\'ll get back to you within 24 hours.');
    }
}
