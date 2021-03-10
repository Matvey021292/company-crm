@extends('layouts.app')

@section('content')
    <div class="col-md-6 mx-auto">
        <form action="{{route('employer.update', ['employer' => $item->id] )}}" method="post"
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
                    <label for="employerInputName">{{__('employer name')}}</label>
                    <input type="text" class="form-control" id="employerInputName" name="name" placeholder="Name"
                           value="{{$item->name}}">
                </div>
                <div class="form-group">
                    <label for="employerInputEmail">{{__('employer email')}}</label>
                    <input type="email" class="form-control" id="employerInputEmail" name="email" placeholder="Email"
                           value="{{$item->email}}">
                </div>
                <div class="form-group">
                    <label for="employerInputSite">{{__('employer site')}}</label>
                    <input type="text" class="form-control" id="employerInputSite" name="site" placeholder="Site"
                           value="{{ !empty($item->site) ? $item->site : ''}}">
                </div>
                <div class="form-group">
                    <label for="employerInputFile">{{(__('employer logo'))}}</label>
                    @if($item->logo)
                    <div class="mb-2 widget-user-image">
                        <img width="100" id="prevLogo" class="img-fluid" src="{{  Storage::url($item->logo) }}" alt="employer Avatar">
                    </div>
                    @endif
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input"  name="logo" id="employerInputFile">
                            <label class="custom-file-label" for="employerInputFile">
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
                <button type="submit" class="w-100 btn btn-primary btn-lg">{{__('Edit employer')}}</button>
            </div>
        </form>
    </div>
@endsection
