@extends('layouts.admin')


@section('content')

    <h2>Kullanıcı Oluştur</h2>

    {!! Form::open(['method'=>'POST', 'action' => 'AdminUsersController@store', 'files'=>true]) !!}
        <div class="form-group">

            {!! Form::label('name', 'Ad  : ') !!}
            {!! Form::text('name',null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

                    {!! Form::label('email', 'Email  : ') !!}
                    {!! Form::email('email',null, ['class' => 'form-control']) !!}

        </div>


     <div class="form-group">

                 {!! Form::label('role_id', 'Role  : ') !!}
                 {!! Form::select('role_id',[''=>'Seçiniz'] + $roles ,null, ['class' => 'form-control']) !!}

             </div>

    <div class="form-group">

        {!! Form::label('is_active', 'Durum  : ') !!}
        {!! Form::select('is_active',array(1 => 'Aktif', 0 => 'Pasif'),0, ['class' => 'form-control']) !!}

    </div>

     <div class="form-group">

                 {!! Form::label('photo_id', 'Resim Yükle  : ') !!}
                 {!! Form::file('photo_id',null, ['class' => 'form-control']) !!}

             </div>


    <div class="form-group">

        {!! Form::label('password', 'Şifre  : ') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}

    </div>




    <div class="from-group">
       {!! Form::submit('Üye Oluştur',['class'=>'btn btn-primary']) !!}
       </div>

    {!! Form::close() !!}


    @include('includes.form_error')


@stop



