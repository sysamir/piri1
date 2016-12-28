@extends('layouts.static')


@section('content')
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Istifadəçi Redaktəsi - <b>"{{ $user->name }}"</b>
                            </h2>

                        </div>
                        <div class="body">
                            <form class="form-horizontal" action="{{ route('istifadechiler.update', $user->id) }}" method="POST">

                              {{ csrf_field() }}
                              <input type="hidden" name="_method" value="PATCH">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Ad, Soyad</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" value="{{ $user->user_fullname }}"  class="form-control" name="user_fullname" placeholder="ad, soyad daxil edin" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Email</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" value="{{ $user->email }}"  class="form-control" name="email" placeholder="email daxil edin" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Telefon</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" value="{{ $user->user_phone }}"  class="form-control" name="user_phone" placeholder="telefonu daxil edin" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Vəziyyət</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                              <select name="user_status" class="form-control show-tick">
                                                  <option {{ $user->user_status == 1 ? 'selected' : '' }} value="1">Aktiv</option>
                                                  <option {{ $user->user_status == 0 ? 'selected' : '' }} value="0">Deaktiv</option>
                                              </select>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Qrupları</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">

                                    <div class="form-group">
                                        <div class="form-line">
                                          {{ Form::select('gu_group_id[]',
                                          $gr->pluck('group_name', 'group_id')->toArray(),
                                          $user->userQruplari->pluck('group_id')->toArray(),
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
