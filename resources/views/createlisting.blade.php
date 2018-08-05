@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Listings</div>

                <div class="panel-body">
                    {!! Form::open(['action' => 'ListingsController@store','method' => 'POST']) !!}
                        {{ Form::bsText('name','',['placeholder' => 'Company Name']) }}
                        {{ Form::bsText('website','',['placeholder' => 'Company Website']) }}
                        {{ Form::bsText('phone','',['placeholder' => 'Company email']) }}
                        {{ Form::bsText('email','',['placeholder' => 'Company phone']) }}
                        {{ Form::bsText('address','',['placeholder' => 'Business Address']) }}
                        {{ Form::bsTextArea('bio','',['placeholder' => 'About this Business']) }}
                    {{ Form::bsSubmit('Submit',['class' =>'btn btn-primary']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection