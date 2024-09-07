<x-Dashboard.Layout.Layout title="الرسائل">
    <h3>الرسائل</h3>
    <div class="col-12">
        <div class="dash-card">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5>الرسائل الجديدة</h5>
                <a href="{{ route('contacts.readed') }}" class="btn light-btn ms-auto">الرسائل المقروءة</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-head">
                        <tr class="row-table">
                            <th><i class="fa-solid fa-arrow-down-wide-short"></i></th>
                            <th>الأسم</th>
                            <th>البريد الإلكتروني</th>
                            <th>رقم الهاتف</th>
                            <th>رقم الواتساب</th>
                            <th>الرسالة</th>
                            <th>مقروءة</th>
                            <th>حذف</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($contacts as $key=>$contact)
                        <tr class="row-table">
                            <td>{{$key+1}}</td>
                            <td>
                                {{$contact->name}}
                            </td>
                            <td>
                                {{$contact->email}}
                            </td>
                            <td>
                                {{$contact->phone}}
                            </td>
                            <td>
                                {{$contact->whatsapp}}
                            </td>
                            <td class="message-table">
                                {{$contact->content}}                                
                            </td>
                            <td>
                                <form action="{{route('contacts.update',$contact->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-sm btn-outline-success d-flex align-items-center m-auto">
                                        <i class="fa-solid fa-check-double"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('contacts.destroy',$contact->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger d-flex align-items-center m-auto">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                             </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="8">
                                    لا يوجد رسائل تواصل
                                </td>
                            </tr>
                        @endforelse
                       

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-Dashboard.Layout.Layout>