@extends('templates.base')

@section('page.title','Sign in')

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                     <x-card>
                        <x-card-header>
                            <h4 class="m-0">
                                {{ __('Login') }}
                            </h4>
                        </x-card-header>

                        <x-card-header>
                            <x-form action="{{route('login.store')}}" method="POST">
                                <x-form-item>
                                    <x-label required>{{ __('Email') }}</x-label>
                                    <x-input type="email" name="email" class="form-control" autofocus />
                                </x-form-item>

                                <x-form-item>
                                    <x-label required>{{ __('Password') }}</x-label>
                                    <input type="password" name="password" class="form-control">
                                </x-form-item>

                                 <x-form-item>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="" id="flexCheckDefault">

                                        <x-label for="flexCheckDefault" class="form-check-label">
                                            {{ __('Remember me') }}
                                        </x-label>
                                    </div>
                                </x-form-item>

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </x-form>
                        </x-card-header>
                     </x-card>
                </div>
            </div>
        </div>
    </section>

@endsection




