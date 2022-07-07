<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MediaController extends Controller
{
    public function store(Request $request){
        $path = public_path('tmp/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('image');
        $name = uniqid() . '_' . trim($file->getClientOriginalName());
        $file->move('storage/tmp/uploads', $name);
        return ['name'=>$name];
        
    }

    public function getImages(User $user){
        $images = $user->images;
        return ['media'=>$images];
    }
}
