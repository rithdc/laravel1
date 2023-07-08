<?php

namespace App\Http\Controllers;

use App\Repositories\CompanyRepository;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    //public function __construct(CompanyRepository $company){
    //    $this -> company = $company;
    //}
    //Index
    public function index( CompanyRepository $company ){
        $contacts = Contact::all();
        $companies = $company -> company_data();
        return view('contacts.index',['contacts'=>$contacts,'companies' => $companies]);
    }

    //Create
    public function create(){
        return view('contacts.create');
    }

    //Show
    public function show($id){
       
        $contact = Contact::find($id);
        return view('contacts.show')->with('contact',$contact);
    }

}
