<template>
    <v-btn rounded color="primary" dark @click="buttonUpdate">{{buttonText}}</v-btn>
</template>

<script>
    export default {

        data() {
            return {
                buttonToggler: true,
                buttonText: 'Show'
            }
        },

        methods: {
            buttonUpdate: function(){
                if(this.buttonText == 'Show'){
                    this.buttonToggler = !this.buttonToggler;
                    this.buttonText = 'Hide';
                    this.$emit('clickedShow')
                }
                else{
                    this.buttonToggler = !this.buttonToggler;
                    this.buttonText = 'Show';
                    this.$emit('clickedHide')
                }
            }
        }
    }
</script>
