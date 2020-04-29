@extends('home.user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card p-5">
                <table id="example" class="display text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>کلاس </th>
                            <th>امتحان</th>
                            <th>نمره</th>
                            <th> زمان برگزاری</th>
                            <th>وضعیت</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tests as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->entity->class }}</td>
                            <td>{{ $item->lesson}}</td>
                            <td>-</td>
                            <td>{{ verta($item->start_at) }}</td>
                            <td>
                                @if (verta($item->start_at)->gte($now))
                                <span class="badge badge-pill badge-warning">برگزار نشده</span>
                                @elseif (verta($item->finish_at)->lte($now))
                                <span class="badge badge-pill badge-danger">برگزار شده</span>
                                @else
                                <a href="{{ route('tests.create','id='.$item->id) }}" class="wow pulse" data-wow-iteration="50" data-wow-duration="1.5s">
                                    <span class="badge badge-pill badge-success">
                                        <span> درحال برگزاری</span>
                                        <i class="icofont-hand-drag1 "></i>
                                    </span>
                                </a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
