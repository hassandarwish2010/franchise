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

<div class="row">
  <div class="col col-md-6">
      <div class="white-box">
        <div class="form-group">
            <label for="name">{{ __('lang.name') }} *</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" id="name" placeholder="{{ __('lang.name') }}" name="name" value="@if(old('name') != null){{ old('name') }}@elseif(isset($user)){{$user->name}}@endif" required="required">
            </div>
            <div class="input-group">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            </div>
        </div>
      </div>
  </div>

  <div class="col col-md-6">
      <div class="white-box">
        <div class="form-group">
            <label for="email">{{ __('lang.email') }} *</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                <input type="email" class="form-control" id="email" placeholder="{{ __('lang.email') }}" name="email" value="@if(old('email') != null){{ old('email') }}@elseif(isset($user)){{$user->email}}@endif" required="required">
            </div>
            <div class="input-group">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            </div>
        </div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col col-md-6">
      <div class="white-box">
        <div class="form-group">
            <label for="password">{{ __('lang.password') }} @if(! isset($user)) * @endif</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-ban"></i></div>
                <input type="password" class="form-control" id="password" placeholder="{{ __('lang.password') }}" name="password">
            </div>
            <div class="input-group">
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            </div>
        </div>
      </div>
  </div>

  <div class="col col-md-6">
    <div class="white-box">
      <label style="height:17px;"></label>
      <div class="form-group">
          <button type="submit" class="btn btn-success btn-block waves-effect waves-light mt-25">{{ __('lang.save') }}</button>
      </div>
    </div>
  </div>
</div>
