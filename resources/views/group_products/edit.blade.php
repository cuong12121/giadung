@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Group Product</h1>
                </div>
            </div>
        </div>
    </section>

     @include('flash::message')

     <?php $metaSeo = App\Models\metaSeo::find($groupProduct->Meta_id); ?>

     @if(!empty($metaSeo))
    <a href="{{ route('groupProducts.create') }}"> <div class="btn btn-info seo-click"> Thêm mới nhóm sản phẩm </div></a>
   
    <div class="content px-3">

        
        @include('adminlte-templates::common.errors')

        <div class="card seo">

            {!! Form::model($metaSeo, ['route' => ['metaSeos.update', $metaSeo->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('meta_seos.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('metaSeos.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
    @endif

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            

            {!! Form::model($groupProduct, ['route' => ['groupProducts.update', $groupProduct->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('group_products.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('groupProducts.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
