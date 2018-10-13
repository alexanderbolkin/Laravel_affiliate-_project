@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="margin-top:30px">
            <div class="panel panel-default">
                <div class="panel-heading" >
                    <img src="{{asset('frontend/images/checked.png')}}"  alt="checked" />
                    <span style="font-size:16px">A verification link has been sent to your email account</span>
                </div>

                <div class="panel-body" style="margin-top:30px">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif
                    <form class="form-horizontal">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <p>Please click on the link that has just been sent to your email account to verify your email and continue the registration process</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


