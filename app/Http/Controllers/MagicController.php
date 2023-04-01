<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MagicController extends Controller
{
    public function add()
    {
        return view('magic.create');
    }
    
    public function create(Request $request)
    {
        // Validationを行う
        $this->validate($request, Record_memos::$rules);

        $Record_memos = new Record_memos;
        $form = $request->all();

       
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
       
        // データベースに保存する
        $Record_memos->fill($form);
        $Record_memos->save();

        return redirect('record');
    }
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            $posts = Record_memos::where('title', $cond_title)->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $posts = Record_memos::all();
        }
        return view('record.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    

     public function edit(Request $request)
    {
        // News Modelからデータを取得する
        $record = Record_memos($request->id);
        if (empty($record)) {
            abort(404);
        }
        return view('record.edit', ['record_form' => $record]);
    }

    public function update(Request $request)
    {
        // Validationをかける
        $this->validate($request, Record_memos::$rules);
        // News Modelからデータを取得する
        $record = Record_memos::find($request->id);
        // 送信されてきたフォームデータを格納する
        $record_form = $request->all();
        unset($record_form['_token']);

        // 該当するデータを上書きして保存する
        $record->fill($record_form)->save();
        unset($record_form['remove']);

        return redirect('record');
    }
    
    public function delete(Request $request)
    {
        // 該当するNews Modelを取得
        $record = Record_memos::find($request->id);

        // 削除する
        $record->delete();

        return redirect('record');
    }
}
