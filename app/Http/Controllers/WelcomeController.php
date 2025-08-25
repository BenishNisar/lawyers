<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\UserThankYouMail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index() {
        // Featured Blog (ID 6)
        $featuredBlog = Blog::find(6);

        // Latest 3 blogs excluding featured one
        $latestBlogs = Blog::where('id', '!=', 6)
                           ->latest()
                           ->take(3)
                           ->get();

        return view("Home.welcome", compact('featuredBlog', 'latestBlogs'));
    }


    // public function store(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email',
    //         'country'=> 'required',
    //         'phone'=>'nullable',
    //         'message' => 'required|string',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json(['errors' => $validator->errors()], 422);
    //     }

    //     $contact = Contact::create($request->only(['name', 'email', 'country', 'phone', 'message']));
    //     Mail::to('benishnisarkhan56@gmail.com')->queue(new ContactMail($contact));


    //     return response()->json(['message' => 'Contact submitted successfully.']);
    // }
    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'country'=> 'required',
        'phone'=>'nullable',
        'message' => 'required|string',
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }

    $contact = Contact::create($request->only(['name', 'email', 'country', 'phone', 'message']));

    // ✅ Send to Admin
    Mail::to('test@gmail.com')->queue(new ContactMail($contact));

    // ✅ Send to User
    Mail::to($contact->email)->send(new UserThankYouMail($contact->name));

    return response()->json(['message' => 'Contact submitted successfully.']);
}

}
