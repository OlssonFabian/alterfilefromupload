<template>
        <v-app>
             <FileUploadComponent>

            </FileUploadComponent>
            <FileGetComponent>

            </FileGetComponent>
        </v-app>
</template>
<script>
import FileUploadComponent from './components/FileUploadComponent';
import FileGetComponent from './components/FileGetComponent';

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
