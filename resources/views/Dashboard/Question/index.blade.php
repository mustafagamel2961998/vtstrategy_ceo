<x-Dashboard.Layout.Layout title="الأسئلة الشائعة">
    <h3>الأسئلة الشائعة</h3>
    <div class="col-12">
        <div class="dash-card">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5>الأسئلة المضافة</h5>
                <a href="{{ route('question.create') }}" class="btn light-btn ms-auto">إضافة سؤال</a>
            </div>


            <div class="row g-3">


                <div class="col-12 question p-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="m-0 h5 fw-bold">ما هي خدمات شركة رؤية للاستشارات والحوكمة؟</p>
                        <div class="d-flex align-items-center">
                            <a href="#"
                                class="btn btn-md btn-outline-warning d-flex align-items-center me-2"><i
                                    class="fa-solid fa-pen-nib"></i></a>
                            <a href="#" class="btn btn-md btn-outline-danger d-flex align-items-center"><i
                                    class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                    <hr>
                    <p class="m-0 text-justify">
                            شركة رؤية للاستشارات والحوكمة تقدم مجموعة متنوعة من الخدمات القانونية والحكومية، بما في ذلك
                            الاستشارات القانونية للشركات والأفراد، وتطوير استراتيجيات الحوكمة الفعالة. نحن نساعد عملائنا
                            في فهم متطلبات الامتثال القانوني وتحسين العمليات الداخلية لضمان الالتزام بالقوانين واللوائح.
                            بالإضافة إلى ذلك، نقدم حلولاً تقنية تشمل تطوير مواقع إلكترونية للمكاتب القانونية
                            والمستشارين، مما يتيح لهم إدارة أعمالهم بفعالية عبر الإنترنت. كما نقدم خدمة الحجز الإلكتروني
                            للمواعيد، مما يسهل على العملاء تحديد المواعيد وإدارتها بكفاءة.</p>
                </div>


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


            </div>


        </div>
    </div>


</x-Dashboard.Layout.Layout>