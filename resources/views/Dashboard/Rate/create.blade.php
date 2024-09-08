<x-Dashboard.Layout.Layout title="آراء العملاء">

    <div class="d-flex align-items-center justify-content-between">
        <h3>آراء العملاء</h3>
    </div>

    <div class="dash-card">
        <h5>إضافة تعلييق عميل جديد</h5>


        <form action="{{route('rates.store')}}" method="POST" enctype="multipart/form-data">
           @csrf
           @include('Dashboard.Rate._form',['btn_text'=>'إضافة','rate'=>$rate])
        </form>
    </div>

</x-Dashboard.Layout.Layout>