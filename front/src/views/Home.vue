<template>
    <div class="home bg">
     
    <div class="container">
      <header>
        <div class="photo">
            <img class="photo__img" src="https://source.unsplash.com/random/200x200/?portrait" alt="">
        </div>
    </header>
    <main>
        <div class="description">
            <h1 class="description__title">Deborah Putzolu</h1>
            <p class="description__paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate maxime perspiciatis facilis nesciunt id deserunt ea sapiente voluptates quisquam.</p>
        </div>
            <Nav/>
    </main>

    <footer>
        <p>My Portfolio</p>
    </footer>
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
.home{
  display: flex;
  min-height: 100vh;
  
}

@keyframes defile {
	0% { transform: translate3d(0,0,0); }
  100%   { transform: translate3d(-2250px,0,0); }
}

.bg {
    background-image: url(../assets/images/bg.png);
	 //-webkit-background-size: cover;
    background-repeat: no-repeat;
    background-size: cover;
    //animation: 60s linear infinite defile;		
    //transform: translate3d(0,0,0);
    //backface-visibility: hidden;
    //height: 100%;
    //left: 0;
    //opacity: 1;
    //position: fixed;
    top: 0;
}

.container{
  color: #ffff;
  font-family: 'Source Sans Pro', Arial, Helvetica, sans-serif;
  line-height: 1.5rem;
  margin: auto;
  max-width: 800px;
}


header{
  margin-bottom: 3rem;
}


main{
  text-transform: uppercase;
  margin: 1rem;
}

footer{
  margin-top: 3rem;
  text-align: center;
}

.photo__img{
  display: block;
  margin: auto;
}

.description{
  border-top: solid #ffff 1px;
  border-bottom: solid #ffff 1px;
  text-align: center;
}

.description__title{
  margin-top: 2.5rem;
  font-size: 26px;
  letter-spacing: 0.3rem;
  font-weight: bold;
}

.description__paragraph{
  margin-top: 1.5rem;
  font-size: 13px;
  letter-spacing: 0.2rem;
  margin-bottom: 2.5rem;
}

</style>
