@extends('layouts.app')

@section('content')
    <section class="section-padding">
        <div class="container">
            <div class="py-5 text-center">
                <h2>Form Volunteer</h2>
            </div>

            <div class="row">
                <div class="col-lg-8 offset-md-2">
                    {{-- <h4 class="mb-3">Billing address</h4> --}}
                    <form class="needs-validation" novalidate>

                        <div class="mb-3">
                            <label for="family-card">No. KK</label>
                            <input type="text" class="form-control" id="family-card" required>
                            <div class="invalid-feedback">
                                Please enter your no kk address.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="identity-card">No. KTP</label>
                            <input type="text" class="form-control" id="identity-card" required>
                            <div class="invalid-feedback">
                                Please enter your KTP address.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="name">Nama</label>
                            <input type="name" class="form-control" id="name">
                            <div class="invalid-feedback">
                                Your name is required.
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label for="religion">Agama</label>
                                <select class="form-select" id="religion" required>
                                    <option value="">Choose...</option>
                                    <option>Islam</option>
                                    <option>Khatolik</option>
                                    <option>Kristen Protestan</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid religion.
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label for="sex">Jenis Kelamin</label>
                                <select class="form-select" id="sex" required>
                                    <option value="">Choose...</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid sex.
                                </div>
                            </div>
                        </div>
                        {{-- <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button> --}}
                        <a class="btn btn-success btn-lg btn-block" href="/">Submit</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
