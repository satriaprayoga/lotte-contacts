<template>
  <div id="app">
    <img src="./assets/Lotte-01.png" class="logo">
    <contact-form></contact-form>
  </div>
</template>

<script>

import ContactForm from "./components/ContactForm.vue"


export default {
  name: "app",
  components:{
    ContactForm
  }
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
  height: 150px;
  margin: auto;
  display: flex;
  align-items: center;
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
.text-danger{
  margin-left: 20px;
}
</style>
