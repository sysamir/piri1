@extends('layouts.static')


@section('content')
<!-- Hover Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                      @if(Session::has('mesaj'))
                          <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                              {{ Session::get('mesaj') }}
                          </div>
                      @endif

                        <div class="header">
                            <h2>

                              <a href="{{ route('fenler.create') }}"><button type="button" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">add</i>
                                </button></a>



                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Fənn Adı</th>
                                        <th>Fənn Qurupları</th>
                                        <th>Fəaliyyət</th>

                                    </tr>
                                </thead>
                                <tbody>

                                  @foreach($fenler as $science_val)
                                    <tr>
                                        <th scope="row">{{ $science_val->science_id }}</th>
                                        <td>{{ $science_val->science_name }}</td>
                                        <td>
                                          @foreach($science_val->qruplari as $a)
                                            {{ $a->group_name }}<br/>
                                          @endforeach
                                        </td>
                                        <td>

                                          <div class="col-md-2">
                                            <form action="{{ route('qruplar.destroy', $science_val->science_id) }}" method="post">
                                              {{ csrf_field() }}
                                              <input type="hidden" name="_method" value="DELETE">
                                              <input type="submit" value="Sil" class="btn btn-danger">
                                            </form>
                                          </div>

                                          <div class="col-md-3">
                                            <a href="{{ route('qruplar.edit', $science_val->science_id) }}" class="btn btn-primary">Redaktə</a>
                                          </div>
                                        </td>

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
