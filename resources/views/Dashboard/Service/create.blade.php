<x-Dashboard.Layout.Layout title="الخدمات والمعلومات">
    <h3>الخدمات والمعلومات</h3>

    <div class="dash-card">
        <h5>إضافة خدمة</h5>
        <form action="{{route('services.store')}}" method="POST" class="row g-3">
            @csrf
            @include('Dashboard.Service._form',['service'=>$service,'btn_text'=>'إضافة الخدمة'])
        </form>
    </div>

</x-Dashboard.Layout.Layout>