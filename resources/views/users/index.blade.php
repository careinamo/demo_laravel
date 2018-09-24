@extends('layouts.app')
@section('content')
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Gestion de usuario
                    <small>usuario registrados en aplicacion</small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Listados de Usuarios.
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            @if(Session::has('notice'))
                                <div class="alert alert-success" role="alert">{{ Session::get('notice') }}</div>
                            @endif
                            @if($users->count())
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable"">
                                        <thead>
                                            <tr>
                                                <th> name </th>
                                                <th> Username </th>
                                                <th> Email </th> 
                                                <th> Avatar </th>  
                                                @role('administrador')                                               
                                                    <th></td>
                                                @endrole
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                            <tr>
                                                <td> {{ $user->name }} </td>
                                                <td> {{ $user->username }} </td>
                                                <td> {{ $user->email }} </td>                                                
                                                <td>
                                                    <div class="image-perfil">
                                                        <img src="{{ asset('upload/'.$user->avatar)}}" width="48" height="48" alt="User" />
                                                    </div>
                                                </td>       
                                                @role('administrador')                                     
                                                <td>                                                    
                                                    <a href="javascript:void(0);" class="btn btn-default waves-effect waves-red pull-right">EDITAR</a> </td>
                                                </td>
                                                @endrole
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                            <p> No se han encontrado usuarios </p>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
@stop