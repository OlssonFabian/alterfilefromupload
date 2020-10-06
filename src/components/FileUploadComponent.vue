<template>
    <v-app>
    <v-container class="grey lighten-5">
        <v-row justify="space-around">
            <v-card width="70vw" center>
                <v-file-input
                    accept="text/*"
                    label="File input"
                    value="textFile"
                    v-model="textFile"
                ></v-file-input>
                <v-btn color="primary" text @click="uploadFile()">upload</v-btn>
            </v-card>
        </v-row>
    </v-container>
    </v-app>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                textFile: '',
                uploadedFile: {},
            }
        },
        methods: {
            uploadFile: function(textFile){
                const uploadedFile = new Blob([this.textFile], { type: "text/xml"});
                let currentObj = this;

                const config = {
                    headers: { 'content-type': 'text/xml' }
                }

                axios.post('/fileSubmit', uploadedFile, config)
                .then(function (response) {
                    currentObj.success = response.data.success;
                })
                .catch(function (error) {
                    currentObj.output = error;
                });
            }
        }
    }
</script>
