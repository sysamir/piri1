@extends('layouts.static')


@section('content')
            <!-- Etap 1 -->
            <div id="etap1" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Yeni Sual
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
                                    <label for="email_address_2">Qrupların seçimi</label>
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

                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Fənn seçimi</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                          <select name="science_id" class="fennl form-control show-tick"  data-live-search="true" required>
                                            <option value="">...</option>
                                          </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Mövzu seçimi</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                          <select name="subject_id" class="sub form-control show-tick"  data-live-search="true" required>
                                            <option value="">...</option>
                                          </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Ballar</label>
                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="müsbət bal" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="yanlış cavab üçün mənfi bal" />
                                        </div>
                                    </div>
                                </div>
                            </div>






                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Sual tipi seçimi</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                  <div class="demo-radio-button">
                                      <input name="group1" type="radio" id="radio_1" checked/>
                                      <label for="radio_1">Tip - 1</label>
                                      <input name="group1" type="radio" id="radio_2" />
                                      <label for="radio_2">Tip - 2</label>
                                  </div>
                                </div>
                            </div>



                                <div class="row clearfix">

                                </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->




            <!-- Etab 2 qarshilashdirma tipli -->
            <div id="etap2-t1" style="display: ;" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Sual Tip 1
                            </h2>

                        </div>
                        <div class="body">

                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Sual</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                          <textarea name="question_about" rows="4" class="form-control no-resize" placeholder="sualı daxil edin..."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Ballar</label>
                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="mübət bal" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="yanlış cavab üçün mənfi bal" />
                                        </div>
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

            <!-- Etab 2 6 cavab tipli -->
            <div id="etap2-t2" style="display: none;" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Sual Tip 2
                            </h2>

                        </div>
                        <div class="body">

                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Sual</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                          <textarea name="question_about" rows="4" class="form-control no-resize" placeholder="sualı daxil edin..."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Ballar</label>
                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="mübət bal" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="yanlış cavab üçün mənfi bal" />
                                        </div>
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
                     $(".fennl").append('<option value="'+fenn.science_id+'">'+fenn.science_name+'</option>');
                    //  alert(fenn.science_name);

                   });

                });
              });

              $('.fennl').on('change',function(e){

                var science_id = e.target.value;


                //ajax
                $(".sub").empty();
                $.get('/admin/ajax/science/' + science_id, function(data){

                   //ok
                   $.each(data, function(index, sub){
                    //  $("#sciences").append('<option value="">dsdsd</option>');
                     $(".sub").append('<option value="'+sub.subject_id+'">'+sub.subject_name+'</option>');
                    //  alert(fenn.science_name);

                   });

                });
              });

              $('#radio_1').on('change',function(e){

                    swal({
                    title: "Əminsiniz?",
                    text: "Əgər 1-ci tip sualı seçsəniz 2-ci tip sualın xanaları silinəcək!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Bəli!",
                    cancelButtonText: "Xeyr, geri qayıt!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                  },
                  function(isConfirm){
                    if (isConfirm) {
                      swal("Silindi!", "2-ci tip sulın xanaları silindi və 1-ci tip seçildi", "success");
                      $("#etap2-t1").show();
                      $("#etap2-t2").hide();

                    } else {
                      swal("Ləğv edildi", "Hər şey qaydasında :)", "error");
                      $("#radio_2").prop("checked", true)
                    }
                  });

                });

                $('#radio_2').on('change',function(e){
                        swal({
                        title: "Əminsiniz?",
                        text: "Əgər 2-ci tip sualı seçsəniz 1-ci tip sualın xanaları silinəcək!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Bəli!",
                        cancelButtonText: "Xeyr, geri qayıt!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                      },
                      function(isConfirm){
                        if (isConfirm) {
                          swal("Silindi!", "1-ci tip sulın xanaları silindi və 2-ci tip seçildi", "success");
                          $("#etap2-t1").hide();
                          $("#etap2-t2").show();

                        } else {
                          swal("Ləğv edildi", "Hər şey qaydasında :)", "error");
                          $("#radio_2").prop("checked", true)
                        }
                      });
                  });
            </script>



@endsection
