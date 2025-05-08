<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::paginate(10);
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'logo' => 'nullable|image|dimensions:min_width=100,min_height=100',
            'website' => 'nullable|url',
        ]);

        if ($request->hasFile('logo')) {
            $filename = $request->file('logo')->store('logos', 'public');
            $request->merge(['logo' => $path]);
        }

        Company::create($request->all());

        return redirect()->route('companies.index')->with('success', 'Company created successfully.');
    }

    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
{
    $request->validate([
        'name' => 'required',
        'email' => 'nullable|email',
        'logo' => 'nullable|image|dimensions:min_width=100,min_height=100',
        'website' => 'nullable|url',
    ]);

    // Handle logo update
    if ($request->hasFile('logo')) {
        // Store the file in 'public/logos' and get the path
        $path = $request->file('logo')->store('logos', 'public');
        $company->logo = $path;
    }

    // Update other fields
    $company->name = $request->name;
    $company->email = $request->email;
    $company->website = $request->website;
    
    $company->save(); // Save the changes

    return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
}

    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Company deleted successfully.');
    }
}
