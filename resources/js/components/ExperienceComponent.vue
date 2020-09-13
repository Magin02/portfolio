<template>
    <ul class="projects-list">
        <li class="J_list">
            <div class="list-header">
                {{title}}
                <a target="_blank" :href="href" >
                    <i class="fa fa-external-link" aria-hidden="true"></i>
                </a>
<!--                <img class="projects-icons" src="{{asset('assets/projects/hackatrouble.jpg')}}">-->
            </div>
            <div class="list-content">
                <div class="list-content-inner">
                    <slot></slot>
                </div>
            </div>
        </li>
    </ul>
</template>

<script>
export default {
    props:{
        href: String,
        title: String,
    }
}
</script>
