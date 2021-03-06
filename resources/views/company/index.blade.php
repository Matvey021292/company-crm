@section('title', __('site.companies'))
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
                   <a href="{{ route('company.create') }}"
                      class="btn btn-primary btn-lg">{{ __('site.createNewCompany') }}</a>
               </div>
               <h3 class="">{{ __('site.companies') }}</h3>
           </div>
           <div class="card-body table-responsive p-0">
               @if($items->isNotEmpty())
               <table class="table table-fixed table-head-fixed">
                   <thead>
                   <tr>
                       <th width="100">{{__('ID')}}</th>
                       <th width="200">{{__('site.name')}}</th>
                       <th width="200">{{__('site.email')}}</th>
                       <th width="200">{{__('site.site')}}</th>
                       <th width="150">{{__('site.logo')}}</th>
                       <th></th>
                   </tr>
                   </thead>
                   <tbody>

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
                                   <small class="d-block">{{ __('site.countEmployee') }} : {{$item->employee()->count()}}</small>
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
