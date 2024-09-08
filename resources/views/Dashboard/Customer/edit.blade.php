<x-Dashboard.Layout.Layout title="كبار العملاء">
    <h3>كبار العملاء</h3>
    <div class="dash-card">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5>تعديل بيانات عميل</h5>
        </div>

        <form action="{{route('customers.update',$customer->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('Dashboard.Customer._form',['btn_text'=>'تعديل','customer'=>$customer])
        </form>
        
    </div>

</x-Dashboard.Layout.Layout>