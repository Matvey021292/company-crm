@extends('layouts.app')

@section('content')
    <div class="col-md-6 mx-auto">
        <form action="{{route('employer.store')}}" method="post">
            <div class="card-body">
                <div class="form-group">
                    @include('partials.errors')
                </div>
                <div class="form-group">
                    @csrf
                </div>
                <div class="form-group">
                    <label for="employerInputName">{{__('site.firstname')}}</label>
                    <input type="text" class="form-control" id="employerInputName" name="name" placeholder="{{__('site.firstname')}}"
                           value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label for="employerInputName">{{__('site.lastname')}}</label>
                    <input type="text" class="form-control" id="employerInputName" name="lastname"
                           placeholder="{{__('site.lastname')}}" value="{{old('lastname')}}">
                </div>
                <div class="form-group">
                    <label for="employerInputEmail">{{__('site.email')}}</label>
                    <input type="email" class="form-control" id="employerInputEmail" name="email" placeholder="{{__('site.email')}}"
                           value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="employerInputSite">{{__('site.phone')}}</label>
                    <input type="text" class="form-control" id="employerInputSite" name="phone" placeholder="{{__('site.phone')}}"
                           value="{{old('phone')}}">
                </div>
                @if($companies->isNotEmpty())
                    <div class="form-group">
                        <label>{{__('site.company')}}</label>
                        <select name="company_id" class="form-control">
                            @foreach($companies as $company)
                                <option value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
                <button type="submit" class="w-100 btn btn-primary btn-lg">{{__('site.saveEmployer')}}</button>
            </div>
        </form>
    </div>
@endsection
