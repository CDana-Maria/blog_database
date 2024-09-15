<template>
  <div class="order">
    <h1 class="py-2">{{ msg }}</h1>
    <form action="#" method="post" class="px-4">
      <!-- Full Name -->
      <div class="row py-1">
        <div class="col-4">
          <h4>Full Name <span class="text-danger">*</span></h4>
        </div>
        <div class="col-8">
          <div class="row">
            <div class="col-lg-6 col-12">
              <input v-model.trim="firstName" class="w-100" type="text" id="fname" name="fname" required><br>
              <label for="fname">First Name</label>
            </div>
            <div class="col-lg-6 col-12">
              <input v-model.trim="lastName" class="w-100" type="text" id="lname" name="lname" required><br>
              <label for="lname">Last Name</label>
            </div>
          </div>
        </div>
      </div>
      <!-- E-mail -->
      <div class="row py-1">
        <div class="col-4">
          <h4>E-mail <span class="text-danger">*</span></h4>
        </div>
        <div class="col-8">
          <input v-model.trim="email" class="item-width" type="email" id="email" name="email" required>
        </div>
      </div>
      <!-- Phone -->
      <div class="row py-1">
        <div class="col-4">
          <h4>Phone Number <span class="text-danger">*</span></h4>
        </div>
        <div class="col-8">
          <input v-model.trim="phone" class="item-width" type="tel" name="phone" required>
        </div>
      </div>
      <!-- Delivery Address -->
      <div class="row py-1">
        <div class="col-4">
          <h4>Delivery Address <span class="text-danger">*</span></h4>
        </div>
        <div class="col-8">
          <input v-model.trim="address" class="w-100" type="text" id="address" name="address" required><br>
          <label for="address">Street Address</label>
          <div class="row">
            <div class="col-lg-6 col-12">
              <input v-model.trim="city" class="w-100" type="text" id="city" name="city" required><br>
              <label for="city">City</label>
            </div>
            <div class="col-lg-6 col-12">
              <input v-model.trim="country" class="w-100" type="text" id="country" name="country" required><br>
              <label for="country">Country</label>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-12">
              <input v-model="date" class="w-100" type="date" id="date" name="date" required><br>
              <label for="date">Desired Date</label>
            </div>
            <div class="col-lg-6 col-12">
              <input v-model="time" class="w-100" type="time" id="time" name="time" required><br>
              <label for="time">Desired Time</label>
            </div>
          </div>
        </div>
      </div>
      <!-- Comments -->
      <div class="row py-1">
        <div class="col-4">
          <h4 id="comment">Comments</h4>
        </div>
        <div class="col-8">
          <textarea v-model.trim="comment" class="w-100" name="comment" form="comment" rows="4" cols="40"></textarea>
        </div>
      </div>
      <!-- Terms and Conditions -->
      <div class="row py-1">
        <div class="col-4">
        <h4>Agree delivery terms and conditions?</h4>
        </div>
        <div class="col-8">
          <div class="row">
            <div class="col-lg-6 col-12">
              <input type="radio" id="yes" name="agree" value="yes" checked>
              <label class="px-2" for="yes">Yes</label>
            </div>
            <div class="col-lg-6 col-12">
              <input type="radio" id="no" name="agree" value="no">
              <label class="px-2" for="no">No</label>
            </div>
          </div>
        </div>
      </div>
      <!-- Button Submit -->
      <div class="text-center py-1">
        <button type="submit" class="btn color-vue btn-lg w-50">Submit</button>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  name: 'OrderDetail',
  props: {
    msg: String
  },
  data: function() {
    return {
      firstName: '',
      lastname: '',
      email: '',
      phone: '',
      address: '',
      city: '',
      country: '',
      date: '',
      time: '',
      comment: ''
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1 {
  text-align: center;
  border-radius: 5px 5px 0 0;
  border-bottom: 1px solid #2c3e50;
}
.item-width {
  width: 48%;
}
.color-vue, h1 {
  background-color: #42b983;
}
@media (max-width: 960px) {
  .item-width {
    width: 100%;
  }
}
</style>
