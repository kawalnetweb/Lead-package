{{-- <!DOCTYPE html>
<html lang="en"> --}}
    @php
    $bar=config('lead.UserSideBar');
    @endphp
    @extends($bar)
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registration Form</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <style>
            @import url("https://fonts.googleapis.com/css?family=Roboto:400,400i,700");
    
            * {
                box-sizing: border-box;
                font-family: Roboto, sans-serif;
            }
    
            body {
                background-color: #252525;
            }
    
            .custom-timeline {
                position: relative;
                max-width: 1200px;
                margin: 0 auto;
            }
    
            .lead-history table {
                border: solid 1px rgba(128, 128, 128, 0.363);
            }
    
            .lead-history .edit i,
            .lead-history .delete i {
                padding-right: 5px;
            }
    
            .lead-history .edit {
                background-color: #4b74ff;
                border-color: #4b74ff;
            }
    
            .lead-history .edit:hover {
                background-color: #3a65f1b0;
                border-color: #3a65f1b0;
            }
    
            .lead-history table {
                width: 100%;
            }
    
            .lead-history td:hover {
                transform: scale(1.1);
                transition: 0.2s;
            }
    
            .lead-history button {
                font-size: 14px;
                padding: 5px 15px;
                white-space: nowrap;
                color: white;
            }
    
            .lead-history button:hover {
                font-size: 14px;
                padding: 5px 15px;
                color: white;
            }
    
            .lead-history th,
            .lead-history td {
                padding: 10px;
            }
    
            .lead-history th {
                background-color: #0073b7;
                color: white
            }
    
            .lead-history .table table tbody tr:nth-child(even) td {
                background-color: #f2f4f5;
            }
    
            .custom-timeline::after {
                content: "";
                position: absolute;
                width: 6px;
                background-color: white;
                top: 0;
                bottom: 0;
                left: 50%;
                margin-left: -3px;
            }
    
            .delete {
                font-size: 14px;
                padding: 5px 15px;
                white-space: nowrap;
                color: white !important;
                background: rgb(131, 23, 23);
                border-radius: 5px;
                text-decoration: none
            }
    
            .edit {
                font-size: 14px;
                padding: 5px 15px;
                white-space: nowrap;
                color: white !important;
                text-decoration: none;
                border-radius: 5px;
            }
    
            .custom-timeline .timeline-box {
                padding: 10px 40px;
                position: relative;
                background-color: inherit;
                width: 50%;
                min-height: 60px;
            }
    
            .custom-timeline .timeline-box::after {
                content: "";
                position: absolute;
                width: 25px;
                height: 25px;
                right: -13px;
                background-color: white;
                border: 4px solid #ff9f55;
                top: 15px;
                border-radius: 50%;
                z-index: 1;
            }
    
            .custom-timeline .left {
                left: 0;
            }
    
            .custom-timeline .right {
                left: 50%;
            }
    
            .custom-timeline .left::before {
                content: " ";
                height: 0;
                position: absolute;
                top: 22px;
                width: 0;
                z-index: 1;
                right: 30px;
                border: medium solid white;
                border-width: 10px 0 10px 10px;
                border-color: transparent transparent transparent white;
            }
    
            .custom-timeline .right::before {
                content: " ";
                height: 0;
                position: absolute;
                top: 22px;
                width: 0;
                z-index: 1;
                left: 30px;
                border: medium solid white;
                border-width: 10px 10px 10px 0;
                border-color: transparent white transparent transparent;
            }
    
            .custom-timeline .right::after {
                left: -13px;
            }
    
            .custom-timeline .timeline-content {
                padding: 10px 30px;
                background-color: white;
                position: relative;
                border-radius: 6px;
            }
    
            .custom-timeline .timeline-year {
                position: relative;
                padding-top: 70px;
            }
    
            .custom-timeline .timeline-year::before {
                content: attr(month-data);
                position: absolute;
                min-width: 80px;
                padding: 0 15px;
                height: 30px;
                font-size: 18px;
                top: 20px;
                left: 50%;
                transform: translateX(-50%);
                background: #ff9f55;
                color: #fff;
                z-index: 1;
                display: flex;
                justify-content: center;
                align-items: center;
            }
    
            .custom-timeline .dateTimeline {
                position: relative;
                cursor: pointer;
                font-size: 20px;
                padding-bottom: 0;
                margin-bottom: 0;
            }
    
            .custom-timeline .dateTimeline+p {
                opacity: 0;
                height: 0;
                margin: 0;
                transition: all 0.5s ease-in-out;
            }
    
            .custom-timeline .dateTimeline.show+p {
                opacity: 1;
                height: 100%;
                margin-top: 10px;
                padding-top: 10px;
                border-top: 2px solid #dadada;
            }
    
            .custom-timeline .dateTimeline::before {
                content: "\f054";
                position: absolute;
                right: 10px;
                font-family: "FontAwesome";
                transition: all 0.5s ease-in-out;
            }
    
            .custom-timeline .dateTimeline.show::before {
                transform: rotate(90deg);
            }
    
            @media screen and (max-width: 767px) {
    
                .custom-timeline::after,
                .custom-timeline .timeline-year::before {
                    left: 31px;
                }
    
                .custom-timeline .timeline-box {
                    width: 100%;
                    padding-left: 70px;
                    padding-right: 25px;
                }
    
                .custom-timeline .timeline-box::before {
                    left: 60px;
                    border: medium solid white;
                    border-width: 10px 10px 10px 0;
                    border-color: transparent white transparent transparent;
                }
    
                .custom-timeline .left::after,
                .custom-timeline .right::after {
                    left: 19px;
                }
    
                .custom-timeline .right {
                    left: 0%;
                }
    
                .custom-timeline .dateTimeline {
                    font-size: 18px;
                    line-height: 1;
                }
    
                .custom-timeline .timeline-content {
                    padding: 10px 15px;
                }
    
                .custom-timeline .dateTimeline::before {
                    right: 0;
                    font-size: 16px;
                }
            }
    
            .top-header>h1 {
                margin: 0;
                font-size: 24px
            }
    
    
            .top-header .breadcrumb {
                /* float: right; */
                background: transparent;
                margin-top: 0;
                margin-bottom: 0;
                font-size: 12px;
                padding: 7px 5px;
                /* position: absolute;
                top: 15px;
                right: 10px; */
                border-radius: 2px
            }
    
            .top-header .breadcrumb>li {
                display: inline-block;
                color: #999;
            }
    
            .top-header .breadcrumb>li>a {
                color: #0073b7;
                text-decoration: none;
                display: inline-block
            }
    
            .top-header .breadcrumb>li>a>.fa,
            .top-header .breadcrumb>li>a>.glyphicon,
            .top-header .breadcrumb>li>a>.ion {
                margin-right: 5px
            }
    
            .top-header .breadcrumb>li.sub-bread {
                color: #696969;
            }
    
            .top-header>* {
                padding-top: 5px;
                padding-bottom: 5px;
            }
    
            @media (max-width: 991px) {
    
                .top-header>.breadcrumb {
                    position: relative;
                    margin-top: 5px;
                    top: 0;
                    right: 0;
                    float: none;
                    background: #d2d6de;
                    padding-left: 10px
                }
    
                .top-header>.breadcrumb li:before {
                    color: #97a0b3
                }
    
            }
    
        </style>
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    
    {{-- <body> --}}
    @php
    $section=config('lead.UserSectionName');
    @endphp
    @section($section)
    
    @php
    $prefix=config('lead.User_middleware_prefix');
    
    $url1 = $prefix . '/insert';
    
    
    @endphp
    
    <div class="content-wrapper">
        <div class="content-header sty-one">
            <div class="top-header d-md-flex d-block justify-content-between align-items-center">
                <h1 class="text-black">Leads</h1>
                <ol class="breadcrumb">
                    <li><a href="#"> Home </a></li>
                    <li class="sub-bread"><i class="fa fa-angle-right"></i> Leads </li>
                    <li><i class="fa fa-angle-right"></i> Lead History</li>
                </ol>
            </div>
        </div>
    
        <section class="register-form cus-reg-form lead-history">
            <div class="container">
    
                <div class="table table-responsive">
                    <div class="table-inner">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Country</th>
                                    <th>Interest Level</th>
                                    <th>Status</th>
                                    <th>History</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @if(isset($leads))
                            @php
                            $sr=1;
                            @endphp
                            @foreach($leads as $key => $lead)
                            <tr>
                                <td>{{$sr}}</td>
                                <td>{{ $lead->first_name ?? ''}}{{ $lead->last_name ?? ''}}</td>
                                <td>{{ $lead->email ?? ''}}</td>
                                <td>India</td>
                                <td>{{$lead->getInterest->option_value}}</td>
                                <td>
                                    {{-- <button>Add Next follow up</button> --}}
    
                                    <button type="button" class="btn btn-success modal-button" user_id="{{$lead->id ?? ''}}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Status
                                    </button>
                                    <input type="hidden" id="current_lead_id">
    
                                </td>
                                <td>
                                    <button class="btn btn-info history" type="button" lead_id="{{$lead->id ?? ''}}" data-bs-toggle="modal" data-bs-target="#exampleModalHistory">Lead History</button>
                                </td>
                                <td class="d-flex gap-1">
    
                                    {{-- <button class="btn btn-sm btn-danger edit" id="{{$lead->id ?? ''}}"><i class="fa-solid fa-pen"></i>Edit</button> --}}
    
                                    <a target="_blank" class="edit" href="/crud/{{$lead->id ?? ''}}">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                    <a target="_blank" class="delete danger" href="/delete-lead/{{$lead->id ?? ''}}"><i class="fa-sharp fa-solid fa-trash"></i>Delete</a>
    
    
    
    
    
                                    {{-- <button class="btn btn-sm btn-danger delete" id="{{$lead->id ?? ''}}"><i class="fa-sharp fa-solid fa-trash"></i>Delete</button> --}}
                                </td>
    
    
                            </tr>
                            @php
                            $sr++
                            @endphp
    
    
                            @endforeach
                            @endif
    
                        </table>
    
    
                    </div>
                </div>
                <button class="btn btn-primary return-back">Return Back</button>
                <button class="btn btn-success create-lead">Create lead</button>
                <button class="btn btn-primary share_link" data-bs-toggle="modal" data-bs-target="#share_linkModel">Share Link</button>
                
                <div class="create-form" style=" margin-right: 11%">
                    @include('crud::crud-index')
    
                </div>
    
            </div>
        </section>
    </div>
    <!-- Modal -->
    <!-- Button trigger modal -->
    
    <!-- Modal Status-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Next Follow Up</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <form id="next_lead">
                            @csrf
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description2" id="description2"></textarea>
                            <small class="has_error"> This Field is Required </small><br>

                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">--Select--</option>
                                <option value="1">Converted</option>
                                <option value="2">Next Follow Up Date</option>
                                <option value="3">Close</option>
                            </select>
                            <small class="has_error"> This Field is Required </small><br>
                            
                            <div class="t">
                                <label for="next_follow_up_date">Next Follow Up Date</label>
                                <input type="text" class="form-control datetimepicker" id="next_follow_up_date2" name="next_follow_up_date2">
                                <small class="has_error"> This Field is Required </small>
                            </div>
                            <label for="remark">Remark</label>
                            <input type="text" class="form-control" id="remark" name="remark">
                            <small class="has_error"> This Field is Required </small>
    
                            <input type="hidden" id="lead_id">
    
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="next_follow_up_save">Save</button>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- History Modal -->
    <div class="modal fade" id="exampleModalHistory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Follow Up History</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark">
                    <div class="p-4">
                        <div class="custom-timeline">
                            {{-- @foreach($history as $key => $val)
                      <div class="timeline-year" month-data={{ date("F", strtotime($val->next_follow_up_date
                        ))}}>
                            <div class="timeline-box left">
                                <div class="timeline-content">
                                    <h4 class="dateTimeline">{{date("d F", strtotime($val->next_follow_up_date
                              ))}}</h4>
                                    <p>{{$val->description}}</p>
                                </div>
                            </div>
                        </div>
    
                        @endforeach --}}
                        {{-- <div class="timeline-box right">
                          <div class="timeline-content">
                            <h4 class="dateTimeline">13 April</h4>
                            <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim
                              ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo
                              iusto primis ea eam.</p>
                          </div>
                        </div>
                        <div class="timeline-box left">
                          <div class="timeline-content">
                            <h4 class="dateTimeline">12 April</h4>
                            <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim
                              ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo
                              iusto primis ea eam.</p>
                          </div>
                        </div> --}}
                        {{-- < --}}
    
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-primary" id="next_follow_up_save">Save</button> --}}
            </div>
        </div>
    </div>
    </div>
    <!-- Share link Modal -->
    <div class="modal fade" id="share_linkModel" tabindex="-1" role="dialog" aria-labelledby="exampleLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Share Link</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="invite_user">
                        @csrf
                        <input type="hidden" value='{{ Auth::user()->user_id }}' name='user_id' id='user_id'>
                        <input type="hidden" value='{{ Auth::user()->name }}' name='user_name' id='user_name'>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row p-20">
                                    <div class="col-md-12">
                                        @php
                                        $referral_link = url('/crud?'.base64_encode(auth()->user()->user_id)
                                        );
                                        @endphp
                                        <div class="form-group">
    
                                            <input type="hidden" name="create_link" id="create_link" class="form-control create_link" readonly value="{{ $referral_link }}">
    
                                        </div>
                                    </div>
                                    <div class="col-md-12" id='link'>
                                        <div class="form-group">
                                            <div class="d-flex justify-content-between ">
                                                <label class="control-label">Your Referal Link <span class="text-danger">*</span></label>
                                                <span class="text-success inline-flex " style="font-size : 20px;"><a class="whatsapp_link" href="#"><i class="fa-brands fa-whatsapp fa"></i></a></span>
                                                <span class="text-success inline-flex" style="font-size : 20px;"><a href="https://telegram.me/share/url"><i class="fab fa fa-telegram"></i></a></span>
                                                <span class="text-success inline-flex" style="font-size : 18px;"><i class="fa-solid fa fa-copy fa-lg fa-fw " onclick="copy_link()" style="--fa-secondary-opacity:0.1;" aria-hidden="true"></i></span>
                                                <span class="text-success inline-flex" style="font-size: 18px;"><i class="fa fa-share-square" aria-hidden="true"></i></span>
                                            </div>
                                            <input type="text" name="refer_link" id="refer" class="form-control refer" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Enter Email<span class="text-danger">*</span></label>
                                            <input type="email" name="share_link_mail" id="share_link_mail" class="form-control">
                                            <small class="has_error"> This Field is Required </small>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-success d-flex mx-auto send-mail">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close_model"
                                data-dismiss="modal">Close</button>
                        </div> --}}
            </div>
        </div>
    </div>
    
    {{-- </body> --}}
    
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css" rel="stylesheet">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.js"></script>
    
    <script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>
    <script>
        $(document).ready(function() {
            $('.create-form').hide();
            $('.has_error').hide();
            $('.t').hide();
            $('.return-back').hide();
    
            $(document).on("click", ".dateTimeline", function() {
                $(this).toggleClass("show");
            });
    
            $(document).on("click", ".create-lead", function() {
                $('.create-form').show();
                $('.table').hide();
                $(this).hide();
                $('.share_link').hide();
                $('.return-back').show();
            });
            $(document).on("click", ".return-back", function() {
                $('.create-form').hide();
                $('.table').show();
                $(this).hide();
                $('.share_link').show();
                $('.create-lead').show();
                location.reload();
            });
    
    
            $('#status').on('change', function() {
                var status = $("#status").val()
                if (status == 2) {
                    $('.t').show();
                } else {
                    $('.t').hide();
                }
            });
    
            $('.modal-button').on('click', function() {
                var lead = $(this).attr('user_id')
                $('#current_lead_id').val(lead)
            });
    
            $('.history').on('click', function() {
                var lead_id = $(this).attr('lead_id')
                var token = "{{ csrf_token() }}";
                $.ajax({
                    url: "{{ url('/get-lead-history') }}"
                    , type: 'get'
                    , data: {
                        _token: token
                        , 'lead_id': lead_id
                    }
                    , success: function(data) {
                        if (data.status == 'success') {
                            $('.custom-timeline').html(data.html)
                        }
    
                    }
                })
    
            });
            $('#next_follow_up_save').on('click', function() {
                var lead_id = $('#current_lead_id').val()
    
                var formData = new FormData($('#next_lead')[0]);
                formData.append('lead_id', lead_id)
    
                var description = $('textarea[name="description2"]');
                if (description.val() == '') {
                    description.css('border', '1px solid red')
                    description.siblings('.has_error').show()
                    return false;
                } else {
                    description.css('border', '1px solid #ced4da')
                    description.siblings('.has_error').hide()
                }
    
                var remark = $('input[name="remark"]');
                if (remark.val() == '') {
                    remark.css('border', '1px solid red')
                    remark.siblings('.has_error').show()
                    return false;
                } else {
                    remark.css('border', '1px solid #ced4da')
                    remark.siblings('.has_error').hide()
                }
                var status = $('input[name="status"]');
                if (status.val() == '') {
                    status.css('border', '1px solid red')
                    status.siblings('.has_error').show()
                    return false;
                } else {
                    status.css('border', '1px solid #ced4da')
                    status.siblings('.has_error').hide()
                }
    
                $.ajax({
                    url: "{{ url('/add-next-foolow-up') }}"
                    , type: 'POST'
                    , data: formData
                    , contentType: false
                    , processData: false
                    , success: function(data) {
                        if (data.status == "success") {
                            swal({
                                title: 'Success'
                                , text: data.message
                                , type: 'success',
                                // timer: 60000,
                                showCancelButton: false,
                                showConfirmButton: false,
                                // confirmButtonColor: '#DD6B55',
                                confirmButtonText: false,
                                cancelButtonText: false
                            })
                            // .then(() => {
                            location.reload();
    
    
                        }
    
    
                    }
                })
    
    
            });
            $('.share_link').on('click', function() {
                var craeted_link = $('#create_link').val()
                $('#refer').val(craeted_link)
            });
    
            $('.send-mail').on('click', function() {
                var email = $('#share_link_mail').val()
                var link= $('#refer').val()
                var token = "{{ csrf_token() }}";
                // alert(link);
                var share_link_mail = $('input[name="share_link_mail"]');
                if (share_link_mail.val() == '') {
                    share_link_mail.css('border', '1px solid red')
                    share_link_mail.siblings('.has_error').show()
                    return false;
                } else {
                    share_link_mail.css('border', '1px solid #ced4da')
                    share_link_mail.siblings('.has_error').hide()
                }
                $.ajax({
                    url: "{{ url('/send-mail') }}"
                    , type: 'post'
                    , data: {
                        _token: token
                        , 'email': email,
                        'link':link,
                    }
                    , success: function(data) {
                        if (data.status == 'success') {
                            swal({
                                title: 'Success'
                                , text: 'Mail Send Successfully'
                                , type: 'success',
                                showCancelButton: false,
                                showConfirmButton: false,
                                confirmButtonText: false,
                                cancelButtonText: false
                            })
                            location.reload();
                        }
    
                    }
                })
            });
    
    
        });
       
        $(function() {
            $('.datetimepicker').datetimepicker({
                minDate: 0,
            });
        });
    
    </script>
    <script>
        function copy_link() {
            var textBox = document.getElementById("refer");
            textBox.select();
            document.execCommand("copy");
        }
    
    </script>
    {{-- </html> --}}
    @endsection
    
    