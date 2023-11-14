@include('titles')

  <main id="main">       
    <section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h3 class="page-title" style="font-size:24px">Describe your Post here</h3>
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
          <form method="post"  action="{{route('postProductForm')}}"  class="php-email-form " enctype="multipart/form-data">
           @csrf
            <div class="form-group">
                <input type="text" name="companyTitle" class="form-control" id="companyTitle" Value="INTOGORE FITECH CRYPTO PRODUCTS" readonly>
                <label>Default Title  you can't change it</label>
            </div>
            <div class="form-group">
                <input type="text" name="productName" class="form-control" id="productName" value="{{ old('productName') }}"  placeholder="Product name Ex:Red Hat" >
                @error('productName')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            <div class="form-group">
                <input type="number" name="productPrice" class="form-control" id="productPrice" value="{{ old('productPrice') }}" placeholder="Product price"  >
                @error('productPrice')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="number" name="productDiscount" class="form-control" id="productDiscount" value="0" >
                <label>Don't change anything if no discount leave default value</label>
                @error('productDiscount')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" name="Currency" class="form-control" id="priceCurrency" value="{{ old('Currency') }}"  placeholder="Ex:Rwf or USDT">
                <label>unit Currency</label>
                @error('Currency')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
              <input type="file" class="form-control" name="productThumbnail" id="productThumbnail">
              <label>Product Thumbnail visible to web page</label>
              @error('productThumbnail')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-center"><input type="submit" value="Send Post" class="btn btn-primary"></div>
          </form>
        </div><!-- End Contact Form -->
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('Admin_footer')