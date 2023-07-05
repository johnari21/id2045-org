@extends('layouts.admin')

@section('content')
    <section class="section-padding">
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <a class="btn btn-primary btn-sm btn-block" href="/beneficiary/detail">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>
                            <a class="btn btn-primary btn-sm btn-block" href="/beneficiary/detail">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>
                            <a class="btn btn-primary btn-sm btn-block" href="/beneficiary/detail">Detail</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
