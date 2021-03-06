@extends("app")

@section("evraklistesi")
<ul class="nav nav-tabs">
    <li class="active"><a aria-expanded="true" href="#tumevrak" data-toggle="tab">Tüm Evraklar</a></li>
    <li class=""><a aria-expanded="false" href="#gelenevrak" data-toggle="tab">Gelen Evrak</a></li>
    <li class=""><a aria-expanded="false" href="#gidenevrak" data-toggle="tab">Giden Evrak</a></li>
    <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
</ul>
<div class="tab-content">
    <div class="tab-pane active" id="tumevrak">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Table With Full Features</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form id="duzenle">
                    <input type="hidden" id="_token" name="_token" value="{{{ csrf_token() }}}" />
                </form>
                <div role="grid" class="dataTables_wrapper form-inline" id="example1_wrapper">
                    <div class="row">
                        <div class="col-xs-6">
                            <div id="example1_length" class="dataTables_length">
                                <label>
                                    <select name="example1_length" size="1" aria-controls="example1">
                                        <option value="10" selected="selected">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> records per page
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="dataTables_filter" id="example1_filter">
                                <label>Search: <input type="text" aria-controls="example1"></label>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-striped dataTable" id="example1" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 193px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Gönderen Kuruluş</th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 267px;" aria-label="Browser: activate to sort column ascending">İşlem Tarihi</th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 246px;" aria-label="Platform(s): activate to sort column ascending">Konu</th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 164px;" aria-label="Engine version: activate to sort column ascending">Engine version</th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 114px;" aria-label="CSS grade: activate to sort column ascending"></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Rendering engine</th>
                                <th rowspan="1" colspan="1">Browser</th>
                                <th rowspan="1" colspan="1">Platform(s)</th>
                                <th rowspan="1" colspan="1">Engine version</th>
                                <th rowspan="1" colspan="1"></th>
                            </tr>
                        </tfoot>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                            @foreach ($gelenler as $evrak)
                            <tr class="even">
                                <td class="  sorting_1"> {{ $evrak->gonderen_kurulus }} </td>
                                <td class=" "> {{ date("d-m-Y", strtotime($evrak->gelis_tarihi)) }}</td>
                                <td class=" ">{{ $evrak->konu }}</td>
                                <td class=" ">1.8</td>
                                <td class=" "><button type="button" id ="{{ $evrak->gelen_evrak_id }}" class="evrakDuzenle btn btn-xs btn-primary">Düzenle</button><button type="button" class="btn btn-xs btn-danger">Sil</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="dataTables_info" id="example1_info">Showing 1 to 10 of 57 entries</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="dataTables_paginate paging_bootstrap">
                                <ul class="pagination">
                                    <li class="prev disabled"><a href="#">← Previous</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="next"><a href="#">Next → </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div>  
    </div><!-- /.tab-pane -->
    <div class="tab-pane" id="gelenevrak">
        The European languages are members of the same family. Their separate existence is a myth.
        For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
        in their grammar, their pronunciation and their most common words. Everyone realizes why a
        new common language would be desirable: one could refuse to pay expensive translators. To
        achieve this, it would be necessary to have uniform grammar, pronunciation and more common
        words. If several languages coalesce, the grammar of the resulting language is more simple
        and regular than that of the individual languages.
    </div><!-- /.tab-pane -->
    <div class="tab-pane" id="gidenevrak">
        The European languages are members of the same family. Their separate existence is a myth.
        For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
        in their grammar, their pronunciation and their most common words. Everyone realizes why a
        new common language would be desirable: one could refuse to pay expensive translators. To
        achieve this, it would be necessary to have uniform grammar, pronunciation and more common
        words. If several languages coalesce, the grammar of the resulting language is more simple
        and regular than that of the individual languages.
    </div><!-- /.tab-pane -->
</div><!-- /.tab-content -->

// -- app/views/register.blade.php
<script type="text/javascript">
// < ![CDATA[
// < ![CDATA[
// < ![CDATA[
/*
    $(document).on("click", "._evrakDuzenle", function (e) {
        e.preventDefault();
        var username = $(".register-username").val();
        var mail = $(".register-mail").val();
        var password = $(".register-password").val();
        $_token = "{{ csrf_token() }}";
        $.ajax({
            url: "{{ URL::to('gelen') }}",
            type: "POST",
            data: {username: username, mail: mail, password: password,_token: _token} ,
            success: function (data) {
                if (data == "TRUE") {
                    window.location.href = "{{ URL::to('profil') }}/" + username;
                } else {
                    $(".modal-content .register-errors").slideUp('fast');
                    $(".modal-content .register-errors").slideDown('fast');
                    $(".modal-content .register-errors").html('<p>' + data + '</p>');
                }
            }
        });
    });
    */
// ]]>

    $(document).on("click", ".evrakDuzenle", function (e) {
        $.post( 
           "{!! URL::to('gelen') !!}",
           { _token: $('#duzenle input[name=_token]').val(), id: $(".evrakDuzenle").attr("id") },
           function(data) {
              console.log(data);
           }
        );
    });
</script>
@endsection