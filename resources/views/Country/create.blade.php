@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('country.index')}}" class="btn btn-info float-right">Country List</a>
                    {{ _('Dashboard')}}</div>
                <div class="card-body">
                    @if(session()->has('message'))
                    <div class="alert alert-success"  role="alert">
                        {{   session('message')}}
                    </div>
                    @endif
                    <table class="table">
                        <tbody>
                            <form method="POST" action="{{route('country.store')}}">
                                @csrf

                                <div class="form-group">
                                    <label for="inputAddress">Country Code</label>
                                    <input type="text" class="form-control" name="country_code"  required placeholder="Please Enter your country code">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputAddress2">Name</label>
                                    <input type="text" class="form-control" name="name" required placeholder="Please Enter your name">
                                  </div>
                                <button type="submit" class="btn btn-primary">save</button>
                              </form>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
