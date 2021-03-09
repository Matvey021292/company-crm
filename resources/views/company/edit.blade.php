@extends('layouts.app')

@section('content')
    <div class="col-md-6 mx-auto">
        <form action="{{route('company.update', ['company' => $company->id] )}}"  method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    @include('partials.errors')
                </div>
                <div class="form-group">
                    @csrf
                    @method('patch')
                </div>
                <div class="form-group">
                    <label for="companyInputName">{{__('Company name')}}</label>
                    <input  type="text" class="form-control" id="companyInputName" name="name" placeholder="Name" value="{{$company->name}}">
                </div>
                <div class="form-group">
                    <label for="companyInputEmail">{{__('Company email')}}</label>
                    <input  type="email" class="form-control" id="companyInputEmail" name="email" placeholder="Email" value="{{$company->email}}">
                </div>
                <div class="form-group">
                    <label for="companyInputSite">{{__('Company site')}}</label>
                    <input type="text" class="form-control" id="companyInputSite" name="site" placeholder="Site" value="{{ $company->site ?? $company->site}}">
                </div>
                <div class="form-group">
                    <label for="companyInputFile">{{(__('Company logo'))}}</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file"  class="custom-file-input" name="logo" id="companyInputFile">
                            <label class="custom-file-label" for="companyInputFile">{{__('Choose file')}}</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">{{__('Upload')}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
                <button type="submit" class="w-100 btn btn-primary btn-lg">{{__('Edit company')}}</button>
            </div>
        </form>
    </div>
@endsection