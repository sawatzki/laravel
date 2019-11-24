<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>TITLE</th>
                        <th>URL</th>
                    </thead>
                    <tbody>
                        <tr v-for="url in url_data">
                            <td>{{ url.title }}</td>
                            <td>{{ url.url }}</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'url_data'
        ],
        mounted() {
            this.update()
        },
        methods: {
            update: function () {
                console.log(this.url_data);
            }
        }
    }
</script>
