<!DOCTYPE html>
<html lang="en">
  {{-- @php
    $bar=config('lead.UserSideBar');
  @endphp
 @extends($bar) --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <style>
      .cus-reg-form select {
          padding: 10px 20px !important;
          background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
          background-color: #fff;
          background-repeat: no-repeat;
          background-position: right 0.75rem center;
          background-size: 16px 12px;
      }
      .cus-reg-form .form-floating>.form-control:not(:placeholder-shown) {
          padding: 10px 20px !important;
      }
      .cus-reg-form .form-floating>.form-control {
          outline: none;
          box-shadow: none;
          padding: 10px 20px !important;
      }
      .cus-reg-form .form-floating label {
          display: inline-block;
          width: auto;
          height: auto;
          padding: 0 15px;
          transition: all .5s ease-out;
          top: 29px;
          transform: translateY(-50%);
          left: 5px;
          background-color: #fff;
          line-height: 1;
      }
      .cus-reg-form .cus-text-area .form-floating label {
          top: 30px;
      }
      .cus-reg-form .cus-text-area .form-floating textarea.form-control {
          padding-top: 22px !important;
          padding-bottom: 22px !important;
      }
      .cus-reg-form .form-floating > .form-control:not(:placeholder-shown)~label, .cus-reg-form .form-floating > .form-control:focus~label, .cus-reg-form .cus-text-area .form-floating > .form-control:focus~label, .cus-reg-form .cus-text-area .form-floating > .form-control:not(:placeholder-shown)~label {
          top: 0;
          opacity: 1;
      }
      .cus-reg-form .form-floating > textarea.form-control {
          height: 200px;
      }
      .cus-reg-form .cus-form-btn button[type="button"] {
        background-color: #5867dd;
        border-color: #5867dd;
        font-size: 18px;
        font-weight: 500;
        padding: 15px 50px;
        text-transform: uppercase;
      }
      .cus-reg-form .cus-form-btn button[type="button"]:hover {
        background-color: #6a79ee;
      }
      .cus-reg-form .has_error {
        color: red;
      }
      .cus-reg-form .card.shadow {
          background-color: #fff;
          box-shadow: 0 30px 60px rgba(0, 0, 0, .15) !important;
          border-radius: 10px;
          max-width: 880px;
          margin: auto;
          padding: 50px 30px 70px !important;
      }
      .cus-reg-form {
          background-color: #ecf0f5;
          padding: 50px 0 70px;
      }
    </style>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


<body>
  {{-- @php
    $section=config('lead.UserSectionName');
  @endphp
  @section($section) --}}

<div class="content-wrapper">
    <section class="register-form cus-reg-form">
      <div class="container">
        <form action="" id="form">
          @csrf
          <div class="card p-3 shadow">
            <div class="row">
              <div class="col-md-12">
                <h1 class="text-center mb-3">Registration Form</h1>
              </div>
              <div class="col-md-6 py-2">
               <div class="form-floating">
                <input type="text" class="form-control" id="first_name" name="first_name" onkeypress="return onlyAlphabets(event,this);" value="{{ isset($data['data']) ? $data['data']->first_name : '' }}" placeholder="First Name">
                <small class="has_error"> This Field is Required </small>
                <label for="first_name">Fisrt Name</label>
               </div>
              </div>
              <div class="col-md-6 py-2">
                <div class="form-floating">
                  <input type="text" class="form-control" name="last_name" id="last_name" onkeypress="return onlyAlphabets(event,this);"  value="{{ isset($data['data']) ? $data['data']->last_name : '' }}" placeholder="Last Name">
                  <small class="has_error"> This Field is Required </small>
                  <label for="last_name">Last Name</label>
                 </div>
              </div>
              <div class="col-md-6 py-2">
                <div class="form-floating">
                  <input type="email" class="form-control" id="email" name="email"  value="{{ isset($data['data']) ? $data['data']->email : '' }}"placeholder="Email address">
                  <small class="has_error"> This Field is Required </small>
                  <label for="email">Email address</label>
                 </div>
              </div>
              <div class="col-md-6 py-2">
                <div class="form-floating">
                  <input type="number" class="form-control" id="mobile_number" name="mobile_number"  value="{{ isset($data['data']) ? $data['data']->mobile_number : '' }}" placeholder="Mobile Number" >
                  <small class="has_error"> This Field is Required </small>
                  <label for="mobile_number">Mobile Number</label>
                 </div>
              </div>
              <div class="col-md-6 py-2">
                <div class="form-floating">
                  <select name="country" id="country" class="form-control">
                    <option name="country"  value="">Country</option>
                  @if(isset($data['countries']))

                  @foreach($data['countries'] as $key => $value)

                  {{-- @if(isset($data['data']) ? $data['data']->country : '' == $value->id )
                  <option name="country" value="{{$value->id }}" selected>{{$value->country_name?? ''}}
                  </option>
                  @else
                  <option name="country" value="{{$value->id ?? ''}}">{{$value->country_name ?? ''}}</option>
                  @endif --}}
                  @if(isset($data['data']))
                  @if($value->country_id == $data['data']->country)
                  <option name="country" value="{{$value->country_id }}" selected>{{$value->country_name?? ''}}
                    @else
                    <option name="country" value="{{$value->country_id ?? ''}}">{{$value->country_name ?? ''}}</option>
                  @endif
                  @else
                  <option name="country" value="{{$value->country_id ?? ''}}">{{$value->country_name ?? ''}}</option>
                  @endif

                  @endforeach
                  @endif
                </select>
                <small class="has_error"> This Field is Required </small>
                 </div>
              </div>
              <div class="col-md-6 py-2">
                <div class="form-floating">
                  <select name="state" id="state" class="form-control">
                  <option name="state"  value="">State</option>
                  @if(isset($data['states']))
                  @foreach($data['states'] as $key => $value)
                  {{-- <option name="state" value="{{$value->id ?? ''}}">{{$value->name ?? ''}}</option> --}}
                  @if(isset($data['data']))
                  @if($value->id == $data['data']->state)
                  <option name="state" value="{{$value->id }}" selected>{{$value->name?? ''}}
                    @else
                    <option name="state" value="{{$value->id ?? ''}}">{{$value->name ?? ''}}</option>

                  @endif
                  @else
                  <option name="state" value="{{$value->id ?? ''}}">{{$value->name ?? ''}}</option>
                  @endif
                  @endforeach
                  @endif
                </select>
                <small class="has_error"> This Field is Required </small>
                 </div>
              </div>
              <div class="col-md-6 py-2">
                <div class="form-floating">
                  <select name="city" id="city" class="form-control">
                  <option name="city"  value="">City</option>
                  @if(isset($data['cities']))
                  @foreach($data['cities'] as $key => $value)
                  {{-- <option name="city" value="{{$value->id ?? ''}}">{{$value->name ?? ''}}</option> --}}
                  @if(isset($data['data']))
                  @if($value->id == $data['data']->city)
                  <option name="city" value="{{$value->id }}" selected>{{$value->name?? ''}}
                    @else
                    <option name="city" value="{{$value->id ?? ''}}">{{$value->name ?? ''}}</option>
                  @endif
                  @else
                  <option name="city" value="{{$value->id ?? ''}}">{{$value->name ?? ''}}</option>
                  @endif
                  @endforeach
                  @endif
                </select>
                <small class="has_error"> This Field is Required </small>
                 </div>
              </div>
              <div class="col-md-6 py-2">
                <div class="form-floating">
                  <select name="interest_level" id="interest_level" class="form-control">
                  <option name="interest_level"  value="">Level Of Interest</option>

                  @if(isset($data['interest_level']))
                  @foreach($data['interest_level'] as $key => $value)

                  @if(isset($data['data']))
                  @if($value->id == $data['data']->interest_level)
                  <option name="interest_level" value="{{$value->id }}" selected>{{$value->option_value?? ''}}
                    @else
                    <option name="interest_level" value="{{$value->id ?? ''}}">{{$value->option_value ?? ''}}</option>
                  @endif
                  @else
                  <option name="interest_level" value="{{$value->id ?? ''}}">{{$value->option_value ?? ''}}</option>
                  @endif



                  {{-- @if($value->id == isset($data['data']) ? $data['data']->interest_level : '' )
                  <option name="interest_level" value="{{$data['data']->interest_level ?? ''}}" selected>{{$value->option_value ?? ''}}</option>
                  @else
                  <option name="interest_level" value="{{$value->id ?? ''}}">{{$value->option_value ?? ''}}</option>
                  @endif --}}


                  @endforeach
                  @endif
                 
                </select>
                <small class="has_error"> This Field is Required </small>
                  {{-- <label for="interest_level">Level Of Interest</label> --}}
                 </div>
              </div>
              <div class="col-md-6 py-2">
                <div class="form-floating">
                  <select name="lead_status" id="lead_status" class="form-control">
                  <option name="lead_status" value="">Lead Status</option>
                  @if(isset($data['lead_status']))
                  @foreach($data['lead_status'] as $key => $value)
                  @if(isset($data['data']))
                  @if($value->id == $data['data']->lead_status)
                  <option name="lead_status" value="{{$value->id }}" selected>{{$value->option_value?? ''}}
                    @else
                    <option name="lead_status" value="{{$value->id ?? ''}}">{{$value->option_value ?? ''}}</option>
                  @endif
                  @else
                  <option name="lead_status" value="{{$value->id ?? ''}}">{{$value->option_value ?? ''}}</option>
                  @endif


                  {{-- @if($value->id == isset($data['data']) ? $data['data']->lead_status : '' )
                  <option name="lead_status" value="{{$data['data']->lead_status ?? ''}}" selected>{{$value->option_value ?? ''}}</option>
                  @else
                   <option name="lead_status" value="{{$value->id ?? ''}}">{{$value->option_value ?? ''}}</option>
                  @endif --}}
                 
                  @endforeach
                  @endif
                
                </select>
                <small class="has_error"> This Field is Required </small>
                  {{-- <label for="lead_status">Lead Status</label> --}}
                 </div>
              </div>


              <div class="col-md-6 py-2">
                <div class="form-floating">
                  <input type="text" class="form-control datetimepicker" id="next_follow_up_date" name="next_follow_up_date"  value="{{ isset($data['data']) ? $data['data']->next_follow_up_date : '' }}" placeholder="Next Follow Up Date">
                  <small class="has_error"> This Field is Required </small>
                  <label for="next_follow_up_date">Next Follow Up Date</label>
                 </div>
              </div>
              <div class="hidden_filed">
                <input type="hidden" id="id" name="id" value="{{ (isset($data['id']) ? $data['id'] : '') }}"> 
                <input type="hidden" id="while_edit_sponser_id" value="{{ (isset($data['data']) ? $data['data']->user_id : '') }}">
                <input type="hidden" id="while-share-link">
                <input type="hidden" id="self-create" value="{{Auth::guard('customer')->user()->user_id ?? ''}}">
              </div>
              <div class="col-md-12 py-2 cus-text-area">
                <div class="form-floating">
                  <textarea  class="form-control" name="description" id="description" placeholder="Description" >{{isset($data['data']) ? $data['data']->description : '' }}</textarea>
                  <small class="has_error"> This Field is Required </small>
                  <label for="description">Description</label>
                 </div>
              </div>
              <div class="col-md-12 cus-form-btn text-center mt-5">
                <button type="button" class="btn btn-primary" id="save">Submit</button>
            </div>
            </div>
          </div>
        </form>

      </div>
    </section>
  </div>
  
</body>
{{-- @php
$prefix=config('lead.User_middleware_prefix');

 $url1 = $prefix . '/insert';


@endphp --}}


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" >
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.js"></script>
   
<script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>
<script>
    $(document).ready(function() {
      $('.has_error').hide();
      $('.t').hide();
      var sponser_id = window.location.search.substring(1);
      var decode= atob(sponser_id)
      $('#while-share-link').val(decode);

      $("#mobile_number").change(function() {
        var a = $(this).val();
        var filter = /^[6-9][0-9]{9}$/;

        if (!filter.test(a)) {
                    swal({
                        title: 'Please Enter 10 Digit Mobile Number',
                        // text: 'Some text.',
                        type: 'error',
                        showCancelButton: true,
                        confirmButtonColor: '#DD6B55',
                        confirmButtonText: 'Ok',
                        cancelButtonText: 'Close'
                            })
                            $('#mobile_number').val('')
        }
        
    });
    $('#status').on('change', function() {
      var status= $("#status").val()
      if(status == 2){
        $('.t').show();
      }else{
        $('.t').hide();
      }

    });
        $('#save').on('click', function() {
          // let sponser_id = window.location.search.substring(1);
          // alert(Param);
          var sponser_id = $('#while-share-link').val();
          if(sponser_id == ''){
            var whileEdit=$('#while_edit_sponser_id').val();
            if(whileEdit == ''){
              sponser_id=$('#self-create').val();
            }else{
              sponser_id=whileEdit;
            }
          }
          // alert(sponser_id)
            var formData = new FormData($('#form')[0]);
            formData.append('sponser_id',sponser_id)
            var first_name = $('input[name="first_name"]');
            if (first_name.val() == '') {
                first_name.css('border', '1px solid red')
                first_name.siblings('.has_error').show()
                return false;
            } else {
                first_name.css('border', '1px solid #ced4da')
                first_name.siblings('.has_error').hide()
            }
            var last_name = $('input[name="last_name"]');
            if (last_name.val() == '') {
                last_name.css('border', '1px solid red')
                last_name.siblings('.has_error').show()
                return false;
            } else {
                last_name.css('border', '1px solid #ced4da')
                last_name.siblings('.has_error').hide()
            }
            var email = $('input[name="email"]');
            if (email.val() == '') {
                email.css('border', '1px solid red')
                email.siblings('.has_error').show()
                return false;
            } else {
                email.css('border', '1px solid #ced4da')
                email.siblings('.has_error').hide()
            }
            var mobile_number = $('input[name="mobile_number"]');
            if (mobile_number.val() == '') {
                mobile_number.css('border', '1px solid red')
                mobile_number.siblings('.has_error').show()
                return false;
            } else {
                mobile_number.css('border', '1px solid #ced4da')
                mobile_number.siblings('.has_error').hide()
            }
            var country = $("#country");
            if (country.val() == '') {
                country.css('border', '1px solid red')
                country.siblings('.has_error').show()
                return false;
            } else {
                country.css('border', '1px solid #ced4da')
                country.siblings('.has_error').hide()
            }
            var state = $("#state");
            if (state.val() == '') {
                state.css('border', '1px solid red')
                state.siblings('.has_error').show()
                return false;
            } else {
                state.css('border', '1px solid #ced4da')
                state.siblings('.has_error').hide()
            }
            var city = $("#city");
            if (city.val() == '') {
                city.css('border', '1px solid red')
                city.siblings('.has_error').show()
                return false;
            } else {
                city.css('border', '1px solid #ced4da')
                city.siblings('.has_error').hide()
            }
            var interest_level = $('select[name="interest_level"]');
            if (interest_level.val() == '') {
                interest_level.css('border', '1px solid red')
                interest_level.siblings('.has_error').show()
                return false;
            } else {
                interest_level.css('border', '1px solid #ced4da')
                interest_level.siblings('.has_error').hide()
            }
            var lead_status = $('select[name="lead_status"]');
            if (lead_status.val() == '') {
                lead_status.css('border', '1px solid red')
                lead_status.siblings('.has_error').show()
                return false;
            } else {
                lead_status.css('border', '1px solid #ced4da')
                lead_status.siblings('.has_error').hide()
            }
            var next_follow_up_date = $('input[name="next_follow_up_date"]');
            if (next_follow_up_date.val() == '') {
                next_follow_up_date.css('border', '1px solid red')
                next_follow_up_date.siblings('.has_error').show()
                return false;
            } else {
                next_follow_up_date.css('border', '1px solid #ced4da')
                next_follow_up_date.siblings('.has_error').hide()
            }
            var description = $('textarea[name="description"]');
            if (description.val() == '') {
                description.css('border', '1px solid red')
                description.siblings('.has_error').show()
                return false;
            } else {
                description.css('border', '1px solid #ced4da')
                description.siblings('.has_error').hide()
            }
            
            var Email=$('#email').val();
           if(!isValidEmailAddress(Email)){
              swal({
                        title: 'Email Is Invalid',
                        // text: 'Some text.',
                        type: 'error',
                        showCancelButton: true,
                        confirmButtonColor: '#DD6B55',
                        confirmButtonText: 'Yes!',
                        cancelButtonText: 'No.'
                            })
                return false;
            }
            
            // var id="1234";
            // console.log(formData)
            $.ajax({
                url: "{{ url('/insert') }}"
                , type: 'POST'
                , data: formData
                , contentType: false
                , processData: false
                , success: function(data) {
                  if(data.status == "success"){
                    swal({
                        title: 'Success',
                        text: data.msg,
                        type: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#DD6B55',
                        // confirmButtonText: 'Ok',
                        // cancelButtonText: 'Close'
                            })
                            // .then(() => {
                                location.reload();
                            // });
                  }


                }
            })
        });

    });
    $(function () {

             $('.datetimepicker').datetimepicker({
              minDate: 0,

             });
         });
         function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
}
function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
</script>
</html>
{{-- @endsection --}}
