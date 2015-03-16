@extends("app")

@section("evraklistesi")
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Konulu evrağın ayrıntıları</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
        <div role="grid" class="dataTables_wrapper form-inline" id="example1_wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <p>
                                    <strong>{{ $evrak->evrak_no}}</strong>. numara ve <strong>{{ $evrak->konu}}</strong> konulu evrak ile ilgili işlem yapıyorsunuz. <small>Notlar...</small>
                                </p>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-2 column">
                                <button type="button" class="btn btn-sm btn-primary">Default</button> <button type="button" class="btn btn-sm btn-danger">Default</button>
                            </div>
                            <div class="col-md-6 column">
                                <form role="form">
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label><input class="form-control" id="exampleInputEmail1" type="email" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label><input class="form-control" id="exampleInputPassword1" type="password" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label><input id="exampleInputFile" type="file" />
                                        <p class="help-block">
                                            Example block-level help text here.
                                        </p>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" /> Check me out</label>
                                    </div> <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                            </div>
                            <div class="col-md-4 column">
                                <dl>
                                    <dt>
                                    Gönderen Kuruluş
                                    </dt>
                                    <dd>
                                        {{ $evrak->gonderen_kisi}}
                                    </dd>
                                    <dt>
                                    Gönderen Kişi
                                    </dt>
                                    <dd>
                                        {{ $evrak->gonderen_kurulus}}
                                    </dd>
                                    <dt>
                                    Geliş Tarihi:
                                    </dt>
                                    <dd>
                                        {{ date("d-m-Y", strtotime($evrak->gelis_tarihi))}}
                                    </dd>
                                    <dd>
                                        Donec id elit non mi porta gravida at eget metus.
                                    </dd>
                                    <dt>
                                    Malesuada porta
                                    </dt>
                                    <dd>
                                        Etiam porta sem malesuada magna mollis euismod.
                                    </dd>
                                    <dt>
                                    Felis euismod semper eget lacinia
                                    </dt>
                                    <dd>
                                        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                Product
                                            </th>
                                            <th>
                                                Payment Taken
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                TB - Monthly
                                            </td>
                                            <td>
                                                01/04/2012
                                            </td>
                                            <td>
                                                Default
                                            </td>
                                        </tr>
                                        <tr class="active">
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                TB - Monthly
                                            </td>
                                            <td>
                                                01/04/2012
                                            </td>
                                            <td>
                                                Approved
                                            </td>
                                        </tr>
                                        <tr class="success">
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                TB - Monthly
                                            </td>
                                            <td>
                                                02/04/2012
                                            </td>
                                            <td>
                                                Declined
                                            </td>
                                        </tr>
                                        <tr class="warning">
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                TB - Monthly
                                            </td>
                                            <td>
                                                03/04/2012
                                            </td>
                                            <td>
                                                Pending
                                            </td>
                                        </tr>
                                        <tr class="danger">
                                            <td>
                                                4
                                            </td>
                                            <td>
                                                TB - Monthly
                                            </td>
                                            <td>
                                                04/04/2012
                                            </td>
                                            <td>
                                                Call in to confirm
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.box-body -->
</div>
@endsection