<template>
<div class="container">
    <h1>Спортсмены</h1>
    <div class="row">
        <div class="col-lg-4">
            <div class="card mt-3">
                <a href="#" class="card-body">
                    <h5 class="card-title">Card title</h5>
<!--<table>-->
<!--                    <tr v-for="athlete in athletes">-->
<!--                        <td>{{ athlete.firstname }}</td>-->
<!--                        <td>{{ athlete.secondname }}</td>-->
<!--                        <td>-->
<!--</table>-->
                </a>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            athletes: []
        }
    },
    mounted() {
        axios.get('api/athletes')
        .then(res => {
            console.log(res.data)
        })
    }
}
</script>
