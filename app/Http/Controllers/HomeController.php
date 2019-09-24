<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Image;

class HomeController extends Controller
{
    public function index()
    {
        $request = new Request;
        $request->merge([
            //仮実装
            'user_id' => '001',
        ]);

        return view('index', $request);
    }

}
