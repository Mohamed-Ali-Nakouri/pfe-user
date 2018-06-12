
@extends('layouts.dashboard')

@section('content')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <style>
        td{height:10px;}

    </style>



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

    <script>
$(".affect").hide();
        var $table = $('table.scroll'),
            $bodyCells = $table.find('tbody tr:first').children(),
            colWidth;

        // Adjust the width of thead cells when window resizes
        $(window).resize(function() {
            // Get the tbody columns width array
            colWidth = $bodyCells.map(function() {
                return $(this).width();
            }).get();

            // Set the width of thead columns
            $table.find('thead tr').children().each(function(i, v) {
                $(v).width(colWidth[i]);
            });
        }).resize(); // Trigger resize handler

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(".sortable").sortable({connectWith: ".sortable",receive:function (e,t) {

            }});

        $(".sortable").sortable({
            connectWith: ".sortable",
            hoverClass: "ui-state-active",
            placeholder: "ui-state-highlight",
            cursor:"pointer",


            receive: function (e, t) {
                $(".affect").hide();
                if ($(this).attr("id")=='mats')
                {$(this).find(".matiere").prop("name","");
                }
                else {
                var num=$(this).closest("tr").attr("id");
                var tabname=$(this).attr("id");
                var salle='';
                var elem=$(this);
                var val=elem.find('.matiere').prop("value");
                    $(this).find(".matiere").prop("name",tabname+'['+num+']');
                $(this).addClass('table-active');
                $(this).removeClass('sortable');
                ///sallet fargin//
                    $.ajax({
                        url:"/fetch_salle_vide2",
                        method:"POST",
                        data:{jour:tabname,seance:num},
                        dataType:"text",
                        success:function(data)
                        {$(".list_salle").html("");
                            $(".list_salle").html(data);

                        }
                    });
                    $('.list_salle').change(function () {
                       $(".affect").show();
                        salle=$(".list_salle option:selected").val();
                        console.log(salle);


                    });
                    $('.affect').click(function () {

                        console.log(val);
                        var list=val.split('_');
                        var newval=list[0]+'_'+list[1]+'_'+salle;

                        elem.find(".matiere").prop("value",newval);
                    });

                $('#noticeModal').modal({backdrop: 'static',
                        keyboard: false});
                }
            },
            stop: function (e, t) {
                if ($(this).children().length == 0) {
                    $(this).addClass('test');
                    $(this).removeClass('table-active');
                    $(this).addClass('sortable');
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

        $("#class").change(function () {
            var idClasse=this.value;
            $("#salle").val(0);

            $.ajax({
                url:"/fetch_classeEmp",
                method:"POST",
                data:{idClasse:idClasse},
                dataType:"text",
                success:function(data)
                {   $(".here").html("");
                    $(".here").html(data);
                }
            });
            });

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
                     $("#class").val('0');
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

        $("#salle").change(function () {
           var idRoom=$(this).val();
           $("#class").val(0);
            $.ajax({
              url:"/fetch_emp_salle",
              method:"POST",
              data:{idRoom:idRoom},
              dataType:"text",
              success:function(data)
              {$(".here").html("");
               $(".here").html(data);

              }
            });
        });

        $("#jour").change(function () {
           var jour=$(this).val();
            $.ajax({
                url:"/fetch_salle_vide",
                method:"POST",
                data:{jour:jour},
                dataType:"text",
                success:function(data)
                {$(".sallerhere").html("");
                    $(".sallerhere").html(data);

                }
            });
        });



    </script>
@endsection
