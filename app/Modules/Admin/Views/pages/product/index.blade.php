@extends("Admin::layouts.default")

@section("content")
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Company</strong>
                    <small>Form</small>
                </div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Full</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <label class="switch switch-icon switch-success-outline">
                                    <input type="checkbox" class="switch-input" checked="">
                                    <span class="switch-label" data-on="" data-off=""></span>
                                    <span class="switch-handle"></span>
                                </label>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-xs" class="button"><i class="fa fa-trash"></i> Remove</button>
                                <button class="btn btn-success btn-xs" class="button"><i class="fa fa-edit"></i> Edit</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section("script")

@stop