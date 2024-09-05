<x-Dashboard.Layout.Layout title="الخدمات والمعلومات">
    <h3>الخدمات والمعلومات</h3>

    <div class="dash-card">
        <h5>تعديل ارقام العداد</h5>
 
        <form action="{{route('services.update.counter.of.numbers',$counterOfNumber->id)}}" method="POST" class="row g-3">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <label for="success">استشارات ناجحة</label>
                <input type="number" name="successful_consultation_count" class="form-control" id="success" value="{{old('successful_consultation_count',$counterOfNumber->successful_consultation_count ?? 0)}}">
            </div>

            <div class="col-md-6">
                <label for="happyclient">عميل راضِ</label>
                <input type="number" name="satisfied_customer_count" class="form-control" id="happyclient"  value="{{old('satisfied_customer_count',$counterOfNumber->satisfied_customer_count ?? 0)}}">
            </div>
            <div class="col-md-6">
                <label for="sites">موقع مُنشأ</label>
                <input type="number" name="created_website_count" class="form-control" id="sites"  value="{{old('created_website_count',$counterOfNumber->created_website_count ?? 0)}}">
            </div>
            <div class="col-md-6">
                <label for="lawer">مستشار خبير</label>
                <input type="number" name="expert_advisor_count" class="form-control" id="lawer"  value="{{old('expert_advisor_count',$counterOfNumber->expert_advisor_count ?? 0)}}">
            </div>

            <div class="col-12">
                <button class="btn main-btn">حفظ البيانات</button>
            </div>
        </form>
    </div>

</x-Dashboard.Layout.Layout>