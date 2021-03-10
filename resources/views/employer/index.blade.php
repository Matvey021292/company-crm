@extends('layouts.app')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="">{{ __('site.employers') }}</h3>
                <div>
                    <a href="{{ route('employer.create') }}"
                       class="btn btn-primary btn-lg">{{ __('site.createNewEmployer') }}</a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-fixed table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th width="50">{{__('ID')}}</th>
                        <th width="100">{{__('site.firstname')}}</th>
                        <th width="150">{{__('site.lastname')}}</th>
                        <th width="180">{{__('Email')}}</th>
                        <th width="180">{{__('site.phone')}}</th>
                        <th width="150">{{__('site.company')}}</th>
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
                                <td>{{isset($item->company) ? $item->company->name : __('site.noCompany')}}</td>
                                <td class="text-center">
                                    <a href="{{route('employer.edit', ['employer' => $item->id])}}"
                                       class="btn btn-primary">{{__('site.edit')}}</a>
                                    <button id="{{$item->id}}" data-action="{{route('employer.destroy', ['employer' => $item->id])}}" class="delete btn btn-danger">{{__('site.delete')}}</button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>{{__('site.exist')}}</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
