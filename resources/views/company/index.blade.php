@extends('layouts.app')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="">{{ __('Companies') }}</h3>
                <div>
                    <a href="{{ route('company.create') }}"
                       class="btn btn-primary btn-lg">{{ __('Create new company') }}</a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-fixed table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th style="width: 50px">{{__('ID')}}</th>
                        <th>{{__('Name')}}</th>
                        <th>{{__('Email')}}</th>
                        <th>{{__('Site')}}</th>
                        <th>{{__('logo')}}</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($items->isNotEmpty())
                        @foreach($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->site}}</td>
                                <td>
                                    @if($item->logo)
                                        <div class="widget-user-image">
                                            <img width="100" class="img-fluid" src="{{  Storage::url($item->logo) }}"
                                                 alt="Company Avatar">
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('company.edit', ['company' => $item->id])}}"
                                       class="btn btn-primary">{{__('Edit')}}</a>
                                    <button id="{{$item->id}}"
                                            data-action="{{route('company.destroy', ['company' => $item->id])}}"
                                            class="delete btn btn-danger">{{__('Delete')}}</button>
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
