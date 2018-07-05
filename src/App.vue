<template>
  <div id="app">
    <img src="./assets/logo.png" class="logo">
    <div class="container">
    <div class="form-header">
      <h1>Selamat datang calon mitra Lotte Grosir</h1>
      <p>Masukkan data anda. Pihak kami akan menghubungi anda segera</p>
    </div>
    <div class="contact-form shadow">
      <div class="row">
       <div class="col-md-10">
        <div class="form-group">
          <label for="form_name">Nama Lengkap <i>(Sesuai KTP)</i> *</label>
          <input id="form_name" type="text" name="name" class="form-control" placeholder="Nama Lengkap Sesuai KTP *">
        </div>
      </div>
     </div>
    <div class="row">
      <div class="col-md-10">
        <div class="form-group">
          <label for="form_email">Email *</label>
          <input id="form_email" type="email" name="email" class="form-control" placeholder="Alamat Email">
       </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10">
        <div class="form-group">
          <label for="form_telepon">No. Telepon/HP *</label>
          <input id="form_telepon" type="tel" name="telepon" class="form-control" placeholder="Nomor Telepon/HP">
       </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10">
        <div class="form-group">
          <label for="form_domisili">Domisili *</label>
          <div id="domisili">
            <select id="form_domisili" name="domisili" class="form-control" title="Pilih Domisili">
            <option>Jakarta</option>
            <option>Jawa Barat</option>
            <option>Jawa Timur</option>
          </select>
          </div>
       </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10">
        <div class="form-group">
          <label for="form_lahan">Ada Lahan</label>
       </div>
       <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="opsiLahan" id="y_lahan" value="Ya">
          <label class="form-check-label" for="y_lahan">Ya</label>
       </div>
       <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="opsiLahan" id="n_lahan" value="Tidak">
          <label class="form-check-label" for="n_lahan">Tidak</label>
      </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10">
        <div class="form-group">
          <label for="form_domisili">Anda Tahu Lotte Grosir dari</label>
          <div id="domisili">
            <select id="form_domisili" name="source" class="form-control" title="Tahu Lotte Grosir dari">
            <option>Website</option>
            <option>Media Sosial</option>
            <option>TV</option>
          </select>
          </div>
       </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10">
        <button class="btn btn-success btn-lg btn-block" id="send-button">Kirim Sekarang</button>
      </div>
    </div>
    </div>
    </div>
    
  </div>
</template>

<script>
import Vue from "vue";
import VeeValidate from "vee-validate";

Vue.use(VeeValidate);

export default {
  name: "app"
};
</script>

<style lang="scss">
@import url("https://fonts.googleapis.com/css?family=Raleway");
#app {
  font-family: "Raleway", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  max-width: 800px;
  margin: auto;
  color: #2c3e50;
  margin-top: 60px;
}
.logo {
  max-width: 500px;
  height: 70px;
  margin: auto;
  display: flex;
  align-items: center;
}
h1 {
  font-size: 14px;
}
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
.contact-form {
  margin: auto;
  background: #fff;
  padding-bottom: 30px;
}
label {
  margin-left: 20px;
  margin-top: 20px;
  text-align: left;
  font-weight: bold;
}
.form-header {
  margin: auto;
  text-align: center;
}
input[type] {
  margin-left: 20px;
  border-top: none;
  border-left: none;
  border-right: none;
  border-bottom: dotted 1px;
  background-color: #fff;
}
#domisili {
  margin-left: 20px;
}

.form-check{
  margin-left: 20px;
}
.form-check-label{
  margin: auto;
}

#send-button{
  margin-top: 40px;
  margin-left: 20px;
}
</style>
