@extends('layouts.static')


@section('content')
<!-- Hover Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <a href="qruplar/create">Qrup Əlavə Et</a>

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
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>İD</th>
                                        <th>Qrupun Adı</th>
                                        <th>Fəaliyyət</th>

                                    </tr>
                                </thead>
                                <tbody>

                                  @foreach($group as $groupvalue)
                                    <tr>
                                        <th scope="row">{{ $groupvalue->id }}</th>
                                        <td>{{ $groupvalue->group_name }}</td>
                                        <td><div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Fəaliyyət <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Düzəliş Et</a></li>


                                        <form action="{{ url("qruplar/$groupvalue->id") }}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="submit" value="Sil" class="btn btn-danger">
                                          </form>
                                    </ul>
                                </div></td>

                                    </tr>
                                  @endforeach



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Rows -->

@endsection
