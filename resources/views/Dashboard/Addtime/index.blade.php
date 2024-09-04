<x-Dashboard.Layout.Layout title="إضافة مواعيد الإستشارات">


    <h3>إضافة مواعيد الإستشارات</h3>
    <div class="dash-card">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5>المواعيد المضافة</h5>
            <a href="{{ route('addtime.create') }}" class="btn light-btn ms-auto">إضافة موعد جديد</a>
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
                        <tr class="row-table">
                            <td>1</td>
                            <td>الخميس</td>
                            <td class="message-table">9/4/2024 03:00pm</td>
                            <td><button class="btn btn-sm btn-outline-danger d-flex align-items-center m-auto"><i
                                        class="fa-solid fa-trash"></i></button></td>
                        </tr>
                        <tr class="row-table">
                            <td>2</td>
                            <td>الخميس</td>
                            <td class="message-table">9/4/2024 05:00pm</td>
                            <td><button class="btn btn-sm btn-outline-danger d-flex align-items-center m-auto"><i
                                        class="fa-solid fa-trash"></i></button></td>
                        </tr>

                    </tbody>
                </table>
            </div>
    </div>

</x-Dashboard.Layout.Layout>