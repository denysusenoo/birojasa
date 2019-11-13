@extends('admin.layouts.master')

@section('title', 'Users')

@section('main-content')
    <h2>Users</h2>

    <!-- Breadcrumb -->
    <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{!! route('admin.dashboard') !!}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users</li>
            </ol>
        </nav>
    </div>

    <p>
        <a href="{!! route('admin.users.create') !!}" class="btn btn-primary">Add New <span data-feather="plus"></span></a>

        <a class="btn btn-primary float-right" data-toggle="collapse" href="#showFilter" role="button" aria-expanded="false" aria-controls="showFilter">
            Filters <span data-feather="filter"></span>
        </a>
    </p>

    <div class="collapse" id="showFilter">
        <div class="card card-body">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputZip">Roles</label>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="roles-administrator">
                            <label class="custom-control-label" for="roles-administrator">Administrator</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="roles-user">
                            <label class="custom-control-label" for="roles-user">User</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="roles-finance">
                            <label class="custom-control-label" for="roles-finance">Finance</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputStatus">Status</label>
                        <select id="inputStatus" class="form-control">
                            <option selected>Active</option>
                            <option>Inactive</option>
                            <option>Banned</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Filter</button>
            </form>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>mark.oto@email.com</td>
            <td>+6289000</td>
            <td>
                <a href="#" class="btn btn-link" title="Edit this record"><span data-feather="edit"></span></a>
                <a href="#" class="btn btn-link" title="Show details"><span data-feather="eye"></span></a>
                <a href="#" class="btn btn-link btn-delete-record" title="Remove this record"><span data-feather="trash"></span></a>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>jacob.thornton@email.com</td>
            <td>+6289001</td>
            <td>
                <a href="#" class="btn btn-link" title="Edit this record"><span data-feather="edit"></span></a>
                <a href="#" class="btn btn-link" title="Show details"><span data-feather="eye"></span></a>
                <a href="#" class="btn btn-link btn-delete-record" title="Remove this record"><span data-feather="trash"></span></a>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>larry.bird@email.com</td>
            <td>+6287000</td>
            <td>
                <a href="#" class="btn btn-link" title="Edit this record"><span data-feather="edit"></span></a>
                <a href="#" class="btn btn-link" title="Show details"><span data-feather="eye"></span></a>
                <a href="#" class="btn btn-link btn-delete-record" title="Remove this record"><span data-feather="trash"></span></a>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>larry.bird@email.com</td>
            <td>+6287000</td>
            <td>
                <a href="#" class="btn btn-link" title="Edit this record"><span data-feather="edit"></span></a>
                <a href="#" class="btn btn-link" title="Show details"><span data-feather="eye"></span></a>
                <a href="#" class="btn btn-link btn-delete-record" title="Remove this record"><span data-feather="trash"></span></a>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>larry.bird@email.com</td>
            <td>+6287000</td>
            <td>
                <a href="#" class="btn btn-link" title="Edit this record"><span data-feather="edit"></span></a>
                <a href="#" class="btn btn-link" title="Show details"><span data-feather="eye"></span></a>
                <a href="#" class="btn btn-link btn-delete-record" title="Remove this record"><span data-feather="trash"></span></a>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>larry.bird@email.com</td>
            <td>+6287000</td>
            <td>
                <a href="#" class="btn btn-link" title="Edit this record"><span data-feather="edit"></span></a>
                <a href="#" class="btn btn-link" title="Show details"><span data-feather="eye"></span></a>
                <a href="#" class="btn btn-link btn-delete-record" title="Remove this record"><span data-feather="trash"></span></a>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>larry.bird@email.com</td>
            <td>+6287000</td>
            <td>
                <a href="#" class="btn btn-link" title="Edit this record"><span data-feather="edit"></span></a>
                <a href="#" class="btn btn-link" title="Show details"><span data-feather="eye"></span></a>
                <a href="#" class="btn btn-link btn-delete-record" title="Remove this record"><span data-feather="trash"></span></a>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>larry.bird@email.com</td>
            <td>+6287000</td>
            <td>
                <a href="#" class="btn btn-link" title="Edit this record"><span data-feather="edit"></span></a>
                <a href="#" class="btn btn-link" title="Show details"><span data-feather="eye"></span></a>
                <a href="#" class="btn btn-link btn-delete-record" title="Remove this record"><span data-feather="trash"></span></a>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
