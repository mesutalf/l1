@extends("app")

@section("evraklistesi")
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Table With Full Features</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <div role="grid" class="dataTables_wrapper form-inline" id="example1_wrapper"><div class="row"><div class="col-xs-6"><div id="example1_length" class="dataTables_length"><label><select name="example1_length" size="1" aria-controls="example1"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-xs-6"><div class="dataTables_filter" id="example1_filter"><label>Search: <input type="text" aria-controls="example1"></label></div></div></div><table class="table table-bordered table-striped dataTable" id="example1" aria-describedby="example1_info">
        <thead>
          <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 193px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rendering engine</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 267px;" aria-label="Browser: activate to sort column ascending">Browser</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 246px;" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 164px;" aria-label="Engine version: activate to sort column ascending">Engine version</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 114px;" aria-label="CSS grade: activate to sort column ascending">CSS grade</th></tr>
        </thead>

        <tfoot>
          <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
        </tfoot>
      <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
            <td class="  sorting_1">Gecko</td>
            <td class=" ">Firefox 1.0</td>
            <td class=" ">Win 98+ / OSX.2+</td>
            <td class=" ">1.7</td>
            <td class=" ">A</td>
          </tr><tr class="even">
            <td class="  sorting_1">Gecko</td>
            <td class=" ">Firefox 1.5</td>
            <td class=" ">Win 98+ / OSX.2+</td>
            <td class=" ">1.8</td>
            <td class=" ">A</td>
          </tr><tr class="odd">
            <td class="  sorting_1">Gecko</td>
            <td class=" ">Firefox 2.0</td>
            <td class=" ">Win 98+ / OSX.2+</td>
            <td class=" ">1.8</td>
            <td class=" ">A</td>
          </tr><tr class="even">
            <td class="  sorting_1">Gecko</td>
            <td class=" ">Firefox 3.0</td>
            <td class=" ">Win 2k+ / OSX.3+</td>
            <td class=" ">1.9</td>
            <td class=" ">A</td>
          </tr><tr class="odd">
            <td class="  sorting_1">Gecko</td>
            <td class=" ">Camino 1.0</td>
            <td class=" ">OSX.2+</td>
            <td class=" ">1.8</td>
            <td class=" ">A</td>
          </tr><tr class="even">
            <td class="  sorting_1">Gecko</td>
            <td class=" ">Camino 1.5</td>
            <td class=" ">OSX.3+</td>
            <td class=" ">1.8</td>
            <td class=" ">A</td>
          </tr><tr class="odd">
            <td class="  sorting_1">Gecko</td>
            <td class=" ">Netscape 7.2</td>
            <td class=" ">Win 95+ / Mac OS 8.6-9.2</td>
            <td class=" ">1.7</td>
            <td class=" ">A</td>
          </tr><tr class="even">
            <td class="  sorting_1">Gecko</td>
            <td class=" ">Netscape Browser 8</td>
            <td class=" ">Win 98SE+</td>
            <td class=" ">1.7</td>
            <td class=" ">A</td>
          </tr><tr class="odd">
            <td class="  sorting_1">Gecko</td>
            <td class=" ">Netscape Navigator 9</td>
            <td class=" ">Win 98+ / OSX.2+</td>
            <td class=" ">1.8</td>
            <td class=" ">A</td>
          </tr><tr class="even">
            <td class="  sorting_1">Gecko</td>
            <td class=" ">Mozilla 1.0</td>
            <td class=" ">Win 95+ / OSX.1+</td>
            <td class=" ">1</td>
            <td class=" ">A</td>
          </tr></tbody></table><div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example1_info">Showing 1 to 10 of 57 entries</div></div><div class="col-xs-6"><div class="dataTables_paginate paging_bootstrap"><ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>
    </div><!-- /.box-body -->
</div>
@endsection