@section('title', __('site.company'))
@extends('layouts.app')

@section('content')
    <div class="col-md-6 mx-auto">
        <form action="{{route('company.store')}}" method="post"  enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    @include('partials.errors')
                </div>
                <div class="form-group">
                    @csrf
                </div>
                <div class="form-group">
                    <label for="companyInputName">{{__('site.name')}}</label>
                    <input  type="text" class="form-control" id="companyInputName" name="name" placeholder="{{__('site.name')}}" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label for="companyInputEmail">{{__('site.email')}}</label>
                    <input  type="email" class="form-control" id="companyInputEmail" name="email" placeholder="{{__('site.email')}}" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="companyInputSite">{{__('site.site')}}</label>
                    <input type="text" class="form-control" id="companyInputSite" name="site" placeholder="{{__('site.site')}}" value="{{old('site')}}">
                </div>
                <div class="form-group">
                    <label for="companyInputFile">{{(__('site.logo'))}}</label>
                    <div class="mb-2 widget-user-image">
                        <img width="100" id="prevLogo" class="d-none img-fluid" src="">
                    </div>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file"  class="custom-file-input" name="logo" id="companyInputFile">
                            <label class="custom-file-label" for="companyInputFile">{{__('site.choseFile')}}</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">{{__('site.upload')}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
                <button type="submit" class="w-100 btn btn-primary btn-lg">{{__('site.saveCompany')}}</button>
            </div>
        </form>
    </div>
@endsection
