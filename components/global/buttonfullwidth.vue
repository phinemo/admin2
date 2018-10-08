<template>
    <a class="uk-button uk-width-1-1 uk-margin-small-bottom uk-border-rounded" style="color: orange; border: 2px solid orange; background-color: white;" :href="title.url">{{title.name}}</a>
</template>
<script>
module.exports = {
    data:() => {
            return{
            
        }
    },
    props:{
        title: String,
    }

}
</script>

