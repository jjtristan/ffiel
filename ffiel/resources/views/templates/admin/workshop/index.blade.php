@extends('layouts.generals.main_template')
@section('page_title')
    {{ trans('workshop.title') }}
@endsection

@section('title')
    <i class="material-icons left medium">camera</i> {{ trans('workshop.title') }}
@endsection

@section('angular_controller')
    <div data-ng-controller="WorkshopsController as workshops">
@endsection

@section('end_angular_controller')
    </div>
@endsection

@section('filters')
@endsection

@section('button_delete')
@endsection

@section('buttons')

@endsection

@section('body_page')
    <div class="row">
        @include('templates.admin.workshop.partials.table')
        <div class="center">
            <dir-pagination-controls
                    max-size="15"
                    direction-links="true"
                    boundary-links="true" >
            </dir-pagination-controls>
        </div>
    </div>
@endsection