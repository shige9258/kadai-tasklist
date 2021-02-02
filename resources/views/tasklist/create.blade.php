@extends('layouts.app')

@section('content')

  <h1>タスク新規作成ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($tasklist2, ['route' => 'tasklist.store']) !!}

                <div class="form-group">
                    {!! Form::label('content', '予定を書き込む:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection