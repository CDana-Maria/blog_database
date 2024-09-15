<template>
      <section class="section-pagetop section-content bg padding-y border-top" style =" padding: 200px 200px;
      display: block;">
        <div class="container clearfix">
            <h2 class="title-page">Cart</h2>
        </div>
                        <div class="card">






                        <table class="table table-hover shopping-cart-wrap">
  <thead class="text-light" style="background: #3e6866">
    <tr>
                                    <th scope="col" >Name</th>
                                    <th scope="col" >Price</th>
                                    <th scope="col" >Action</th>
    </tr>
  </thead>
  <tbody>
                        <tr v-for="productSelected in this.$root.cart" :key="productSelected.id">
      <td>                            {{ productSelected.name }}
</td>
      <td>                            {{ productSelected.price }} $
</td>
      <td>                           <button
                  type="button"
                  class="btn"
                  @click="removeFromCart(item, $event)"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    fill="red"
                    class="bi bi-trash"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"
                    />
                    <path
                      fill-rule="evenodd"
                      d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                    />
                  </svg>
                </button>
</td>
    </tr>
  </tbody>
</table>



                        </div>
                </main>
                <aside class="col-sm-3">
 <button v-if="cartCount !== 0" class="btn btn-danger btn-block mb-4" @click="clearCart()">
          Clear Cart
        </button>      


                    <dl class="dlist-align h4">
                        <dt>Total: {{ this.totalPrice }}</dt>
                                             <p :testTotal="test" class="text-white">Total: {{ this.totalPrice }}$</p>

                    </dl>
                    <hr>
                    <a v-if="cartCount !== 0" href="/checkout" class="btn btn-success btn-lg btn-block">Proceed To Checkout</a>
                </aside>
            </div>
        </div>
    </section>
</template>

<script>

export default {
    name: 'Checkout',
    data(){
        return {
            orderData: {},
            output: {},
            showAlert: ''
        }
    },
    computed: {
    cartCount() {
        this.getCartTotalPrice();
      return this.$root.cart.length;}
    },

    methods: {
        
        getOrderData(){
            let date = new Date().toJSON().slice(0, 19).replace('T', ' ');
            console.log(date);
            console.log(this.orderData.resStart);
            console.log(this.orderData.resEnd);
        },
        removeFromCart(item, event) {
      event.stopPropagation();
      this.$root.cart.splice(this.$root.cart.indexOf(item), 1);
      localStorage.setItem("cart", JSON.stringify(this.$root.cart));
    },
     clearCart() {
      localStorage.removeItem("cart");
      return (this.$root.cart = []);
    },
    getCartTotalPrice(){
        this.totalPrice = 0;
        this.$root.cart.forEach(item => {
            this.totalPrice +=parseInt(item.price);
        });
        return this.totalPrice;
    }

    }
}
</script>

<style>
.table {
  background-color: #fff;
}

form {
  background-color: #fff;
}
</style>
