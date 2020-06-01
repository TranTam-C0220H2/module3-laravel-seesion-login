@extends('layouts.master')
@section('content')
    <div class="title m-b-md">
        Đăng nhập
    </div>
    <div class="form-login">
        <p class="text-danger">{{session('success-fail')}}</p>
        <p class="text-danger">{{session('not-login')}}</p>
        <form class="text-left" method="post" action="{{ route('user.login') }}">
            @csrf
            <div class="form-group">
                <label for="inputUsername">Tên người dùng</label>
                <input type="email"
                       class="form-control <?= $errors->first('inputUsername') ? 'is-invalid' : '' ?>"
                       id="inputUsername"
                       name="inputUsername"
                       placeholder="Enter username"
                       required>
                @if(isset($errors))
                    <p class="text-danger">{{$errors->first('inputUsername')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password"
                       class="form-control <?= $errors->first('inputPassword') ? 'is-invalid' : '' ?>"
                       id="inputPassword"
                       name="inputPassword"
                       placeholder="Password"
                       minlength="8" maxlength="20" required>
                @if(isset($errors))
                    <p class="text-danger">{{$errors->first('inputPassword')}}</p>
                @endif
            </div>
            <input type="submit" class="btn btn-primary" value="Đăng nhập">
        </form>
    </div>
@endsection
