@extends('layouts.app')

@section('content')
<div class="container">

    <!-- CREATE POST -->
    <h3 class="text-center my-3">
        Hello, 
        <span class="fw-bold">{{ Auth::user()->name }}</span>
    </h3>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-5">
                <form action="{{ route('updateprofile') }}" method="POST" class="form-control">
                    @csrf
                    <label for="name">Name:</label>
                    <input  type="text" 
                            id="name"
                            name="name"
                            required
                            value="{{ Auth::user()->name }}"
                            class="form-control">
                    <label for="email">Name:</label>
                    <input  type="text" 
                            id="email"
                            name="email"
                            required
                            value="{{ Auth::user()->email }}"
                            class="form-control">
                    <button class="btn btn-dark mt-3">Update Profile</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
