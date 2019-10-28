@extends('layouts.backend')

@section('content')

<div class="block">
    <div class="block-content">
        <p class="font-size-sm text-muted"><b>Danh sách nhân viên</b></p>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-vcenter">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">STT</th>
                        <th>Họ tên</th>
                        <th style="width: 30%;">Email</th>
                        <th style="width: 15%;">trạng thái</th>
                        <th class="text-center" style="width: 122px;">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td class="text-center">1</td>
                        <td class="font-w600 font-size-sm">
                            <a href="be_pages_generic_profile.html">Laura Carr</a>
                        </td>
                        <td class="font-size-sm">client1<em class="text-muted">@example.com</em></td>
                        <td>
                            <span class="badge badge-danger">Disabled</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button style="margin-right: 5px" type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td class="font-w600 font-size-sm">
                            <a href="be_pages_generic_profile.html">Marie Duncan</a>
                        </td>
                        <td class="font-size-sm">client2<em class="text-muted">@example.com</em></td>
                        <td>
                            <span class="badge badge-primary">Personal</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button style="margin-right: 5px" type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td class="font-w600 font-size-sm">
                            <a href="be_pages_generic_profile.html">Andrea Gardner</a>
                        </td>
                        <td class="font-size-sm">client3<em class="text-muted">@example.com</em></td>
                        <td>
                            <span class="badge badge-success">VIP</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button style="margin-right: 5px" type="button" style="margin-right: 5px" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    <td class="text-center">4</td>
                        <td class="font-w600 font-size-sm">
                            <a href="be_pages_generic_profile.html">Amanda Powell</a>
                        </td>
                        <td class="font-size-sm">client4<em class="text-muted">@example.com</em></td>
                        <td>
                            <span class="badge badge-warning">Trial</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button style="margin-right: 5px" type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    <td class="text-center">5</td>
                        <td class="font-w600 font-size-sm">
                            <a href="be_pages_generic_profile.html">Danielle Jones</a>
                        </td>
                        <td class="font-size-sm">client5<em class="text-muted">@example.com</em></td>
                        <td>
                            <span class="badge badge-primary">Personal</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button style="margin-right: 5px" type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
