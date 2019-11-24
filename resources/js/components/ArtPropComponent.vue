<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>Mark</th>
                        <th>Model</th>
                        <th>Brake-specific fuel consumption</th>
                    </thead>
                    <tbody>
                        <tr v-for="car in cars">
                            <td>{{ car.mark }}</td>
                            <td>{{ car.model }}</td>
                            <td>{{ car.bsfc }}</td>
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
            'cars'
        ],
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            update: function () {
                console.log(this.cars);
            }
        }
    }
</script>
