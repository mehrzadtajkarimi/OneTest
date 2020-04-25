@component('admin.layouts.include.content' , ['title' => 'آزمون جدید'])

@slot('breadcrumb')
<li class="breadcrumb-item "><a href="{{ url('admin.panel') }}">پنل مدیریت</a></li>
<li class="breadcrumb-item "><a href="{{ route('admin.tests.index') }}">لیست آزمونها</a></li>
<li class="breadcrumb-item active">آزمون جدید</li>
@endslot


<div class="col-12">
    <div class="card shadow">
        <!-- /.card-header -->
        <div class="card-header">
            <h5>طراح آزمون : {{ auth()->user()->user_name }}</h5>
        </div>



        <!-- form start -->
        <form class="form-horizontal" action="{{ route('admin.tests.store') }}" method="POST">
            @csrf
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="Select1">کلاس</label>
                            <select class="form-control" id="Select1" name="entity_id">
                                @foreach ($entity as $item)
                                <option value="{{ $item->id  }}">{{ $item->class }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="Input1"> شروع</label>
                            <input type="text" class="form-control start_at" id="Input1" required>
                            <input type="hidden" id="start_at" name="start_at">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="Input2"> پایان</label>
                            <input type="text" class="form-control finish_at" id="Input2" required>
                            <input type="hidden" id="finish_at" name="finish_at">
                        </div>
                    </div>
                </div>

                <div class="row">
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
