@extends('layouts.app')
@section('content')
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Perfil de usuario
                    <small>Gestion de perfil</small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header bg-red">
                            <div class="image-perfil" style="float:left; margin-right:15px;">
                                <img src="{{ asset('upload/'.Auth::user()->avatar)}}" width="48" height="48" alt="User" />
                            </div>
                            <h2>
                                {{ Auth::user()->name }} <small>{{ Auth::user()->username }}</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="email_address" class="form-control">
                                        <label class="form-label">Email Address</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" id="password" class="form-control">
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>

                                <input type="checkbox" id="remember_me_2" class="filled-in">
                                <label for="remember_me_2">Remember Me</label>
                                <br>
                                <button type="button" class="btn btn-primary m-t-15 waves-effect">LOGIN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
@stop