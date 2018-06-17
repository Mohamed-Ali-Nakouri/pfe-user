
@extends('layouts.dashboard')

@section('content')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>


        tr{height:10px; !important; max-width: 100px!important;}
        .card-calendar table td{text-align: center!important;
        }
        td{max-width: 100px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;}

    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <form action="/emp_insert" method="POST">
        {{csrf_field()}}
        <div class="row "style="width: 100%;">
            <div class="col-md-8 " style="margin-bottom:-40px">
            <div class="card card-calendar">
                <div class="card-body">
                    <div id="fullCalendar" class="fc fc-unthemed fc-ltr">
                        <div class="fc-toolbar fc-header-toolbar">
                            <div class="fc-left"><h2>Class</h2></div>
                            <div class="pl-4 pb-4" style="float: left;">
                                <select name="class" id="class" class="form-control" style="font-family:Roboto, Helvetica, Arial, sans-serif;font-style:oblique">
                                    <option value="0" selected="selected" disabled="disabled">pick Class</option>
                                    <?php echo $classes ?>
                                </select>
                            </div>


                            <div class="pl-4 " style="float: left;">

                            </div>
                        </div>
                        <div class="fc-view-container mt-lg-5 pt-3" style="">
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
                                                    <div class="here">
                                                    @for($i=0;$i<6;$i++)
                                                            <div class="fc-row" style="">
                                                                <div class="fc-bg">
                                                                    <table class="">
                                                                        <tbody>
                                                                        <tr >
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
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
    @endsection
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    @section('custemScript')
    <script>
$(".affect").hide();


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });



        $("#class").change(function () {
            var idClasse=this.value;
            $("#salle").val(0);

            $.ajax({
                url:"/fetch_classeEmp",
                method:"POST",
                data:{idClasse:idClasse},
                dataType:"text",
                success:function(data)
                {


                    $(".here").html(data);
                }
            });
            });






    </script>
@endsection
