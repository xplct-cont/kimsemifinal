<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container">
        <a class="navbar-brand" style="color:white;">Big Bikes App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <div class="first">
                <router-link to="/" class="nav-link" style="color:white;" >Home</router-link>
                </div>
            </li>

              <li class="nav-item">
                <div class="second">
                <router-link to="/about" class="nav-link" style="color:white;" >About</router-link>
                </div>
            </li>

            <li class="nav-item">
                <div class="third">
                <router-link to="/bikes" class="nav-link" style="color:white;">Bikes</router-link>
                </div>
            </li>
        </ul>
        </div>
    </div>
    
    
  </nav>
</template>

<script>
export default {

}
</script>

<style>

.first{
    position: absolute;
    left:80%;
    top: 10%;
   
}

.second{
    position: absolute;
    left:86%;
    top: 10%;
}

.third{
    position: absolute;
    left: 92%;
    top: 10%;
}




</style>