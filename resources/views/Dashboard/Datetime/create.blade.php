<x-Dashboard.Layout.Layout title="إضافة مواعيد الإستشارات">


    <h3>إضافة مواعيد الإستشارات</h3>
    <div class="dash-card">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5>إضافة موعد جديد</h5>
        </div>


        <form action="{{route('datetimes.store')}}" method="POST">
            @csrf
            <!-- ما ينفعش يختار تاريخ سابق -->
            <div class="row g-3 align-items-end">
                <div class="col-md-9">
                    <label for="time">الموعد</label>
                    <input type="datetime-local" name="date_time" class="form-control" id="time">
                    @error('date_time')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn main-btn">حفظ الموعد</button>
                </div>
            </div>
        </form>


        <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dateTimeInput = document.getElementById('time');
            var now = new Date();
            var year = now.getFullYear();
            var month = String(now.getMonth() + 1).padStart(2, '0');
            var day = String(now.getDate()).padStart(2, '0');
            var hours = String(now.getHours()).padStart(2, '0');
            var minutes = String(now.getMinutes()).padStart(2, '0');

            var minDateTime = `${year}-${month}-${day}T${hours}:${minutes}`;

            dateTimeInput.min = minDateTime;
        });
        </script>
    </div>

</x-Dashboard.Layout.Layout>