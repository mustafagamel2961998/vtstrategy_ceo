<x-Dashboard.Layout.Layout title="الخدمات والمعلومات">
    <h3>الخدمات والمعلومات</h3>

    <div class="dash-card">
        <h5>تعديل المعلومات الرئيسية</h5>
       
        <form action="{{route('settings.update',$setting->id)}}" method="POST" class="row g-3">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <label for="companyName">اسم الشركة</label>
                <input type="text" name="company_name" class="form-control" id="companyName" value="{{old('company_name',$setting->company_name)}}">
                @error('company_name')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="companyAddress">عنوان الشركة</label>
                <input type="text" name="address" class="form-control" id="companyAddress" value="{{old('address',$setting->address)}}">
                @error('address')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="companyemail">البريد الإلكتروني</label>
                <input type="email" name="email" class="form-control" id="companyemail" value="{{old('email',$setting->email)}}">
                @error('email')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="companyphone">رقم الهاتف</label>
                <input type="text" name="phone" class="form-control" id="companyphone" value="{{old('phone',$setting->phone)}}">
                @error('phone')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-12">
                <label for="facebook">لينك فيسبوك</label>
                <input type="text" name="facebook" class="form-control" id="facebook" value="{{old('facebook',$setting->facebook)}}">
                @error('facebook')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-12">
                <label for="instagram">لينك انسجرام</label>
                <input type="text" name="instagram" class="form-control" id="instagram" value="{{old('instagram',$setting->instagram)}}">
                @error('instagram')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-12">
                <label for="snapchat">لينك سناب شات</label>
                <input type="text" name="snapchat"  class="form-control" id="snapchat" value="{{old('snapchat',$setting->snapchat)}}">
                @error('snapchat')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-12">
            <button class="btn main-btn">تحديث المعلومات</button>
            </div>
        </form>
    </div>

</x-Dashboard.Layout.Layout>