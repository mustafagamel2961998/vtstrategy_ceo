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
                        <tr class="row-table">
                            <td>1</td>
                            <td>هاني كمال</td>
                            <td class="table-logo"><img src="{{asset('assets/images/logos/logo4.png')}}" alt=""></td>
                            <td class="message-table">الغزالى</td>
                           <td><a href="">elgazaly</a></td>
                            <td>01064792335</td>
                            <td>hany@yahoo.com</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-Dashboard.Layout.Layout>