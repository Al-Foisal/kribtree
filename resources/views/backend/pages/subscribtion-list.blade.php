@extends('backend.master')
@section('title')
    Subscribtion list
@endsection

@section('content')
    {{-- @include('common.alertMessage') --}}

    <div class="content-wrapper p-3">
        <div class="card border border-danger">
            <div class="tab-pane fade show active" id="product">
                <p class="bg-success text-center pb-1">Subscribtion History</p>
                <table class="table table-bordered table-striped table-hover text-center">
                    <thead class="text-center">
                        <th>No</th>
                        <th>Email</th>
                        <th>Created_at</th>
                    </thead>

                    <tbody class="text-center">

                        @foreach ($subscribtion as $key => $item)
                            <tr>
                                <td>{{ ++$key }}</td>

                                <td>{{ $item->email }}</td>
                                <td>{{ $item->created_at->diffForhumans() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
