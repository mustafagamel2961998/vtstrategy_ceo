<x-Dashboard.Layout.Layout title="المقالات">


    <h3>المقالات</h3>

    <div class="dash-card">
        <h5>إضافة مقال</h5>


        <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
            @include('Dashboard.Article._form',['btn_text'=>'إضافة مقال','article'=>$article,'services'=>$services])
        </form>
    </div>
</x-Dashboard.Layout.Layout>