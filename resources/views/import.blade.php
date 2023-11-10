<!DOCTYPE html>
<html>
<head>
    <title>import file excel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
     
<div class="container">
    <div class="card bg-light mt-3">
  
        
        <div class="card-body">
            <form action="{{ route('import-quantity.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
  
                @if (count($errors) > 0)
                <div class="row">
                    <div class="col-md-8 col-md-offset-1">
                      <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <h4><i class="icon fa fa-ban"></i> Error!</h4>
                          @foreach($errors->all() as $error)
                          {{ $error }} <br>
                          @endforeach      
                      </div>
                    </div>
                </div>
                @endif
  
                @if (Session::has('success'))
                    <div class="row">
                      <div class="col-md-8 col-md-offset-1">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5>{!! Session::get('success') !!}</h5>   
                        </div>
                      </div>
                    </div>
                @endif
  
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
    <br>


    <?php 
        if(Cache::has('product_update')){

            $data = Cache::get('product_update');
            $i =0;
        }
        
    ?>
    @if(count($data)>0)
   

    <h2>Danh sách sản phẩm đã update</h2>
    <div>
        <table cellpadding="5" id="tb_padding" border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;">
            <tbody>
                <tr bgcolor="#EEEEEE" style="font-weight:bold;">
                    <td>STT</td>
                    <td>Model</td>
                    <td>Tên sản phẩm</td>
                    <td>Số lượng </td>
                  
                </tr>

                @foreach($data as $val)
                
                <?php 
                    $i++;
                    $product_info = DB::table('products')->where('ProductSku', $val)->first();
                ?>
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $product_info->ProductSku }}</td>
                    <td>{{ $product_info->Name }}</td>
                    <td>{{ $product_info->Quantily }}</td>
                    
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    @endif
</div>


     
</body>
</html>