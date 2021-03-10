@extends('layouts.app')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="">{{ __('Employers') }}</h3>
                <div>
                    <a href="{{ route('employer.create') }}"
                       class="btn btn-primary btn-lg">{{ __('Create new employer') }}</a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-fixed table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th style="width: 50px">{{__('ID')}}</th>
                        <th>{{__('Name')}}</th>
                        <th>{{__('Last Name')}}</th>
                        <th>{{__('Email')}}</th>
                        <th>{{__('Phone')}}</th>
                        <th>{{__('Company')}}</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($items->isNotEmpty())
                        @foreach($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->lastname}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->company->name}}</td>
                                <td>
                                    <a href="{{route('employer.edit', ['employer' => $item->id])}}"
                                       class="btn btn-primary">{{__('Edit')}}</a>
                                    <button id="{{$item->id}}" data-action="{{route('employer.destroy', ['employer' => $item->id])}}" class="delete btn btn-danger">{{__('Delete')}}</button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>{{__('Not exist employer')}}</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
