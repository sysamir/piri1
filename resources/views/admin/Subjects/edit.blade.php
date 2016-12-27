@extends('layouts.static')


@section('content')
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Mövzu redaktəsi
                            </h2>

                        </div>
                        <div class="body">
                            <form class="form-horizontal" action="{{ route('movzular.update', $movzu->subject_id) }}" method="POST">

                              {{ csrf_field() }}
                              <input type="hidden" name="_method" value="PATCH">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="subject_name">Mövzu adı</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" value="{{ $movzu->subject_name }}"  class="form-control" name="subject_name" placeholder="mövzu adını daxil edin" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="subject_science_id">Fənin adı</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">

                                    <div class="form-group">
                                        <div class="form-line">
                                          {{ Form::select('subject_science_id',
                                          $fennler->pluck('science_name', 'science_id')->toArray(),
                                          $movzu->fenni->science_id,
                                          ['class' => 'form-control show-tick']) }}
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
