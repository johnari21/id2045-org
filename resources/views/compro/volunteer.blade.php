@extends('layouts.app')

@section('content')
    <section class="section-padding">
        <div class="container">
            <div class="py-5 text-center">
                <h2>Form Beasiswa</h2>
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
                        <hr class="mb-4">
                        <h4 class="mb-3">Data Wali</h4>
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
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <label for="relationship">Hubungan dalam keluarga</label>
                                <select class="form-select" id="relationship" required>
                                    <option value="">Choose...</option>
                                    <option>Ayah</option>
                                    <option>Ibu</option>
                                    <option>Saudara Kandung</option>
                                    <option>Kerabat</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid relationship.
                                </div>
                            </div>
                        </div>
                        {{-- <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address">
                            <label class="custom-control-label" for="same-address">Ayah</label>
                        </div> --}}
                        {{-- <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="save-info">
                            <label class="custom-control-label" for="save-info">Ibu</label>
                        </div> --}}
                        <hr class="mb-4">

                        {{-- <h4 class="mb-3">Payment</h4> --}}

                        <div class="row">
                            <label for="exampleFormControlFile1">File Pendukung</label>
                            <div class="form-group">
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
