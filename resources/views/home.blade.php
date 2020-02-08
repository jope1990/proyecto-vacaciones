@extends('layouts.web')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Trabajadores Activos</div>
                <div class="panel-body">
                
                
                        {{ Form::open(['route' => 'home', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                            
                        {{ Form::close() }}
                    
                

                    @if($workers->isEmpty())
                    <h1 class="text-center">No existe trabajadores registrados</h1>
                    @else
                        <table id="example" class="table table-hover">
                            <thead>
                            <tr >
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th class="success" style="text-align:center" colspan="3">Dias Vacaciones</th>
                                <th class="success" style="text-align:center" colspan="3">Permisos</th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th style="font-size:80%;">Nombre</th>
                                <th style="font-size:80%;">Celular</th>
                                <th style="font-size:80%;">Fecha Entrada</th>
                                <th style="font-size:80%;">Area</th>
                                <th style="font-size:80%;">Puesto</th>
                                <th style="font-size:80%;" class="success">Ganados</th>
                                <th style="font-size:80%;" class="success">Tomados</th>
                                <th style="font-size:80%;" class="success">Restantes</th>
                                <th style="font-size:80%;" class="success">Dias</th>
                                <th style="font-size:80%;" class="success">Horas</th>
                                <th style="font-size:80%;" class="success">Hrs/Dias</th>
                                <th style="font-size:80%;">Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($workers as $worker)
                            <tr>
                                <td scope="row">{{$worker->id}}</td>
                                <td style="font-size:85%;">{{$worker->name}}</td>
                                <td style="font-size:85%;">{{$worker->cellphone}}</td>
                                <td style="font-size:85%;">{{$worker->date_in}}</td>
                                <td style="font-size:85%;">{{$worker->area->name}}</td>
                                <td style="font-size:85%;">{{$worker->position}}</td>
                                <td class="success">{{$vacationDays=MyHelper::vacationDays($worker->date_in)}}</td>
                                <td style="font-size:85%;" class="success">{{$vacationTaken=MyHelper::vacationTaken($worker->id)}}</td>
                                <td style="font-size:85%;" class="success">{{$vacationDays-$vacationTaken}}</td>
                                <td style="font-size:85%;" class="success">{{$workPermit=MyHelper::workPermitDays($worker->id)}}</td>
                                <td style="font-size:85%;" class="success">{{$workPermitHours=MyHelper::workPermitHours($worker->id)}}</td>
                                <td style="font-size:85%;"class="success">{{$seg_a_dhms=MyHelper::seg_a_dhms($worker->id)}}</td>
                                <td>
                                    
                                    <!-- Single button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                        <!--inicio Menu-->
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="{{ url('/worker/show/'.Crypt::encrypt($worker->id)) }}">Informacion de {{$worker->name}}</a></li>
                                            <li class="divider"></li>
                                            <li><a href="{{ url('/vacation/create/'.Crypt::encrypt($worker->id).'/'.Crypt::encrypt($worker->name)) }}">Asignar Vacaciones</a></li>
                                          
                                            <li class="divider"></li>
                                            <li class="dropdown-submenu">
                                                <a tabindex="-1" href="#">Asignar Permiso</a>
                                                <ul class="dropdown-menu">
                                                    <!--NO APARECE EL SUB MENU-->
                                                    <li><a tabindex="-1" href="{{ url('/permit/create/'.Crypt::encrypt($worker->id).'/'.Crypt::encrypt($worker->name)) }}">Permiso por dias</a></li>
                                                    <li><a tabindex="-1" href="{{ url('/permit/create1/'.Crypt::encrypt($worker->id).'/'.Crypt::encrypt($worker->name)) }}" >Permiso por horas</a></li>
                                                </ul>
                                            </li>  
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
