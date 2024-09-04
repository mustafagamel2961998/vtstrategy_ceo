<x-Dashboard.Layout.Layout title="المقالات">


    <h3>المقالات</h3>

    <div class="dash-card">
    <div class="d-flex align-items-center justify-content-between mb-3">
                <h5>المقالات المضافة</h5>
                <a href="{{ route('articles.create') }}" class="btn light-btn ms-auto">إضافة مقال</a>
            </div>
        <div class="row g-4">
            <!-- articale card -->
            <div class="col-12 col-xl-4 col-md-6">
                <article class="">
                    <div class="card border-0 bg-light">
                        <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                            <div class="img-contain">
                                <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                                    src="{{asset('assets/images/article.jpg')}}" alt="Business">
                            </div>
                        </figure>
                        <div class="card-body border p-3">
                            <div class="entry-header mb-3">
                                <ul class="entry-meta list-unstyled d-flex mb-2">
                                    <li>
                                        <span>قانون تجاري</span>
                                    </li>
                                </ul>
                                <h2 class="card-title entry-title mb-0">
                                    <h2 class="h4">أهمية القانون التجاري في تنظيم الأعمال التجارية وتعزيز الثقة
                                        الاقتصادية</h2>
                                </h2>
                            </div>
                        </div>
                        <div class="card-footer border border-top-0 p-4">
                            <ul class="list-unstyled d-flex align-items-center justify-content-between m-0">
                                <li>
                                    <p class="text-decoration-none d-flex align-items-center mb-0" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            fill="currentColor" class="bi bi-calendar3" viewBox="0 0 18 18">
                                            <path
                                                d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                            <path
                                                d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        </svg>
                                        <span class="ms-2">25 أغسطس 2024</span>
                                    </p>
                                </li>
                                <li class="d-flex align-items-center">
                                    <a href="{{ route('articles.edit',1) }}" class="btn btn-sm btn-warning d-flex align-items-center me-2"><i class="fa-solid fa-pen-nib me-2"></i> تعديل</a>
                                    <a href="#" class="btn btn-sm btn-danger d-flex align-items-center"><i class="fa-solid fa-trash me-2"></i> حذف</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</x-Dashboard.Layout.Layout>