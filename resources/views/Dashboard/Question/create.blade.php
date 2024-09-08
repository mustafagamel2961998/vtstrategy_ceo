<x-Dashboard.Layout.Layout title="الأسئلة الشائعة">
    <h3>الأسئلة الشائعة</h3>
    <div class="col-12">
        <div class="dash-card">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5>إضافة سؤال جديد</h5>
            </div>

            <form action="{{route('questions.store')}}" method="POST">
                @csrf
                @include('Dashboard.Question._form',['btn_text'=>'إضافة','question'=>$question])
            </form>

        </div>
    </div>


</x-Dashboard.Layout.Layout>