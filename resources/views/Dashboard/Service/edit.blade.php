<x-Dashboard.Layout.Layout title="{{$service->title}}">
    <h3>الخدمات والمعلومات</h3>

    <div class="dash-card">
        <h5>تعديل خدمة</h5>
        <p>اسم الخدمة</p>
        <form action="{{route('services.update',$service->id)}}" method="POST" class="row g-3">
            @csrf
            @method('PUT')
            @include('Dashboard.Service._form',['service'=>$service,'btn_text'=>'حفظ الخدمة'])
        </form>
    </div>

</x-Dashboard.Layout.Layout>