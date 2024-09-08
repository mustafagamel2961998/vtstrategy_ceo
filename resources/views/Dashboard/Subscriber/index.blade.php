<x-Dashboard.Layout.Layout title="المشتركين">
    <h3>المشتركين</h3>
    <div class="col-12">
        <div class="dash-card">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5>المشتركين المسجليين لدينا</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-head">
                        <tr class="row-table">
                            <th><i class="fa-solid fa-arrow-down-wide-short"></i></th>
                            <th>الأسم</th>
                            <th>الشعار</th>
                            <th>اسم الشركة</th>
                            <th>اسم الموقع</th>
                            <th>رقم الهاتف</th>
                            <th>البريد الإلكتروني</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($subscribers as $key=>$subscriber)
                            <tr class="row-table">
                                <td>{{$key+1}}</td>
                                <td>{{$subscriber->name}}</td>
                                <td class="table-logo"><img src="{{asset('assets/images/logos/logo4.png')}}" alt=""></td>
                                <td class="message-table">{{$subscriber->company_name_ar}}</td>
                            <td><a href="">{{$subscriber->domain}}</a></td>
                                <td>{{$subscriber->mobile}}</td>
                                <td>{{$subscriber->email}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">لا يوجد بيانات</td>
                            </tr>
                        @endforelse
                   

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-Dashboard.Layout.Layout>