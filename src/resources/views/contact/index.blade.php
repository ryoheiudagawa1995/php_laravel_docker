@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form  action="{{ route('contact.create')}}" method="GET">
                      <button type="submit" class="btn btn-primary">
                        新規登録
                      </button>
                    </form>
                    <form method="GET" action="{{ route('contact.index') }}" class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" name="search" type="search" placeholder="検索" aria-label="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索する</button>
                    </form>

                    <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">your_name</th>
                        <th scope="col">title</th>
                        <th scope="col">created_at</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($contacts as $contact)
                      <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->your_name }}</td>
                        <td>{{ $contact->title }}</td>
                        <td>{{ $contact->created_at }}</td>
                        <td>
                          <form  method="Get" action="{{route('contact.show', ['id' => $contact->id])}}">
                            @csrf
                            <input type="submit" class="btn btn-info" value="詳細をみる">
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
