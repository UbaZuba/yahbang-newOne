@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form enctype="multipart/form-data" method="POST" action="{{ route('createPost') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <textarea id="body" placeholder="Tell us what makes you proud today" type="text" class="form-control" name="body" autofocus></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="postPhoto" type="file" class="form-control" name="photo_id" value="{{ old('photo_id') }}" autofocus>
                                </div>
                            </div>




                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
