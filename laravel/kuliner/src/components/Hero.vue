<template>
  <div class="hero">
    <!-- Dekstop -->
    <div class="d-none d-md-block">
      <div class="row mt-4">
        <div class="col-md-6">
          <div class="d-flex h-100">
            <div class="justify-content-center align-self-center">
              <h2><strong>Delicious Food Menu</strong><br />In Your Gadget</h2>
              <p>Ayo Segera Pilih dan Pesan Makanan Anda</p>
              <router-link class="btn btn-lg btn-success" to="/foods">
                <b-icon-arrow-right></b-icon-arrow-right> Pesan
              </router-link>
            </div>
          </div>
        </div>
        <div class="col">
          <img src="../assets/image/ilustrasi.png" width="100%" alt="" />
        </div>
      </div>
    </div>

    <!-- Mobile -->
    <div class="d-sm-block d-md-none">
      <div class="row mt-4">
        <div class="col-md-6 mb-3">
          <img src="../assets/image/ilustrasi.png" width="100%" alt="" />
        </div>
        <div class="col-md-6">
          <div class="d-flex h-100">
            <div class="justify-content-center align-self-center">
              <h2><strong>Delicious Food Menu</strong> <br />In Your Gadget</h2>
              <p>Ayo Segera Pilih dan Pesan Makanan Anda</p>
              <button class="btn btn-lg btn-success">
                <b-icon-arrow-right></b-icon-arrow-right> Pesan
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "HeroSite",
};
</script>

<style></style>
