<x-Dashboard.Layout.Layout title="كبار العملاء">
    <h3>كبار العملاء</h3>
    <div class="dash-card">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5>العملاء المضافة</h5>
            <a href="{{ route('topclient.create') }}" class="btn light-btn ms-auto">إضافة عميل</a>
        </div>

        <div class="row g-3 align-items-center">
            <div class="col-6 col-md-4 col-lg-3 col-xl-2  align-items-center">
                <div class="logo p-4 h-100 d-flex flex-column align-items-center">
                    <a href="" class="mb-2"><img src="{{asset('assets/images/logos/logo1.png')}}" class="w-100" alt="">
                    </a>
                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-md btn-outline-warning d-flex align-items-center me-2"><i
                                class="fa-solid fa-pen-nib"></i></a>
                        <a href="#" class="btn btn-md btn-outline-danger d-flex align-items-center"><i
                                class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xl-2  align-items-center">
                <div class="logo p-4 h-100 d-flex flex-column align-items-center">

                    <a href="" class="mb-2">
                        <img src="{{asset('assets/images/logos/logo2.png')}}" class="w-100" alt="">

                    </a>

                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-md btn-outline-warning d-flex align-items-center me-2"><i
                                class="fa-solid fa-pen-nib"></i></a>
                        <a href="#" class="btn btn-md btn-outline-danger d-flex align-items-center"><i
                                class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-Dashboard.Layout.Layout>