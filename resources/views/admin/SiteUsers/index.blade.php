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
                            <h2>Qeydiyaytlı istifadəçilər</h2>

                              <!-- <a href="{{ route('fenler.create') }}"><button type="button" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">add</i>
                                </button>
                              </a> -->



                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Istidəçi Adı</th>
                                        <th>Istidəçi Tam adı  </th>
                                        <th>Istidəçinin Qurupları</th>
                                        <th>Vəziyyəti</th>
                                        <th>Fəaliyyət</th>

                                    </tr>
                                </thead>
                                <tbody>

                                  @foreach($users as $user_val)
                                    <tr>
                                        <th scope="row">{{ $user_val->id }}</th>
                                        <td>{{ $user_val->name }}</td>
                                        <td>{{ $user_val->user_fullname }}</td>
                                        <td>
                                          @foreach($user_val->userQruplari as $a)
                                            {{ $a->group_name }}<br/>
                                          @endforeach
                                        </td>
                                        <td>
                                          @if($user_val->user_status == '1')
                                          <span class="label label-success"> Aktiv </span>
                                          @elseif($user_val->user_status == '0')
                                          <span class="label label-danger"> Deaktiv </span>
                                          @endif
                                        </td>
                                        <td>

                                          <!-- <div class="col-md-2">
                                            <form action="{{ route('istifadechiler.destroy', $user_val->id) }}" method="post">
                                              {{ csrf_field() }}
                                              <input type="hidden" name="_method" value="DELETE">
                                              <input type="submit" value="Sil" class="btn btn-danger">
                                            </form>
                                          </div> -->

                                          <div class="">
                                            <a href="{{ route('istifadechiler.edit', $user_val->id) }}" class="btn btn-primary">Redaktə</a>
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
