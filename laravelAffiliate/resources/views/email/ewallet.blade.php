@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-3">
            <div class="panel panel-default" style="margin-right:30px;background-color;#fff;margin-top:40px">
                <div class="panel-heading" style="text-align:center;background-color:#ffffff !important;border-color:#fff">
                    <img src="{{asset('frontend/images/successchecked.png')}}"  style="height:65px"  alt="checked" />
                </div>
                <div class="panel-heading" style="text-align:center;background-color:#fff !important;border-color:#fff;margin-top:30px;">
                    <span style="color:#70c470;font-size:20px">Successfully Veryfied</span>
                </div>
                <div class="panel-body">
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
                            <div classs="col-md-5 col-md-offset-2">
                            <p style="color:#a59d9d;margin:20px">Congratulations! Click the button below to register your eWallet now and 
                            get your account funded immediately after phone verification. <a href="#"> No deposit required.</a>
                            </p></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-right">
                            </div>
                            <div class="col-sm-5 col-sm-offset-4">
                                <a href ="https://my.fxopen.com/en/Registration?agent=XX63FXPNXXN457301000B" class="btn btn-success" style=""> eWallet Registration</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
