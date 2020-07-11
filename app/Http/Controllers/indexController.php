<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
    	return view('contact.index');
    }
    public function contacts(){
    	$contact = Contact::paginate(15);
        return view('contact.contacts', compact('contact'));
    }
    public function processing(Request $request){
        $processing = $request->all();
        $contact = new Contact;
        $contact->fill($processing);
        $processing = $request->validate(['name' => 'required|min:5|max:25|unique:contacts', 'email' => 'required|min:5|email|unique:contacts', 'number' => 'required|min:7|max:20|unique:contacts', 'additional_email' => 'required|min:5|email|unique:contacts', 'additional_number' => 'required|min:7|max:20|unique:contacts']);
        $contact->save(); return redirect('contacts');
    }
    public function view($id){
        $result = Contact::find($id);
        return view('contact.view', compact('result'));
    }
    public function edit($id){
        $result = Contact::find($id);
        return view('contact.edit', compact('result'));
    }
    public function update(Request $request, $id){
        $update = Contact::findOrFail($id);
        $update->id = $request->input('id');
        $update->name = $request->input('name');
        $update->email = $request->input('email');
        $update->number = $request->input('number');
        $update->additional_email = $request->input('additional_email');
        $update->additional_number = $request->input('additional_number');
        $validate = $request->validate(['email' => 'unique:contacts', 'number' => 'unique:contacts', 'additional_number' => 'unique:contacts', 'additional_number' => 'unique:contacts']);
        $update->save(); return redirect('contacts');
    }
    public function delete($delete){
        $delete_dlt = Contact::where('id', $delete);
        $delete_dlt->delete();
    return redirect('contacts');
    }
    public function search(Request $request){
        $search = $request->get('search');
        $contact = Contact::where('id','like','%'.$search.'%')->orWhere('name', 'like', '%'.$search.'%')->orWhere('number', 'like', '%'.$search.'%')->orWhere('email', 'like', '%'.$search.'%')->paginate(3);
        return view('contact.search', ['contact' => $contact]);
    }
}
