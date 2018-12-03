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
        <div>
            <form action="/settings" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br>
            <form name="themeForm" action="/themes" method="POST">
                <div>
                    <h5>Change visual theme:</h5>
                    <select name="themes" id="themes" onchange="this.form.submit()">
                        <option value="app.css">Default</option>
                        <option value="darkTheme.css">Dark</option>
                        <option value="sandTheme.css">Sand</option>
                        <option value="spaceTheme.css">Space</option>
                        <option value="ubuntuTheme.css">Ubuntu</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
