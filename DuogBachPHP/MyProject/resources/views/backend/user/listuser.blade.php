@extends("backend/master/master")
@section("title","Dashboard User")
@section("main")

<!--main-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách thành viên</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách thành viên</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">

                <div class="panel-body">
                    <div class="bootstrap-table">
                        <form method="post">
                            <div class="table-responsive">
                                <div class="alert alert-success" role="alert">
                                    <strong>Thành Công</strong>
                                </div>
                                <a href="/admin/user/create" class="btn btn-primary">Thêm Thành viên</a>
                                <table class="table table-bordered" style="margin-top:20px;">

                                    <thead>
                                        <tr class="bg-primary">
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Full</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Level</th>
                                            <th width='18%'>Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>duogbachdev@gmail.com</td>
                                            <td>duogbachdev</td>
                                            <td>vietnam</td>
                                            <td>0123456789</td>
                                            <td>1</td>
                                            <td>
                                                <a href="/admin/user/edit/" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                                <a onclick="return del_user()" href="/admin/user/del/" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div align='right'>
                                    DuogBachDev
                                </div>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
            <!--/.row-->


        </div>
        <!--end main-->

        <script>
            function del_user() {
                return confirm("Bạn muốn xóa?");
            }
        </script>
        <!-- javascript -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/chart.min.js"></script>

        </body>

        </html>
        @stop