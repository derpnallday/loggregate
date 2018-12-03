@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

            <strong>{{ $message }}</strong>

        </div>

        @endif

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="row justify-content-center">

        <div class="profile-header-container">
            <div class="profile-header-img">
                <img class="rounded-circle" src="/storage/avatars/{{ $user->avatar }}" />
                <div class="rank-label-container">
                    <span class="label label-default rank-label">{{$user->name}}</span>
                </div>
            </div>
        </div>

    </div>
    <div class="row justify-content-center">
        <form action="/settings" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose Theme
            <span class="caret"></span></button>
            <li class="dropdown">
              <a href="#" class="dropdown" data-toggle="dropdown">Themes <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#" data-theme="default" class="theme-link">Default</a></li>
                <li><a href="#" data-theme="amelia" class="theme-link">Amelia</a></li>
                <li><a href="#" data-theme="cerulean" class="theme-link">Cerulean</a></li>
                <li><a href="#" data-theme="cosmo" class="theme-link">Cosmo</a></li>
                <li><a href="#" data-theme="cyborg" class="theme-link">Cyborg</a></li>
                <li><a href="#" data-theme="flatly" class="theme-link">Flatly</a></li>
                <li><a href="#" data-theme="journal" class="theme-link">Journal</a></li>
                <li><a href="#" data-theme="readable" class="theme-link">Readable</a></li>
                <li><a href="#" data-theme="simplex" class="theme-link">Simplex</a></li>
                <li><a href="#" data-theme="slate" class="theme-link">Slate</a></li>
                <li><a href="#" data-theme="spacelab" class="theme-link">Spacelab</a></li>
                <li><a href="#" data-theme="united" class="theme-link">United</a></li>
            </ul>
        </li>
    </div>
    <div style="height:80px;"></div>
</div>
@endsection
