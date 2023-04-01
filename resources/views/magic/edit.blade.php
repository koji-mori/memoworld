@extends('layouts.admin')
@section('title', 'メモの魔力の編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>メモの魔力</h2>
                <form action="{{ route('magic.update') }}" method="post" enctype="multipart/form-data">
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
                            <input type="text" class="form-control" name="title" value="{{ $Magic_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">ファクト</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ $magic_form->body }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="body">抽象化</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ $magic_form->body }}</textarea>
                        </div>
                    </div>
                    
                     <div class="form-group row">
                        <label class="col-md-2" for="body">転用</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ $magic_form->body }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $record_form->id }}">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection