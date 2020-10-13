<template>
    <v-container>
        <v-row>
            <FileUploadComponent>

            </FileUploadComponent>
        </v-row>
    </v-container>
</template>
<script>
import FileUploadComponent from './FileUploadComponent';
import FileDisplayComponent from './FileDisplayComponent';

export default {
    data() {
        name: 'file-alter-app'
        return {

        }
    },
    methods: {

    },
    components: {
        FileUploadComponent,
        FileDisplayComponent
    }
}
</script>
