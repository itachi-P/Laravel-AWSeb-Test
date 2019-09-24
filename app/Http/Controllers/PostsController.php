<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function home(Request $request)
    {
        //仮実装
        if ($request->has('user_id')) {
            echo "user_id: " . $request->user_id;
        }
        //$user_id = '001';
        //$request->merge(array('user_id' => $user_id));

        $images = Image::all();
        return view('home', ['images' => $images]);
    }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'file' => [
                'required', // 入力必須であること    
                'file',     // アップロードされたファイルであること
                'image',    // 画像ファイルであること
                'mimes:jpeg,jpg,png,gif',   // MIMEタイプを指定
            ]
        ]);

        if ($request->file('file')->isValid([])) {
            //storeメソッドを使うとlocalhost:8000に固定されてしまうので他のやり方に回避(画像ファイル名加工なし)
            //$path = $request->file->store('public');
            $filename = $request->file->getClientOriginalName(); //一意なID発行の方が望ましい
            $move = $request->file->move('./images/', $filename);

            $images = new Image;
            $images->fill(['user_id' => $user_id, 'filename' => $filename])->save();
            $images = Image::all();
            $parameters = ['user_id' => $user_id, 'filename' => $filename, 'images' => $images];
            return view('home', $parameters);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors();
        }
    }

    # （仮実装）画像の詳細ページ
    // public function show($id) 
    // {
    //     $post = Post::findOrFail($id);
    //     return view('posts.show')->with('post', $post);
    // }

}
