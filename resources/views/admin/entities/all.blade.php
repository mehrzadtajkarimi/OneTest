@component('admin.layouts.include.content' , ['title' => 'لیست کلاسها'])

@slot('breadcrumb')
<li class="breadcrumb-item "><a href="{{ url('admin.panel') }}">پنل مدیریت</a></li>
<li class="breadcrumb-item active">لیست کلاسها</li>
@endslot


<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">لیست کلاسها</h3>

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
                <a class="btn btn-primary btn-sm mr-3" role="button" href="{{ route('admin.entities.create') }}"> ایجاد
                    کلاس جدید</a>
                <a class="btn btn-primary btn-sm mr-3" role="button" href="{{ route('admin.entities.create') }}"> ایجاد
                    مدرسه جدید</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>ردیف</th>
                        <th>منطقه</th>
                        <th>مدرسه</th>
                        <th>مقطع</th>
                        <th>کلاس</th>
                        <th>حذف و ویرایش</th>
                    </tr>
                    @foreach ($entities as $entity)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $entity->region }}</td>
                        <td>{{ $entity->school }}</td>
                        <td>{{ $entity->grade }}</td>
                        <td>{{ $entity->class }}</td>
                        <td class="d-flex">
                            <form action="{{ route('admin.entities.destroy',$entity->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm ml-2">خروج</button>
                            </form>
                            <a name="" id="" class="btn btn-primary btn-sm"
                                href="{{ route('admin.entities.edit',$entity->id,'edit') }}" role="button">ویرایش</a>
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
