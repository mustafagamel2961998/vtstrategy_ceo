<x-Dashboard.Layout.Layout title="آراء العملاء">

    <div class="d-flex align-items-center justify-content-between">
        <h3>آراء العملاء</h3>

        <a href="{{ route('rates.create') }}" class="btn light-btn">إضافة تقييم</a>
    </div>

    <div class="dash-card">
        <div class="row py-3 g-3 gy-5">
            <h5>التقييمات المضافة</h5>
            <div class="col-md-6 col-xl-4">
                
                @forelse ($rates as $rate)
                <div class="test-card h-100">
                    <div class="card-body h-100">
                        <div class="icon">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>
                        <p class="card-text">
                            {{$rate->comment}}
                        </p>
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="{{ route('rates.edit',$rate->id) }}" class="btn btn-md btn-outline-warning d-flex align-items-center me-2">
                                <i  class="fa-solid fa-pen-nib"></i>
                             </a>
                           
                            <form action="{{route('rates.destroy',$rate->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-md btn-outline-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="image">
                                    <img src="{{$rate->getFirstMediaUrl('rate')}}" class="img-prev" alt="">
                            </div>
                            <div>
                                <h2 class="card-title"> 
                                    {{$rate->name}}
                                </h2>
                                <p class="mb-0"> 
                                    {{$rate->job_title}}
                                </p>
                            </div>
                        </div>

                    </div>
                    
                </div>
                    @empty
                    <div>
                        لا يوجد بيانات
                    </div>
                    @endforelse
                 

            </div>


        </div>
    </div>

</x-Dashboard.Layout.Layout>