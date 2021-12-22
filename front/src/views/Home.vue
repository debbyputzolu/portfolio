<template>
    <div class="home">
     
    <div class="container">
      <header>
        <div class="photo">
            <img class="photo__img" src="https://source.unsplash.com/random/200x200/?portrait" alt="">
        </div>
     </header>
    
        <div class="description">
            <h1 class="description__title">Deborah Putzolu</h1>
            <p class="description__paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate maxime perspiciatis facilis nesciunt id deserunt ea sapiente voluptates quisquam.</p>
        </div>
            <Nav/>
     
        
    </div>
  </div>
</template>

<script>
import Nav from '../components/Nav.vue'


export default {
  name: 'Home',
  components: {
	  Nav,
  }
  
}
</script>
<style scoped lang="scss">


</style>
