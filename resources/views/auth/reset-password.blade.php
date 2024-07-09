@extends('layout.app')

@section('content')
<div class="container mt-5">
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" class="form-control" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
            @if ($errors->has('email'))
                <div class="mt-2 text-danger">
                    @foreach ($errors->get('email') as $message)
                        <div>{{ $message }}</div>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
            @if ($errors->has('password'))
                <div class="mt-2 text-danger">
                    @foreach ($errors->get('password') as $message)
                        <div>{{ $message }}</div>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
            @if ($errors->has('password_confirmation'))
                <div class="mt-2 text-danger">
                    @foreach ($errors->get('password_confirmation') as $message)
                        <div>{{ $message }}</div>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="d-flex justify-content-end mt-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
</div>
@endsection
