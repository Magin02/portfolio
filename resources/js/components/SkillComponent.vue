<template>
    <div class="skill ">
        <h4>{{skill}}</h4>
        <p class="average">{{averageBegun}} ~ <br>  {{averageFinished}}
        </p>
        <hr class="underline-skill" :style="{'border-color': color}">
    </div>
</template>

<script>
    export default {
        props: {
                skill: String,
                color: String,
                averageBegun: String,
                averageFinished: String,
        }
    }
</script>


<style scoped>
    .underline-skill {
        width: 50px;
        border: 2px solid;
    }
    .skill {
        margin: 30px;
    }
    .average{
        font-size: 9pt;
        text-align: center;
    }
</style>


