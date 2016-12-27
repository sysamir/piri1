@extends('layouts.static')


@section('content')
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Yeni fənn
                            </h2>

                        </div>
                        <div class="body">
                            <form class="form-horizontal" action="{{ route('fenler.update', $fenn->science_id) }}" method="POST">

                              {{ csrf_field() }}
                              <input type="hidden" name="_method" value="PATCH">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Fənn adı</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" value="{{ $fenn->science_name }}"  class="form-control" name="science_name" placeholder="fənn adını daxil edin" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Qrupların adı</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">

                                    <div class="form-group">
                                        <div class="form-line">
                                          {{ Form::select('gs_group_id[]',
                                          $gr->pluck('group_name', 'group_id')->toArray(),
                                          $fenn->qruplari->pluck('group_id')->toArray(),
                                          ['multiple' => true, 'class' => 'form-control show-tick']) }}
                                        </div>
                                    </div>


                                </div>

                                <div class="row clearfix">

                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Yaddaşda Saxla</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->

@endsection
