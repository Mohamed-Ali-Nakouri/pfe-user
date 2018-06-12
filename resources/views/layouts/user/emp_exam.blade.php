@extends('layouts.dashboard')
@section('content')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="js/jquery-ui.js"></script>
    <style>
        td{height:10px;}
        li{list-style-type:none}
    </style>




        <div class="row "style="width: 100%;">
            <div class="col-md-8 " style="margin-bottom:-40px">
            <div class="card card-calendar">
                <div class="card-body">
            <!--        <div id="fullCalendar" class="fc fc-unthemed fc-ltr">
                        <div class="fc-toolbar fc-header-toolbar">
                            <div class="fc-left"><h2>Class</h2></div>
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
                    </div>  -->
                <div  class="pl-4 pb-4" style="float: left;">
                    <select name="departements" id="dep" class="form-control" style="font-family:Roboto, Helvetica, Arial, sans-serif;font-style:oblique">
                        <option value="" selected="selected" disabled="disabled">choisir department</option>
                        @foreach($dep_list as $data)
                            <option value="{{$data['idDept']}}" >{{$data['libDept']}}</option>

                        @endforeach
                    </select>
                    <select   name="classes" id="class" class="form-control" style="font-family:Roboto, Helvetica, Arial, sans-serif;font-style:oblique">
                        <option value="" selected="selected" disabled="disabled">choisir classe</option>

                    </select>

                    <select   name="salles" id="salle" class="form-control" style="font-family:Roboto, Helvetica, Arial, sans-serif;font-style:oblique">
                        <option value="" selected="selected" disabled="disabled">choisir salle</option>
                        @foreach($salles_list as $data)
                            <option value="{{$data['idSalle']}}" >{{$data['idSalle']}}</option>

                        @endforeach

                    </select>



                </div><br><br><br><br><br><br><br>
                <label for="from">From</label>
                <input type="text" id="from" name="from">
                <label for="to">to</label>
                <input type="text" id="to" name="to">
                </div>
            </div>
            </div>
            <div class="col-md-8 ">
                <div class="card card-calendar">
                    <div class="card-body">
                        <div id="fullCalendar" class="fc fc-unthemed fc-ltr">
                            <div class="fc-toolbar fc-header-toolbar">
                                <div class="fc-left"><h2>Emploit d'examens</h2>

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
                                                                    <span>Monday</span>
                                                                </th>
                                                                <th class="fc-day-header fc-widget-header fc-tue">
                                                                    <span>Tuesday</span>
                                                                </th>
                                                                <th class="fc-day-header fc-widget-header fc-wed">
                                                                    <span>Wednesday</span>
                                                                </th>
                                                                <th class="fc-day-header fc-widget-header fc-thu">
                                                                    <span>Thursday</span>
                                                                </th>
                                                                <th class="fc-day-header fc-widget-header fc-fri">
                                                                    <span>Friday</span>
                                                                </th>
                                                                <th class="fc-day-header fc-widget-header fc-sat">
                                                                    <span>Satuurday</span>
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
            <div class="col-md-2 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Matieres
                        </h4>
                    </div>
                    <div class="card-body">
                        <div id="mats" class="sortable mats" style="height: 150px">



                        </div>


                    </div>
                </div>
                <button type="button" class="btn btn-primary">PDF</button><br>
                <button type="button" class="btn btn-success">Save </button>
            </div>
        </div>


    <script>

        $('').remove();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
  ////////////////////////////////////////////////////////////////////////////
        $('#dep').change(function() {


            $.ajax({
                url:"/getClasses",
                method:"POST",
                data:{id:$('#dep').find(":selected").val()},
                dataType:"text",
                success:function(data)
                {
                    var paraed = JSON.parse(data);
                    //$('.class')
                    $("[id='class']").append($('<option>', {value:paraed[0].idForm, text:paraed[0].nomClass}));



                }
            });
        });

        $("[id='class']").change(function() {


            $.ajax({
                url:"/getMats",
                method:"POST",
                data:{id:$('#dep').find(":selected").val(),idForm:$("[id='class']").find(":selected").val()},
                dataType:"text",
                success:function(data)
                {

                    var mats = JSON.parse(data);
                   //$('.class')
                    //alert(data);
                    for (var i = 0; i < mats.length; i++) {
                        $("[id='mats']").append($('<li>', {text: mats[i].libMat}));

                    }


                }
            });
        });
