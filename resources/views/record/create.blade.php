@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'レコーディングノート')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>レコーディングノート</h1>
                <form action="{{ route('record.create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">目標</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">内容</label>
                        <div class="col-md-10">
                            <div class="record-content">
                                <textarea class="form-control" name="body" rows="7">{{ old('body') }}</textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">自己評価</label>
                        <div class="col-md-10">
                            <input type="number" class="record_assessment" name="assessment" min="0" max="5" value="3" >
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
                    
                    @csrf
                    <input type="submit" class="btn btn-warning" value="作成">
                </form>
                    
                
            </div>
        </div>
    </div>
@endsection