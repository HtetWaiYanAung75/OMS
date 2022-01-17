@extends('layouts.master')

@section("content")

    <div class="container">
    @if(session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center"  style="font-size:20px;">{{ __('Account Update Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{url('/accountinfo/update/'.$user['id'])}}"> 
                        @csrf

                        <div class="row mb-3">
                            <label for="employeeid" class="col-md-4 col-form-label text-md-end">{{ __('Employee ID') }}</label>

                            <div class="col-md-6">
                                <input id="employeeid" type="text" class="form-control @error('employeeid') is-invalid @enderror" name="employeeid" value="{{ $user->employeeid }}" disabled>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fname" class="col-md-4 col-form-label text-md-end">{{ __('FirstName') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ $user->fname}}" autofocus>

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="lname" class="col-md-4 col-form-label text-md-end">{{ __('LastName') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ $user->lname}}">

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username}}" >

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email}}" >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ $user->password}}"  >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <input type="submit" name="submit" value="Update" class="btn btn-primary">
                           
				 				&nbsp;&nbsp;
                             <input type="sumit" name="cancel" class="btn btn-danger" value="Cancel"/>
                            </div>

                            

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

