@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif

@section('js')
<script src="https://cdn.ckeditor.com/4.4.3/full/ckeditor.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
  });
</script>
@endsection

<div class="row">
    <div class="col col-md-6">
        <div class="white-box">
            <div class="form-group">
                <label for="lang">lang *</label>
                <div class="input-group" required>
                    <select name="lang" class="form-control" >
                        @if(isset($array_lang))
                            @foreach($array_lang as $lang)
                                <option value="{{ $lang }}" @if(isset($banner->lang))@if($banner->lang==$lang)selected @endif @endif>{{ $lang }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="input-group">
                    @if ($errors->has('lang'))
                        <span class="help-block">
                    <strong>{{ $errors->first('lang') }}</strong>
                </span>
                    @endif
                </div>
            </div>
        </div>
    </div>


</div>

<div class="row">
  <div class="col col-md-12">
    <div class="white-box">
      <div class="form-group">
          <label for="image">{{ __('lang.image') }} @isset($banner) @else * @endisset</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="ti-gallery"></i></div>
              <input type="file" class="form-control" id="image" name="image">
          </div>
          @isset($banner)
            <img src="{{ $banner->image }}" alt="{{ $banner->en_title }}" class="thumb-image">
          @endisset
          <div class="input-group">
            @if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
            @endif
          </div>
      </div>
    </div>
  </div>
</div>



<div class="row">
  <div class="col col-md-12">
    <div class="white-box">
      <div class="form-group">
          <button type="submit" class="btn btn-success btn-block waves-effect waves-light mt-25">{{ __('lang.save') }}</button>
      </div>
    </div>
  </div>
</div>
