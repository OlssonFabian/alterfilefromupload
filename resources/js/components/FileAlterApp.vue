<template>
    <v-container class="grey lighten-5">
        <v-row justify="space-around">
            <FileUploadComponent>

            </FileUploadComponent>
            <FileGetComponent>

            </FileGetComponent>
        </v-row>
    </v-container>
</template>
<script>
import FileUploadComponent from './FileUploadComponent';
import FileGetComponent from './FileGetComponent';

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
        FileGetComponent
    }
}
</script>
