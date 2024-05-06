@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}

                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @php
                            if (request('page') > 1) {
                                $counter = (request('page') - 1) * config('app.per_page') + 1;
                            } else {
                                $counter = 1;
                            }

                        @endphp

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if ($contacts->count() > 0)
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <th scope="row">{{ $counter++ }}</th>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->subject }}</td>
                                            <td>{{ $contact->message }}</td>
                                            <td>{{ $contact->created_at->diffForHumans() }}</td>
                                            <td><a href="{{ route('contacts.edit', [$contact->id]) }}?page={{ $contacts->currentPage() }}"
                                                    class="btn btn-danger">
                                                    {{ str('Reply')->plural($contact->replies_count) }}
                                                    ({{ $contact->replies_count }})
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center">No record</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="container">
                            {{ $contacts->onEachSide(5)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
