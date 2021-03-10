@extends('layouts.app')

@section('content')
    <div class="col-md-6 mx-auto">
        <form action="{{route('company.update', ['company' => $item->id] )}}" method="post"
              enctype="multipart/form-data">
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
                    <input type="text" class="form-control" id="companyInputName" name="name" placeholder="Name"
                           value="{{$item->name}}">
                </div>
                <div class="form-group">
                    <label for="companyInputEmail">{{__('Company email')}}</label>
                    <input type="email" class="form-control" id="companyInputEmail" name="email" placeholder="Email"
                           value="{{$item->email}}">
                </div>
                <div class="form-group">
                    <label for="companyInputSite">{{__('Company site')}}</label>
                    <input type="text" class="form-control" id="companyInputSite" name="site" placeholder="Site"
                           value="{{ !empty($item->site) ? $item->site : ''}}">
                </div>
                <div class="form-group">
                    <label for="companyInputFile">{{(__('Company logo'))}}</label>
                    <div class="mb-2 widget-user-image">
                        <img width="100" id="prevLogo" class="@if(!$item->logo) d-none @endif img-fluid" src="{{  Storage::url($item->logo) }}"
                             alt="Company Avatar">
                    </div>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="logo" id="companyInputFile">
                            <label class="custom-file-label" for="companyInputFile">
                                @if($item->logo)
                                    {{ $item->logo}}
                                @else
                                    {{__('Choose file')}}
                                @endif
                            </label>
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
