<template>

 <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <header class="card-header">
                                        <h4 class="card-title mt-2 text-light">Your Order</h4>
                                    </header>
                                    <article class="card-body">
                                        <dl class="dlist-align">

                        <table class="table table-hover shopping-cart-wrap">
  <thead class="text-dark">
    <tr>
                                    <th scope="col" >Name</th>
                                    <th scope="col" >Price</th>
    </tr>
  </thead>
  <tbody>
                        <tr v-for="productSelected in this.$root.cart" :key="productSelected.id">
      <td>                            {{ productSelected.name }}
</td>
      <td>                            {{ productSelected.price }} $
</td>
     
    </tr>
  </tbody>
</table>
                                        </dl>
                                      
                                    </article>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="subscribe btn btn-success btn-lg btn-block">Place Order</button>
                            </div>
                        </div>
                    </div>
</template>

<script>

export default {
    name: 'FormCheckout',
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