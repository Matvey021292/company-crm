@extends('layouts.app')

@section('content')
    @if($companies)
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$companies}}</h3>
                    <p>{{__('Companies')}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{route('company.index')}}" class="small-box-footer">{{__('More info')}} <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    @endif
    @if($employers)
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$employers}}</h3>

                    <p>{{__('Employers')}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">{{__('More info')}} <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    @endif
    <!-- ./col -->
@endsection
