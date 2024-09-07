<x-Dashboard.Layout.Layout title="إضافة مواعيد الإستشارات">


    <h3>إضافة مواعيد الإستشارات</h3>
    <div class="dash-card">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5>المواعيد المضافة</h5>
            <a href="{{ route('datetimes.create') }}" class="btn light-btn ms-auto">إضافة موعد جديد</a>
        </div>


        <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-head">
                        <tr class="row-table">
                            <th><i class="fa-solid fa-arrow-down-wide-short"></i></th>
                            <th>اليوم</th>
                            <th>الموعد</th>
                            <th>حذف</th>
                        </tr>
                    </thead>
                    <!-- الميعاد اللى يفوت المفروض يتمسح اوتوماتيك  -->
                    <tbody>
                        @forelse ($datetimes as $key=> $datetime)
                        <tr class="row-table">
                            <td>{{$key+1}}</td>
                            <td>{{$datetime->date_time->format('l')}}</td>
                            <td class="message-table">
                                <p>{{$datetime->date_time->format('Y-m-d')}}</p>
                                <p>{{$datetime->date_time->format('h:i a')}}</p>
                            </td>
                            <td>
                                <form action="{{route('datetimes.destroy',$datetime->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger d-flex align-items-center m-auto"><i
                                        class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">لا يوجد بيانات</td>
                        </tr>
                            
                        @endforelse
                        
                    </tbody>
                </table>
            </div>
    </div>

</x-Dashboard.Layout.Layout>