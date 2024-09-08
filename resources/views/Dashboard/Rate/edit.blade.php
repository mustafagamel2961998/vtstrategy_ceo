<x-Dashboard.Layout.Layout title="آراء العملاء">

    <div class="d-flex align-items-center justify-content-between">
        <h3>آراء العملاء</h3>
    </div>

    <div class="dash-card">
        <h5>تعديل تعلييق عميل</h5>
        <p>اسم العميل</p>
        

        <form action="{{route('rates.update',$rate->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('Dashboard.Rate._form',['btn_text'=>'تعديل','rate'=>$rate])

        </form>
    </div>

</x-Dashboard.Layout.Layout>