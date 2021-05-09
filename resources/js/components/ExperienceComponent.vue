<template>
    <div class="card">
        <div class="card-header d-flex ">
            <h3>{{ company }}</h3>
            <img class="ml-2" width="50" height="30" :src="src"/>
            <div class="ml-auto float-right d-flex mt-1">
                <p class="font-weight-bold">Cargo: &nbsp; </p> {{ position }}
                <p class="font-weight-bold ml-3"> Periodo: &nbsp;</p>  {{ date }}
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
