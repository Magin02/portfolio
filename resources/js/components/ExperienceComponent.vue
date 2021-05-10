<template>
    <div class="card">
        <div class="card-header d-lg-flex ">
            <div class="d-flex">
                <h3>{{ company }}</h3>
                <img class="ml-2" width="50" height="30" :src="src"/>
            </div>
            <div class="ml-lg-auto float-lg-right d-lg-flex mt-1">
                <div>
                <p class="font-weight-bold">Cargo: &nbsp; {{ position }}</p>
                </div>
                <div>
                <p class="font-weight-bold ml-lg-3"> Periodo: &nbsp;{{ date }}</p>
                </div>
            </div>

        </div>
        <div class="card-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
    props:{
        src: String,
        position: String,
        date: String,
        company: String
    }
}
</script>
