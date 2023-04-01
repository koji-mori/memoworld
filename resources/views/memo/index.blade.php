
{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'メモ一覧')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="section">
                    <div class="main-title">
                        <h1>メモ一覧</h1>
                    </div>
                    <div class="box22">
                        <h2>レコーディングノート</h2>
                    </div>
                    <div class="section-body">
                        <p> レコーディングダイエットを参考につくったメモ<br>
                        節約中なのにいらない買い物してしまったりダイエット中なのに食べ過ぎてしまったなどをメモしていくことで
                        不思議と失敗が減っていく。 日々の日常でたまったストレスや誰か
                        の悪口などを書き足していくことで悩みも減らすこともできる</p>
                    </div>
                    
                    <a href="/record/create" class="btn btn-warning">活用する</a>
                    
                    
                    
                    <div class="box22">
                        <h2>メモの魔力　<span class="writer">前田裕二</span></h2>
                    </div>
                    <div class="section-body">
                        <p>　アイデアを生み出すメモ術　⋆本当は紙のノートにかくのがいい<br>
                        ファクト　→　抽象化　→　転用　をノートに書きうつしていくことで多彩なアイデアや話の骨組みがわかるようになる
                        情報を素通りしなくなり曖昧な感覚や概念を言葉にできるようになるメモ術
                        </p>
                    </div>
                    
                    <a href="/magic/create" class="btn btn-warning">活用する</a>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
@endsection