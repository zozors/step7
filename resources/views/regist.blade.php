@extends('layouts.app')

@section('title', '投稿画面')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Post Form</h1>
            <form action="{{ route('submit') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="company_id">会社ID</label>
                    <input type="integer" class="form-control" id="company_id" name="company_id" placeholder="会社ID" value="{{ old('company_id') }}">
                    @if($errors->has('company_id'))
                        <p>{{ $errors->first('company_id') }}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label for="product_name">商品名</label>
                    <input type="string" class="form-control" id="product_name" name="product_name" placeholder="商品名" value="{{ old('product_name') }}">
                    @if($errors->has('product_name'))
                        <p>{{ $errors->first('product_name') }}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label for="price">価格</label>
                    <input type="integer" class="form-control" id="price" name="price" placeholder="価格" value="{{ old('price') }}">
                    @if($errors->has('price'))
                        <p>{{ $errors->first('price') }}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label for="stock">在庫</label>
                    <input type="integer" class="form-control" id="stock" name="stock" placeholder="在庫" value="{{ old('stock') }}" >
                    @if($errors->has('stock'))
                        <p>{{ $errors->first('stock') }}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label for="comment">コメント</label>
                    <textarea class="form-control" id="comment" name="comment" placeholder="Comment">{{ old('comment') }}</textarea>
                    @if($errors->has('comment'))
                        <p>{{ $errors->first('comment') }}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label for="img_path">在庫</label>
                    <input type="longText" class="form-control" id="img_path" name="img_path" placeholder="画像" value="{{ old('img_path') }}">
                    @if($errors->has('img_path'))
                        <p>{{ $errors->first('img_path') }}</p>
                    @endif
                </div>

                <button type="submit" class="btn btn-default">送信</button>
            </form>
        </div>
    </div>
@endsection