<template>
    <v-app>
    <v-container class="grey lighten-5">
        <v-row justify="space-around">
            <v-card width="70vw" center>
                <p>Here be ccontent</p>
                <v-btn color="primary" text @click="getFileContent">upload</v-btn>
            </v-card>
        </v-row>
    </v-container>
    </v-app>
</template>

<script>
    export default {
        data() {
            return {
                content: '',
            }
        },
        methods: {
            getFileContent: function(){

                axios.get('/getTextFile')
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log('something went wrong')
                });
            }
        }
    }
</script>
