
@extends('layouts.industrious')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">

            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add Doctor</h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        
                        

                        <form action="{{ route('postDoctorPage') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" value="{{ old('name') }}" name="name" id="name" placeholder="Name" class="form-control">
                                <span class="error-red">{{ $errors->adddoctor->first('name') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile:</label>
                                <input type="text" value="{{ old('mobile') }}" name="mobile" id="mobile" placeholder="Mobile No." class="form-control" maxlength="10">
                                <span class="error-red">{{ $errors->adddoctor->first('mobile') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea name="description" id="description" placeholder="Description" class="form-control">{{ old('description') }}</textarea>
                                <span class="error-red">{{ $errors->adddoctor->first('description') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="specialization">Specialization (Enter every specialization on new line):</label>
                                <textarea name="specialization" id="specialization" placeholder="Specialization" class="form-control">{{ old('specialization') }}</textarea>
                                <span class="error-red">{{ $errors->adddoctor->first('specialization') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="fees">Fees:</label>
                                <input type="text" value="{{ old('fees') }}" name="fees" id="fees" placeholder="Doctor Fees" class="form-control">
                                <span class="error-red">{{ $errors->adddoctor->first('fees') }}</span>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="send" id="send" class="btn btn-primary">Save</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /page content -->

@endsection

