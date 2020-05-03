@component('admin.layouts.include.content' , ['title' => 'سوال جدید'])

@slot('breadcrumb')
<li class="breadcrumb-item "><a href="{{ url('admin.panel') }}">پنل مدیریت</a></li>
<li class="breadcrumb-item "><a href="{{ route('admin.question.index') }}">لیست آزمونها</a></li>
<li class="breadcrumb-item active">سوال جدید</li>
@endslot

<div class="row">
    <div class="col-md-6">
        <div class="card shadow  h-100">
            <div class="card-body ">
                <form class="form-horizontal" action="{{ route('admin.option.store') }}" method="POST">
                    @csrf
                    <div class="card ">
                        <div class="card-header">
                            <span>سوال :</span>
                            {{ $questions->question }}
                            <input type="hidden" name="question_id" value="{{ $questions->id }}">
                        </div>
                        <div class="card-body p-4 h-100">
                            <span class="badge badge-success m-3">{{ $questions->mark }}نمره ای</span>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Input3">
                                            سوال
                                        </label>
                                        <input type="text" class="form-control" name="answer" id="Input3" autofocus >
                                        {{-- <textarea class="form-control" name="answer" id="Input3" rows="3"
                                            placeholder="وارد کردن اطلاعات ..."></textarea> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">ورود</button>
                            <a href="{{ route('admin.question.index') }}" class="btn btn-default float-left">لغو</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow h-100">
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('admin.option.update',$questions->id ) }}" method="POST">
                    @csrf
                    @method('PUT')
                    {{-- {{ dd($questions->id) }} --}}
                    <div class="card ">
                        <div class="card-header">
                            <h5>پاسخ ها</h5>
                        </div>
                        <div class="card-body p-4 h-100">
                            @foreach ($options as $item)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radios"
                                    id="radios{{$loop->iteration}}" value="{{ $item->id }}" {{ $item->status == 1 ? 'checked' :''}}>
                                <label class="form-check-label" for="radios{{$loop->iteration}}" >
                                    <ul>
                                        <li>{{ $item->answer }}</li>
                                    </ul>
                                </label>
                            </div>
                            @endforeach
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">ورود</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




@endcomponent
