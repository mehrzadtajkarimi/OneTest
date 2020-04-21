@component('admin.layouts.include.content' , ['title' => 'آزمون جدید'])

@slot('breadcrumb')
<li class="breadcrumb-item "><a href="{{ url('admin.panel') }}">پنل مدیریت</a></li>
<li class="breadcrumb-item "><a href="{{ route('admin.users.index') }}">لیست آزمونها</a></li>
<li class="breadcrumb-item active">آزمون جدید</li>
@endslot


<div class="col-12">
    <div class="card shadow">
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ route('admin.tests.store') }}" method="POST">
            @csrf
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6 col-lg-3 ">
                        <div class="form-group">
                            <label for="Select4">منطقه</label>
                            <select class="form-control" id="Select4" name="region" disabled>
                                <option value="9">منطقه 9</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="Select3">مدرسه</label>
                            <select class="form-control" id="Select3" name="school" disabled>
                                <option value="0">علی شریعتی</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="Select2">مقطع</label>
                            <select class="form-control" id="Select2" name="grade" disabled>
                                <option value="6">ششم</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="Select1">کلاس</label>
                            <select class="form-control" id="Select1" name="class" disabled>
                                <option value="0">ششم همکاری</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Input1"> شروع</label>
                            <input type="text" class="form-control start_at  @error('start_at') is-invalid @enderror"
                                placeholder="{{ $verta }}" id="Input1">
                            <input type="hidden" id="start_at" name="start_at">
                            @error('start_at')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Input2"> پایان</label>
                            <input type="text" class="form-control finish_at @error('finish_at') is-invalid @enderror"
                                placeholder="{{ $verta }}" id="Input2">
                            <input type="hidden" id="finish_at" name="finish_at">
                            @error('finish_at')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="Input3">نام امتحان</label>
                            <input type="text" class="form-control" id="Input3" name="lesson" placeholder="">
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">ورود</button>
                <a href="{{ route('admin.tests.index') }}" class="btn btn-default float-left">لغو</a>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>






</div>




@endcomponent
