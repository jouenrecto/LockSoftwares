<template>
    <div class="container">
      <div class="columns is-vcentered">
        <div class="column is-6 has-text-centered">
          <h1 class="title is-2">
            Talk to Human
          </h1>
          <h2 class="subtitle is-4">
            Please fill out the quick form we will be in touch with lightening speed.
          </h2>
          <br>
          <p class="has-text-centered">
            <router-link
              :to="{name: 'about'}" 
              class="button is-medium is-info is-outlined">
              About us
            </router-link>
          </p>
        </div>
        <div class="column is-5 is-offset-1">
            <contact-form />
        </div>
      </div>
    </div>
</template>

<script>
    import ContactForm from './blocks/ContactForm'
    export default {
        components: {
            ContactForm
        }
    }
</script>