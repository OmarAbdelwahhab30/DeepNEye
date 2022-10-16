<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FlaskController extends Controller
{

    public function UploadImage(ImageRequest $request)
    {
        $photo = fopen($request->file('image'), 'rb');
        $response = Http::attach('file',$photo)
            ->post('http://127.0.0.1:5000/api/predict');
        fclose($photo);

        $FileName = time() . "-" . $request->file("image")->getClientOriginalName() . '.' . $request->file("image")->extension();
        $request->file("image")->move(public_path('storage/' . "ModelsImages"), $FileName);
        session()->flash('review', json_decode($response));
        return redirect()->route('result');
    }

    public function result(){
        return view('result');
    }
}
