@extends('layouts.admin')
@section('title','Contact')
@section('content')
<div class="row">
    <div class="cal-md-8 col-lg-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Message</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped text-center">
                    <tr>
                        <th>SL.</th>
                        <th>Name</th>
                        <th>Mobile No.</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($messages as $sl=>$message )
                    <tr>
                        <td>{{ $sl+1}}</td>
                        <td>{{ $message->contact_name }}</td>
                        <td>{{ $message->contact_mobile}}</td>
                        <td>{{ $message->contact_email}}</td>
                        <td>{{ $message->contact_message}}</td>
                        <td>
                            <a class="btn btn-danger" href="{{ route('message.delete',$message->id) }}">Delete</a>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="5">Data Not Found</td>
                        </tr>
                    @endforelse     
                </table>
            </div>
        </div>
    </div>
</div>
@endsection