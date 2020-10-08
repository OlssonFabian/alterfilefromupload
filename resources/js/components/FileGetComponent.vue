<template>
    <v-container>
            <v-btn rounded color="primary" dark @click="getFileContent">{{buttonText}}</v-btn>
        <v-list>
            <v-list-item v-for="fileWithContent in filesWithContents" :key="fileWithContent.title" class="mb-2">
                <v-card>
                    <v-card-title>{{fileWithContent.title}}</v-card-title>
                    <v-card-text>{{fileWithContent.content}}</v-card-text>
                </v-card>
            </v-list-item>
        </v-list>
    </v-container>
</template>

<script>
    export default {
        data() {
            return {
                buttonToggler: true,
                filesWithContents: [],
                buttonText: 'Show'
            }
        },
        methods: {
            getFileContent: function(){
                if(this.buttonToggler){
                    axios.get('/getTextFile')
                        .then(response => (this.filesWithContents = response.data.files))
                        .catch(function (error) {
                    console.log('something went wrong')
                    });
                    this.buttonToggler = !this.buttonToggler;
                    this.buttonText = 'Hide';

                }
                else{
                    this.filesWithContents = []
                    this.buttonToggler = !this.buttonToggler;
                    this.buttonText = 'Show';
                }
            }
        }
    }
</script>

