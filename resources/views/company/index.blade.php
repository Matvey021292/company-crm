@extends('layouts.app')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-right">
                    <a href="{{ route('company.create') }}"
                       class="btn btn-primary btn-lg">{{ __('site.createNewCompany') }}</a>
                </div>
                <h3 class="">{{ __('site.companies') }}</h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-fixed table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th style="width: 50px">{{__('ID')}}</th>
                        <th width="150">{{__('site.name')}}</th>
                        <th width="200">{{__('site.email')}}</th>
                        <th width="200">{{__('site.site')}}</th>
                        <th width="150">{{__('site.logo')}}</th>
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
                                            <img width="100" class="img-fluid" src="{{  Storage::url($item->logo) }}">
                                        </div>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{route('company.edit', ['company' => $item->id])}}"
                                       class="btn btn-primary">{{__('site.edit')}}</a>
                                    <button id="{{$item->id}}"
                                            data-action="{{route('company.destroy', ['company' => $item->id])}}"
                                            class="delete btn btn-danger">{{__('site.delete')}}</button>
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
