<template>
    <div class="container has-text-centered">
      <div class="columns is-vcentered">
        <div class="column is-5">
          <figure class="image is-4by3">
            <img src="http://placehold.it/800x600?text=BRAND" alt="Description">
          </figure>
        </div>
        <div class="column is-6 is-offset-1">
          <h1 class="title is-2">
            The new <u>TREND</u>
          </h1>
          <h2 class="subtitle is-4">
            Let this cover page describe a product or service.
          </h2>
          <br>
          <p class="has-text-centered">
            <router-link
              :to="{name: 'about'}" 
              class="button is-medium is-info is-outlined">
              Learn more
            </router-link>
          </p>
        </div>
      </div>
    </div>
</template>