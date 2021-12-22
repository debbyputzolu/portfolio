<template>
  
    <div class="nav">
            <nav>
                <ul>
                    <div class="about__link"><router-link :to="{
                    name: 'about',
                }"
            >A propos</router-link></div>
                    <li><a class="work__link" href="#work">Projets</a></li>
                    <li><a class="cv__link" href="#cv">CV</a></li>
                    <li><a class="contact__link" href="#contact">Contact</a></li>
                </ul>
            </nav>
    
    </div>
  
</template>

<script>
export default {
  name: 'Nav',
 

}
</script>

<style scoped lang="scss">

</style>