@extends('layouts.app')

@section('content')
    <div class="col-md-6 mx-auto">
        <form action="{{route('employer.update', ['employer' => $item->id] )}}" method="post">
            <div class="card-body">
                <div class="form-group">
                    @include('partials.errors')
                </div>
                <div class="form-group">
                    @csrf
                    @method('patch')
                </div>
                <div class="form-group">
                    <label for="employerInputName">{{__('Employer name')}}</label>
                    <input type="text" class="form-control" id="employerInputName" name="name" placeholder="Name"
                           value="{{$item->name}}">
                </div>
                <div class="form-group">
                    <label for="employerInputName">{{__('Employer last name')}}</label>
                    <input type="text" class="form-control" id="employerInputName" name="lastname"
                           placeholder="Last Name" value="{{$item->lastname}}">
                </div>
                <div class="form-group">
                    <label for="employerInputEmail">{{__('Employer email')}}</label>
                    <input type="email" class="form-control" id="employerInputEmail" name="email" placeholder="Email"
                           value="{{$item->email}}">
                </div>
                <div class="form-group">
                    <label for="employerInputSite">{{__('Employer phone')}}</label>
                    <input type="text" class="form-control" id="employerInputSite" name="phone" placeholder="Phone"
                           value="{{$item->phone}}">
                </div>
                @if($companies->isNotEmpty())
                    <div class="form-group">
                        <label>Category</label>
                        <select name="company_id" class="form-control">
                            @foreach($companies as $company)
                                <option @if($company->id == $item->company_id) selected @endif  value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
                <button type="submit" class="w-100 btn btn-primary btn-lg">{{__('Save employer')}}</button>
            </div>
        </form>
    </div>
@endsection
