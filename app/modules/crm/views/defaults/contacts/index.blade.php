@extends('layouts.index')

@section('page-title')
    <h1>
        <i class="fa fa-user"></i> All Your People
    </h1>
    <p class="lead">
        Just look at the - sitting there all shiny and proud... (And the best bit? They're all yours!)
    </p>
@stop

@section('actions-list')
    <li><a href="{{ route('app.contacts.create') }}"><p><em>Create new contact</em></p></a></li>
@stop

@section('table')
    <div class="table-responsive clearfix">
        <table class="table dataTable data-table" id="contacts_table" data-ajaxsource="/api/contacts?cols=id,first_name,last_name,email" data-showid="false" data-linkurl="contacts" data-iDisplayLength="10">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

@stop

@section('below-table')
    <div class="row">
        <a href="contacts/create" class="btn btn-primary btn-lg pull-right"><i class="fa fa-plus"></i> Create New contact</a>
    </div>
@stop