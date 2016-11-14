@extends('layouts.app')

@section('content')

<form action="<?= url('product/add') ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input name="product_title"  class="form-control" value="" placeholder="Название продукта:" />
        <select name="category_id" class="form-control">
            <option value="">Выберите категорию</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}>" >{{ $category->title }}</option>
            @endforeach
        </select>
        <input name="product_price" value="" placeholder="Цена:" class="form-control"/>
        <input type="file" name="product_image" class="form-control"/>
        <button class="form-control">Добавить</button>
    </form>
@endsection

