@component('admin.layouts.include.content' , ['title' => 'لیست سوالات'])

@slot('breadcrumb')
<li class="breadcrumb-item "><a href="{{ url('admin.panel') }}">پنل مدیریت</a></li>
<li class="breadcrumb-item active"><a href="{{ route('admin.question.index') }}">لیست سوالات جدید</a></li>
<li class="breadcrumb-item active">سوال جدید</li>
@endslot


<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">جدول سوالات</h3>

            <div class="card-tools d-flex">
                <form action="">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="search" class="form-control float-right" placeholder="جستجو"
                            value="{{ request('search') }}">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
                <a class="btn btn-primary btn-sm mr-3" role="button" href="{{ route('admin.question.create') }}"> ایجاد
                    سوال جدید</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>ردیف</th>
                        <th>نویسنده</th>
                        <th>آزمون</th>
                        <th>سوال</th>
                        <th>نمره</th>
                        <th>نمایش پاسخ</th>
                        <th> حذف و ویرایش سوال</th>
                        <th> ایجاد و ویرایش پاسخ</th>
                    </tr>
                    @foreach ($Questions as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>نویسنده</td>
                        <td>{{ $item->tests->lesson }}</td>
                        <td>{{ $item->question }}</td>
                        <td>{{ $item->mark }}</td>
                        <td>
                            <a name="" id="" class="btn btn-primary btn-sm disabled"
                                href="{{ route('admin.tests.edit',$item->id,'edit') }}" role="button">نمایش پاسخ ها</a>
                        </td>
                        <td class="d-flex">
                            <form action="{{ route('admin.question.destroy',$item->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm ml-2">حذف</button>
                            </form>
                            <a name="" id="" class="btn btn-primary btn-sm disabled"
                                href="{{ route('admin.tests.edit',$item->id,'edit') }}" role="button">ویرایش</a>
                        </td>
                        <td>
                            <a name="" id="" class="btn btn-primary btn-sm disabled"
                                href="{{ route('admin.reply.edit',$item->id,'edit') }}" role="button" >ویرایش</a>
                            <a name="" id="" class="btn btn-primary btn-sm"
                                href="{{ route('admin.reply.create','id='.$item->id) }}" role="button">درج پاسخ</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{-- {{ $tests->render() }} --}}
        </div>
    </div>
</div>



@endcomponent
