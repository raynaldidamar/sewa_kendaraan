<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(){
        $cars = Car::latest()->get();
        return view('frontend.homepage', compact('cars'));
    }

    public function contactStore(Request $request){
        $data = $request->validate([
            'name' => 'required|string|min:5|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        Message::create($data);

        return redirect()->back()->with([
            'message' => 'pesan anda berhasil di kirim',
            'alert-type' => 'success',
        ]);
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function detail(Car $car){
        return view('frontend.detail', compact('car'));
    }
}
