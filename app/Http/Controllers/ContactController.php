<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;
use function Pest\Laravel\get;

class ContactController extends Controller
{
    public function index(){
        return view ("contact");
    }
    public function getAllContacts()
    {
        $allContacts = ContactModel::all();


       return view ("allContacts" , compact("allContacts"));
    }
    public function sendContact(Request $request){
        $request->validate([
            "email" => "required|string",
            "subject" => "required|string",
            "description" => "required|string|min:5",
        ]);

        ContactModel::create([
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->description,
        ]);

        return redirect("/shop");
    }
    public function deleteContact($contact){
        $singleContact=ContactModel::where("id",$contact)->first();

        if($singleContact===null)
            {
            die("Contact not found");
        }
        $singleContact->delete();
        return redirect()->back();
    }
}
