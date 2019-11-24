<template>
    <div class="container">
        <div class="row">
            <button v-on:click="update" class="btn btn-default text mb-1" v-if="!is_refresh">Aktualisieren - {{ id }}
            </button>
            <span class="badge badge-primary mb-1" v-if="is_refresh">Aktualisierung...</span>
            <table class="table">
                <thead>
                <th>Title</th>
                <th>Url</th>
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
</template>

<script>
    export default {
        data: function () {
            return {
                url_data: [],
                is_refresh: false,
                id: 0,
            }
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function () {
                this.is_refresh = true
                axios.get('/start/get-json').then((response) => {
                    console.log(response)
                    this.url_data = response.data
                    this.is_refresh = false
                    this.id++
                });
            }
        }
    }
</script>