/////////////////////////////////////////Date//////////////////////////////////////////////
        $( function() {
            var dateFormat = "mm/dd/yy",
                from = $( "#from" )
                    .datepicker({
                        defaultDate: "+1w",
                        changeMonth: true,
                        numberOfMonths: 3
                    })
                    .on( "change", function() {
                        to.datepicker( "option", "minDate", getDate( this ) );
                    }),
                to = $( "#to" ).datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 3
                })
                    .on( "change", function() {
                        from.datepicker( "option", "maxDate", getDate( this ) );
                    });

            function getDate( element ) {
                var date;
                try {
                    date = $.datepicker.parseDate( dateFormat, element.value );
                } catch( error ) {
                    date = null;
                }

                return date;
            }
        } );





     /////////////////////////SORTABLE//////////////////////////////
        $(".sortable").sortable({connectWith: ".sortable",receive:function (e,t) {

            }});
        $(".sortable").sortable({
            connectWith: ".sortable",
            hoverClass: "ui-state-active",
            placeholder: "ui-state-highlight",
            cursor:"pointer",


            receive: function (e, t) {
                if ($(this).attr("id")=='mats')
                {$(this).find(".matiere").prop("name","");
                }
                else {
                var num=$(this).closest("tr").attr("id");
                var tabname=$(this).attr("id");
                $(this).find(".matiere").prop("name",tabname+'['+num+']');
                $(this).addClass('table-active');
                }
            },
            stop: function (e, t) {
                if ($(this).children().length == 0) {
                    $(this).addClass('test');
                    $(this).removeClass('table-active');
                }
                if($(t.item).closest('tr').children().length >0){
                    $(t.item).closest('tr').removeClass('test');
                }
            },
            helper: function (e, tr) {
                var $originals = tr.children();
                var $helper = tr.clone();
                $helper.children().each(function (index) {
                    // Set helper cell sizes to match the original sizes
                    $(this).width($originals.eq(index).width());
                });
                $helper.css("background-color", "rgb(223, 240, 249)");
                return $helper;
            }
        });
        $("#sortable").disableSelection();
        $("#prof").change(function () {
           var idprof=this.value;
            $.ajax({
                url:"/fetch_affectedtotab",
                method:"POST",
                data:{MatProf:idprof},
                dataType:"text",
                success:function(data)
                {   $(".mat").remove();
                    $(".mats").html(data);
                }
            });
            $.ajax({
                url:"/fetch_classeEmp",
                method:"POST",
                data:{idClasse:''},
                dataType:"text",
                success:function(data)
                {   $(".here").html("");
                    $(".here").html(data);
                }
            });

        });


        $("body").on('click','.cla',function () {
           var value=$(this).find('.classe').val();
           var data=value.split('_');
           var classe=data['1'];
           /////farag_table
            $tab=[];
            //// re_insilize_the sortable
            $('.mytable td').each(function () {
               $(this).removeClass('table-warning');
               $(this).addClass('sortable');

            });
            /// AJAX
            $.ajax({
                url:"/fetch_classeEmp",
                method:"POST",
                data:{idClasse:classe},
                dataType:"text",
                success:function(data)
                {   $(".here").html("");
                     $(".here").html(data);
                     $("#table tr").each(function () {
                         $(this).find('td:not(:empty)').each(function (ele) {
                            var id=$(this).attr("id")
                             $tab.push(id);


                         });
                         $tab.forEach(function (element) {
                             var elemen=element;

                         $('.mytable .sortable').each(function (ele) {
                             var num=$(this).attr('num');
                             if(num==elemen)
                             {$(this).removeClass('sortable');
                              $(this).addClass('table-warning');

                             }

                         });
                         });
                     });





                }
            });

        });


    </script>
@endsection
