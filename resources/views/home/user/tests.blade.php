@extends('home.user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card p-5">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>کلاس </th>
                            <th>امتحان</th>
                            <th>نمره</th>
                            <th>وضعیت</th>
                            <th> زمان برگزاری</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

