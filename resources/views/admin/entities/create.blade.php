@component('admin.layouts.include.content' , ['title' => 'معرفی کلاس'])

@slot('breadcrumb')
<li class="breadcrumb-item "><a href="{{ url('admin.panel') }}">پنل مدیریت</a></li>
<li class="breadcrumb-item "><a href="{{ route('admin.entities.index') }}">معرفی کلاس</a></li>
<li class="breadcrumb-item active">کلاس جدید</li>
@endslot

<div class="col-12">
    <div class="card shadow">
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ route('admin.entities.store') }}" method="POST">
            @csrf
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6 col-lg-3 ">
                        <div class="form-group">
                            <label for="Select4">منطقه</label>
                            <input class="form-control" id="Select4" name="region"  value="{{ old('region') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="Select3">مدرسه</label>
                            <input class="form-control" id="Select3" name="school"  value="{{ old('school') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="Select2">مقطع</label>
                            <input class="form-control" id="Select2" name="grade"  value="{{ old('grade') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="Select1">کلاس</label>
                            <input class="form-control" id="Select1" name="class"  value="{{ old('class') }}" required>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">ورود</button>
                <a href="{{ route('admin.entities.index') }}" class="btn btn-default float-left">لغو</a>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
</div>

@endcomponent
