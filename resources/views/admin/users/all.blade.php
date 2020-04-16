@component('admin.layouts.include.content' , ['title' => 'لیست کاربران'])

@slot('breadcrumb')
<li class="breadcrumb-item "><a href="{{ url('admin.panel') }}">پنل مدیریت</a></li>
<li class="breadcrumb-item active">لیست کاربران</li>
@endslot


<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">جدول ریسپانسیو</h3>

            <div class="card-tools d-flex">
                <form action="">
                <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="search" class="form-control float-right" placeholder="جستجو" value="{{ request('search') }}">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
                <a class="btn btn-primary btn-sm mr-3" role="button" href="{{ route('admin.users.create') }}"> ایجاد
                    کاربر جدید</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>ردیف</th>
                        <th>نام</th>
                        <th>نام خانوادگی</th>
                        <th>تکمیل پروفایل</th>
                        <th>وضعیت</th>
                        <th>حذف و ویرایش</th>
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->family }}</td>
                        @empty($user->name)
                        <td><span class="badge bg-danger">تایید نشده</span></td>
                        @else
                        <td><span class="badge badge-success">تایید شده</span></td>
                        @endempty

                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                        <td class="d-flex">
                            <form action="{{ route('admin.users.destroy',$user->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm ml-2">خروج</button>
                            </form>
                            <a name="" id="" class="btn btn-primary btn-sm"
                                href="{{ route('admin.users.edit',$user->id,'edit') }}" role="button">ویرایش</a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $users->render() }}
        </div>
    </div>
</div>



@endcomponent
