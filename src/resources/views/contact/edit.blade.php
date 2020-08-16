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
                    <form  method="Post" action="{{route('contact.store')}}">
                      @csrf
                      氏名
                      <input type="text" name="your_name" value="{{ $contact->your_name }}">
                      <br>
                      件名
                      <input type="text" name="title" value="{{ $contact->title }}">
                      <br>
                      メールアドレス
                      <input type="email" name="email" value="{{ $contact->email }}">
                      <br>
                      ホームページ
                      <input type="text" name="url" value="{{ $contact->url }}">
                      <br>
                      性別
                      <input type="radio" name="gender" value="0" @if($contact->gender === 0) checked @endif>男性
                      <input type="radio" name="gender" value="1" @if($contact->gender === 1) checked @endif>女性
                      <br>
                      年齢
                      <select  name="age">
                      <option value="">選択してください</option>
                      <option value="1" @if($contact->age === 1) selected @endif>〜19才</option>
                      <option value="2" @if($contact->age === 2) selected @endif>20才〜29才</option>
                      <option value="3" @if($contact->age === 3) selected @endif>30才〜39才</option>
                      <option value="4" @if($contact->age === 4) selected @endif>40才〜49才</option>
                      <option value="5" @if($contact->age === 5) selected @endif>50才〜59才</option>
                      <option value="6" @if($contact->age === 6) selected @endif>60才〜</option>
                      </select>
                      <br>
                      お問い合わせ内容
                      <textarea name="contact">{{ $contact->contact }}</textarea>
                      <br>

                      <input type="submit" class="btn btn-info" value="登録する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
