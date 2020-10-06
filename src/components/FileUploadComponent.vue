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
                    @change="selectFile"
                ></v-file-input>
                <v-btn color="primary" text @click="uploadFile">upload</v-btn>
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
                uploadedFile: undefined,
            }
        },
        methods: {
            selectFile(file) {
                this.uploadedFile = file;
                console.log(this.uploadedFile);
            },

            uploadFile: function(){

                //file needs to be appended to FormData
                let formData = new FormData();
                formData.append("file", this.uploadedFile);

                const config = {
                    headers: { 'content-type': 'text/plain' }
                }

                //Calling laravel controller with formData and config
                axios.post('/fileSubmit', formData, config)
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
