@extends('layout.app')

@section('content')

<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div class="mb-3">
        <label for="name" class="form-label">{{ __('Name') }}</label>
        <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
        @if ($errors->has('name'))
            <div class="mt-2 text-danger">
                @foreach ($errors->get('name') as $message)
                    <div>{{ $message }}</div>
                @endforeach
            </div>
        @endif
    </div>

    <!-- Email Address -->
    <div class="mb-3">
        <label for="email" class="form-label">{{ __('Email') }}</label>
        <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
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

    <div class="d-flex justify-content-between align-items-center mt-4">
        <a class="text-decoration-none" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <button type="submit" class="btn btn-primary ms-4">
            {{ __('Register') }}
        </button>
    </div>
</form>

@endsection
