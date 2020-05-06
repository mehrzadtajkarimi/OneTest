@extends('home.user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{ route('tests.store') }}" id="formToStore" method="POST">
                @csrf
                @foreach ($questions as $item)
                <div class="row">
                    <div id="TimeCircles" class="w-50 m-auto fixed mt-0"
                        data-timer="{{ verta($item->tests->finish_at)->diffSeconds()*-1}}"></div>
                    {{-- <div id="TimeCircles" class="w-50 m-auto" data-timer="3"></div> --}}
                </div>
                <div class="card  mt-3 shadow-sm">
                    <div class="card-header ">
                        <p class=" d-inline">سوال شماره :{{ $loop->iteration }}</p>
                        <span class="badge  badge-success float-left shadow">{{ $item->mark }}: نمره </span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-text">{{ $item->question }}؟</p>
                            </div>
                            <div class="col-md-6">
                                @foreach ($item->options as $option)
                                <div class="form-check p-1">
                                    <input class="form-check-input" type="radio" name="{{ $item->id  }}"
                                        id="radios{{$option->id}}"
                                        value="{{ $option->id .'-'. $option->status.'-'. $item->mark .'-'. $test_id  }}">
                                    <label class="form-check-label pr-4" for="radios{{$option->id}}">
                                        {{ $option->answer }}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <button type="submit" class="btn btn-info mt-3 btn-block">دکمه ارسال</button>
            </form>
        </div>
    </div>
</div>

@endsection




{{-- /*


$options = $item->options();

@foreach ($options as $option)

$option->answer;

*/ --}}
