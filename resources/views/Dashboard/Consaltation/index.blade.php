<x-Dashboard.Layout.Layout title="استشارات محجوزة">
    <h3>استشارات محجوزة</h3>
    <div class="col-12">
        <div class="dash-card">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5>استشارات جديدة</h5>
                <a href="{{ route('consaltaions.postponed.view') }}" class="btn light-btn ms-auto">استشارات مؤجلة ({{$PostponedConsaltationsCount}})</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-head">
                        <tr class="row-table">
                            <th>
                                <i class="fa-solid fa-arrow-down-wide-short"></i>
                            </th>
                            <th>الأسم</th>
                            <th>البريد الإلكتروني</th>
                            <th>رقم الهاتف</th>
                            <th>رقم الواتساب</th>
                            <th>القسم الخاص</th>
                            <th>الموعد</th>
                            <th>ملاحظات</th>
                            <th>تمت بنجاح</th>
                            <th>تاجيل الموعد 2 يوم</th>
                            <th>حذف</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($consaltations as $key=> $consaltation)
                        <tr class="row-table">
                            <td>{{$key+1}}</td>
                            <td>{{$consaltation->name}}</td>
                            <td>{{$consaltation->email}}</td>
                            <td>{{$consaltation->phone}}</td>
                            <td>{{$consaltation->whatsapp}}</td>
                            <td>{{$consaltation->service->title ?? 'غير محدد'}}</td>
                            <td>
                                {{$consaltation->date_time->format('Y-m-d H:i a')}}
                            </td>
                            <td class="message-table">
                                {{$consaltation->note}}
                            </td>
                            <td>
                                @if($consaltation->status =='success')
                                  ناجحه
                                @else
                                    <form action="{{route('consaltaions.update',$consaltation->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-sm btn-outline-success d-flex align-items-center m-auto"><i
                                            class="fa-solid fa-check-double"></i>
                                        </button>
                                    </form>
                                 @endif
                             </td>
                            <td>
                                @if($consaltation->status =='success')
                                ناجحه   
                                @elseif($consaltation->status=='postponed')
                                تم التأجيل
                                @else
                                    <form action="{{route('consaltaions.postponed',$consaltation->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-sm btn-outline-warning d-flex align-items-center m-auto">
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                        </button>
                                    </form>
                                @endif
                            </td>
                            <td>
                                <form action="{{route('consaltaions.destroy',$consaltation->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button  type="submit" class="btn btn-sm btn-outline-danger d-flex align-items-center m-auto">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <tr>
                               <td colspan="11">لا يوجد بيانات</td> 
                            </tr>
                        @endforelse
                   

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-Dashboard.Layout.Layout>