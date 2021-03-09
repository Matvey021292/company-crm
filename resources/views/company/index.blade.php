@extends('layouts.app')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="">{{ __('Companies') }}</h3>
                <div>
                    <a href="{{ route('company.create') }}" class="btn btn-primary btn-lg" >{{ __('Create new company') }}</a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>{{__('ID')}}</th>
                        <th>{{__('Name')}}</th>
                        <th>{{__('Email')}}</th>
                        <th>{{__('Site')}}</th>
                        <th>{{__('logo')}}</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($companies->isNotEmpty())
                    @foreach($companies as $company)
                    <tr>
                        <td>{{$company->id}}</td>
                        <td>{{$company->name}}</td>
                        <td>{{$company->email}}</td>
                        <td>{{$company->site}}</td>
                        <td><img src="{{  asset('storage/app/' . $company->logo) }}" alt=""></td>
                        <td>
                            <a href="{{route('company.edit', ['company' => $company->id])}}" class="btn btn-primary">{{__('Edit')}}</a>
                            <button  class="btn btn-danger">{{__('Delete')}}</button>
                        </td>
                    </tr>
                    @endforeach
                    @else
                        <tr>
                            <td>{{__('Not exist company')}}</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
