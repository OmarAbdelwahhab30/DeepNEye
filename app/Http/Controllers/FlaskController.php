<?php

namespace App\Http\Controllers;


use App\Http\Requests\ImageRequest;
use App\Traits\ApiTrait;
use App\Traits\FileUploaderTrait;
use Illuminate\Support\Facades\Http;

class FlaskController extends Controller
{

    use ApiTrait;
    use FileUploaderTrait;

    public function index(){
        return view('result');
    }


    public function bindFlask(ImageRequest $request)
    {
        try {
            $response = $this->callApi($request);
            $this->ValidateFile($request->file("image"),'ModelsImages');
            session()->flash('review', json_decode($response));
            return redirect()->route('result');
        }catch (\Exception $e){
            return redirect()->back()->with("error","Some Thing Went Wrong , try agian later");
        }
    }

    public function callApi($request){
        $photo = fopen($request->file('image'), 'rb');
        $response = Http::attach('file',$photo)->post('http://127.0.0.1:5000/success');
        fclose($photo);
        return $response;
    }


}
