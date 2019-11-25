<template>
    <div class="container">
        <div class="row">
            <button v-on:click="update">Aktualisieren</button>
                <ul>
                    <li v-for="car in cars_data" v-model="cars_data">
                        {{ car.mark }} : {{ car.model }}
                    </li>
                </ul>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                cars_data: [],
            }
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function () {
                this.is_refresh = true;
                axios.get('/cars/get-cars').then((response) => {
                    this.cars_data = response.data;
                });
            }
        }
    }
</script>
