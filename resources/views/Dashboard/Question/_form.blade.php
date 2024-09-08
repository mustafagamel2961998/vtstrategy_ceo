<div class="row g-3">

    <div class="col-12">
        <label for="question">السؤال</label>
        <input type="text" name="question" id="question" placeholder="......؟"  value="{{old('question',$question->question)}}" class="form-control">
        @error('question')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="col-12">

        <label for="answer">إجابة السؤال</label>

        <textarea id="answer" name="answer" class="form-control" placeholder="إجابة السؤال">{{old('answer',$question->answer)}}</textarea>
        @error('answer')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="col-12">
        <label for="status">
            <input type="checkbox" name="status" id="status" @if(old('status',$question->status) =='active') checked @endif>
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