<x-Dashboard.Layout.Layout title="الأسئلة الشائعة">
    <h3>الأسئلة الشائعة</h3>
    <div class="col-12">
        <div class="dash-card">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5>الأسئلة المضافة</h5>
                <a href="{{ route('questions.create') }}" class="btn light-btn ms-auto">إضافة سؤال</a>
            </div>


            <div class="row g-3">

                @forelse ($questions as $question)
                <div class="col-12 question p-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="m-0 h5 fw-bold">
                            {{$question->question}}
                        </p>
                        <div class="d-flex align-items-center">
                            <a href="{{route('questions.edit',$question->id)}}" class="btn btn-md btn-outline-warning d-flex align-items-center me-2"><i
                                    class="fa-solid fa-pen-nib"></i></a>
                                    
                                <form action="{{route('questions.destroy',$question->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-md btn-outline-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                        </div>
                    </div>
                    <hr>
                    <p class="m-0 text-justify">
                        {{$question->answer}}</p>
                </div>

                @empty
                    <div>لا يوجد بيانات</div>
                @endforelse
             












{{--                 
                <div class="col-12 question p-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="m-0 h5 fw-bold">السؤال؟</p>
                        <div class="d-flex align-items-center">
                            <a href="#"
                                class="btn btn-md btn-outline-warning d-flex align-items-center me-2"><i
                                    class="fa-solid fa-pen-nib"></i></a>
                            <a href="#" class="btn btn-md btn-outline-danger d-flex align-items-center"><i
                                    class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                    <hr>
                    <p class="m-0">إجابة السؤال</p>
                </div>
 --}}



            </div>


        </div>
    </div>


</x-Dashboard.Layout.Layout>