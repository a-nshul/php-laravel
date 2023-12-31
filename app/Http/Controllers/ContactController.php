<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index')->with('contacts', $contacts);
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Contact::create($input);
        return redirect('student')->with('flash_message', 'Contact Added!');
    }   
    
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('student.show')->with('contact', $contact);
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('student.edit')->with('contact', $contact);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('student')->with('flash_message', 'Student Updated!');
    }

    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!');
    }
}
