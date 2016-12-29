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
                                        <label for="email_address_2">Sual başlığı</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  class="form-control" name="science_name" placeholder="daxil edin" required>
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
                                          <select id="groups" name="group_id" class="form-control show-tick"  data-live-search="true" required>
                                            @foreach($gr as $gv)
                                            <option value="{{ $gv->group_id }}">{{ $gv->group_name }}</option>

                                            @endforeach

                                          </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                </div>
                                <div style="padding: 0px;" class="fennl col-md-10">

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
            <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

            <script type="text/javascript">
              $('#groups').on('change',function(e){

                var group_id = e.target.value;


                //ajax
                $(".fennl").empty();
                $.get('/admin/ajax/group/' + group_id, function(data){

                   //ok
                   $.each(data, function(index, fenn){
                    //  $("#sciences").append('<option value="">dsdsd</option>');
                     $("div.fennl").append('<input type="radio" name="science_name" id="'+fenn.science_id+'" class="filled-in" /><label style="padding-right: 10px;" for="'+fenn.science_id+'">'+fenn.science_name+'</label>');
                    //  alert(fenn.science_name);

                   });

                });
              });
            </script>



@endsection
