<template>
    <div class="container">
        <div class="form-header">
            <h1>{{msg_h1}}</h1>
            <p>{{msg_p}}</p>
        </div>
    </div>
</template>
<script>
export default {
    name:"submit-success",
    data(){
        return{
            msg_h1:"Terima kasih sudah menghubungi kami",
        msg_p:"Tim kami akan menghubungi lewat email anda"
        }
    }
}
</script>
