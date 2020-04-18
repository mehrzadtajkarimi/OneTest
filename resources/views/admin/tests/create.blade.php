@component('admin.layouts.include.content' , ['title' => 'آزمون جدید'])

@slot('breadcrumb')
<li class="breadcrumb-item "><a href="{{ url('admin.panel') }}">پنل مدیریت</a></li>
<li class="breadcrumb-item "><a href="{{ route('admin.users.index') }}">لیست آزمونها</a></li>
<li class="breadcrumb-item active">آزمون جدید</li>
@endslot

<div class="col-12">
    <div class="card">

        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ route('admin.tests.store') }}" method="POST">
            @csrf
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6 col-lg-3 ">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">منطقه</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="region" disabled>
                                <option value="9">منطقه 9</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">مدرسه</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="school" disabled>
                                <option value="0">علی شریعتی</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">مقطع</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="grade" disabled>
                                <option value="6">ششم</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">کلاس</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="class" disabled>
                                <option value="0">ششم همکاری</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">نام امتحان</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="lesson" placeholder="">
                          </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">زمان شروع (PM 12:00)</label>
                            <input type="time" class="form-control" id="exampleFormControlInput1" name="lesson" placeholder="">
                          </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">  زمان امتحان به دقیقه</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" name="lesson" placeholder="30">
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
