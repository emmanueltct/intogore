@include('titles')
  <main id="main">       
    <section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <a href="{{route('AdminAllProducts')}}" class="btn btn-primary btn-sm float-end">Back To all Products list</a>
            <h3 class="page-title" style="font-size:24px">Update the Product information here</h3>
          </div>
        @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
         @endif
          @if($errors->any())
                <div class="alert alert-danger">
                  <h1>Oops!!</h1>
                   <h3> {{ implode(' ', $errors->all(':message')) }}</h3>
                   <br/>
                  </div>
             @endif
        </div>
        <div class="row">
        <div class="col-lg-12 d-flex justify-content-center" >
          <form method="post"  action="{{route('AdminUpdateProducts',$products->id)}}"  class="php-email-form " enctype="multipart/form-data">
           @csrf
            <div class="form-group">
                <input type="hidden" name="product_id" class="form-control" id="companyTitle" Value="{{$products->id}}" readonly>
                <input type="hidden" name="product_image" class="form-control" id="companyTitle" Value="{{$products->productThumbnail}}" readonly>
            </div>
            <div class="form-group">
                <input type="text" name="productName" class="form-control" id="productName" value="{{$products->productName}}"  placeholder="Product name Ex:Red Hat" >
                @error('productName')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            <div class="form-group">
                <input type="number" name="productPrice" class="form-control" id="productPrice" value="{{$products->productPrice }}" placeholder="Product price"  >
                @error('productPrice')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="number" name="productDiscount" class="form-control" value="{{$products-> productDiscount}}"  >
                <label>Don't change anything if no discount leave default value</label>
                @error('productDiscount')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" name="Currency" class="form-control" id="priceCurrency"  value="{{$products->productCurrency}}"   placeholder="Ex:Rwf or USDT">
                <label>unit Currency</label>
                @error('Currency')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
              <input type="file" class="form-control" name="productThumbnail" id="productThumbnail">
              <label>Leave default if you don't want to change it</label>
              @error('productThumbnail')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                 <label>Current Thumbnail</label><br/> 
              <img width="200" src="../../product/images/{{$products->productThumbnail}}">
              
            </div>
            <div class="text-center"><input type="submit" value="Send Post" class="btn btn-primary"></div>
          </form>
        </div><!-- End Contact Form -->
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('Admin_footer')