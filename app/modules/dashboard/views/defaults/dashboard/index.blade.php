@extends('layouts.index')

@section('top-line')
    <h1>
        <i class="fa fa-dashboard"></i> Welcome to the {{ Auth::user()->company }} Dashboard
    </h1>
    <p class="lead">
        Need help? Call 0161 883 2244
    </p>
    <div class="col-lg-8 col-md-6 col-sm-7 col-xs-12"><!-- col-1 -->
        <div class="jumbotron">
            <h1>Hello, {{ Auth::user()->first_name }}!</h1>
            <p>Use the menus on the top to find your way around.</p>
            <div class="row">
                <p><a href="contacts/create" class="btn btn-primary btn-lg pull-right" role="button"><i class="fa fa-plus"></i>  Create new Fan</a></p>
            </div>
        </div>    
    </div><!-- /col-1 -->

    <div class="col-lg-4 col-md-6 col-sm-5 col-xs-12"><!-- col-2 -->
        <div class="well well-lg">
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="badge">6494</span>
                    Total Number of Contacts
                </li>
                <li class="list-group-item">
                    <span class="badge">4989</span>
                    Total Number of Adult Contacts
                </li>
                <li class="list-group-item">
                    <span class="badge">1492</span>
                    Total Number of Junior Contacts
                </li>
                <li class="list-group-item">
                    <span class="badge">2684</span>
                    Number of Adult members
                </li>
                <li class="list-group-item">
                    <span class="badge">440</span>
                    Number of Junior members
                </li>
                <li class="list-group-item">
                    <span class="badge">936</span>
                    Number of Adult Season Tickets
                </li>
                <li class="list-group-item">
                    <span class="badge">169</span>
                    Number of Junior Season Tickets
                </li>
            </ul>
            
        </div>    
    </div><!-- /col-2 -->
    
@stop


@section('table')
    <hr>
    <h1>
        <i class="fa fa-user"></i> Your Fans
    </h1>
    <div class="table-responsive clearfix">
        <table class="table dataTable data-table" id="contacts_table" data-ajaxsource="/api/contacts?cols=id,first_name,last_name,nickname,postcode,email,mobile_phone,legacy_id" data-showid="false" data-linkurl="contacts" data-iDisplayLength="5">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Known As</th>
                    <th>Postcode</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Memb No</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

@stop

@section('below-table')
    <div class="row">
        <a href="contacts/create" class="btn btn-primary btn-lg pull-right"><i class="fa fa-plus"></i> Create New Fan</a>
    </div>
@stop