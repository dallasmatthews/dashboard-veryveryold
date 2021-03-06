@extends('layouts.create')

@section('page-title')
    <h1>
        <i class="fa fa-user"></i> Create a new Fan
    </h1>
    <p class="lead">
        Add the basic details (more options on the next page).
    </p>
@stop

@section('col1')
    <div class="well"><!-- Well -->
        <h4 class="text-primary1"><i class="fa fa-pencil"></i> What's your new fan's name...?</h4>
        
            {{ Former::open()
            ->role('Form')
            ->class('')
            ->id('create_contact_div')
            ->method('POST')
            ->route('app.contacts.store');
            // ->populate($record->resource);
            
            }}
                <div class="form-group col-lg-12 col-md-12 col-sm-12  col-xs-12">
                    {{ Former::select('title')->class('form-control input-lg')->options($user->config['titles']) }}
                </div>

                <div class="form-group col-lg-12 col-md-12 col-sm-12  col-xs-12">
                    {{ Former::text('first_name')->class('form-control input-lg')->placeholder('E.g. Lionel') }}
                </div>

                <div class="form-group col-lg-12 col-md-12 col-sm-12  col-xs-12">
                    {{ Former::text('last_name')->class('form-control input-lg')->placeholder('E.g. Blair') }}
                </div>

               <div class="form-group col-lg-12 col-md-12 col-sm-12  col-xs-12">
                    {{ Former::text('nickname')->class('form-control input-lg')->placeholder('E.g. Dancing Li')->label('Known As') }}
                </div>

                <div class="form-group col-lg-12 col-md-12 col-sm-12  col-xs-12">
                    {{ Former::tel('mobile_phone')->class('form-control input-lg')->placeholder('E.g. 07703545343') }}
                </div>

                <div class="form-group col-lg-12 col-md-12 col-sm-12  col-xs-12">
                    {{ Former::tel('home_phone')->class('form-control input-lg')->placeholder('E.g. 01614536464') }}
                </div>

                <div class="form-group col-lg-12 col-md-12 col-sm-12  col-xs-12">
                    {{ Former::email('email')->class('form-control input-lg')->placeholder('E.g. lionel@GiveUsAClue.com') }}
                </div>

                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button type="submit" class="btn btn-lg btn-success pull-right"><i class="fa fa-check"></i> Create this Fan</button>
                </div>   

            {{ Former::close() }}
            
            <div class="form-group ">
                <p class="help-block"><strong>Got more to say?</strong> Don't worry, there's space on the next page for all that</p>
            </div>
     
    </div><!-- /Well -->
@stop


