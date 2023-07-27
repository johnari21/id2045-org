@extends('layouts.app')

@section('content')
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-md-1">
                    <form class="row g-3">
                        <h5>Pengenalan Tempat</h5>
                        <hr>
                        <div class="col-md-6">
                            <label for="province" class="form-label">Provinsi</label>
                            <input type="text" class="form-control" id="province">
                        </div>
                        <div class="col-md-6">
                            <label for="city" class="form-label">Kota</label>
                            <input type="text" class="form-control" id="city">
                        </div>
                        <div class="col-md-6">
                            <label for="district" class="form-label">Kecamatan</label>
                            <input type="text" class="form-control" id="district">
                        </div>
                        <div class="col-md-6">
                            <label for="village" class="form-label">Kelurahan</label>
                            <input type="text" class="form-control" id="village">
                        </div>
                        <div class="col-md-4" hidden>
                            <label for="postal-code" class="form-label">Kode pos</label>
                            <input type="text" class="form-control" id="postal-code">
                        </div>
                        <div class="col-md-12">
                            <label for="sls-name" class="form-label">Nama SLS</label>
                            <input type="text" class="form-control" id="sls-name">
                        </div>
                        <div class="col-md-12">
                            <label for="address" class="form-label">Alamat</label>
                            <textarea class="form-control" id="address"></textarea>
                        </div>
                        <div class="col-md-3">
                            <label for="no-household" class="form-label">No. urut rumah tangga</label>
                            <input type="text" class="form-control" id="no-household">
                        </div>
                        <div class="col-md-9">
                            <label for="krt-name" class="form-label">Nama KRT</label>
                            <input type="text" class="form-control" id="krt-name">
                        </div>
                        <h5 class="pt-3">Keterangan petugas dan responden</h5>
                        <hr>
                        <div class="col-md-4">
                            <label for="verivali-date" class="form-label">Tanggal verivali</label>
                            <input type="text" class="form-control" id="verivali-date" placeholder="dd-mm-yyyy">
                        </div>
                        <div class="col-md-6">
                            <label for="agent-verivali-name" class="form-label">Nama petugas verivali</label>
                            <input type="text" class="form-control" id="agent-verivali-name">
                        </div>
                        <div class="col-md-2">
                            <label for="agent-verivali-code" class="form-label">Kode petugas verivali</label>
                            <input type="text" class="form-control" id="agent-verivali-code">
                        </div>
                        <div class="col-md-5">
                            <label for="checker-name" class="form-label">Nama pemeriksa</label>
                            <input type="text" class="form-control" id="checker-name">
                        </div>
                        <div class="col-md-7">
                            <label for="verivali-result" class="form-label">Hasil verivali nama penerima manfaat</label>
                            <select class="form-select" id="gender" aria-describedby="verivali-result">
                                <option value="">Choose...</option>
                                <option value="selesai di verivali">Selesai di verivali</option>
                                <option value="rumah tangga tidak ditemukan">Rumah tangga tidak ditemukani</option>
                                <option value="rumah tangga pindah/bangunan sensus sudah tidak ada">Rumah tangga pindah/bangunan sensus sudah tidak ada</option>
                                <option value="data ganda">Data ganda</option>
                            </select>
                        </div>
                        <h5 class="pt-3">Keterangan Perumahan</h5>
                        <hr>
                        <div class="col-md-12">
                            <label for="building-ownership-status" class="form-label">Status penguasaan bangunan tempat tinggal
                                yang ditempat</label>
                            <select class="form-select" id="building-ownership-status" aria-describedby="building-ownership-status">
                                <option value="">Choose...</option>
                                <option value="milik sendiri">Milik sendiri</option>
                                <option value="Kkntrak/sewa">Kontrak/sewa</option>
                                <option value="dinas">Dinas</option>
                                <option value="bebas sewa">Bebas sewa</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="land-ownership-status" class="form-label">Status lahan tempat tinggal yang ditempati</label>
                            <select class="form-select" id="land-ownership-status" aria-describedby="land-ownership-status">
                                <option value="">Choose...</option>
                                <option value="milik sendiri">Milik sendiri</option>
                                <option value="milik orang lain">Milik orang lain</option>
                                <option value="tanah negara">Tanah negara</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="floor-area" class="form-label">Luas lantai</label>
                            <input type="text" class="form-control" id="floor-area">
                        </div>
                        <div class="col-md-6">
                            <label for="widest-floor-type" class="form-label">Jenis lantai terluas</label>
                            <select class="form-select" id="widest-floor-type" aria-describedby="widest-floor-type">
                                <option value="">Choose...</option>
                                <option value="marmer/granit">Marmer/granit</option>
                                <option value="keramik">Keramik</option>
                                <option value="parket/vinil/permadani">Parket/vinil/permadani</option>
                                <option value="ubin/tegel/teraso">Ubin/tegel/teraso</option>
                                <option value="kayu/papan kualitas tinggi">Kayu/papan kualitas tinggi</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="widest-floor-type" class="form-label">Jenis dinding terluas</label>
                            <select class="form-select" id="widest-floor-type" aria-describedby="widest-floor-type">
                                <option value="">Choose...</option>
                                <option value="alamat">Tembok</option>
                                <option value="alamat">Kayu</option>
                                <option value="alamat">Bambu</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="quality-floor-type" class="form-label">Kualitas dinding terluas</label>
                            <select class="form-select" id="quality-floor-type" aria-describedby="quality-floor-type">
                                <option value="">Choose...</option>
                                <option value="bagus/kualitas tinggi">Bagus/kualitas tinggi</option>
                                <option value="jelek/kualitas rendah">Jelek/kualitas rendah</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="total-bedroom" class="form-label">Jumlah kamar tidur</label>
                            <input type="text" class="form-control" id="total-bedroom">
                        </div>
                        <div class="col-md-6">
                            <label for="water-source" class="form-label">Sumber air minum</label>
                            <select class="form-select" id="water-source" aria-describedby="water-source">
                                <option value="">Choose...</option>
                                <option value="air kemasan bermerk">Air kemasan bermerk</option>
                                <option value="air isi ulang">Air isi ulang</option>
                                <option value="Leding meteran">Leding meteran</option>
                                <option value="Leding eceran">Leding eceran</option>
                                <option value="Sumur bor/pompa">Sumur bor/pompa</option>
                                <option value="Sumur terlindung">Sumur terlindung</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="water-source-company" class="form-label">Jenis perusahaan leding meteran</label>
                            <select class="form-select" id="water-source-company" aria-describedby="water-source-company">
                                <option value="">Choose...</option>
                                <option value="PAM">PAM</option>
                                <option value="PDAM">PDAM</option>
                                <option value="BPAM">BPAM</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="cust-id-no" class="form-label">No. ID Pelanggan</label>
                            <input type="text" class="form-control" id="cust-id-no">
                        </div>
                        <div class="col-md-12">
                            <label for="address" class="form-label"></label>
                            <select class="form-select" id="address" aria-describedby="address">
                                <option value="">Choose...</option>
                                <option value="alamat"></option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="water-method" class="form-label"></label>
                            <select class="form-select" id="water-method" aria-describedby="water-method">
                                <option value="">Choose...</option>
                                <option value="Membeli eceran">Membeli eceran</option>
                                <option value="Langganan">Langganan</option>
                                <option value="Tidak membeli">Tidak membeli</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="main-lighting-source" class="form-label">Sumber penerangan utama</label>
                            <select class="form-select" id="main-lighting-source" aria-describedby="main-lighting-source">
                                <option value="">Choose...</option>
                                <option value="Listrik PLN">Listrik PLN</option>
                                <option value="Listrik non PLN">Listrik non PLN</option>
                                <option value="Bukan listrik">Bukan listrik</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="installed-power" class="form-label">Daya terpasang</label>
                            <select class="form-select" id="installed-power" aria-describedby="installed-power">
                                <option value="">Choose...</option>
                                <option value="450 watt">450 watt</option>
                                <option value="900 watt">900 watt</option>
                                <option value="1.300 watt">1.300 watt</option>
                                <option value="2.200 watt">2.200 watt</option>
                                <option value="tanpa meteran">Tana Meteran</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="cust-id-pln" class="form-label">ID Pelanggan</label>
                            <input type="number" class="form-control" id="cust-id-pln">
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
