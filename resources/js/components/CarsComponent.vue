<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table class="table">
                        <thead>
                            <th>Mark</th>
                            <th>Model</th>
                        </thead>
                        <tbody>
                        <tr v-for="car in cars">
                            <td>{{ car.mark }}</td>
                            <td>{{ car.model }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: [
            'cars'
        ],
        methods: {
        }
    }
</script>
