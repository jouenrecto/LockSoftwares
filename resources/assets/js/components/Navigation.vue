<template>
    <div class="hero-head">
      <nav class="navbar">
        <div class="container">
          <div class="navbar-brand">
            <router-link :to="{name: 'index'}" class="navbar-item">
              <img src="http://via.placeholder.com/640x160?text=Brand" alt="Logo">
            </router-link>
            <span class="navbar-burger burger" data-target="navbarMenu">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </div>
          <div id="navbarMenu" class="navbar-menu">
            <div class="navbar-end">
              <router-link
                :to="{name: 'index'}" 
                class="navbar-item">
                Home
              </router-link>
              <router-link 
                :to="{name: 'contact'}"
                class="navbar-item">
                Contact
              </router-link>
              <router-link 
                :to="{name: 'about'}"
                class="navbar-item">
                About
              </router-link>
            </div>
          </div>
        </div>
      </nav>
    </div>
</template>