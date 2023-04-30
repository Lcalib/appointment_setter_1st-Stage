@extends('home')

@section('title', 'Client')

@section('content')
<div class="container-fluid" id="tagoNatable">
    <br>
    <h2>Dashboard</h2>
    <div class="container-fluid">
        <table class="table table-striped table-bordered" id="sortTable">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Schedule</th>
                <th>Status</th>
                <th>Remarks</th>
                <th>Details</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Adam Sandler</td>
                <td>April 1, 2022</td>
                <td>On-going</td>
                <td>Paid</td>
                <td>Click</td>
                <!-- <td><div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Pay</a>
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Withdraw</a>
                        </div>
                    </div>
                </td> -->
            </tr>
            <tr>
                <td>2</td>
                <td>Adam Sandler 1</td>
                <td>April 3, 2022</td>
                <td>Done</td>
                <td>To Pay</td>
                <td>Click</td>
            </tr>
            </tbody>
        </table>
        <script>
        $('#sortTable').DataTable();
        </script>
    </div>
</div>
@endsection
