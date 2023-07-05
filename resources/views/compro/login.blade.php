@extends('layouts.app')

@section('content')
<section class="section-padding section-bg">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
                <h2 class="mb-lg-3 text-center">Login</h2>

                <div class="row">
                    <div class="col-lg-8 offset-md-2">
                        <form class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="name">Username</label>
                                <input type="name" class="form-control" id="name">
                                <div class="invalid-feedback">
                                    Your name is required.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password">
                                <div class="invalid-feedback">
                                    Your password is required.
                                </div>
                            </div>
                            <button class="btn btn-success btn-lg btn-block" type="submit">Submit</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection
