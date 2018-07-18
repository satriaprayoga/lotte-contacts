<template>
    <div class="container" v-if="!formSumbitted">
        <div class="form-header">
        <h1>Selamat datang calon mitra Lotte Grosir</h1>
        <p>Masukkan data anda. Tim kami akan menghubungi anda segera</p>
        </div>
        <div class="contact-form shadow">
        <form @submit.prevent="validateSubmit" novalidate >
        <div class="row">
        <div class="col-md-10">
            <div class="form-group">
            <label for="form_name">Nama Lengkap <i>(Sesuai KTP)</i> *</label>
            <input id="form_email" v-model="name" v-validate="'required'" type="text" name="name" class="form-control" placeholder="Nama Lengkap Sesuai KTP *">
            <p class="text-danger" v-show="errors.has('name')">{{ errors.first('name') }}</p>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-10">
            <div class="form-group">
            <label for="email_field">Email *</label>
            <input id="email_field" v-model="email" v-validate="'required|email'" type="email" name="email" class="form-control" placeholder="Alamat Email">
            <p class="text-danger" v-if="errors.has('email')">{{ errors.first('email') }}</p>
        </div>
        </div>
        </div>
        <!-- <div class="row">
        <div class="col-md-10">
            <div class="form-group">
            <label for="form_telepon">No. Telepon/HP *</label>
            <input id="form_telepon" v-model="phone" v-validate="'required'" type="tel" name="phone" class="form-control" placeholder="Nomor Telepon/HP">
            <p class="text-danger" v-if="errors.has('phone')">{{ errors.first('phone') }}</p>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-10">
            <div class="form-group">
            <label for="form_domisili">Domisili *</label>
            <div id="domisili">
                <select id="form_domisili" v-model="domisili" v-validate="'required'" name="domisili" class="form-control" title="Pilih Domisili">
                <option>Jakarta</option>
                <option>Jawa Barat</option>
                <option>Jawa Timur</option>
            </select>
            <p class="text-danger" v-if="errors.has('domisili')">{{ errors.first('domisili') }}</p>
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
            <input class="form-check-input" type="radio" name="opsiLahan" id="y_lahan" v-bind:value="opsiLahanY" v-model="lahan">
            <label class="form-check-label" for="y_lahan">{{opsiLahanY}}</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="opsiLahan" id="n_lahan" v-bind:value="opsiLahanN" v-model="lahan">
            <label class="form-check-label" for="n_lahan">{{opsiLahanN}}</label>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-10">
            <div class="form-group">
            <label for="form_domisili">Anda Tahu Lotte Grosir dari</label>
            <div id="domisili">
                <select id="form_domisili" v-model="source" name="source" class="form-control" title="Tahu Lotte Grosir dari">
                <option>Website</option>
                <option>Media Sosial</option>
                <option>TV</option>
            </select>
            </div>
        </div>
        </div>
        </div> -->
        <div class="row">
        <div class="col-md-10">
            <button class="btn btn-success btn-lg btn-block" id="send-button" name="send_contact" v-bind:disabled="errors.items.length>0" type="submit">Kirim Sekarang</button>
        </div>
        </div>
        </form>
        </div>
    </div>
    <div v-else class="container">
       <div class="form-header">
            <h1>Terima kasih sudah menghubungi kami</h1>
            <p>Tim kami akan menghubungi lewat email anda</p>
       </div>
    </div>
</template>
<script>
import axios from "axios";

export default {
  name: "contact-form",
  data() {
    return {
      name: "",
      email: "",
      phone: "",
      domisili: "",
      lahan: "",
      opsiLahanY: "Ya",
      opsiLahanN: "Tidak",
      source: "",
      formSumbitted: false
    };
  },
  created() {
    this.lahan = this.opsiLahanY;
  },
  destroyed() {
    this.clearContact;
  },
  methods: {
    validateSubmit() {
      this.$validator.validateAll().then(result => {
        if (result) {
          this.sendContact();
          this.clearContact();
          // this.$router.push("submit_ok")
          this.formSumbitted = true;
          return;
        }
        this.formSumbitted = false;
      });
    },
    sendContact() {
      const scriptURL =
        "https://script.google.com/macros/s/AKfycbypeKxD3QJNHGVhrWkqwD_gR-1mUreYgK6-OpW5WIivB0yYJ8vr/exec";
      var data=new FormData(document.forms[0])
      axios
        .post(
          scriptURL,data,
        )
        .then(function(response) {
          console.log(response);
        })
        .catch(function(errors) {
          console.log(errors);
        });
    },
    clearContact() {
      this.name = "";
      (this.email = ""),
        (this.phone = ""),
        (this.domisili = ""),
        (this.lahan = "");
      this.source = "";
    }
  }
};
</script>
