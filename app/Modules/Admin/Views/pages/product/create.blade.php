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
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" id="company" placeholder="Enter your company name">
                    </div>

                    <div class="form-group">
                        <label for="vat">VAT</label>
                        <input type="text" class="form-control" id="vat" placeholder="PL1234567890">
                    </div>

                    <div class="form-group">
                        <label for="street">Street</label>
                        <input type="text" class="form-control" id="street" placeholder="Enter street name">
                    </div>

                    <div class="row">

                        <div class="form-group col-sm-8">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" placeholder="Enter your city">
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="postal-code">Postal Code</label>
                            <input type="text" class="form-control" id="postal-code" placeholder="Postal Code">
                        </div>

                    </div>
                    <div class="form-group">
                        <label >Hình đại diện:</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-success">
                                    <i class="fa fa-picture-o"></i> Chọn
                                </a>
                            </span>
                            <input id="thumbnail" class="form-control" type="hidden" name="img_url">
                        </div>
                        <img id="holder" style="margin-top:15px;max-height:100px;">
                    </div>
                    <!--/.row-->

                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" id="country" placeholder="Country name">
                    </div>

                </div>
                <div class="card-footer">
                    <a class="btn btn-sm btn-warning text-white" href="{!! url()->previous() !!}"><i class="fa fa-backward"></i> Cancel</a>
                    <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-dot-circle-o"></i> Save</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section("script")

@stop