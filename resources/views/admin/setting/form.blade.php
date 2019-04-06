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

@section('css')
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/jquery-gmaps-latlon-picker.css')}}"/>
@endsection

@section('js')
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyA5HbN7RwGeBLCFVi8RmDDrOVysfZIs_Gk"></script>
<script src="{{asset('public/admin/js/jquery-gmaps-latlon-picker.js')}}"></script>
<script>
  $(document).ready(function() {
    // Copy the init code from "jquery-gmaps-latlon-picker.js" and extend it here
    $(".gllpLatlonPicker").each(function() {
      $obj = $(document).gMapsLatLonPicker();

      $obj.params.strings.markerText = "Drag this Marker (example edit)";

      $obj.params.displayError = function(message) {
        console.log("MAPS ERROR: " + message); // instead of alert()
      };

      $obj.init( $(this) );
    });
  });
  $('input.gllpSearchField').keypress(function(e) {
    if(e.which == 13) {
        $('input.gllpSearchButton').click();
        console.log("pressed");
        return false;
    }
  });
</script>
@endsection

<div class="row">
  <div class="col col-md-6">
      <div class="white-box">
        <div class="form-group">
            <label for="phone">{{ __('lang.phone') }}</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-mobile"></i></div>
                <input type="text" class="form-control" id="phone" placeholder="{{ __('lang.phone') }}" name="phone" value="@if(old('phone') != null){{ old('phone') }}@elseif(isset($setting)){{$setting->phone}}@endif">
            </div>
            <div class="input-group">
            @if ($errors->has('phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
            </div>
        </div>
      </div>
  </div>

  <div class="col col-md-6">
      <div class="white-box">
        <div class="form-group">
            <label for="email">{{ __('lang.email') }}</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                <input type="text" class="form-control" id="email" placeholder="{{ __('lang.email') }}" name="email" value="@if(old('email') != null){{ old('email') }}@elseif(isset($setting)){{$setting->email}}@endif">
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
  <div class="col col-md-12">
      <div class="white-box">
        <div class="form-group">
            <label for="phone">{{ __('lang.address') }}</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                <input type="text" class="form-control" id="address" placeholder="{{ __('lang.address') }}" name="address" value="@if(old('address') != null){{ old('address') }}@elseif(isset($setting)){{$setting->address}}@endif">
            </div>
            <div class="input-group">
            @if ($errors->has('address'))
                <span class="help-block">
                    <strong>{{ $errors->first('address') }}</strong>
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
            <label for="phone">{{ __('lang.facebook') }}</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-facebook"></i></div>
                <input type="text" class="form-control" id="facebook" placeholder="{{ __('lang.facebook') }}" name="facebook" value="@if(old('facebook') != null){{ old('facebook') }}@elseif(isset($setting)){{$setting->facebook}}@endif">
            </div>
            <div class="input-group">
            @if ($errors->has('facebook'))
                <span class="help-block">
                    <strong>{{ $errors->first('facebook') }}</strong>
                </span>
            @endif
            </div>
        </div>
      </div>
  </div>
  <div class="col col-md-6">
      <div class="white-box">
        <div class="form-group">
            <label for="googleplus">{{ __('lang.googleplus') }}</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-google-plus"></i></div>
                <input type="text" class="form-control" id="googleplus" placeholder="{{ __('lang.googleplus') }}" name="googleplus" value="@if(old('googleplus') != null){{ old('googleplus') }}@elseif(isset($setting)){{$setting->googleplus}}@endif">
            </div>
            <div class="input-group">
            @if ($errors->has('googleplus'))
                <span class="help-block">
                    <strong>{{ $errors->first('googleplus') }}</strong>
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
            <label for="phone">{{ __('lang.twitter') }}</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-twitter"></i></div>
                <input type="text" class="form-control" id="twitter" placeholder="{{ __('lang.twitter') }}" name="twitter" value="@if(old('twitter') != null){{ old('twitter') }}@elseif(isset($setting)){{$setting->twitter}}@endif">
            </div>
            <div class="input-group">
            @if ($errors->has('twitter'))
                <span class="help-block">
                    <strong>{{ $errors->first('twitter') }}</strong>
                </span>
            @endif
            </div>
        </div>
      </div>
  </div>
  <div class="col col-md-6">
      <div class="white-box">
        <div class="form-group">
            <label for="linkedin">{{ __('lang.linkedin') }}</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-linkedin"></i></div>
                <input type="text" class="form-control" id="linkedin" placeholder="{{ __('lang.linkedin') }}" name="linkedin" value="@if(old('linkedin') != null){{ old('linkedin') }}@elseif(isset($setting)){{$setting->linkedin}}@endif">
            </div>
            <div class="input-group">
            @if ($errors->has('linkedin'))
                <span class="help-block">
                    <strong>{{ $errors->first('linkedin') }}</strong>
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
            <label for="location">{{ __('lang.location') }}</label>
            <div class="input-group">
                <fieldset class="gllpLatlonPicker" style="width:100%;">
                  <div>
                    <input type="text" class="gllpSearchField" style="color:black; width:70%; float:left" placeholder="Search for address">
                    <input type="button" class="gllpSearchButton btn btn-primary" value="Search for address" style="padding: 2px 15px; vertical-align: none;float:right;margin-right:1%">
                  </div>
                  <div class="gllpMap" style="margin-top:50px;">Google Maps</div>
                  <input type="hidden" class="gllpLatitude" value="@if(old('lat') != null){{ old('lat') }}@elseif(isset($setting->lat)){{$setting->lat}}@else 30.04 @endif" name="lat"/>
                  <input type="hidden" class="gllpLongitude" value="@if(old('lon') != null){{ old('lon') }}@elseif(isset($setting->lon)){{$setting->lon}}@else 31.24 @endif" name="lon"/>
                  <input type="hidden" class="gllpZoom" value="18"/>
                </fieldset>
            </div>
            <div class="input-group">
            @if ($errors->has('lat'))
                <span class="help-block">
                    <strong>{{ $errors->first('lat') }}</strong>
                </span>
            @endif

            @if ($errors->has('lon'))
                <span class="help-block">
                    <strong>{{ $errors->first('lon') }}</strong>
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
