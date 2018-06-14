@extends('layouts.dashboard')
@section('content')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">



    <style>

        se{
            font-weight: bolder;
        }
        .se{
            font-weight: bolder;
        }
        th{
            text-align:center;
        }
        textarea
        {
            width: 100%;
            height: 100%;
            resize: none;

        }


        * {
            box-sizing:border-box;
        }
        .left {

            padding-top:20px;
            padding-bottom:20px;
            margin: auto;
            float: left;
            width:35%; /* The width is 20%, by default */
        }

        .main {
            margin: auto;
            padding-top:20px;
            float: left;
            width:30%; /* The width is 60%, by default */
        }

        .right {
            margin-bottom: 2%;
            padding-top:20px;
            float: right;
            width:35%; /* The width is 20%, by default */
        }


        /* Use a media query to add a break point at 800px: */
        @media screen and (max-width:800px) {
            .left, .main, .right {
                width:100%; /* The width is 100%, when the viewport is 800px or smaller */
            }
        }
        /* for the DayTable */
        .tg  {border-collapse:collapse;border-spacing:0;border-color:#999; width: 75%; height: 75%; margin:auto; }
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:5px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-top-width:1px;border-bottom-width:1px;border-color:#999;color:#444;background-color:#F7FDFA;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:5px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-top-width:1px;border-bottom-width:1px;border-color:#999;color:#fff;background-color:#26ADE4;}
        .tg .tg-jsj9{font-size:16px;font-family:"Comic Sans MS", cursive, sans-serif !important;;text-align:center;vertical-align:top}
        .tg .tg-aqpe{font-size:16px;font-family:"Comic Sans MS", cursive, sans-serif !important;;text-align:center}
        .tg .tg-gu9h{background-color:#D2E4FC;font-size:16px;font-family:"Comic Sans MS", cursive, sans-serif !important;;text-align:center;vertical-align:top}





        #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 39px; }

    </style>


    <div style="margin-left: 2%;margin-right: 2%;">
        <div class="left">
            <p class="c1"style="text-align: center;font-size: large;">République Tunisienne <br>
                Ministére de l'Enseignement Supérieur,de la <br>
                Recherche Scientifique

                Direction Générale des Etudes Technologiques <br>
                __**__ <br>
                Institue Supérieur des Etudes Technologiques <br>
                Sousse
            </p>
        </div>
        <div class="main" style="background: none">
            <img src="{{asset('img/TnLogo.png')}}"  style="max-width:30%;display: block;margin-left: auto;margin-right: auto;"/>
            <br>
        </div>
        <div class="right">
            <p class="c2" style="text-align: center;font-size: large;">
                الجمهرية التونسية <br>
                وزارة التعليم العالي والبحث العلمي <br>
                <br>
                لإدارة العامة للدراسات التكنولوجية <br>
                __**__ <br>
                المعهد العالي للدراسات التكنولوجية <br>
                سوسة <br>
            </p>

        </div>
        <div class="personalInfo">
            <p style="margin-bottom: -1%;font-size: large;margin-left: 30%;">Département Technologies de l'Informatique</p> <br>
            <hr>
            <p style="text-align: center;font-size: larger;font-style: italic;font-weight: bold;">Fiche d'Orientation <br></p>
            <hr>
            <table border="0">

                <tr><td><se>Nom:</se>  {{Auth::User()->surname}}</td><td><se>Prénom:</se> {{Auth::User()->name}}  </td></tr>
                <tr><td><se>NCE:</se>  </td></tr>
                <tr><td><se>E-mail:</se> {{Auth::User()->email}} </td></tr>
            </table>
        </div>
        <br><br><br>
        <p style="text-align: left;font-size: larger;">
        <h5> Classez Votre choix de parcours : (  Exemple : 1 ,2 ,3)</h5></p>
        <form  method="post">
            @csrf
            {{csrf_field()}}
            <div class="MatChoice">

                <table border="0" style="width: 100%;margin-top: 2%">
                    <tr>
                        <th style="width: 50%" align="center"><h4>Parcours</h4></th>

                    </tr>





                                    <tr>
                                        <td style="text-align: center"><br>
                                            <ul id="sortable">
                                                @foreach($forms as $data)
                                <li class="ui-state-default">{{$data->libForm}} </li>
                                            @endforeach
                                            </ul>
                                        </td>


                                    </tr>





                </table>
            </div>

            <br><br>
            <button type="submit" class="sub btn btn-outline-success" formaction="/oritoPrint" value="Confirmer" style="float: right; margin-top: 2%;margin-right: 50%; ;">Save</button>
        </form>

    </div>
@section('custemScript')
<script>

    $('option:selected', this).remove();
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();

    </script>
@endsection
@endsection
