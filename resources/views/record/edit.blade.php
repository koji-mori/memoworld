@extends('layouts.admin')
@section('title', 'レコーディングノートの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>レコーディングノート</h2>
                <form action="{{ route('record.update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ $record_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="7">{{ $record_form->body }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">自己評価</label>
                        <div class="col-md-10">
                            <input type="number" class="record_assessment" name="assessment" min="0" max="5" value="3">
                        </div>
                    </div>
                    <div class="record-explanation">
                        <P>
                        ５点、、完全燃焼　やり切った<br>
                        ４点、、いつもよりがんばった<br>
                        ３点、、ふつう<br>
                        ２点、、思ったようにいかない<br>
                        １点、、サボった！！　このままではダメだ<br>
                        ０点、、もう最悪だ。　自分はクソ人間だ<br>
                        </P>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $record_form->id }}">
                            @csrf
                            <input type="submit" class="btn btn-warning" value="更新">
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection