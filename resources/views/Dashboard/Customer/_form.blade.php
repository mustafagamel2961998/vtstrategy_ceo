<div class="row g-3">
    <div class="col-md-6">
        <label for="logo">صورة الشعار</label>
        <input type="file" name="customer" id="logo" accept="image/*" class="form-control">
        @error('customer')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="company_name">اسم الشركة</label>
        <input type="text" name="company_name"  id="company_name" class="form-control" value="{{$customer->company_name}}">
        @error('company_name')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="col-12">
        <label for="link">لينك الموقع</label>
        <input type="text" name="website" id="link" class="form-control" value="{{$customer->website}}">
        @error('website')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="col-12">
        <label for="status">
            <input type="checkbox" name="status" id="status" @if(old('status',$customer->status) =='active') checked @endif>
             الحالة 
        </label>
        
        @error('status')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="col-12">
        <button type="submit" class="btn main-btn">
            {{$btn_text}}
        </button>
    </div>


</div>