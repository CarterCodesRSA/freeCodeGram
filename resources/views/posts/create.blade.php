@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method='post'>
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <h1>Add new post</h1>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label text-md-right">Post Caption</label>
                    <div class="col-md-6">
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror"
                            name="caption" value="{{ old('caption') }}" autocomplete="caption"
                            autofocus>
                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label text-md-right">Post Image</label>
                    <div class="col-md-6">

                        <input type="file" name="image" id="image" />
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row pt-3">
                    <button class='btn btn-primary btn-block' type="submit">Add post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
