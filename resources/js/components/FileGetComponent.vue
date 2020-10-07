<template>
    <v-app>
    <v-container class="grey lighten-5">
        <v-row justify="space-around">
            <v-card width="70vw" center>
                <v-btn color="primary" text @click="getFileContent">Get altered files</v-btn>
            </v-card>
            <ul>
                <li v-for="fileWithContent in filesWithContents>
                    <v-card>
                        {{fileWithContent}}
                    </v-card>
                </li>
            </ul>
        </v-row>
    </v-container>
    </v-app>
</template>

<script>
    export default {
        data() {
            return {
                filesWithContents: [],
            }
        },
        methods: {
            getFileContent: function(){

                axios.get('/getTextFile')
                .then(response => (this.filesWithContents = response))
                .catch(function (error) {
                    console.log('something went wrong')
                });
            }
        }
    }
</script>
