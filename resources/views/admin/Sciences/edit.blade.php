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
                            <form class="form-horizontal" action="{{ route('fenler.store') }}" method="POST">

                              {{ csrf_field() }}
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
                                          <select name="gs_group_id[]" class="form-control show-tick" multiple data-live-search="true" required>


                                              @foreach($fenn->qruplari as $science_val)



                                              <option selected value="{{ $science_val->group_id }}">{{ $science_val->group_name }}</option>


                                              @endforeach

                                          </select>
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
