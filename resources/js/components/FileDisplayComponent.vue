<template>
    <v-container>
        <v-list>
            <v-list-item v-for="fileWithContent in filesWithContents" :key="fileWithContent.title" class="mb-2 col-md-12">
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
        props: {
            getData: Boolean,
        },
        data() {
            return {
                filesWithContents: [],
            }
        },
        watch: {
            getData: function() {
                if(this.getData){
                    axios.get('/getTextFile')
                        .then(response => (this.filesWithContents = response.data.files))
                        .catch(function (error) {
                            console.log('something went wrong')
                    });
                }
                else{
                    this.filesWithContents = [];
                }
            },
        },
    }
</script>

