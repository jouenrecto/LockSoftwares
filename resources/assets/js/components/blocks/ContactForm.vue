<template>
  <div>
    <form @submit.prevent="onContactFormSubmit">
      <div class="field">
        <label class="label">Name</label>
        <div class="control control has-icons-left has-icons-right">
          <input 
            class="input" 
            type="text" 
            placeholder="Text input"
            v-model="contact.name">
          <span class="icon is-small is-left">
            <i class="fa fa-user"></i>
          </span>
        </div>
      </div>

      <div class="field">
        <label class="label">Email</label>
        <div class="control has-icons-left has-icons-right">
          <input 
            class="input" 
            type="email" 
            placeholder="hello@"
            v-model="contact.email">
          <span class="icon is-small is-left">
            <i class="fa fa-envelope"></i>
          </span>
        </div>
      </div>

      <div class="field">
        <label class="label">Subject</label>
        <div class="control has-icons-left has-icons-right">
          <input 
            class="input" 
            type="text" 
            placeholder="hello@"
            v-model="contact.subject">
          <span class="icon is-small is-left">
            <i class="fa fa-pencil"></i>
          </span>
        </div>
      </div>

      <div class="field">
        <label class="label">Message</label>
        <div class="control">
          <textarea 
            class="textarea" 
            placeholder="Textarea"
            v-model="contact.message"></textarea>
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control">
          <button 
            class="button"
            :class="btn.color" 
            type="submit"
            :disabled="btn.disabled"
            v-text="btn.text"></button>
        </div>
      </div>
    </form>
    <vue-toast ref='toast'></vue-toast>
  </div>
</template>

<script>
  import { validationMixin } from 'vuelidate'
  import { required, email } from 'vuelidate/lib/validators'
  import VueToast from 'vue-toast'

  export default {
    mixins: [validationMixin],
    data() {
      return {
        contact: {
          name: 'Guest',
          email: 'hello@example.com',
          subject: 'I liked the product!',
          message: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut vero et, laudantium tenetur necessitatibus earum, quibusdam tempora ipsa facere laborum dolor, provident dolore voluptatibus, nemo at. Nisi temporibus magnam vel.'
        },
        btn: {
          text: 'Submit',
          color: {
            'is-primary': true,
            'is-error': false
          },
          disabled: false
        }
      }
    },
    methods: {
      onContactFormSubmit() 
      {
        this.btn.text = 'Sending...'
        this.btn.disabled = true

        this.$http.post('/api/send', this.contact)
          .then(({data}) => {
            this.btn.disabled = false
            this.btn.text = 'Sent'
          }).catch(() => {
            this.btn.disabled = true
            this.btn.text = 'Error'
            this.btn['is-primary'] = false
            this.btn['is-error'] = true
          });
      }
    },
    validations: {
      contact: {
        name: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        subject: {
          required: true
        },
        message: {
          required: true
        },
      }
    },
    components: {
        VueToast
    }
  }
</script>