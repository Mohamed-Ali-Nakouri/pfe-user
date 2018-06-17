@extends('layouts.dashboard')

@section('custemImp')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">

    <style>
        tr{height:10px; !important; max-width: 100px!important;}
        .card-calendar table td{text-align: center!important;
            }
        td{max-width: 100px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;}





    </style>




@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container-fluid">
    <form action="/emp_insert" method="POST">
        @csrf
        <div class="row "style="width: 100%;">




            <div class="col-md-8 ">
                <div class="card card-calendar">
                    <div class="card-body">
                        <div id="fullCalendar" class="fc fc-unthemed fc-ltr">
                            <div class="fc-toolbar fc-header-toolbar">
                                <div class="fc-left"><h2>Professor</h2>

                                </div>
                                <div class="pl-4 pb-4" style="float: left;">
                                    <select name="prof" id="prof" class="form-control" style="font-family:Roboto, Helvetica, Arial, sans-serif;font-style:oblique">
                                        <option value="" selected="selected" disabled="disabled">pick someone</option>
                                        <?php echo $result ?>
                                    </select>
                                </div>
                                <div class="fc-right">
                                    <button type="button" style="float: right;display: none;" class="pdfEnse btn btn-outline-primary">PDF</button>
                                </div>
                            </div>
                            <div class="fc-view-container mt-lg-5" style="">
                                <div class="fc-view fc-month-view fc-basic-view" style="">
                                    <table class="">
                                        <thead class="fc-head">
                                            <tr>
                                                <td class="fc-head-container fc-widget-header">
                                                    <div class="fc-row fc-widget-header">
                                                        <table class="">
                                                            <thead>
                                                            <tr>

                                                                <th class="fc-day-header fc-widget-header fc-mon">
                                                                    <span>Mon</span>
                                                                </th>
                                                                <th class="fc-day-header fc-widget-header fc-tue">
                                                                    <span>Tue</span>
                                                                </th>
                                                                <th class="fc-day-header fc-widget-header fc-wed">
                                                                    <span>Wed</span>
                                                                </th>
                                                                <th class="fc-day-header fc-widget-header fc-thu">
                                                                    <span>Thu</span>
                                                                </th>
                                                                <th class="fc-day-header fc-widget-header fc-fri">
                                                                    <span>Fri</span>
                                                                </th>
                                                                <th class="fc-day-header fc-widget-header fc-sat">
                                                                    <span>Sat</span>
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody class="fc-body">
                                        <tr>
                                            <td class="fc-widget-content">
                                                <div class="fc-scroller fc-day-grid-container" style="overflow: hidden;">
                                                    <div class="fc-day-grid fc-unselectable">
                                                        <div class="emp_prof">
                                                    <?php $j=1; ?>
                                                    @for($i=0;$i<6;$i++)
                                                            <div class="fc-row" style="">
                                                                <div class="fc-bg">
                                                                    <table class="mytable">
                                                                        <tbody>
                                                                        <tr class="tr" id="{{$i}}">
                                                                            <td class="sortable" id="mon" num="{{$j++}}"></td>
                                                                            <td class="sortable" id="tue" num="{{$j++}}"></td>
                                                                            <td class="sortable" id="wed" num="{{$j++}}"></td>
                                                                            <td class="sortable" id="thu" num="{{$j++}}"></td>
                                                                            <td class="sortable" id="fri" num="{{$j++}}"></td>
                                                                            <td class="sortable" id="sat" num="{{$j++}}"></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>

                                                    @endfor
                                                        </div>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>





        </div>
    </form>
    </div>
    <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-notice">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Affect Classroom</h5>

                </div>
                <div class="modal-body">
                    <div class="instruction">
                        <div class="">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect03">Classroom</label>
                                </div>
                                <select class="list_salle custom-select" id="list_salle inputGroupSelect03">
                                    <option disabled="" id="" selected>Choose A Classroom</option>
                                    <optgroup label="Salle"></optgroup>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-info btn-round affect" data-dismiss="modal">Sounds good!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


        @endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets\js\plugins\perfect-scrollbar.jquery.min.js"></script>
<script src="\js\perfect-scrollbar.min.js"></script>
@section('custemScript')

    <script>
        @if (session('alert'))
        swal({
            position: 'top-end',
            type: 'success',
            title: 'Yay!!',
            text: 'Affected Successfuly',
            showConfirmButton: false,
            timer: 1000
        });
        $('.swal2-input').addClass('form-control');
        $('.swal2-textarea').addClass('form-control');

        $(":input[type|='range']").addClass('form-control');
        @endif




        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });





        $("#prof").change(function () {
           var idprof=this.value;
            console.log(idprof);
            $("#mytable").find('');
            $.ajax({
                url:"/fetch_prof_emp",
                method:"POST",
                data:{MatProf:idprof},
                dataType:"text",
                success:function(data)
                {$(".emp_prof").html('');
                    $(".emp_prof").html(data);
                    console.log(data);
                }
            });



        });


$('.EM').addClass('active');



    </script>
@endsection
