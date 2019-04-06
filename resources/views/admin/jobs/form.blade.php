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
            <label for="en_name">{{ __('lang.en_name') }} *</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-tag"></i></div>
                <input type="text" class="form-control" id="en_name" placeholder="{{ __('lang.en_name') }}" name="en_name" value="@if(old('en_name') != null){{ old('en_name') }}@elseif(isset($job)){{$job->en_name}}@endif" required="required">
            </div>
            <div class="input-group">
            @if ($errors->has('en_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('en_name') }}</strong>
                </span>
            @endif
            </div>
        </div>
      </div>
  </div>
  <div class="col col-md-6">
      <div class="white-box">
        <div class="form-group">
            <label for="ar_name">{{ __('lang.ar_name') }} *</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-tag"></i></div>
                <input type="text" class="form-control" id="ar_name" placeholder="{{ __('lang.ar_name') }}" name="ar_name" value="@if(old('ar_name') != null){{ old('ar_name') }}@elseif(isset($job)){{$job->ar_name}}@endif" required="required">
            </div>
            <div class="input-group">
            @if ($errors->has('ar_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('ar_name') }}</strong>
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
                <label for="en_details">{{ __('lang.en_details') }} *</label>
                <textarea id="editor1" name="en_details" rows="8" class="form-control" style="resize:vertical;width:100%;" placeholder="{{ __('lang.en_details') }}">@if(old('en_details') != null){{ old('en_details') }}@elseif(isset($job->en_details)){{$job->en_details}}@endif</textarea>
                @if ($errors->has('en_details'))
                    <span class="help-block">
                        <strong>{{ $errors->first('en_details') }}</strong>
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
                <label for="ar_details">{{ __('lang.ar_details') }} *</label>
                <textarea id="editor2" name="ar_details" rows="8" class="form-control" style="resize:vertical;width:100%;" placeholder="{{ __('lang.ar_details') }}">@if(old('ar_details') != null){{ old('ar_details') }}@elseif(isset($job->ar_details)){{$job->ar_details}}@endif</textarea>
                @if ($errors->has('ar_details'))
                    <span class="help-block">
                        <strong>{{ $errors->first('ar_details') }}</strong>
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
