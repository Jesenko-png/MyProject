<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;


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

        return redirect("/contact");
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
    public function editContact($contact){
        $singleContact=ContactModel::findorfail($contact);


            return view("admin.editContact" , compact("singleContact"));
        }

    public function updateContact(Request $request, $contact){
        $request->validate([
            "email" => "required|string",
            "subject" => "required|string|min:5",
            "message" => "required|string|min:5",
        ]);


    $updateContact=ContactModel::findorfail($contact);
    $updateContact->email = $request->email;
    $updateContact->subject = $request->subject;
    $updateContact->message = $request->message;

    $updateContact->save();

    return redirect()->route("node -vall-contacts");

}
}
