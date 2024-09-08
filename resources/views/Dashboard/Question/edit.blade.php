<x-Dashboard.Layout.Layout title="الأسئلة الشائعة">
    <h3>الأسئلة الشائعة</h3>
    <div class="col-12">
        <div class="dash-card">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5>تعديل سؤال</h5>
            </div>
            <form action="{{route('questions.update',$question->id)}}" method="POST">
                @csrf
                @method('PUT')
                @include('Dashboard.Question._form',['btn_text'=>'تعديل','question'=>$question])

        </form>
           
        </div>
    </div>


</x-Dashboard.Layout.Layout>