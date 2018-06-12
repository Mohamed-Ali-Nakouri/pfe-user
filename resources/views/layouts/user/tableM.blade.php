@extends('layouts.dashboard')

@section('content')
<head>

        <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
{{ csrf_field() }}


@foreach($mats as $data)

@endforeach


<table>
    <tr>
        <td>Nom & Prenom :</td>
        <td>  {{Auth::User()->surname}}&nbsp{{Auth::User()->name}} </td>

    </tr>
    <tr>
        <td>Departement</td>
        <td>{{$data ->idDept}}</td>
    </tr>
    <tr>
        <td>Formation</td>
        <td>{{$data ->idForm}}</td>
    </tr>
    <tr>

        <th colspan="7" ><center></center></th>
    </tr>

    <tr>
        <th>Unite</th>
        <th>Nature_Unite</th>
        <th>Matiere</th>
        <th>coef Mat</th>
        <th>coefUe</th>

        <th>creditUE</th>

        <th>totalVolumeHoraire</th>
    </tr>




    <?php $v=''; ?>
    @foreach($mats as $data)
    <tr >
        @if($v != $data->nomUnite)
        <td>{{$data->nomUnite}} </td>
        <td>{{$data->natureUnite}}</td>
            @else
            <td></td>
            <td></td>
        @endif
        <td>{{$data ->libMat}} </td>
        <td>{{$data ->coef}} </td>
        <td>{{$data ->coefUe}}</td>
        <td>{{$data ->creditUe}}</td>
        <td>{{$data ->totalVol_Horaire}}</td>
        <?php $v=$data->nomUnite ?>

    </tr>

        @endforeach
</table>

</body>
@endsection
