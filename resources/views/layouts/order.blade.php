
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field()}}
    <div class="card">
        <div class="card-body">
            <div class="col m-3">
            <label for="" class="">Name</label>
                @if(blank($user))
                <input type="text" name="name" id="name" class="form-control" placeholder="">
                @else
                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                @endif

                <label for="" class="">email</label>
                @if(blank($user))
                <input type="email" name="email" id="email" class="form-control" placeholder="">
                @else
                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
                @endif

                <label for="" class="">No Handphone</label>
                @if(blank($user))
                <input type="text" name="no_handphone" id="no_handphone" class="form-control" placeholder="">
                @else
                <input type="text" name="no_handphone" id="no_handphone" class="form-control" value="{{ $user->phone }}">
                @endif

                <label for="" class="">Name Product</label>
                <input type="text" name="name_product" id="name_product" class="form-control" value="{{ $productByID->name }}">

                <label for="" class="">Quantity</label>
                <input type="number" name="quantity_product" id="quantity_product" class="form-control" value="0">

                <label for="" class="">Address</label>
                <input type="text" name="address_product" id="address_product" class="form-control">

                <label for="" class="">Description</label>
                <input type="text" name="description_product" id="description_product" class="form-control">
            </div>
            <input id="logData" name="total_price" class="ms-3" style="visibility: hidden;"></input>
            <input name="product_price" class="ms-3" style="visibility: hidden;" value="{{ $productByID->price }}"></input>
            <div class="card-footer">
                <button type="submit btn btn-warning" class="btn btn-success  text-white" onclick="return confirm('Are you sure for order this product?')">
                    SUBMIT
                </button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <label id="log" class="ms-3"></label>
                
            </div>
        </div>
    </div>
</form>
      </div>
    </div>
  </div>
  <script>
    document.getElementsByName("quantity_product")[0].addEventListener('change', doThing);
    const log = document.getElementById('log');
    const logData = document.getElementById('logData');
    var product = {!! $productByID->toJson() !!};

function doThing(){
  if(this.value < product.price2qty) {
    log.textContent = "$" + product.price * this.value;
    logData.value = "$" + product.price * this.value;
  } else if (this.value >= product.price2qty && this.value < product.price3qty) {
    log.textContent = "$" + product.price2 * this.value;
    logData.value = "$" + product.price2 * this.value;
  } else {
    log.textContent = "$" + product.price3 * this.value;
    logData.value = "$" + product.price3 * this.value;
  }
  //  log.textContent = "$" + product.price * this.value;
}
  </script>
</div>