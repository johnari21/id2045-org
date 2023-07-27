@extends('layouts.app')

@section('content')
    <section class="section-padding">
        <div class="container">
            {{-- <div class="py-5 text-center">
                <h2>Form Beasiswa</h2>
            </div> --}}

            <div class="row">
                <div class="col-lg-10 offset-md-1">
                    {{-- <div class="alert alert-success alert-dismissible fade show " role="alert">
                        <strong>Berhasil!</strong> Data sudah tersimpan.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> --}}
                    <form class="row g-3">
                        <h5>Data Diri</h5>
                        <hr>
                        <div class="col-md-6">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="nik">
                        </div>
                        <div class="col-md-6">
                            <label for="no-kk" class="form-label">No. KK</label>
                            <input type="text" class="form-control" id="no-kk">
                        </div>
                        <div class="col-md-12">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="col-md-4">
                            <label for="gender" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="gender" aria-describedby="gender">
                                <option value="">Choose...</option>
                                <option value="F">Perempuan</option>
                                <option value="M">Laki-laki</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="birth-place" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="birth-place">
                        </div>
                        <div class="col-md-4">
                            <label for="birth-date" class="form-label">Tanggal Lahir</label>
                            <input type="text" class="form-control" id="birth-date" placeholder="dd-mm-yyyy">
                        </div>
                        <div class="col-md-12">
                            <label for="mother-name" class="form-label">Nama Ibu Kandung</label>
                            <input type="text" class="form-control" id="mother-name">
                        </div>
                        <div class="col-md-12">
                            <label for="address" class="form-label">Alamat</label>
                            <textarea class="form-control" id="address"></textarea>
                        </div>
                        <div class="col-md-3">
                            <label for="no-rt" class="form-label">RT</label>
                            <input type="text" class="form-control" id="no-rt">
                        </div>
                        <div class="col-md-3">
                            <label for="no-rw" class="form-label">RW</label>
                            <input type="text" class="form-control" id="no-rw">
                        </div>
                        <div class="col-md-3">
                            <label for="province" class="form-label">Provinsi</label>
                            <input type="text" class="form-control" id="province">
                        </div>
                        <div class="col-md-3">
                            <label for="city" class="form-label">Kota</label>
                            <input type="text" class="form-control" id="city">
                        </div>
                        <div class="col-md-4">
                            <label for="district" class="form-label">Kecamatan</label>
                            <input type="text" class="form-control" id="district">
                        </div>
                        <div class="col-md-4">
                            <label for="village" class="form-label">Kelurahan</label>
                            <input type="text" class="form-control" id="village">
                        </div>
                        <div class="col-md-4">
                            <label for="postal-code" class="form-label">Kode Pos</label>
                            <input type="text" class="form-control" id="postal-code">
                        </div>
                        <div class="col-md-12">
                            <label for="class" class="form-label">Kelas</label>
                            <select class="form-select" id="class" aria-describedby="class">
                                <option value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="nisn" class="form-label">NISN</label>
                            <input type="text" class="form-control" id="nisn">
                        </div>
                        <div class="col-md-6">
                            <label for="npwp" class="form-label">NPWP</label>
                            <input type="text" class="form-control" id="npwp">
                        </div>
                        <div class="col-md-6">
                            <label for="handphone" class="form-label">No. HP</label>
                            <input type="number" class="form-control" id="handphone">
                        </div>
                        <div class="col-md-6">
                            <label for="telephone" class="form-label">No. Telp</label>
                            <input type="number" class="form-control" id="telephone">
                        </div>
                        <div class="col-md-4">
                            <label for="letter-address" class="form-label">Alamat Surat</label>
                            <select class="form-select" id="letter-address" aria-describedby="letter-address">
                                <option value="">Choose...</option>
                                <option value="diambil sendiri">Diambil sendiri</option>
                                <option value="dikirim">Dikirim</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="address-type" class="form-label">Tipe Alamat</label>
                            <select class="form-select" id="address-type" aria-describedby="address-type">
                                <option value="">Choose...</option>
                                <option value="alamat rumah">Alamat Rumah</option>
                                <option value="alamat kantor">ALamat Kantor</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="status-address" class="form-label">Status Tempat Tinggal</label>
                            <select class="form-select" id="status-address" aria-describedby="status-address">
                                <option value="">Choose...</option>
                                <option value="bukan milik pribadi">Bukan milik pribadi</option>
                                <option value="milik pribadi">Milik pribadi</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="relegion" class="form-label">Agama</label>
                            <select class="form-select" id="relegion" aria-describedby="relegion">
                                <option value="">Choose...</option>
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="budha">Budha</option>
                                <option value="hindu">Hindu</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="education" class="form-label">Pendidikan</label>
                            <select class="form-select" id="education" aria-describedby="education">
                                <option value="">Choose...</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="SMK">SMK</option>
                                <option value="MI">MI</option>
                                <option value="MTS">MTS</option>
                                <option value="MA">MA</option>
                                <option value="PKMB A">PKMB A</option>
                                <option value="PKMB B">PKMB B</option>
                                <option value="PKMB C">PKMB C</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="class" class="form-label">Disabilitas (Untuk SLB)</label>
                            <select class="form-select" id="class" aria-describedby="class">
                                <option value="">Choose...</option>
                                <option value="tuna rungu">Tuna rungu</option>
                                <option value="tuna netra">Tuna netra</option>
                            </select>
                        </div>
                        <h5 class="pt-4">Data Wali</h5>
                        <hr>
                        <div class="col-md-12">
                            <label for="guardian-name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="guardian-name">
                        </div>
                        <div class="col-md-4">
                            <label for="guardian-identity-number" class="form-label">No. KTP/NIK</label>
                            <input type="text" class="form-control" id="guardian-identity-number">
                        </div>
                        <div class="col-md-4">
                            <label for="guardian-npwp" class="form-label">NPWP</label>
                            <input type="text" class="form-control" id="guardian-npwp">
                        </div>
                        <div class="col-md-4">
                            <label for="guardian-no-kk" class="form-label">No. KK</label>
                            <input type="text" class="form-control" id="guardian-no-kk">
                        </div>
                        <div class="col-md-4">
                            <label for="guardian-gender" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="guardian-gender" aria-describedby="guardian-gender">
                                <option value="">Choose...</option>
                                <option value="F">Perempuan</option>
                                <option value="M">Laki-laki</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="guardian-birth-place" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="guardian-birth-place">
                        </div>
                        <div class="col-md-4">
                            <label for="guardian-birth-date" class="form-label">Tanggal Lahir</label>
                            <input type="text" class="form-control" id="guardian-birth-date" placeholder="dd-mm-yyyy">
                        </div>
                        <div class="col-md-6">
                            <label for="guardian-relegion" class="form-label">Agama</label>
                            <select class="form-select" id="guardian-relegion" aria-describedby="guardian-relegion">
                                <option value="">Choose...</option>
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="budha">Budha</option>
                                <option value="hindu">Hindu</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="guardian-job" class="form-label">Pekerjaan</label>
                            <select class="form-select" id="guardian-job" aria-describedby="guardian-job">
                                <option value="">Choose...</option>
                                <option value="pelajaran/mahasiswa">Pelajaran/Mahasiswa</option>
                                <option value="pegawai swasta">Pegawai swasta</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="guardian-mother-name" class="form-label">Nama ibu kandung wali</label>
                            <input type="text" class="form-control" id="guardian-mother-name">
                        </div>
                        <div class="col-md-4">
                            <label for="guardian-martial-status" class="form-label">Status pernikahan</label>
                            <select class="form-select" id="guardian-martial-status" aria-describedby="guardian-martial-status">
                                <option value="">Choose...</option>
                                <option value="Lajang">Lajang</option>
                                <option value="M">Menikah</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="guardian-education" class="form-label">Pendidikan Terakhir</label>
                            <select class="form-select" id="guardian-education" aria-describedby="guardian-education">
                                <option value="">Choose...</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="SMK">SMK</option>
                                <option value="MI">MI</option>
                                <option value="MTS">MTS</option>
                                <option value="MA">MA</option>
                                <option value="PKMB A">PKMB A</option>
                                <option value="PKMB B">PKMB B</option>
                                <option value="PKMB C">PKMB C</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="guardian-job-position" class="form-label">Jabatan/Golongan</label>
                            <select class="form-select" id="guardian-job-position" aria-describedby="guardian-job-position">
                                <option value="">Choose...</option>
                                <option value="Tetap">Tetap</option>
                                <option value="Kontrak">Kontrak</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="address" class="form-label">Alamat</label>
                            <textarea class="form-control" id="address"></textarea>
                        </div>
                        <div class="col-md-3">
                            <label for="no-rt" class="form-label">RT</label>
                            <input type="text" class="form-control" id="no-rt">
                        </div>
                        <div class="col-md-3">
                            <label for="no-rw" class="form-label">RW</label>
                            <input type="text" class="form-control" id="no-rw">
                        </div>
                        <div class="col-md-3">
                            <label for="province" class="form-label">Provinsi</label>
                            <input type="text" class="form-control" id="province">
                        </div>
                        <div class="col-md-3">
                            <label for="city" class="form-label">Kota</label>
                            <input type="text" class="form-control" id="city">
                        </div>
                        <div class="col-md-4">
                            <label for="district" class="form-label">Kecamatan</label>
                            <input type="text" class="form-control" id="district">
                        </div>
                        <div class="col-md-4">
                            <label for="village" class="form-label">Kelurahan</label>
                            <input type="text" class="form-control" id="village">
                        </div>
                        <div class="col-md-4">
                            <label for="postal-code" class="form-label">Kode Pos</label>
                            <input type="text" class="form-control" id="postal-code">
                        </div>
                        <div class="col-md-6">
                            <label for="handphone" class="form-label">No. HP</label>
                            <input type="number" class="form-control" id="handphone">
                        </div>
                        <div class="col-md-6">
                            <label for="telephone" class="form-label">No. Telp</label>
                            <input type="number" class="form-control" id="telephone">
                        </div>
                        <div class="col-md-6">
                            <label for="address-type" class="form-label">Tipe Alamat</label>
                            <select class="form-select" id="address-type" aria-describedby="address-type">
                                <option value="">Choose...</option>
                                <option value="alamat rumah">Alamat Rumah</option>
                                <option value="alamat kost">ALamat Kost</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="status-address" class="form-label">Status Tempat Tinggal</label>
                            <select class="form-select" id="status-address" aria-describedby="status-address">
                                <option value="">Choose...</option>
                                <option value="bukan milik pribadi">Bukan milik pribadi</option>
                                <option value="milik pribadi">Milik pribadi</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="button" onclick="alert('Berhasil Disimpan')">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
