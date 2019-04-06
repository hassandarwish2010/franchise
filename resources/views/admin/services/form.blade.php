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
            <label for="title">{{ __('lang.title') }} *</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-tag"></i></div>
                <input type="text" class="form-control" id="title" placeholder="{{ __('lang.title') }}" name="title" value="@if(old('title') != null){{ old('title') }}@elseif(isset($service)){{$service->title}}@endif" required="required">
            </div>
            <div class="input-group">
            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
            </div>
        </div>
      </div>
  </div>
    <div class="col col-md-6">
        <div class="white-box">
            <div class="form-group">
                <label for="lang">lang *</label>
                <div class="input-group" required>
                    <select name="lang" class="form-control" >
                        @if(isset($array_lang))
                            @foreach($array_lang as $lang)
                                <option value="{{ $lang }}" @if(isset($service->lang))@if($service->lang==$lang)selected @endif @endif>{{ $lang }}</option>
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
  <div class="col-md-12">
      <div class="white-box">
          <div class="row">
              <div class="col-sm-12 col-xs-12">
                <label for="details">{{ __('lang.details') }} *</label>
                <textarea id="editor1" name="details" rows="8" 
                          class="form-control" style="resize:vertical;width:100%;"
                          placeholder="{{ __('lang.details') }}">@if(old('details') != null){{ old('details') }}@elseif(isset($service->details)){{$service->details}}@endif</textarea>
                @if ($errors->has('details'))
                    <span class="help-block">
                        <strong>{{ $errors->first('details') }}</strong>
                    </span>
                @endif
              </div>
          </div>
      </div>
  </div>
</div>




<input type="hidden" value="service" name="type">


<div class="row">
  <div class="col col-md-12">
    <div class="white-box">
      <div class="form-group">
          <button type="submit" class="btn btn-success btn-block waves-effect waves-light mt-25">{{ __('lang.save') }}</button>
      </div>
    </div>
  </div>
</div>
