@extends("Admin::layouts.default")

@section("content")
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Profile</strong>
                </div>
                <div class="card-body pb-4">
                    <ul id="myTab1" class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="pill" role="tab" aria-controls="profile"><b>Information</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="#changePass" data-toggle="pill" role="tab" aria-controls="changePass"><b>Change Password</b></a></li>
                    </ul>

                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active show " id="profile">
                            <table width="100%" class="table table-striped profile-table">
                                <tr>
                                    <td width="50%">
                                        <b><p class="title">Name:</p></b>
                                    </td>
                                    <td>
                                        <p>Phan Minh Liem</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%">
                                        <b><p class="title">Email:</p></b>
                                    </td>
                                    <td>
                                        <p>minhliemphp@gmail.com</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%">
                                        <b><p class="title">Create Date:</p></b>
                                    </td>
                                    <td>
                                        <p>20-10-2018</p>
                                    </td>
                                </tr>
                            </table>

                        </div>
                        <div class="tab-pane fade" id="changePass">
                            {{Form::open(['url' =>['/admin/test'], 'class' =>'form-changepass'  ] )}}
                            <div class="form-group">
                                <label for="old_password">Old Password</label>
                                {{Form::password('old_password', ['class'=>'form-control', 'id' =>'old_password' ])}}
                            </div>
                            <div class="form-group">
                                <label for="new_password">New Password</label>
                                {{Form::password('new_password', ['class'=>'form-control', 'id' =>'new_password' ])}}
                            </div>
                            <div class="form-group">
                                <label for="new_password_confirm">New Password Confirmation</label>
                                {{Form::password('new_password_confirmation', ['class'=>'form-control', 'id' =>'new_password_confirm' ])}}
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Change Password</button>
                            </div>

                            {{Form::close()}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop

@section("script")

@stop