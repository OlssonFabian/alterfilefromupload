<template>
    <v-container class='mt-2'>
        <v-row class="d-flex flex-row">
             <v-file-input
                accept="text/.txt"
                label="File input"
                outlined
                dense
                value="textFile"
                v-model="textFile"
                @change="selectFile"
            ></v-file-input>
        </v-row>
        <v-row class="d-flex flex-row" justify="start">
            <v-col class="col-md-1">
                <v-btn rounded color="primary" dark @click="uploadFile" class="d-inline-flex">upload</v-btn>
            </v-col>
            <v-col class="col-md-1">
                <FileDisplayButton v-on:clickedShow="getData=true" v-on:clickedHide="getData=false"></FileDisplayButton>
            </v-col>
            <FileDisplayComponent :getData="getData"></FileDisplayComponent>
        </v-row>
    </v-container>
</template>

<script>
import FileDisplayComponent from './FileDisplayComponent';
import FileDisplayButton from './FileDisplayButton';

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                textFile: [],
                uploadedFile: undefined,
                getData: false,
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
        },
        components: {
            FileDisplayComponent, FileDisplayButton
        }
    }
</script>
