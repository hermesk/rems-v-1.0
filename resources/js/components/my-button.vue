<template>
    <div>
        <button :type="type" class="my-button" v-text="text"></button>
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
.my-button{
    background-color:#1E90FF;
    color:#fff;
    padding:10px 20px;
    font-weight: bold;
    border-radius:15px;
    float:right;

    }

</style>
