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
nav{
  margin-top: 3rem;
}

ul{
  display: flex;
  justify-content: center;
}

li{
  list-style: none;
}

a{
  display: block;
  color: #ffff;
  text-decoration: none;
  padding: 1rem 1.25rem 1rem 1.45rem;
  border: solid #ffff 1px;
  font-size: 13px;
  letter-spacing: 0.2rem;
  min-width: 5rem;
  text-align: center;
}

a:hover{
  background-color: #787880;
  transition: 1s;
}

.about__link, .work__link, .cv__link{
  border-right: none;
}
</style>