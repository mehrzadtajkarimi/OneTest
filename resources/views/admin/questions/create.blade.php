@component('admin.layouts.include.content' , ['title' => 'آزمون جدید'])

@slot('breadcrumb')
<li class="breadcrumb-item "><a href="{{ url('admin.panel') }}">پنل مدیریت</a></li>
<li class="breadcrumb-item "><a href="{{ route('admin.question.index') }}">لیست آزمونها</a></li>
<li class="breadcrumb-item active">سوال جدید</li>
@endslot

<div class="col-12">
    <div class="card shadow">
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ route('admin.question.store') }}" method="POST">
            @csrf
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6 col-lg-3 ">
                        <div class="form-group">
                            <label for="Select4">منطقه</label>
                            <select class="form-control" id="Select4" name="region" >
                                <option value="{{ $entities->region??'' }}">{{ $entities->region??'' }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="Select3">مدرسه</label>
                            <select class="form-control" id="Select3" name="school" >
                                <option value="{{ $entities->school??'' }}">{{ $entities->school??'' }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="Select2">مقطع</label>
                            <select class="form-control" id="Select2" name="grade" >
                                <option value="{{ $entities->grade??'' }}">{{ $entities->grade??'' }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="Select1">کلاس</label>
                            <select class="form-control" id="Select1" name="class" >
                                <option value="{{ $entities->class??'' }}">{{ $entities->class??'' }}</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="Input3">سوال</label>
                            <input type="text" class="form-control" id="Input3" name="question" placeholder="">
                        </div>
                    </div>
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
