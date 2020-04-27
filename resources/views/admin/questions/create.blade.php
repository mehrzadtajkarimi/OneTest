@component('admin.layouts.include.content' , ['title' => 'سوال جدید'])

@slot('breadcrumb')
<li class="breadcrumb-item "><a href="{{ url('admin.panel') }}">پنل مدیریت</a></li>
<li class="breadcrumb-item "><a href="{{ route('admin.question.index') }}">لیست آزمونها</a></li>
<li class="breadcrumb-item active">سوال جدید</li>
@endslot

<div class="col-6 m-auto">
    <div class="card shadow">
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ route('admin.question.store') }}" method="POST">
            @csrf
            <div class="card-body p-4">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group text-center">
                            <label for="Select4">انتخاب آزمون</label>
                            <select class="form-control" id="Select4" name="test_id">
                                @foreach ($tests as $item)
                                <option value="{{ $item->id??'' }}">{{ $item->lesson??'' }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group text-center">
                            <label for="Input4">نمره</label>
                            <select class="form-control " name="mark" id="Input4">
                                <option value="0.5">0.5</option>
                                <option value="1">1</option>
                                <option value="1.5">1.5</option>
                                <option value="2">2</option>
                                <option value="2.5">2.5</option>
                                <option value="3">3</option>
                                <option value="3.5">3.5</option>
                                <option value="4">4</option>
                                <option value="4.5">4.5</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="Input3">سوال</label>
                            <textarea class="form-control" name="question" id="Input3" rows="3"
                                placeholder="وارد کردن اطلاعات ..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="row ">

                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">ورود</button>
                <a href="{{ route('admin.question.index') }}" class="btn btn-default float-left">لغو</a>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
</div>



@endcomponent
