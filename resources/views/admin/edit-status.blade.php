@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h1 style="text-align: center">Edit status</h1>
                

                <form method="POST" action="{{ route('update-status') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="status"
                               class="col-md-4 col-form-label text-md-right">{{ __('status') }}</label>

                        <div class="col-md-6">
                            <input id="id" type="hidden" value="{{$tamu->id}}" name="id">
                            <input id="status" type="text" class="form-control"
                                   name="status" autofocus>

                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-gold">
                                {{ __('Simpan') }}
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
