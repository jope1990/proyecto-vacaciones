@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Añadir vacacion</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/assign/store') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('days_assigned') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Dias Tomados:</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="days_assigned" value="{{ old('days_assigned') }}">

                                @if ($errors->has('days_assigned'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('days_assigned') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Crear Area
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection