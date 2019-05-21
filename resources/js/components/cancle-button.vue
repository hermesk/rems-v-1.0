<template>
    <div>
        <button :type="type" class="cancle-button" v-text="text"></button>
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        props:[
        'text',
        'type'

        ]
    }
</script>

<style>
.cancle-button{
    background-color:grey;
    color:#fff;
    padding:10px 20px;
    font-weight: bold;
    border-radius:15px;
    float:left;

    }

</style>
