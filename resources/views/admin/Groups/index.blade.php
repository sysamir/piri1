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

                              <a href="qruplar/create"><button type="button" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">add</i>
                                </button></a>



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
                                        <th scope="row">{{ $groupvalue->group_id }}</th>
                                        <td>{{ $groupvalue->group_name }}</td>
                                        <td>

                                          <div class="col-md-1">
                                            <form action="{{ route('qruplar.destroy', $groupvalue->group_id) }}" method="post">
                                              {{ csrf_field() }}
                                              <input type="hidden" name="_method" value="DELETE">
                                              <input type="submit" value="Sil" class="btn btn-danger">
                                            </form>
                                          </div>

                                          <div class="col-md-3">
                                            <a href="{{ route('qruplar.edit', $groupvalue->group_id) }}" class="btn btn-primary">Redaktə</a>
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
