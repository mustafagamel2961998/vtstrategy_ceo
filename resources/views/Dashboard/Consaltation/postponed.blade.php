<x-Dashboard.Layout.Layout title="استشارات محجوزة">
    <h3>استشارات محجوزة</h3>
    <div class="col-12">
        <div class="dash-card">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5>استشارات مؤجلة</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-head">
                        <tr class="row-table">
                            <th><i class="fa-solid fa-arrow-down-wide-short"></i></th>
                            <th>الأسم</th>
                            <th>البريد الإلكتروني</th>
                            <th>رقم الهاتف</th>
                            <th>القسم الخاص</th>
                            <th>تمت بنجاح</th>
                            <th>حذف</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="row-table">
                            <td>1</td>
                            <td>مصطفى</td>
                            <td>mostafa@yahoo.com</td>
                            <td>01064792335</td>
                            <td>القانون الإداري</td>
                            <td><button class="btn btn-sm btn-outline-success d-flex align-items-center m-auto"><i
                                        class="fa-solid fa-check-double"></i></button></td>
                            <td><button class="btn btn-sm btn-outline-danger d-flex align-items-center m-auto"><i
                                        class="fa-solid fa-trash"></i></button></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-Dashboard.Layout.Layout>