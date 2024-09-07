<x-Dashboard.Layout.Layout title="المقالات">


    <h3>المقالات</h3>

    <div class="dash-card">
        <h5>تعديل مقال</h5>
        <h2 class="h4">عنوان المقال بالكامل</h2>
        <form action="{{route('articals.update',$article->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('Dashboard.Article._form',['btn_text'=>'تعديل المقال','article'=>$article,'services'=>$services])
        </form>
    </div>
</x-Dashboard.Layout.Layout>