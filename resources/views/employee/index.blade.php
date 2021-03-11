@section('title', __('site.employees'))
@extends('layouts.app')

@section('content')
    <div class="col-12">
        <div class="form-group">
            @include('partials.notification')
            <input type="hidden" name="confirm" value="{{__('site.delete')}}">
        </div>
        <div class="card">
            <div class="card-header">
                <div class="float-right">
                    <a href="{{ route('employee.create') }}"
                       class="btn btn-primary btn-lg">{{ __('site.createNewEmployee') }}</a>
                </div>
                <h3 class="">{{ __('site.employees') }}</h3>
            </div>
            <div class="card-body table-responsive p-0">
                @if($items->isNotEmpty())
                    <table class="table table-fixed table-head-fixed">
                        <thead>
                        <tr>
                            <th width="100">{{__('ID')}}</th>
                            <th width="100">{{__('site.firstname')}}</th>
                            <th width="100">{{__('site.lastname')}}</th>
                            <th width="180">{{__('Email')}}</th>
                            <th width="180">{{__('site.phone')}}</th>
                            <th width="150">{{__('site.company')}}</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->lastname}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{isset($item->company) ? $item->company->name : __('site.noCompany')}}</td>
                                <td class="text-center">
                                    <a href="{{route('employee.edit', ['employee' => $item->id])}}"
                                       class="btn btn-primary">{{__('site.edit')}}</a>
                                    <button id="{{$item->id}}"
                                            data-action="{{route('employee.destroy', ['employee' => $item->id])}}"
                                            class="delete btn btn-danger">{{__('site.delete')}}</button>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                @else
                    <h3 class="py-3 text-center">{{__('site.exist')}}</h3>
                @endif
            </div>
        </div>
        <div class="text-center">
            {{$items->links()}}
        </div>
    </div>
@endsection
