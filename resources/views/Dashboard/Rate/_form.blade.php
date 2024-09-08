<div class="row g-3">
                <div class="col-12">
                    <!-- هتضيفله الصورة دي لو ما اختارش صورة تانية للعميل -->
                  
                    <label for="mainImg" class="text-center d-block  cursor-pointer mt-1">
                        @if($rate->hasMedia('rate'))
                        <img src="{{$rate->getFirstMediaUrl('rate')}}" class="img-prev" alt="">
                        @else
                            <img src="{{asset('assets/images/noPerson.png')}}" class="img-prev" alt="">
                        @endif
                        تغيير صورة العميل
                    </label>
                    <input type="file" id="mainImg" name="rate" accept="image/*" class="form-control" hidden>
                    @error('rate')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="name">اسم العميل</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{old('name',$rate->name)}}">
                    @error('name')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="job">المسمي الوظيفي</label>
                    <input type="text" name="job_title" id="job" class="form-control" value="{{old('job_title',$rate->job_title)}}">
                    @error('job_title')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="comment">التعليق</label>
                    <textarea name="comment" class="form-control" id="comment">{{old('comment',$rate->comment)}}</textarea>
                    @error('comment')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                
                <div class="col-12">
                    <label for="status">
                        <input type="checkbox" name="status" id="status" @if(old('status',$rate->status) =='active') checked @endif>
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